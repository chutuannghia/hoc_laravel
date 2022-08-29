<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    use HasFactory;
    protected $table = 'lop_hoc';
    protected $primaryKey = 'ma_lop';
    public $timestamps = false;
    public function khoa(){
        return $this->belongsTo(Khoa::class,'ma_khoa','ma_khoa');
    }
    public function sinh_vien(){
        return $this.hasMany(Sinhvien::class, 'ma_lop','ma_lop');
    }
}
