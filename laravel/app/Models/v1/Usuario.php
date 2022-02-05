<?php

namespace app\Models\v1;

use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Usuario extends Model
{
	use HasUUID;

	protected $table = 'usuarios';
	protected $primaryKey ="id";
	public $incrementing = false;
	protected $keyType = 'string';
	protected $uuidFieldName = 'id';
}