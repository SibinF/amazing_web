<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $package_id
 * @property int $places_to_visit_id
 * @property Package $package
 * @property PlacesToVisit $placesToVisit
 */
class PackagePlacesToVisit extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package()
    {
        return $this->belongsTo('App\Package');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function placesToVisit()
    {
        return $this->belongsTo('App\PlacesToVisit');
    }
}
