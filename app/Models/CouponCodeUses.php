<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponCodeUses extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coupon_code_uses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','coupon_id'];

    

}