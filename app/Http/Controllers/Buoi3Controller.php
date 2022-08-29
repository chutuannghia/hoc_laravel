<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buoi3Controller extends Controller
{
    public function baitap01(){
        return view ('buoi03.baitap01');
    }
    public function tinhhcn($cd , $cr){
        if($cd!=0 && $cr!=0){
            if(is_numeric($cd)&&is_numeric($cr)){
                $cv = ($cd + $cr) * 2;
                $dt = $cd * $cr ;
            }
        }
        return view('buoi03.baitap01',compact('cv'| '' , 'dt'| ''));
    }
    public function baitap02(){
        return view('buoi03.baitap02');
    }
    public function tinhnghiem($a , $b){
        if(($a != '' && $b != '')&&(is_numeric($a)&&is_numeric($b))){
            if($a == 0 && $b ==0){
                $x = 'Hệ phương trình có vô sô số nghiệm';
            }
            else if ($a == 0){
                $x = 'Hệ phương trình vô nghiệm';
            }
            else
                $x = -$b / $a;
        }
        else
            $x = 'Giá trị nhập phải là số';

        return view('buoi03.baitap02',compact('x'));
    }
    public function baitap03(){
        return view('buoi03.baitap03');
    }
    public function tinhluong(Request $request){
        $check  = $request->validate(
           [
            'ngaycong' =>'required|numeric',
           'luongngay' =>'required|numeric'
           ],
           [
                'ngaycong.required'=>'Ngày công không thể trống',
                'ngaycong.numeric' =>'Ngày công phải là số',
                'luongngay.required'=>'lương ngày không thể trống',
                'luongngay.numeric' =>'Lương ngày phải là số',
           ]
        );
        $nc = $check['ngaycong'];
        $lg = $check['luongngay'];
        $lt = $nc * $lg;
        return view('buoi03.baitap03',compact('lt','nc','lg'));
    }
    public function baitap04(){
        return view('buoi03.baitap04');
    }
    public function tinhht(Request $request)
    {
        $check = $request->validate(
            [
                'bankinh' => 'required|numeric'
            ],[
                'bankinh.required' =>'Bán kính khồng được để trống',
                'bankinh.numeric' =>'Bán kính phải là số',
            ]
        );
        $bk = $check['bankinh'];
            $dt = 3.14 * $bk * $bk;
            $cv = 2 * 3.14 * $bk ;
            return view('buoi03.baitap04',compact('dt','cv','bk'));
    }
    public function baitap05(){
        return view('buoi03.baitap05');
    }
    public function tinhtd(Request $request){
        $check = $request->validate(
            [
                'tenchuho'=>'required|min:6',
                'chisocu'     =>'required|numeric',
                'chisomoi'     =>'required|numeric',
                'dongia'     =>'required|numeric',
            ],[
                'tenchuho.required' =>'tên chủ hộ không được để trống',
                'tenchuho.min'=>'Tên chủ hộ ít nhất 6 ký tự',
                'chisocu.required'=>'Chỉ số cũ không được để trống',
                'chisocu.numeric' => 'Chỉ số cũ phải là số',
                'chisomoi.required'=>'Chỉ số mới không được để trống',
                'chisomoi.numeric' => 'Chỉ số mới phải là số',
                'dongia.required'=>'Đon giá không được để trống',
                'dongia.numeric' => 'Đơn giá phải là số'
            ]
        );
        $ten = $check['tenchuho'];
        $csc = $check['chisocu'];
        $csm =  $check['chisomoi'];
        $dg = $check['dongia'];
       if($csm > $csc){
        $tt = ($csm - $csc) * $dg ;
        return view('buoi03.baitap05',compact('tt','csc','csm','dg','ten'));
       }
       else
       {
        $csc = " Chỉ số cũ phải nhỏ hơn chỉ số mới";
        return view('buoi03.baitap05',compact('csc'));
       }
    }
    public function baitap06(){
        return view('buoi03.baitap06');
    }
    public function tinhpt(Request $request){
        $check = $request->validate(
            [
                'giatria' =>'required|numeric',
                'giatrib' =>'required|numeric',

            ],[
                'giatria.required' =>'Giá trị a khồng được để trống',
                'giatria.numeric' =>'Giá trị a phải là số',
                'giatrib.required' =>'Giá trị b khồng được để trống',
                'giatrib.numeric' =>'Giá trị b phải là số',
            ]
        );
        $a = $check['giatria'];
        $b = $check['giatrib'];
        if($a == 0 && $b ==0){
            $kq = 'Hệ phương trình có vô sô số nghiệm';
        }
        else if ($a == 0){
            $kq = 'Hệ phương trình vô nghiệm';
        }
        else
            $kq = -$b / $a;

        return view('buoi03.baitap06',compact('kq'));
    }
}
