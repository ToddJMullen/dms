<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = [
        'name',
        'description'
    ];


    /**
     * Access the movie's recorded actors.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function actors()
    {
        return $this->belongsToMany("App\Actor")->withTimestamps();
    }

    /**
     * Access the movie's genres.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function genres()
    {
        return $this->belongsToMany('App\Genre')->withTimestamps();
    }


}
