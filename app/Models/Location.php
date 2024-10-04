<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Location extends Model
{
    use HasFactory;

    //Define attriutes that are mass assignable
    protected $fillable = [
        'name',
        'type',
        'status',
        'service_type',
        'flash_sale',
        'flash_sale_price',
        'flash_sale_start',
        'flash_sale_end',
        'created_by',
        'updated_by',
        'password',
    ];

    //Encrypt the password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    //Decrypt the password
    public function getPasswordAttribute($value)
    {
        return $value;
    }


}
