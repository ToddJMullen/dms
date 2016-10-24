<?php
/***********************
 * Project	: DMS
 * File		: list-genre-cbs.blade.php
 * Created	: Oct 23, 2016, 11:36:22 PM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : list-genre-cbs.blade.php provides a Laravel view providing input checkboxes
 *  for each genre listed in the genres table.
 ***********************/

?>

@foreach( $genres as $genre )
<label for="cb{{ $genre['name'] }}" class="btn-lg btn-default">
    <input id="cb{{ $genre['name'] }}" name="genres[]" type="checkbox"
           value="{{ $genre['name'] }}" />
    {{ $genre->name }}
</label>
@endforeach
<br />