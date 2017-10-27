<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $trip_itinerary_id
 * @property int $trip_activity_id
 * @property TripActivity $tripActivity
 * @property TripItinerary $tripItinerary
 */
class TripItineraryTripActivity extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tripActivity()
    {
        return $this->belongsTo('App\TripActivity');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tripItinerary()
    {
        return $this->belongsTo('App\TripItinerary');
    }
}
