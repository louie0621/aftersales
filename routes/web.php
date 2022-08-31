<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(App\Http\Controllers\FilhollandController::class)->group(function () {

    Route::get('/about-us', 'aboutus');
    Route::get('/branches', 'branches');
    Route::get('/products', 'products');
    Route::get('/products/agriculture', 'agproducts');
    Route::get('/products/agriculture/ag-product-TT3-35', 'agproductTT335');
    Route::get('/products/agriculture/ag-product-TT3-50', 'agproductTT350');
    Route::get('/products/agriculture/ag-product-E9010', 'agproductE9010');
    Route::get('/products/agriculture/ag-product-TT4-75', 'agproductTT475');
    Route::get('/products/agriculture/ag-product-TS6-120', 'agproductTS6120');
    Route::get('/products/agriculture/ag-product-TS6-125', 'agproductTS6125');
    Route::get('/products/agriculture/ag-product-TS6-140', 'agproductTS6140');
    Route::get('/products/agriculture/ag-product-MAXXUM140', 'agproductMAXXUM140');
    Route::get('/products/agriculture/ag-product-PUMA155', 'agproductPUMA155');
    Route::get('/products/agriculture/ag-product-A4000', 'agproductA4000');
    Route::get('/products/agriculture/ag-product-A8010-and-A8810', 'agproductA8010andA8810');
    Route::get('/products/agriculture/ag-product-JX_Series', 'agproductJXSeries');
    
    Route::get('/products/construction', 'ceproducts');
    Route::get('/products/construction/ce-product-SV185', 'ceproductSV185');
    Route::get('/products/construction/ce-product-SR200', 'ceproductSR200');
    Route::get('/products/construction/ce-product-SR130', 'ceproductSR130');
    Route::get('/products/construction/ce-product-CX210C', 'ceproductCX210C');
    Route::get('/products/construction/ce-product-CX130C', 'ceproductCX130C');
    Route::get('/products/construction/ce-product-CX75SR', 'ceproductCX75SR');
    Route::get('/products/construction/ce-product-2050M', 'ceproduct2050M');
    Route::get('/products/construction/ce-product-1150L', 'ceproduct1150L');
    Route::get('/products/construction/ce-product-1107EX-D', 'ceproduct1107EXD');
    Route::get('/products/construction/ce-product-845B', 'ceproduct845B');
    Route::get('/products/construction/ce-product-821F', 'ceproduct821F');
    Route::get('/products/construction/ce-product-752EX', 'ceproduct752EX');
    Route::get('/products/construction/ce-product-570ST', 'ceproduct570ST');
    Route::get('/products/construction/ce-product-521F', 'ceproduct521F');

    Route::get('/contact-us', 'contactus');
    
    
});

Auth::routes();

Route::controller(App\Http\Controllers\HomeController::class)->group(function () {

    Route::get('/FAS/home', 'index');
    
});

Route::controller(App\Http\Controllers\JceController::class)->group(function () {

    Route::get('/FAS/jce', 'index');
    Route::get('/FAS/add-jce', 'create');
    Route::get('/FAS/jcenumber', 'jcenumber');
    Route::post('/FAS/addjce', 'store');
    Route::post('/FAS/storejcetechname', 'storejcetechname');
    Route::post('/FAS/storejcesrtcodeentry', 'storejcesrtcodeentry');
    Route::get('/FAS/jcequeue', 'jcequeue');
    Route::get('/FAS/show-contactperson/{id}', 'contactperson');
    Route::get('/FAS/show-vehicletype/{type}', 'vehicletype');
    Route::get('/FAS/show-serialno/{serial}', 'serialno');
    Route::get('/FAS/show-engineno/{engine}', 'engineno');
    Route::get('/FAS/selectlaborcost/{id}', 'selectlaborcost');
    Route::get('/FAS/selectpartno/{id}', 'selectpartno');
});

Route::controller(App\Http\Controllers\WorkorderController::class)->group(function () {

    Route::get('/FAS/work-order', 'index');
    Route::get('/FAS/add-work-order', 'create');
    
});

Route::controller(App\Http\Controllers\CustomerController::class)->group(function () {

    Route::get('/FAS/customer', 'index');
    Route::get('/FAS/add-customer', 'create');
    Route::post('/FAS/add-customer', 'store');
    Route::put('/FAS/update-customer/{id}' ,'update');
    Route::delete('/FAS/delete-customer/{id}' ,'destroy');
    
});

Route::controller(App\Http\Controllers\EquipmentController::class)->group(function () {

    Route::get('/FAS/equipment', 'index');
    Route::get('/FAS/show-equipment', 'display');
    Route::get('/FAS/view-equipment/{id}', 'show');
    Route::get('/FAS/edit-equipment/{id}', 'edit');
    Route::put('/FAS/update-equipment/{id}', 'update');
    Route::get('/FAS/add-equipment', 'create');
    Route::post('/FAS/add-equipment', 'store');
    Route::delete('/FAS/delete-equipment/{id}' ,'destroy');
    
});

Route::controller(App\Http\Controllers\PmsController::class)->group(function () {

    Route::get('/FAS/pms', 'index');
    
});

Route::controller(App\Http\Controllers\TechnicianController::class)->group(function () {

    Route::get('/FAS/technician', 'index');
    Route::get('/FAS/show-technician', 'show');
    Route::post('/FAS/addtechnician', 'store');
    Route::put('/FAS/update-technician/{id}' ,'update');
    Route::delete('/FAS/delete-technician/{id}' ,'destroy');
    
});

Route::controller(App\Http\Controllers\SysconfigController::class)->group(function () {

    Route::get('/FAS/job-type', 'index');
    Route::post('/FAS/addjob-type', 'storejt');
    Route::put('/FAS/job-type/{id}', 'updatejt');
    Route::delete('/FAS/deletejob-type/{id}', 'destroyjt');

    Route::get('/FAS/dealer', 'indexdealer');
    Route::post('/FAS/add-dealer', 'storedealer');
    Route::put('/FAS/dealer/{id}', 'updatedealer');
    Route::delete('/FAS/deletedealer/{id}', 'destroydealer');

    Route::get('/FAS/component', 'indexcomponent');
    Route::post('/FAS/add-component', 'storecomponent');
    Route::put('/FAS/component/{id}', 'updatecomponent');
    Route::delete('/FAS/deletecomponent/{id}', 'destroycomponent');

    Route::get('/FAS/type-of-issue', 'indextypeofissue');
    Route::post('/FAS/add-typeofissue', 'storetypeofissue');
    Route::put('/FAS/typeofissue/{id}', 'updatetypeofissue');
    Route::delete('/FAS/deletetypeofissue/{id}', 'destroytypeofissue');

    Route::get('/FAS/labor-cost', 'indexlaborcost');
    Route::post('/FAS/add-laborcost', 'storelaborcost');
    Route::put('/FAS/laborcost/{id}', 'updatelaborcost');
    Route::delete('/FAS/deletelaborcost/{id}', 'destroylaborcost');
    
    Route::get('/FAS/parts', 'indexparts');
    Route::post('/FAS/add-parts', 'storeparts');
    Route::put('/FAS/parts/{id}', 'updateparts');
    Route::delete('/FAS/deleteparts/{id}', 'destroyparts');
});

Route::controller(App\Http\Controllers\userController::class)->group(function () {

    Route::get('/FAS/user', 'index');
    Route::post('/FAS/adduser', 'store');
    Route::put('/FAS/update-user/{user_id}' ,'update');
    Route::delete('/FAS/delete-user/{user_id}' ,'destroy');
    
});