@extends('front.template')
@section('menu')
<ul class="nav navbar-nav">
    <li  id='dashboard'><a href="<?php echo Config::get('app.url');?>public/"><i class="icon-home icon"></i></a></li>
    <li class="dropdown" id='category'>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
    <ul class="dropdown-menu main-menu efek multi-level">
        @foreach($menucat as $keys => $menucats)
        <li><a href="#">{{$menucats}}</a></li>
        @endforeach
        <!-- <li class="dropdown-submenu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category 6</a>
            <ul class="dropdown-menu main-menu">
                <li><a href="#">Action</a></li>
                <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu main-menu">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li> -->

    </ul>
    </li>
  <li id='aboutus'><a href="<?php echo Config::get('app.url');?>public/about">About Us</a></li> 
  <li id='product'><a href="<?php echo Config::get('app.url');?>public/product">Our Products</a></li> 
  <li id='community'><a href="#">JSI Community</a></li>
  <li id='event'><a href="<?php echo Config::get('app.url');?>public/news">News &amp; Events</a></li>
  <li id='contactus'><a href="<?php echo Config::get('app.url');?>public/contact_us">Contact Us</a></li>  
</ul>
<script src="<?php echo Config::get('app.url');?>aset/main/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#{{$active}}').addClass('active category-menu');
    });
</script>
@stop