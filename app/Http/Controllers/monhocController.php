<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monhoc;

class monhocController extends Controller
{
    public function dashboard(){
        return view('buoi07.dashboard');
    }
    public function danhsach(){
        $ds = Monhoc::all();
        return view('buoi07.monhoc.danhsach',compact('ds'));
    }
    public function getThemMonHoc(){
        return view('buoi07.monhoc.them');
    }
    public function postThemMonHoc(Request $request){
        $check =  $request->validate([
            'tenmh'=>'required',
            'sotinchi'=>'required|numeric'
        ],[
            'tenmh.required'=>'Tên môn học không thể để trống',
            'sotinchi.required'=>'Số tín chỉ không thể để trống',
            'sotinchi.numeric'=>'Số tín chỉ phải là số',
        ]);
        $themmh = new Monhoc();
        $themmh->ten_mh = $check['tenmh'];
        $themmh->so_tin_chi = $check['sotinchi'];
        $kq = $themmh->save();
        if($kq){
            return redirect()->route('listmh')->with('tb','Thêm thành công');
        }
        else
        return redirect()->route('listmh')->with('tb','Thêm không thành công');
    }
    public function getSuaMonHoc($id){
        $mh= Monhoc::where('ma_mh','=',$id)->get();
        return view('buoi07.monhoc.sua',compact('mh'));
    }
    public function postSuaMonHoc( Request $request ,$id){
        $check =  $request->validate([
            'tenmh'=>'required',
            'sotinchi'=>'required|numeric'
        ],[
            'tenmh.required'=>'Tên môn học không thể để trống',
            'sotinchi.required'=>'Số tín chỉ không thể để trống',
            'sotinchi.numeric'=>'Số tín chỉ phải là số',
        ]);
        $themmh = Monhoc::find($id);
        $themmh->ten_mh = $check['tenmh'];
        $themmh->so_tin_chi = $check['sotinchi'];
        $kq = $themmh->save();
        if($kq){
            return redirect()->route('listmh')->with('tb','Sửa thành công');
        }
        else
        return redirect()->route('listmh')->with('tb','Sửa không thành công');
    }
    public function getXoaMonHoc($id){
        $kq = Monhoc::where('ma_mh','=',$id)->delete();
        if($kq){
            return redirect()->route('listmh')->with('tb','Xóa thành công');
        }
        else
        return redirect()->route('listmh')->with('tb','Xóa không thành công');
    }
}
