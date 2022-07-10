<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $fillable = ['cover', 'judul', 'pengarang', 'penerbit', 'tahun', 'lokasi'];
}