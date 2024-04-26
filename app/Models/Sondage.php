<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'question',
        'reponse1',
        'reponse2',
        'reponse3',
        'reponse4',
        'reponse5',

    ];
}
