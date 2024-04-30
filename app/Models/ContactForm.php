<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $table = 'contant_form';
    protected $fillable = ['name','email','service','write_us','mobile_number','created_at','updated_at'];
}