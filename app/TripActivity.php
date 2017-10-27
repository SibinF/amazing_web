<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $thumb_image
 * @property string $banner_Image
 * @property TripItinerary[] $tripItineraries
 */
class TripActivity extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'thumb_image', 'banner_Image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tripItineraries()
    {
        return $this->belongsToMany('App\TripItinerary', 'trip_itinerary_trip_activities');
    }
}
