<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Mitarbeiter extends Model
{
    use HasFactory;

    protected $table = 'mitarbeiter';

    protected $fillable = [
        // 
        'username',
        'bericht',
        'lohn',
        'age'
    ];
}
