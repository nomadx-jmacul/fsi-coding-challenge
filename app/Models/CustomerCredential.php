<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerCredential extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'customer_id',
        'uuid',
        'username',
        'password',
        'salt',
        'md5',
        'sha1',
        'sha256',
    ];
}
