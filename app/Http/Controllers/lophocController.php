<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lophoc;
use App\Models\Khoa;

class lophocController extends Controller
{
    public function dashboard(){
        return view('buoi07.dashboard');
    }
    public function danhsach(){
        $ds = Lophoc::all();
        return view('buoi07.lophoc.danhsachlh',compact('ds'));
    }
    public function getThemLopHoc(){
        $lhmk = Khoa::select('ma_khoa')->get();
        return view('buoi07.lophoc.themlh',compact('lhmk'));
    }
    public function postThemLopHoc(Request $request){
        $check =  $request->validate(
            [
                'tenlop'=>'required',
                'makhoa'=>'required',
                'gvcn'   =>'required',
                'siso'   =>'required|numeric',
                'hocphi'=>'required|numeric',
            ],
            [
                'tenlop.required' =>'Tên lớp không thể để trống',
                'makhoa.required'=>'Mã khoa Không thể để trống',
                'gvcn.required'=>'Giáo viên chủ nhiệm Không thể để trống',
                'siso.required'=>'Sĩ số Không thể để trống',
                'siso.numeric'=>'Sĩ số phải là số',
                'hocphi.required'=>'Mã khoa Không thể để trống',
                'hocphi.numeric'=>'Học phí phải là số',
            ]
        );
        $themlh = new Lophoc();
        $themlh->ten_lop = $check['tenlop'];
        $themlh->ma_khoa = $check['makhoa'];
        $themlh->gvcn = $check['gvcn'];
        $themlh->siso = $check['siso'];
        $themlh->hoc_phi = $check['hocphi'];
        $kq = $themlh->save();
        if($kq){
            return redirect()->route('listlh')->with('tb','Thêm thành công');
        }
        else
        return redirect()->route('listlh')->with('tb','Thêm không thành công');
    }
    public function getSuaLopHoc($id){
        $dslh =Lophoc::where('ma_lop','=',$id)->get();
        $tl = $dslh[0]->ten_lop;
        $mkhoa = $dslh[0]->ma_khoa;
        $gvcn = $dslh[0]->gvcn;
        $siso = $dslh[0]->siso;
        $hp = $dslh[0]->hoc_phi;
        $mlop = $dslh[0]->ma_lop;
        $lhmk = Khoa::select('ma_khoa')->get();
        return view('buoi07.lophoc.sualh',compact('lhmk','tl','mkhoa','gvcn','siso','hp','mlop'));
    }
    public function postSuaLopHoc( Request $request ,$id){
        $check =  $request->validate(
            [
                'tenlop'=>'required',
                'makhoa'=>'required',
                'gvcn'   =>'required',
                'siso'   =>'required|numeric',
                'hocphi'=>'required|numeric',
            ],
            [
                'tenlop.required' =>'Tên lớp không thể để trống',
                'makhoa.required'=>'Mã khoa Không thể để trống',
                'gvcn.required'=>'Giáo viên chủ nhiệm Không thể để trống',
                'siso.required'=>'Sĩ số Không thể để trống',
                'siso.numeric'=>'Sĩ số phải là số',
                'hocphi.required'=>'Mã khoa Không thể để trống',
                'hocphi.numeric'=>'Học phí phải là số',
            ]
        );
        $themlh = Lophoc::find($id);
        $themlh->ten_lop = $check['tenlop'];
        $themlh->ma_khoa = $check['makhoa'];
        $themlh->gvcn = $check['gvcn'];
        $themlh->siso = $check['siso'];
        $themlh->hoc_phi = $check['hocphi'];
        $kq = $themlh->save();
        if($kq){
            return redirect()->route('listlh')->with('tb','Sửa thành công');
        }
        else
        return redirect()->route('listlh')->with('tb','Sửa không thành công');
    }
    public function getXoaLophoc($id){
        $kq = Lophoc::where('ma_lop','=',$id)->delete();
        if($kq){
            return redirect()->route('listlh')->with('tb','Xóa thành công');
        }
        else
        return redirect()->route('listlh')->with('tb','Xóa không thành công');
    }
}
