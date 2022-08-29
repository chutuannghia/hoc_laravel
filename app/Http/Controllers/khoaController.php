<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khoa;

class khoaController extends Controller
{
    public function dashboard(){
        return view('buoi07.dashboard');
    }
    public function danhsach(){
        $ds = khoa::all();
        return view('buoi07.khoa.danhsach',compact('ds'));
    }
    public function getThemKhoa(){
        return view('buoi07.khoa.them');
    }
    public function postThemKhoa(Request $request){
        $check =  $request->validate([
            'tenkhoa'=>'required'
        ],[
            'tenkhoa.required'=>'Tên khoa không thể để trống'
        ]);
        $themkhoa = new Khoa();
        $themkhoa->ten_khoa = $check['tenkhoa'];
        $kq = $themkhoa->save();
        if($kq){
            return redirect()->route('listkhoa')->with('tb','Thêm thành công');
        }
        else
        return redirect()->route('listkhoa')->with('tb','Thêm không thành công');
    }
    public function getSuaKhoa($id){
        $khoa = Khoa::where('ma_khoa','=',$id)->get();
        return view('buoi07.khoa.sua',compact('khoa'));
    }
    public function postSuaKhoa( Request $request ,$id){
        $check =  $request->validate([
            'tenkhoa'=>'required'
        ],[
            'tenkhoa.required'=>'Tên khoa không thể để trống'
        ]);
        $tk= $check['tenkhoa'];
        $kq = Khoa::where('ma_khoa','=',$id)->update(['ten_khoa'=>$tk]);
        if($kq){
            return redirect()->route('listkhoa')->with('tb','Sửa thành công');
        }
        else
        return redirect()->route('listkhoa')->with('tb','Sửa không thành công');
    }
    public function getXoaKhoa($id){
        $kq = Khoa::where('ma_khoa','=',$id)->delete();
        if($kq){
            return redirect()->route('listkhoa')->with('tb','Xóa thành công');
        }
        else
        return redirect()->route('listkhoa')->with('tb','Xóa không thành công');
    }
}
