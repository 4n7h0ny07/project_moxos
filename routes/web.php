<?php

use App\Models\Marcas;
use App\Models\Producto;
use App\Models\Promotores;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Http\Controllers\VoyagerMediaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('page.index');
});

Route::get('/contact', [\App\Http\Controllers\GubicationsController::class, 'publicMap'])->name('contact');
Route::get('/api/closest-branch', [\App\Http\Controllers\GubicationsController::class, 'getClosestBranch']);

Route::get('/privacity', function () {
    return view('page.privacity');
})->name('privacity');

Route::get('/terms', function () {
    return view('page.terms');
})->name('terms');

Route::get('/detail/{id}', function ($id) {
    $producto = \App\Models\Producto::findOrFail($id); // Busca el producto por ID
    return view('page.detail', compact('producto')); // Retorna la vista de detalles con el producto
})->name('detail');

Route::get('/motorcycle', function () {
    $producto = Producto::with('Types')->get();

    return view('page.motorcycle', compact('producto'));
})->name('motorcycle');

route::get('/', function () {
    $producto = Producto::with('Types')->get();
    $marcas = Marcas::limit(6)->get();   
    $agentes = Promotores::all(); 
    

    return view('page.index', compact('producto', 'marcas', 'agentes'));
});



// Route::get('/page', function () {
//     return view('page');
// });


// Route::get('/index', function () {
//     return view('index');
// });


Route::get('/calculator', [App\Http\Controllers\CalculatorController::class, 'index'])->name('calcular.credito');
Route::post('/calculator', [App\Http\Controllers\CalculatorController::class, 'calcular'])->name('calcular.credito.post');


// Route::get('/', function () {
//     return redirect('admin/login');
// })->name('admin.login');

// Route::get('/admin/login', function () {
//     return redirect('admin/login');

// })->name('admin.login');


Route::prefix('home')->group(function () {

    Route::Get('/', [App\Http\Controllers\UserapiController::class, 'index']);
    Route::Get('/{code}', [App\Http\Controllers\UserapiController::class, 'show']);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/whatsapp', function () {
        return view('voyager::whatsapp.index');
    })->name('voyager.whatsapp.index');

    Route::get('/certificate/{id}', [App\Http\Controllers\CertificateController::class, 'generatePDF'])->name('certificate.pdf');

    Route::get('/requerimientos/{id}/pdf', [App\Http\Controllers\PdfRequerimientosController::class, 'generatePdf'])->name('requerimientos.pdf');

    Route::get('/vacaciones/{id}/pdf', [App\Http\Controllers\PdfVacationsController::class, 'generatePdf'])->name('vacations.pdf');

    Route::get('/finiquitos/{id}/pdf', [App\Http\Controllers\finiquitoController::class, 'generatePdf'])->name('finiquitos.pdf');

    Route::get('/altas/{id}/pdf', [App\Http\Controllers\PdfAltasController::class, 'generatePdf'])->name('altas.pdf');

    Route::get('/bajas/{id}/pdf', [App\Http\Controllers\PdfAltasController::class, 'generatePdf'])->name('bajas.pdf');

    Route::get('mysqldata', [App\Http\Controllers\Controller::class, 'index'])->name('mysqldata.index');
    Route::post('export-tables', [App\Http\Controllers\Controller::class, 'exportTables'])->name('export.tables');
    Route::post('import-tables', [App\Http\Controllers\Controller::class, 'importTables'])->name('import.tables');

    // // Ruta para acceder a las carpetas de los usuarios con el middleware y el parámetro de folderId
    // Route::get('/media/{folderId?}', [VoyagerMediaController::class, 'index'])
    //     ->middleware('check.user.folder')
    //     ->name('voyager.media.index');

    // Ruta para la visualización de correos
    Route::get('mail', [App\Http\Controllers\MailController::class, 'index'])->name('voyager.mail.index');

 
  
    Route::get('coodenadas', [App\Http\Controllers\CoordenadasController::class, 'index'])->name('coodenadas.index');
    Route::post('coordenadas', [App\Http\Controllers\CoordenadasController::class, 'store'])->name('coordenadas.store');
    Route::get('coordenadas/show', [App\Http\Controllers\CoordenadasController::class, 'showMap'])->name('coordenadas.show');

    Route::get('/zktecodevices/{id}', [App\Http\Controllers\ZktecodeviceController::class, 'show'])->name('voyager.zktecodevices.show');
    Route::get('/zktecodevices/toggle/{id}', [App\Http\Controllers\ZktecodeviceController::class, 'toggleConnection'])->name('zktecodevices.toggle');

});


// Intente ser Normal, pero me aburrí, y volvi a ser yo mismo.
