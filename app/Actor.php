<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * Get the movies this actor is in.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function movies()
    {
        $this->belongsToMany('App\Movie')->withTimestamps();
    }
}
