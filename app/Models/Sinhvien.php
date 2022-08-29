<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    protected $table = 'sinh_vien';
    protected $primaryKey = 'ma_sv';
    public $timestamps = false;
    public function ket_qua(){
        return $this.hasMany(Ketqua::class, 'ma_sv','ma_sv');
    }
}
