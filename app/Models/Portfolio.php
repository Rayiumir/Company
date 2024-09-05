<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'img',
        'body',
        'tech',
        'time',
        'support',
        'cost',
        'lang',
        'user_id'
    ];

    public function getCreatedAtShamsi(): string
    {
        return verta($this->created_at)->format('Y/m/d');
    }
}
