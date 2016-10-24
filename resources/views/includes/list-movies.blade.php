<?php
/***********************
 * Project	: DMS
 * File		: list-all.blade.php
 * Created	: Oct 22, 2016, 11:01:47 AM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : list-all.blade.php proovides a Laravel view
 ***********************/

?>
<!--includes.list-movies.blade.php-->
<section class="row col-md-8 col-md-offset-2">
    <header>
        <h2>My Movies List <span class="pull-right">Total: {{count($movies)}}</span></h2>
    </header>
    <div class="">
        @foreach($movies as $movie)
            @include('comps.ir-movie')
        @endforeach
    </div>
</section>
