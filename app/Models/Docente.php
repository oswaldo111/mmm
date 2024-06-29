<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Docente extends Model
{
    use Hasfactory, Notifiable;
    public $timestamps = false;
    protected $table = 'docente';
    
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
