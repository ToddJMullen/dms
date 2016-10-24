<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * Get the movies this genre is attached to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function movies()
    {
        $this->belongsToMany('App\Movie')->withTimestamps();
    }

}
