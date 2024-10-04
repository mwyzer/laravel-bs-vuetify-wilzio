<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'address',
        'contact_number',
        'additional_info',
        // Add more attributes as needed
    ];

    /**
     * Define the relationship with Location model.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
