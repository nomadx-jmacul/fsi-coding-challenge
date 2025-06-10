<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Response Data Mapper
    |--------------------------------------------------------------------------
    |
    | This file is for mapping of response data
    | from third party apis into laravel table fields.
    |
    */

    'random_user' => [
        'personal_info' => [
            'title' => 'name:title',
            'firstname' => 'name:first',
            'lastname' => 'name:last',
            'email' => 'email',
            'birthdate' => 'dob:date',
            'age' => 'dob:age',
            'telephone_no' => 'phone',
            'cellular_no' => 'cell',
            'nationality' => 'nat',
            'registration_date' => 'registered:date',
            'registration_age' => 'registered:age',
        ],
        'address' => [
            'street_no' => 'location:street:number',
            'street_name' => 'location:street:name',
            'city' => 'location:city',
            'state' => 'location:state',
            'country' => 'location:country',
            'postcode' => 'location:postcode',
            'latitude' => 'location:coordinates:latitude',
            'longitude' => 'location:coordinates:longitude',
            'timezone_offset' => 'location:timezone:offset',
            'timezone_description' => 'location:timezone:description',
        ],
        'credential' => [
            'uuid' => 'login:uuid',
            'username' => 'login:username',
            'password' => 'login:password',
            'salt' => 'login:salt',
            'md5' => 'login:md5',
            'sha1' => 'login:sha1',
            'sha256' => 'login:sha256',
        ],
        'identification' => [
            'name' => 'id:name',
            'value' => 'id:value',
        ],
        'picture' => [
            'large' => 'picture:large',
            'medium' => 'picture:medium',
            'thumbnail' => 'picture:thumbnail',
        ],
    ],

];
