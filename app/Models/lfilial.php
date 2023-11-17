<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lfilial extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nome', 'created_at', 'updated_at'];
}
