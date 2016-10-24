<?php
/* * *********************
 * Project	: DMS
 * File		: form-edit-movie.blade.php
 * Created	: Oct 24, 2016, 2:11:35 AM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : form-edit-movie.blade.php proovides a Laravel view
 * ********************* */

?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="{{ route('updateMovie', $movie->id) }}" method="post" role="form">
            <div class="form-group">
                <label for="movieName">Movie Name:
                </label>
                <input id="movieName" name="name" type="text"
                       class="form-control {{$errors->has('name') ? 'has-error' : ''}}"
                       value="{{ $movie->name }}"/>

            </div>
            <div class="form-group">
                <label for="movieDescription">Description:<br />
                    <textarea id="movieDescription" name="description"
                              cols="40" rows="5"
                              class="form-control col-md-offset-3 {{$errors->has('description') ? 'has-error' : ''}}"
                              maxlength="255">{{ $movie->description }}</textarea>
                </label>
            </div>
            <div class="form-group well">
                @foreach( $movie->genres as $genre )
                <label for="cb{{ $genre['name'] }}" class="btn-lg btn-default">
                    <input id="cb{{ $genre['name'] }}" name="genres[]" type="checkbox"
                           value="{{ $genre['name'] }}" />
                    {{ $genre->name }}
                </label>
                @endforeach
                <br />
                <br />
                <label for="movieGenre">Add Genre:</label>
                <input id="movieGenre" name="genres['new']" type="text"
                       placeholder="Add A New Genre"
                       class="form-control {{$errors->has('genres["new"]') ? 'has-error' : ''}}"
                       value="{{ Request::old('genres') }}"/>
            </div>
            <div class="form-group well">
                @foreach( $movie->actors as $actor )
                <label for="cb{{ $actor['name'] }}"  class="btn-lg btn-default">
                    <input id="cb{{ $actor['name'] }}" name="actors[]" type="checkbox"
                           value="{{ $actor['name'] }}" />
                    {{ $actor->name }}
                </label>
                @endforeach
                <br />
                <br />
                <label for="newActor">Add Actor:</label>
                <input id="newActor" name="actors['new']" type="text"
                       placeholder="Add A New Actor"
                       class="form-control {{$errors->has('newActor') ? 'has-error' : ''}}"
                       value="{{ Request::old('newActor') }}"/>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}" />
        </form>
    </div>
</div>
