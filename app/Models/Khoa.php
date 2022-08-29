<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    use HasFactory;
    protected $table = 'khoa';
    protected $primaryKey = 'ma_khoa';
    public $timestamps = false;
    public function lop_hoc(){
        return $this.hasMany(lophoc::class, 'ma_khoa','ma_khoa');
    }
}
