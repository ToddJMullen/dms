<?php
/* * *********************
 * Project	: DMS
 * File		: header.php
 * Created	: Oct 21, 2016, 12:42:02 PM
 * @author	: Todd Mullen <ToddJ.Mullen@gmail.com>
 * Description : header.php proovides a Laravel view
 * ********************* */

?>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">My Movies | @yield('title')</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form action="{{ route('findMovie') }}" method="post"
                      class="navbar-form navbar-left pull-right">
                    <div class="form-group">
                        <input name="searchFor" type="text" class="form-control"
                               placeholder="Search For...">
                        <select name="searchBy" id="selSearch" class="form-control">
                            <option value="name" class="btn btn-lg">Movie Name</option>
                            <option value="actor" class="btn btn-lg">Actor</option>
                            <option value="genre" class="btn btn-lg">Movie Genre</option>
                        </select>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
