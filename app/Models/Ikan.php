<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    protected $table = 'ikan';
    protected $primaryKey = 'kodeikan';
    protected $fillable = ['namaikan', 'jumlahikan', 'tersedia'];
    public $timestamps = false;
}
