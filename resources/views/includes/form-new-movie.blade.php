<?php
/***********************
 * Project	: DMS
 * File		: form-new-movie.blade.php
 * Created	: Oct 24, 2016, 12:11:33 AM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : form-new-movie.blade.php proovides a Laravel view
 ***********************/

?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="{{ route('addMovie') }}" method="post" role="form">
            <div class="form-group">
                <label for="movieName">Movie Name:
                </label>
                    <input id="movieName" name="name" type="text"
                           class="form-control {{$errors->has('name') ? 'has-error' : ''}}"
                           value="{{ Request::old('name') }}"/>

            </div>
            <div class="form-group">
                <label for="movieDescription">Description:<br />
                    <textarea id="movieDescription" name="description"
                              cols="40" rows="5"
                              class="form-control col-md-offset-3 {{$errors->has('description') ? 'has-error' : ''}}"
                              maxlength="255">{{ Request::old('description') }}</textarea>
                </label>
            </div>
            <div class="form-group well">
                @include('includes.list-genre-cbs')
                    <br />
                <label for="movieGenre">Add Genre:</label>
                <input id="movieGenre" name="genres['new']" type="text"
                       placeholder="Add A New Genre"
                       class="form-control {{$errors->has('genres["new"]') ? 'has-error' : ''}}"
                       value="{{ Request::old('genres') }}"/>
            </div>
            <div class="form-group well">
                    @include('includes.list-actor-cbs')
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