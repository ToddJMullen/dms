<?php
/* * *********************
 * Project	: DMS
 * File		: movie.blade.php
 * Created	: Oct 22, 2016, 2:56:02 PM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : movie.blade.php proovides a Laravel view template to be used / repeated for each movie listed.
 * ********************* */

?>

<!--includes.ir-movie.blade.php-->
<div class="col-sm-6 col-md-4">
    <a href="{{ route('movieDetails', [$movie->id]) }}">
        <div class="thumbnail movie">
            <img src="..." alt="...">
            <div class="caption">
                <h3>{{ $movie->name }}</h3>
                <p>{{ $movie->description }}</p>

                <p>
                    <a href="{{ route('movieDetails', [$movie->id]) }}" class="btn btn-default" role="button">More</a>
                    <a href="{{ route('editMovie', [$movie->id]) }}" class="btn btn-primary" role="button">Edit</a>
                </p>
            </div>
        </div>
    </a>
</div>