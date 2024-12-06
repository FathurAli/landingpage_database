<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'judul',
        'sub_judul',
        'isi',
        'image_url',
    ];
}

