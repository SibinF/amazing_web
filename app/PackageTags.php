<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $package_id
 * @property int $tag_id
 * @property Package $package
 * @property Tag $tag
 */
class PackageTags extends Model
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
    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }
}
