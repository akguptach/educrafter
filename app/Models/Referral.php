<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referral extends Model
{
    protected $table = 'referrals';
    protected $fillable = ['student_id', 'referred_by', 'earned'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student'::class, 'student_id');
    }
}
