<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Carrito extends Model
{
    use HasFactory;
    use HasUUID;

    protected $uuidFieldName = 'id';
    protected $fillable = ['nombre','apellido','email','celular','password'];
}
