<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerIdentification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'customer_id',
        'name',
        'value',
    ];
}
