<?php

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

Route::get('/about', function () {
    return "About";
});

$prefixAdmin    = config('zvn.url.prefix_admin'); //admin99

Route::group(['prefix'=>$prefixAdmin], function(){

    // ====================== DASHBOARD ======================
    $prefix         =   'dashboard';
    $controllerName =   'dashboard';
    Route::group(['prefix'=>$prefix],function () use($controllerName) {

        $controller =   ucfirst($controllerName) . 'Controller@';
        Route::get('/', [
            'as'    => $controllerName,     // Tên để dùng hàm  route('slider') gọi -  route:slider
            'uses'  => $controller . 'index'
        ]);

    });

    // ====================== END DASHBOARD ======================

    // ====================== SLIDER ======================
    $prefix         =   'slider';
    $controllerName =   'slider';
    Route::group(['prefix'=>$prefix],function () use($controllerName) {

        $controller =   ucfirst($controllerName) . 'Controller@';
        // Không định để phần định nghĩa của các Rout::('định nghĩa',... Trùng nhau
        // Route::get($value... , Ở đây $value ko được trùng nhau
        Route::get('/', [
            'as'    => $controllerName,     // Tên để dùng hàm  route('slider') gọi -  route:slider
            'uses'  => $controller . 'index'
        ]);

        Route::get('delete', [
            'as'    =>'abc',        // Tên để dùng hàm  route('slider/abc') gọi -  route:form
            'uses'  => $controller . 'delete'
        ]);

        Route::get('form/{id?}', [
            'as'    => $controllerName . '/form', // Tên để dùng hàm  route('slider/form') gọi - route:form{id?}
            'uses'  => $controller . 'form'
        ])->where('id', '[0-9]+');

        Route::get('delete/{id}', [
            'as'    => $controllerName . '/delete', // Tên để dùng hàm  route('slider/form') gọi - route:form{id?}
            'uses'  => $controller . 'delete'
        ])->where('id', '[0-9]+');

        Route::get('change-status-{status}/{id}', [
            'as'    => $controllerName . '/status',
            'uses'  => $controller . 'status'
        ]);



    });
    // ====================== END SLIDER ======================

    $prefix     =   'category';
    Route::group(['prefix'=>'category'],function () use($prefix) {

        $controller =   ucfirst($prefix) . 'Controller@';

        //Route::get('/', $controller . 'index');
        Route::get('/', [
                'as'    => $prefix,
                'uses'  => $controller . 'index'
        ]);

        Route::get('form/{id?}', $controller . 'form')->where('id', '[0-9]+');
        Route::get('delete/{id}', $controller . 'delete')->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}', $controller . 'status')->where('id', '[0-9]+');

    });

    //Vidu meo

    $prefix     =   'meo';
    Route::group(['prefix'=>'meo'],function () use($prefix) {

        $controller =   ucfirst($prefix) . 'Controller@';
        Route::get('/', [
                'as'    => $prefix,
                'uses'  => $controller . 'index'
        ]);

    });
});


//======================== Bookstore ===============================//

$prefixAdmin    = config('zvn.url.prefix_bookstore'); //bookstore
$routing        = $prefixAdmin . '\\';

Route::group(['prefix'=>$prefixAdmin], function() use($routing){ // html là: http://proj_news.xyz/bookstore

    $prefix         = 'backend';
    $routing        = $routing . $prefix . '\\';

    Route::group(['prefix'=>$prefix],  function () use($routing){ // html là: http://proj_news.xyz/bookstore/backend

        $prefix         = 'dashboard';
        $controllerName = 'dashboard';
        $routing        = $routing;

        //echo '<h3>'.$routing.'</h3>';

        Route::group(['prefix'=>$prefix],function () use( $controllerName, $routing ) { // html là: http://proj_news.xyz/bookstore/backend/dashboard

            $controller = $routing . ucfirst($controllerName) . 'Controller@';
            Route::get('/', [
                'as'    =>  $controllerName,     // Tên để dùng hàm  route('slider') gọi -  route:slider
                'uses'  =>  $controller . 'index' // Ở đây chính là location của Controller
            ]);

        });


        $prefix         = 'group';
        $controllerName = 'group';
        $routing        = $routing;

        Route::group(['prefix'=>$prefix],function () use($controllerName,$routing) {

            $controller = ucfirst($controllerName) . 'Controller@';
            Route::get('/', [
                'as'    =>  $controllerName,     // Tên để dùng hàm  route('slider') gọi -  route:slider
                'uses'  =>  $routing. $controller . 'index'
            ]);

        });

    });


});

// $prefixAdmin    = config('zvn.url.prefix_bookstore'); //bookstore

// Route::group(['prefix'=>$prefixAdmin], function(){

//     // $prefix         =   'backenddashboard';
//     // $controllerName =   'backenddashboard';
//     $module         = 'backend';
//     $prefix         = $module;
//     $controllerName = 'dashboard';

//     Route::group(['prefix'=>$prefix],function () use($controllerName) {

//         // $controller =   ucfirst($controllerName) . 'Controller@';
//         // Route::get('/', [
//         //     'as'    =>  "bookstore\backend". "\\" .$controllerName,     // Tên để dùng hàm  route('slider') gọi -  route:slider
//         //     'uses'  => "bookstore\backend". "\\" . $controller . 'index'
//         // ]);

//         $controller =   ucfirst($controllerName) . 'Controller@';
//         Route::get('/', [
//             'as'    =>  $controllerName,     // Tên để dùng hàm  route('slider') gọi -  route:slider
//             'uses'  => "bookstore\backend". "\\" . $controller . 'index'
//         ]);


//     });

//     $module         = 'backend';
//     $prefix         = $module . '/'. 'group';
//     $controllerName = 'group';

//     Route::group(['prefix'=>$prefix],function () use($controllerName) {

//         $controller =   "bookstore\backend\\" . ucfirst($controllerName) . 'Controller@';
//         Route::get('/', [
//             'as'    =>  $controllerName,     // Tên để dùng hàm  route('slider') gọi -  route:slider
//             'uses'  =>  $controller . 'index'
//         ]);

//     });


// });

//======================== End Bookstore ===============================//
