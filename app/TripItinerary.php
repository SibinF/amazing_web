<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $thumb_image
 * @property string $banner_image_one
 * @property string $banner_image_two
 * @property string $banner_image_three
 * @property string $banner_image_four
 * @property Package[] $packages
 * @property PlacesToVisit[] $placesToVisits
 * @property Tag[] $tags
 * @property TripActivity[] $tripActivities
 */
class TripItinerary extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'thumb_image', 'banner_image_one', 'banner_image_two', 'banner_image_three', 'banner_image_four'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function packages()
    {
        return $this->belongsToMany('App\Package', 'package_trip_itineraries');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function placesToVisits()
    {
        return $this->belongsToMany('App\PlacesToVisit', 'trip_itinerary_places_to_visits');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'trip_itinerary_tags');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tripActivities()
    {
        return $this->belongsToMany('App\TripActivity', 'trip_itinerary_trip_activities');
    }
}
