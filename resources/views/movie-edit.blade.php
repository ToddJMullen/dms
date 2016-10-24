<?php
/***********************
 * Project	: DMS
 * File		: movie-edit.blade.php
 * Created	: Oct 24, 2016, 2:10:00 AM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : movie-edit.blade.php proovides a Laravel view
 ***********************/

?>@extends('layouts.master')

@section('title')
Edit Movie
@endsection

@section('content')

@include('comps.errors')

@include('includes.form-edit-movie')

@endsection

