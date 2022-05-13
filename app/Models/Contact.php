<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'cpf', 'email', 'phone'];
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'array',
        'phone' => 'array'
    ];
}
