<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Articulo extends Model
{
    use HasFactory;
    use HasUUID;

    protected $uuidFieldName = 'id';
    protected $fillable = ['codigo','nombre','precio'];
}
