<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    /**
     * HasFactory
     */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'email',
        'birthdate',
        'age',
        'telephone_no',
        'cellular_no',
        'nationality',
        'registration_date',
        'registration_age',
    ];

    /**
     * @return HasOne
     */
    public function address(): HasOne
    {
        return $this->HasOne(CustomerAddress::class);
    }

    /**
     * @return HasOne
     */
    public function credential(): HasOne
    {
        return $this->hasOne(CustomerCredential::class);
    }

    /**
     * @return HasOne
     */
    public function identification(): HasOne
    {
        return $this->HasOne(CustomerIdentification::class);
    }

    /**
     * @return HasOne
     */
    public function picture(): HasOne
    {
        return $this->HasOne(CustomerPicture::class);
    }
}
