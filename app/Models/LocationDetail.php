<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'initial_installation_date',
        'google_map_url',
        'created_by',
        'updated_by',
    ];

    /**
     * Define the relationship with Location model.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
