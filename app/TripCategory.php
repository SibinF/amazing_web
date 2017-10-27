<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $thumb_image
 * @property string $banner_image
 * @property TripSubCategory[] $tripSubCategories
 */
class TripCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'thumb_image', 'banner_image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tripSubCategories()
    {
        return $this->hasMany('App\TripSubCategory');
    }
    public function packages()
    {
        return $this->hasMany('App\Package');
    }
}
