<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Buoi3Controller;
use App\Http\Controllers\buoi04Controller;
use App\Http\Controllers\buoi06Controller;
use App\Http\Controllers\khoaController;
use App\Http\Controllers\lophocController;
use App\Http\Controllers\monhocController;
use App\Http\Controllers\AuthController;
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
    return view('buoi02/baitap00');
});
Route::Group(['prefix'=>'buoi01'],function(){
    Route::get('/baitap01',function(){
        return view('buoi01/baitap01');
    })->name('baitap01');

    Route::get('/baitap02',function(){
        return view('buoi01/baitap02');
    })->name('baitap02');

    Route::get('/baitap03',function(){
        return view('buoi01/baitap03');
    })->name('baitap03');
    Route::get('/baitap04',function(){
        return view('buoi01/baitap04');
    })->name('baitap04');
    Route::get('/baitap05',function(){
        return view('buoi01/baitap05');
    })->name('baitap05');

    Route::get('/baitap06',function(){
        return view('buoi01/baitap06');
    })->name('baitap06');
    Route::get('/baitap07',function(){
        return view('buoi01/baitap07');
    })->name('baitap07');
    Route::get('/baitap08',function(){
        return view('buoi01/baitap08');
    })->name('baitap08');
});
Route::Group(['prefix' => 'buoi02'],function(){
    Route::get('/baitap01',function(){
        return view('buoi02/baitap01');
    })->name('b2baitap01');

    Route::get('/baitap02',function(){
        return view('buoi02/baitap02');
    })->name('b2baitap02');

    Route::get('/baitap03',function(){
        return view('buoi02/baitap03');
    })->name('b2baitap03');
    Route::get('/baitap04',function(){
        return view('buoi02/baitap04');
    })->name('b2baitap04');
    Route::get('/baitap05',function(){
        return view('buoi02/baitap05');
    })->name('b2baitap05');
    Route::get('/',function(){
        return view('buoi02/baitap00');
    })->name('b2baitap00');
});
Route::group(['prefix' => 'buoi03'],function(){

    Route::get('baitap01' , [Buoi3Controller::class, 'baitap01'])->name('b3baitap01');
    Route::get('baitap01/{cd}/{cr}' , [Buoi3Controller::class, 'tinhhcn'])->name('tinhcvdt');

    Route::get('baitap02' , [Buoi3Controller::class, 'baitap02'])->name('b3baitap02');
    Route::get('baitap02/{a}/{b}' , [Buoi3Controller::class, 'tinhnghiem'])->name('tinhnghiem');

    Route::get('baitap03' , [Buoi3Controller::class, 'baitap03'])->name('b3baitap03');
    Route::post('baitap03' , [Buoi3Controller::class, 'tinhluong'])->name('tinhluong');

    Route::get('baitap04' , [Buoi3Controller::class, 'baitap04'])->name('b3baitap04');
    Route::post('baitap04' , [Buoi3Controller::class, 'tinhht'])->name('tinhht');

    Route::get('baitap05' , [Buoi3Controller::class, 'baitap05'])->name('b3baitap05');
    Route::post('baitap05' , [Buoi3Controller::class, 'tinhtd'])->name('tinhtd');

    Route::get('baitap06' , [Buoi3Controller::class, 'baitap06'])->name('b3baitap06');
    Route::post('baitap06' , [Buoi3Controller::class, 'tinhpt'])->name('tinhpt');

});

Route::group(['prefix' => 'buoi04'],function(){
    Route::get('thome',[buoi04Controller::class,'thome'])->name('thome');
    Route::get('doctruyen',[buoi04Controller::class,'doctruyen'])->name('doctruyen');
    Route::get('binhluan',[buoi04Controller::class,'binhluan'])->name('binhluan');
});
Route::group(['prefix'=>'buoi06'],function(){
    Route::get('',[buoi06Controller::class,'ds_lophoc'])->name('dslh');
    Route::get('them_lop_hoc',[buoi06Controller::class,'them_lop_hoc'])->name('themlophoc');
    Route::post('xuly_themlop',[buoi06Controller::class,'xuly_themlop'])->name('xulythemlop');
    Route::get('sualophoc/{id}',[buoi06Controller::class,'sua_lophoc'])->name('sualophoc');
    Route::post('xuly_sualophoc',[buoi06Controller::class,'xuly_sua_lophoc'])->name('xulysualophoc');
    Route::get('xoalophoc/{id}',[buoi06Controller::class,'xoa_lophoc'])->name('xoalophoc');


});
Route::group(['prefix' => 'buoi07'], function(){
    Route::get('', [khoaController::class, "dashboard"])->name("dashboard");
    Route::group(['prefix' => 'Khoa'], function(){
        Route::get('DanhSach', [khoaController::class,"danhsach"])->name("listkhoa");
        Route::get("Them",[khoaController::class,"getThemKhoa"])->name("addkhoa");
        Route::post("Them",[khoaController::class,"postThemKhoa"]);
        Route::get("Sua/{id}",[khoaController::class,"getSuaKhoa"])->name("editKhoa");
        Route::post("Sua/{id}",[khoaController::class,"postSuaKhoa"]);
        Route::get("Xoa/{id}", [khoaController::class,"getXoaKhoa"])->name("deleteKhoa");
    });
    Route::group(['prefix' => 'lophoc'], function(){
        Route::get('DanhSach', [lophocController::class,"danhsach"])->name("listlh");
        Route::get("Them",[lophocController::class,"getThemLopHoc"])->name("themlh");
        Route::post("Them",[lophocController::class,"postThemLopHoc"]);
        Route::get("Sua/{id}",[lophocController::class,"getSuaLopHoc"])->name("sualh");
        Route::post("Sua/{id}",[lophocController::class,"postSuaLopHoc"]);
        Route::get("Xoa/{id}", [lophocController::class,"getXoaLopHoc"])->name("xoalh");
    });
    Route::group(['prefix' => 'monhoc'], function(){
        Route::get('DanhSach', [monhocController::class,"danhsach"])->name("listmh");
        Route::get("Them",[monhocController::class,"getThemMonHoc"])->name("themmh");
        Route::post("Them",[monhocController::class,"postThemMonHoc"]);
        Route::get("Sua/{id}",[monhocController::class,"getSuaMonHoc"])->name("suamh");
        Route::post("Sua/{id}",[monhocController::class,"postSuaMonHoc"]);
        Route::get("Xoa/{id}", [monhocController::class,"getXoaMonHoc"])->name("xoamh");
    });
});
Route::group(['prefix'=>'auth'],function(){
    Route::get('register',[AuthController::class,'getRegister'])->name('register');
    Route::post('register',[AuthController::class,'postRegister']);
    Route::get('login',[AuthController::class,'getLogin'])->name('login');
    Route::post('login',[AuthController::class,'postLogin']);
    Route::get('logout',[AuthController::class,'Logout'])->name('logout');

});

//login social
//github
Route::get('/auth/github/redirect' ,[AuthController::class, 'githubredirect'])->name('githublogin');

Route::get('/auth/github/callback', [AuthController::class, 'githubcallback']);

// google

Route::get('/auth/google/redirect' ,[AuthController::class, 'googleredirect'])->name('googlelogin');

Route::get('/auth/google/callback', [AuthController::class, 'googlecallback']);
