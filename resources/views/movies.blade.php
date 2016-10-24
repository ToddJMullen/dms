<?php
/***********************
 * Project	: DMS
 * File		: movies.blade.php
 * Created	: Oct 20, 2016, 5:03:54 PM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : movies.blade.php proovides a Laravel view
 ***********************/

?>@extends('layouts.master')

@section('title')
Add Movie
@endsection

@section('content')

@include('comps.errors')

@include('includes.list-movies')

@include('includes.form-new-movie')

@endsection