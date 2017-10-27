<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $trip_sub_category_id
 * @property int $travel_type_id
 * @property string $name
 * @property string $quote
 * @property string $description
 * @property string $thumb_image
 * @property string $banner_image_one
 * @property string $banner_image_two
 * @property string $banner_image_three
 * @property int $no_of_day
 * @property int $no_of_night
 * @property string $depature_date
 * @property TravelType $travelType
 * @property TripSubCategory $tripSubCategory
 * @property TripItinerary[] $tripItineraries
 * @property PlacesToVisit[] $placesToVisits
 * @property Tag[] $tags
 */
class Package extends Model
{
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = ['travel_type_id', 'name', 'quote', 'description', 'thumb_image', 'banner_image_one', 'banner_image_two', 'banner_image_three', 'no_of_day', 'no_of_night', 'depature_date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function travelType()
    {
        return $this->belongsTo('App\TravelType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tripSubCategory()
    {
        return $this->belongsTo('App\TripSubCategory');
    }
    public function tripCategory()
    {
        return $this->belongsTo('App\TripCategory');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tripItineraries()
    {
        return $this->belongsToMany('App\TripItinerary', 'package_trip_itineraries');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function placesToVisits()
    {
        return $this->belongsToMany('App\PlacesToVisit', 'package_places_to_visits');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'package_tags');
    }


}