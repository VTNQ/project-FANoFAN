<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    protected $table='feedback';
    protected $fillable=['id_user','id_product','content'];
    public $timestamps=false;
}
