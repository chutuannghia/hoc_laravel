<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class buoi06Controller extends Controller
{
    public function ds_lophoc(){
        $dslh = DB::table('lop_hoc')->get();
        return view('buoi06.ds_lophoc',compact('dslh'));
    }
    public function them_lop_hoc(){
        $lhmk = DB::table('khoa')->select('ma_khoa')->get();
        return view('buoi06.them_lop_hoc',compact('lhmk'));
    }
    public function xuly_themlop(Request $request){
        $check =  $request->validate(
            [
                'tenlop'=>'required',
                'makhoa'=>'required',
                'gvcn'   =>'required',
                'siso'   =>'required|numeric',
                'hocphi'=>'required|numeric'
            ],
            [
                'tenlop.required' =>'Tên lớp không thể để trống',
                'makhoa.required'=>'Mã khoa Không thể để trống',
                'gvcn.required'=>'Giáo viên chủ nhiệm Không thể để trống',
                'siso.required'=>'Sĩ số Không thể để trống',
                'siso.numeric'=>'Sĩ số phải là số',
                'hocphi.required'=>'Mã khoa Không thể để trống',
                'hocphi.numeric'=>'Học phí phải là số'
            ]
        );
        $tl = $check['tenlop'];
        $mk = $check['makhoa'];
        $gvcn = $check['gvcn'];
        $siso = $check['siso'];
        $hp = $check['hocphi'];

        $add = DB::table('lop_hoc')->insert(
            ['ten_lop' => $tl, 'ma_khoa' => $mk , 'gvcn'=>$gvcn , 'siso'=>$siso ,'hoc_phi'=>$hp]
        );
        if($add){
        return redirect('buoi06')->with('tb', 'Thêm thành công');
        }
        else
         return redirect('buoi06')->with('tb', 'Thêm không thành công');
    }
    public function sua_lophoc($id){
        $dslh = DB::table('lop_hoc')->where('ma_lop','=',$id)->get();
        $tl = $dslh[0]->ten_lop;
        $mkhoa = $dslh[0]->ma_khoa;
        $gvcn = $dslh[0]->gvcn;
        $siso = $dslh[0]->siso;
        $hp = $dslh[0]->hoc_phi;
        $mlop = $dslh[0]->ma_lop;
        $lhmk = DB::table('khoa')->select('ma_khoa')->get();
        return view('buoi06.sua_lophoc',compact('lhmk','tl','mkhoa','gvcn','siso','hp','mlop'));
    }
    public function xuly_sua_lophoc (Request $request){
        $check =  $request->validate(
            [
                'tenlop'=>'required',
                'makhoa'=>'required',
                'gvcn'   =>'required',
                'siso'   =>'required|numeric',
                'hocphi'=>'required|numeric',
                'malop'=>'required'
            ],
            [
                'tenlop.required' =>'Tên lớp không thể để trống',
                'makhoa.required'=>'Mã khoa Không thể để trống',
                'gvcn.required'=>'Giáo viên chủ nhiệm Không thể để trống',
                'siso.required'=>'Sĩ số Không thể để trống',
                'siso.numeric'=>'Sĩ số phải là số',
                'hocphi.required'=>'Mã khoa Không thể để trống',
                'hocphi.numeric'=>'Học phí phải là số',
                'malop.required'=>"Lỗi không tìn thấy mã lớp"
            ]
        );
        $mlop = $check['malop'];
        $tl = $check['tenlop'];
        $mk = $check['makhoa'];
        $gvcn = $check['gvcn'];
        $siso = $check['siso'];
        $hp = $check['hocphi'];

        $update = DB::table('lop_hoc')->where('ma_lop','=',$mlop)->update(
            ['ten_lop' => $tl, 'ma_khoa' => $mk , 'gvcn'=>$gvcn , 'siso'=>$siso ,'hoc_phi'=>$hp]
        );
        if($update){
        return redirect('buoi06')->with('tb', 'Sửa thành công');
        }
        else
         return redirect('buoi06')->with('tb', 'Sửa không thành công');
    }
    public function xoa_lophoc($id){
        $check = DB::table('lop_hoc')->where('ma_lop','=',$id)->delete();
        if($check){
            return redirect('buoi06')->with('tb', 'Xóa thành công');
            }
            else
             return redirect('buoi06')->with('tb', 'Xóa không thành công');
    }
}
