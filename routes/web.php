<?php

use App\Models\Producto;
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

Route::get('/contact', function () {
    return view('page.contact');
});

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

    return view('page.index', compact('producto'));
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

 
  
    Route::get('coodenada', [App\Http\Controllers\CoordenadasController::class, 'index'])->name('coodenada.index');
    Route::post('coordenada', [App\Http\Controllers\CoordenadasController::class, 'store'])->name('coordenada.store');
    Route::get('coordenada/show', [App\Http\Controllers\CoordenadasController::class, 'showMap'])->name('coordenada.show');

    Route::get('/zktecodevices/{id}', [App\Http\Controllers\ZktecodeviceController::class, 'show'])->name('voyager.zktecodevices.show');
    Route::get('/zktecodevices/toggle/{id}', [App\Http\Controllers\ZktecodeviceController::class, 'toggleConnection'])->name('zktecodevices.toggle');

});
