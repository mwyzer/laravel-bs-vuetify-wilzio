<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Location extends Model
{
    use HasFactory;

    // Define attributes that are mass assignable
    protected $fillable = [
        'id',
        'name',
        'address',
        'created_by',
        'updated_by',
    ];

    // Enable timestamps to automatically manage created_at and updated_at fields
    public $timestamps = true;

    // Optional: Customize the timestamp format or names
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Define the one-to-one relationship with LocationDetail.
     */
    public function detail()
    {
        return $this->hasOne(LocationDetail::class);
    }

}
