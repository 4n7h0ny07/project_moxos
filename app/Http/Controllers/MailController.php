<?php

namespace App\Http\Controllers;

use Webklex\IMAP\Facades\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; // Importar la clase Str
use Illuminate\Support\Facades\Log;
use Carbon\Carbon; // Importar Carbon para el manejo de fechas

class MailController extends Controller
{
    //

    public function index(Request $request)
    {

        try {
            //obtrener el usuario autenticado 
            $user = Auth::user();

            //configura la conexion IMAP usando los datos del usuario
            $client = Client::make([
                'host' => setting('mail-configuration.mailserver'),
                'port' => setting('mail-configuration.portserver'),
                'encryption' => 'TLS',
                'validate_cert' => true,
                'username' => $user->email, //obtenemos el email del usuario autenticado
                'password' => 'farea321*.*', ///$user->password, //obtenemos el password del usuario autenticado
                'protocol' => 'imap',
                'timeout'  => 360, // Aumenta el tiempo de espera
            ]);

            //conectamos con el servidor de correos
            $client->connect();

            // Obtener las carpetas de correo
            $folders = $client->getFolders();

            // Inicializamos un array para almacenar los mensajes
            $emails = [];

            // Definir la cantidad de mensajes a obtener por carpeta
            $limit = 50;
            // $page = (int) $request->input('page', 1); // Obtener el número de página desde la solicitud
            // $offset = ($page - 1) * $limit; // Calcular el desplazamiento

            // Recorrer cada carpeta y obtener los mensajes
            foreach ($folders as $folder) {
                // Obtener los primeros 10 mensajes de la carpeta
                // $messages = $folder->messages()->all()->limit($limit)->offset($offset)->get();
                $messages = $folder->messages()->all()->limit($limit)->get();
                //$messages = $folder->messages()->all()->get();

                // Paginación
                /** @var \Illuminate\Pagination\LengthAwarePaginator $paginator */
                $perPage = 5; // Resultados por página
                $currentPage = $request->input('imap_page', 1); // Obtener la página actual
                $messagesPaginated = $messages->forPage($currentPage, $perPage); // Obtener solo los mensajes de la página actual

                // Crear el paginador
                $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
                    $messagesPaginated,
                    $messages->count(),
                    $perPage,
                    $currentPage,
                    ['path' => $request->url(), 'query' => $request->query()] // Mantener los parámetros de consulta
                );

                // Recorrer cada mensaje
                foreach ($messages as $message) {
                    // Añadir la información del mensaje al array de correos
                    // Obtener la fecha del mensaje y formatearla
                    $date = Carbon::parse($message->getDate())->format('Y-m-d H:i:s');
                    $headers = $message->getBodies()->html;
                    dd($headers);
                    // Obtener el remitente

                    $from = $message->getFrom(); // Esto devolverá una colección
                    $fromEmail = $from[0]->mail; // Obtiene el correo electrónico del remitente
                    $fromName = $from[0]->mailbox; // Obtiene el nombre del remitente

                    $emails[] = [
                        'subject'     => $message->getSubject(),
                        'body'        => $this->truncateBody($message->getBodies(), 200),
                        //'header'      => $message->getHeader(),
                        'from'        => 'Enviado por: '.$fromName.' (' . $fromEmail . ')', // Remitente
                        'date'        => $date
                    ];
                }
                // // Si no hay más mensajes, puedes salir del bucle
                // if ($messages->count() < $limit) {
                //     break;
                // }
            }
            //  // Obtener el total de correos para calcular la paginación
            //  $totalEmails = $folder->messages()->all()->get()->count();
            //  $totalPages = ceil($totalEmails / $limit);

            return view('voyager::mail.index', compact('emails', 'paginator'));
        } catch (\Exception $e) {
            // Manejar la excepción y mostrar un mensaje amigable
            Log::error('Error al obtener los correos: ' . $e->getMessage());
            return back()->withErrors('No se pudo conectar al servidor de correos.');
        }
    }

    /**
     * Función para truncar el cuerpo del mensaje.
     *
     * @param string $body
     * @param int $limit
     * @return string
     */
    private function truncateBody($body, $limit)
    {
        // Remover etiquetas HTML y limitar el contenido
        return Str::limit(strip_tags($body), $limit); // Usar Str::limit()
    }
}
