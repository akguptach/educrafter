<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRating extends Model
{
    use HasFactory;
    protected $table = 'service_ratings';
    protected $fillable = ['service_id', 'question', 'answer'];
}