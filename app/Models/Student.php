<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'student';
    protected $fillable = ['first_name','last_name','email','phone_number','password','country_code','referral_code','facebook_id','google_id','apple_id'];

    public function orders()
    {
        return $this->hasMany('App\Models\Orders', 'student_id');
    }
}
