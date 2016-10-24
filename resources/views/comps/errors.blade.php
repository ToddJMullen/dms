<?php
/***********************
 * Project	: DMS
 * File		: errors.blade.php
 * Created	: Oct 22, 2016, 4:43:23 PM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : errors.blade.php proovides a Laravel view
 ***********************/

?>

    <div class="row col-md-6 col-md-offset-3">
    @if( count($errors) > 0)
        <div class="col-6 alert alert-warning">
            <ul>
                @foreach($errors->all() as $error)
                <li class="list-unstyled">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @else
        <!--<p class=" alert alert-success">No Errors Found</p>-->
    @endif
    </div>