<?php
/***********************
 * Project	: DMS
 * File		: movie-detail.blade.php
 * Created	: Oct 24, 2016, 12:06:09 AM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : movie-detail.blade.php proovides a Laravel view
 ***********************/
?>@extends('layouts.master')

@section('title')
Details
@endsection

@section('content')
<div class="row">
    <h2 class="title">Title: &ldquo;{{ $movie->name }}&rdquo;</h2>
    <div class="jumbotron">
        <img src="{{ URL::to('images/movie->image') }}" alt="{{ $movie->name }}'s main image" />
    </div>
    <h3 class="title">Summary</h3>
    <p>{{ $movie->description }}</p>

    <aside class="well">
        <strong>Cast:</strong> @foreach( $actors as $actor ){{ $actor['name'] }}, @endforeach
        <br />
        <strong>Genres:</strong> @foreach( $genres as $genre ){{ $genre['name'] }}, @endforeach
    </aside>

</div>
@endsection