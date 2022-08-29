<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    use HasFactory;
    protected $table = 'mon_hoc';
    protected $primaryKey = 'ma_mh';
    public $timestamps = false;
    public function ket_qua(){
        return $this.hasMany(Ketqua::class, 'ma_mh','ma_mh');
    }
}
