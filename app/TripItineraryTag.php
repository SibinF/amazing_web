<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $trip_itinerary_id
 * @property int $tag_id
 * @property Tag $tag
 * @property TripItinerary $tripItinerary
 */
class TripItineraryTag extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tripItinerary()
    {
        return $this->belongsTo('App\TripItinerary');
    }
}
