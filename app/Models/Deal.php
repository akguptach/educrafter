<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deals';

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
    protected $fillable = [
                  'title',
                  'deal_category',
                  'image',
                  'short_description',
                  'long_description',
                  'url',
                  'price',
                  'other_price',
                  'voucher_code',
                  'offer_price',
                  'price_type',
                  'website_type',
                  'status'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];


    public function category()
    { 
        return $this->belongsTo('App\Models\DealCategory', 'deal_category');
    }



}
