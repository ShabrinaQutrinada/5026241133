<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Nilaikuliah extends Model
{
    protected $table = 'nilaikuliah';
    protected $fillable = ['NRP', 'NilaiAngka', 'SKS'];
    public $timestamps = false;
}
