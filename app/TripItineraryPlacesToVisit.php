<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $trip_itinerary_id
 * @property int $places_to_visit_id
 * @property PlacesToVisit $placesToVisit
 * @property TripItinerary $tripItinerary
 */
class TripItineraryPlacesToVisit extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function placesToVisit()
    {
        return $this->belongsTo('App\PlacesToVisit');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tripItinerary()
    {
        return $this->belongsTo('App\TripItinerary');
    }
}
