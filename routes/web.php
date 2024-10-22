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

    // Ruta para acceder a las carpetas de los usuarios con el middleware y el parámetro de folderId
    Route::get('/media/{folderId?}', [VoyagerMediaController::class, 'index'])
        ->middleware('check.user.folder')
        ->name('voyager.media.index');

    // Ruta para la visualización de correos
    Route::get('mail', [App\Http\Controllers\MailController::class, 'index'])->name('voyager.mail.index');
    // Ruta para acceder a las carpetas de los usuarios con el middleware y el parámetro de folderId
    // Route::get('/files', [VoyagerMediaController::class, 'files'])
    //     ->name('voyager.media.files');

    // Route::post('/new-folder', [VoyagerMediaController::class, 'new_folder'])
    //     ->name('voyager.media.new_folder');

    // Route::delete('/delete', [VoyagerMediaController::class, 'delete'])
    //     ->name('voyager.media.delete');

    // Route::post('/move', [VoyagerMediaController::class, 'move'])
    //     ->name('voyager.media.move');

    // Route::post('/rename', [VoyagerMediaController::class, 'rename'])
    //     ->name('voyager.media.rename');

    // Route::post('/upload', [VoyagerMediaController::class, 'upload'])
    //     ->name('voyager.media.upload');

    // Route::post('/crop', [VoyagerMediaController::class, 'crop'])
    //     ->name('voyager.media.crop');
    // Route::get('/', ['uses' => $namespacePrefix.'VoyagerMediaController@index',              'as' => 'index']);
    // Route::post('files', ['uses' => $namespacePrefix.'VoyagerMediaController@files',              'as' => 'files']);
    // Route::post('new_folder', ['uses' => $namespacePrefix.'VoyagerMediaController@new_folder',         'as' => 'new_folder']);
    // Route::post('delete_file_folder', ['uses' => $namespacePrefix.'VoyagerMediaController@delete', 'as' => 'delete']);
    // Route::post('move_file', ['uses' => $namespacePrefix.'VoyagerMediaController@move',          'as' => 'move']);
    // Route::post('rename_file', ['uses' => $namespacePrefix.'VoyagerMediaController@rename',        'as' => 'rename']);
    // Route::post('upload', ['uses' => $namespacePrefix.'VoyagerMediaController@upload',             'as' => 'upload']);
    // Route::post('crop', ['uses' => $namespacePrefix.'VoyagerMediaController@crop',             'as' => 'crop']);

});
