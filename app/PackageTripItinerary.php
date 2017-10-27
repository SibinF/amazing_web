<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $package_id
 * @property int $trip_itinerary_id
 * @property Package $package
 * @property TripItinerary $tripItinerary
 */
class PackageTripItinerary extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package()
    {
        return $this->belongsTo('App\Package');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tripItinerary()
    {
        return $this->belongsTo('App\TripItinerary');
    }
}
