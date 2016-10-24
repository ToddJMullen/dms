<?php
/***********************
 * Project	: DMS
 * File		: list-actor-cbs.blade.php
 * Created	: Oct 23, 2016, 11:51:37 PM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : list-actor-cbs.blade.php proovides a Laravel view
 ***********************/

?>


@foreach( $actors as $actor )
<label for="cb{{ $actor['name'] }}"  class="btn-lg btn-default">
    <input id="cb{{ $actor['name'] }}" name="actors[]" type="checkbox"
           value="{{ $actor['name'] }}" />
    {{ $actor->name }}
</label>
@endforeach
<br />