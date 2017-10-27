<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $location
 * @property string $state
 * @property string $country
 * @property string $thumb_image
 * @property Package[] $packages
 * @property TripItinerary[] $tripItineraries
 */
class PlacesToVisit extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
   // protected $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['location', 'state', 'country', 'thumb_image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function packages()
    {
        return $this->belongsToMany('App\Package', 'package_places_to_visits');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tripItineraries()
    {
        return $this->belongsToMany('App\TripItinerary', 'trip_itinerary_places_to_visits');
    }
}
