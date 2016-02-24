@extends('front.template')
@section('menu')
<ul class="nav navbar-nav">
    <li  id='dashboard'><a href="<?php echo Config::get('app.url');?>public/"><i class="icon-home icon"></i></a></li>
    <!-- megamenu -->
    <li class="dropdown menu-large">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>       
      <ul class="dropdown-menu megamenu">
      @foreach($menucat as $keys => $menucats)
        <li class="col-sm-3">
        
          <ul>
            <li class="dropdown-header"><a href="{{Config::get('app.url')}}public/product/category/{{$keys}}">{{$menucats}}</a></li>
            @if(isset($childcat[$keys]))
                @foreach($childcat[$keys] as $childkey => $menuchild)
                    <li><a href="{{Config::get('app.url')}}public/product/category/{{$childkey}}">{{$menuchild}}</a></li>
                @endforeach
            @endif
            <!-- <li class="disabled"><a href="#">How to use</a></li>
            <li><a href="#">Examples</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Dropdowns</li>
            <li><a href="#">Example</a></li>
            <li><a href="#">Aligninment options</a></li>
            <li><a href="#">Headers</a></li>
            <li><a href="#">Disabled menu items</a></li> -->
        </ul>
        </li>
        @endforeach
        
      </ul>

    </li>
    <!-- end megamenu -->
    
  <li id='aboutus'><a href="<?php echo Config::get('app.url');?>public/aboutus">About Us</a></li> 
  <li id='product'><a href="<?php echo Config::get('app.url');?>public/product">Our Products</a></li> 
  
  <li id='event'><a href="<?php echo Config::get('app.url');?>public/news">News &amp; Events</a></li>
  <li id='contactus'><a href="<?php echo Config::get('app.url');?>public/contact">Contact Us</a></li>  
  <!-- <li id='payment'><a href="public/payment">Confirm Payment</a></li>   -->
</ul>
<script src="<?php echo Config::get('app.url');?>aset/main/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#{{$active}}').addClass('active category-menu');
    });
</script>
@stop