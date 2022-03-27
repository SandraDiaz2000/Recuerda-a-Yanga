<?php


Route::get('/', 'TestController@welcome');

Route::get('/´prueba', function () {
    return 'welcome';
});

Auth::routes();

Route::get('/offline', function () {
    return 'vendor/laravelpwa/offline';
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio', function () {
    return view ('Inicio');
});
Route::get('/epocas', function () {
    return view ('epocas');
});
Route::get('/comunidades', function () {
    return view ('comunidades');
});
Route::get('/ex-haciendas', function () {
    return view ('haciendas');
});
Route::get('/figuras', function () {
    return view ('figuras');
});
Route::get('/epocas-de', function () {
    return view ('epocas-detalle');
});
Route::get('/leo-ferr', function () {
    return view ('leo-ferr');
});
Route::get('/galeria', function () {
    return view ('galeria');
});
Route::get('/p', function () {
    return view ('p');
});
//Detalles de figuras hisotricos
Route::get('/figuras/yanga', function () {
    return view ('/figuras/yanga');
});
Route::get('/figuras/lf', function () {
    return view ('/figuras/lf');
});
Route::get('/figuras/lorenzo-luna', function () {
    return view ('/figuras/lorenzo-luna');
});
Route::get('/figuras/leonardo-ferrandon', function () {
    return view ('/figuras/leonardo-ferrandon');
});
Route::get('/figuras/Julio-de-la-Fuente', function () {
    return view ('/figuras/Julio-de-la-Fuente');
});
Route::get('/figuras/procoro-gonzalez', function () {
    return view ('/figuras/procoro-gonzalez');
});

//Comunidades
Route::get('/comunidades/Adolfo-Lopez-M', function () {
    return view ('/comunidades/Adolfo-Lopez-M');
});
Route::get('/comunidades/El-Mirador', function () {
    return view ('/comunidades/El-Mirador');
});
Route::get('/comunidades/El-Pochote', function () {
    return view ('/comunidades/El-Pochote');
});
Route::get('/comunidades/Gral-Alatriste', function () {
    return view ('/comunidades/General-Alatriste');
});
Route::get('/comunidades/Gral-Francisco-Paz', function () {
    return view ('/comunidades/Gral-Francisco-Paz');
});
Route::get('/comunidades/Gral-JJ-Baz', function () {
    return view ('/comunidades/Gral-JJ-Baz');
});
Route::get('/comunidades/La-Concepcion', function () {
    return view ('/comunidades/La-Concepcion');
});
Route::get('/comunidades/La-Laguna', function () {
    return view ('/comunidades/La-Laguna');
});
Route::get('/comunidades/Las-Mesillas', function () {
    return view ('/comunidades/Las-Mesillas');
});
Route::get('/comunidades/Loma-de-Guadalupe', function () {
    return view ('/comunidades/Loma-de-Guadalupe');
});
Route::get('/comunidades/Palmillas', function () {
    return view ('/comunidades/Palmillas');
});

Route::get('/comunidades/San-Miguel', function () {
    return view ('/comunidades/San-Miguel');
});

//Ex-Haciendas
Route::get('/Haciendas/Concepcion-Palmillas', function () {
    return view ('/Haciendas/Concepcion-Palmillas');
});
Route::get('/Haciendas/Francisco-Mesillas', function () {
    return view ('/Haciendas/Francisco-Mesillas');
});
Route::get('/Haciendas/La-Concepcion', function () {
    return view ('/Haciendas/La-Concepcion');
});
Route::get('/Haciendas/San-Joaquin', function () {
    return view ('/Haciendas/San-Joaquin');
});
Route::get('/Haciendas/San-Jose-Abajo', function () {
    return view ('/Haciendas/San-Jose-Abajo');
});
Route::get('/Haciendas/San-Jose-Corral', function () {
    return view ('/Haciendas/San-Jose-Corral');
});
Route::get('/Haciendas/San-Miguel-Grande', function () {
    return view ('/Haciendas/San-Miguel-Grande');
});
Route::get('/Haciendas/Santa-Cruz', function () {
    return view ('/Haciendas/Santa-Cruz');
});
Route::get('/Haciendas/Señora-del-Rosario', function () {
    return view ('/Haciendas/Señora-del-Rosario');
});
