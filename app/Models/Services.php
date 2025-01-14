<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'judul',
        'sub_judul',
        'isi',
        'kategory',
        'harga',
        'image',
    ];
}
