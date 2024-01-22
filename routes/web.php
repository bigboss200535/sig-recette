<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PayerController;

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

Route::get('/', function () {
    return view('auth/login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/locale/{locale}', function (Request $request, $locale) {
//     Session::put('locale', $locale);
//     return redirect()->back();
// })->name('locale');

require __DIR__.'/auth.php';


// // view tax payers
 // Route::get('/ViewPayers', function (){
 //     return view('Payer/Payers');
 // });

Route::get('/Payers', [PayerController::class, 'getAllPayers']);


Route::get('/locale/{locale}', function (Request $request, $locale) {
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale');


// Route::get('/RegisterPayer', function (){
//     return view('Payer/RegisterPayer');
// });

// add invoices
Route::get('/addinvoice', function (){
    return view('Invoice/AddInvoice');
});

// view invoices of tax payers
// Route::get('/invoice', function (){
//     return view('Invoice/ViewInvoice');
// });

Route::get('/', function (){
    return view('Invoice/ViewInvoice');
});
 
Route::get('/RejectInvoices', function (){
    return view('Invoice/RejectedInvoice');
});

Route::get('/CreateInvoice', function (){
    return view('Invoice/CreateInvoice');
});

Route::get('/ModifyInvoice', function (){
    return view('Invoice/ModifyInvoice');
});

Route::get('/SuccessInvoice', function (){
    return view('Invoice/SuccessInvoice');
});

Route::get('RegisterPayer', [PayerController::class, 'form']);

Route::post('SavePayer', [PayerController::class, 'storePayer']);

Route::post('DeletePayer', [PayerController::class, 'deletePayer']);
