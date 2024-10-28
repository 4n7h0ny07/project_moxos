<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        // Obtener todas las tablas de la base de datos
        $tables = DB::select('SHOW TABLES');
        $tableNames = array_map('current', $tables); // Extraer los nombres de las tablas

        return view('vendor.voyager.mysqldata.index', compact('tableNames'));
    }

    public function exportTables(Request $request)
    {
        $tables = $request->input('tables');

        $sql = '';

        foreach ($tables as $table) {
            $data = DB::table($table)->get();

            $sql .= "CREATE TABLE IF NOT EXISTS $table (\n";
            $columns = DB::getSchemaBuilder()->getColumnListing($table);
            foreach ($columns as $column) {
                $sql .= "    $column VARCHAR(255),\n"; // Ajusta el tipo de dato según tus necesidades
            }
            $sql = rtrim($sql, ",\n") . "\n);\n\n";

            foreach ($data as $row) {
                $sql .= "INSERT INTO $table (" . implode(', ', $columns) . ") VALUES ('" . implode("', '", (array) $row) . "');\n";
            }
            $sql .= "\n\n"; // Separar cada tabla
        }

        $filename = 'exported_tables.sql';
        return response()->make($sql, 200, [
            'Content-Type' => 'application/sql',
            'Content-Disposition' => "attachment; filename=$filename",
        ]);
    }

    public function importTables(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:sql',
    ]);

    try {
        // Guardar el archivo temporalmente
        $filePath = $request->file('file')->store('temp');
        $sql = file_get_contents(storage_path('app/' . $filePath));

        // Ejecutar las consultas SQL
        DB::unprepared($sql);

        // Eliminar archivo temporal después de la importación
        Storage::delete($filePath);

        return redirect()->back()->with('success', 'Importación completada.');
    } catch (\Exception $e) {
        // Captura cualquier excepción y muestra el error
        return redirect()->back()->with('error', 'Error durante la importación: ' . $e->getMessage());
    }
}

}
