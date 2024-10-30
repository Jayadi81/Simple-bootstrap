<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kelas extends Model
{
    protected $table = 'kelas';
    
    protected $primarykey = 'id';

    public $timestamps = 'false';

    protected $fillable = ['id', 'nama_kelas','kelompok'];
}