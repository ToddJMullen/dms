<?php
/***********************
 * Project	: DMS
 * File		: movies-found.blade.php
 * Created	: Oct 24, 2016, 3:21:40 AM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : movies-found.blade.php proovides a Laravel view
 ***********************/

?>@extends('layouts.master')

@section('title')
Movies Found
@endsection

@section('content')

@include('comps.errors')
Searched for movies with a / an {{ $searchBy }} like &ldquo;{{ $searchFor }}&rdquo;
@include('includes.list-movies')

@endsection

