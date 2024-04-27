<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table = 'tutor';
    protected $fillable = ['tutor_name', 'tutor_email', 'tutor_mobile', 'tutor_subject', 'status', 'password'];
}