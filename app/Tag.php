<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property string $thumb_image
 * @property Package[] $packages
 * @property TripItinerary[] $tripItineraries
 */
class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'icon', 'thumb_image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function packages()
    {
        return $this->belongsToMany('App\Package', 'package_tags');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tripItineraries()
    {
        return $this->belongsToMany('App\TripItinerary', 'trip_itinerary_tags');
    }
   public $timestamps = false;

}