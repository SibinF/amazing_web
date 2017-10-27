<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $trip_category_id
 * @property string $name
 * @property string $description
 * @property string $thumb_image
 * @property string $banner_image
 * @property TripCategory $tripCategory
 * @property Package[] $packages
 */
class TripSubCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['trip_category_id', 'name', 'description', 'thumb_image', 'banner_image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tripCategory()
    {
        return $this->belongsTo('App\TripCategory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packages()
    {
        return $this->hasMany('App\Package');
    }
}
