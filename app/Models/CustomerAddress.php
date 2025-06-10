<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'customer_id',
        'street_no',
        'street_name',
        'city',
        'state',
        'country',
        'postcode',
        'latitude',
        'longitude',
        'timezone_offset',
        'timezone_description',
    ];
}
