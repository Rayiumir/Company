<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'img',
        'aos',
        'easing',
        'delay',
        'offset'
    ];

    public function getCreatedAtShamsi(): string
    {
        return verta($this->created_at)->format('Y/m/d');
    }
}
