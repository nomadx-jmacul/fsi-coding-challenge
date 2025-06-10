<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerPicture extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'customer_id',
        'large',
        'medium',
        'thumbnail',
    ];
}
