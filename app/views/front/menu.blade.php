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
            <li class="dropdown-header">{{$menucats}}</li>
            @if(isset($childcat[$keys]))
                @foreach($childcat[$keys] as $childkey => $menuchild)
                    <li><a href="#">{{$menuchild}}</a></li>
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
        <!-- <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Button groups</li>
            <li><a href="#">Basic example</a></li>
            <li><a href="#">Button toolbar</a></li>
            <li><a href="#">Sizing</a></li>
            <li><a href="#">Nesting</a></li>
            <li><a href="#">Vertical variation</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Button dropdowns</li>
            <li><a href="#">Single button dropdowns</a></li>
          </ul>
        </li> -->
        <!-- <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Input groups</li>
            <li><a href="#">Basic example</a></li>
            <li><a href="#">Sizing</a></li>
            <li><a href="#">Checkboxes and radio addons</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Navs</li>
            <li><a href="#">Tabs</a></li>
            <li><a href="#">Pills</a></li>
            <li><a href="#">Justified</a></li>
          </ul>
        </li> -->
        <!-- <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Navbar</li>
            <li><a href="#">Default navbar</a></li>
            <li><a href="#">Buttons</a></li>
            <li><a href="#">Text</a></li>
            <li><a href="#">Non-nav links</a></li>
            <li><a href="#">Component alignment</a></li>
            <li><a href="#">Fixed to top</a></li>
            <li><a href="#">Fixed to bottom</a></li>
            <li><a href="#">Static top</a></li>
            <li><a href="#">Inverted navbar</a></li>
          </ul>
        </li> -->
      </ul>

    </li>
    <!-- end megamenu -->
    <!-- <li class="dropdown" id='category'>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
    <ul class="dropdown-menu main-menu efek multi-level">
        @foreach($menucat as $keys => $menucats)
            @if(isset($childcat[$keys]) == false)
                <li><a href="{{Config::get('app.url')}}public/product/category/{{$keys}}">{{$menucats}}</a></li>
            @else 
                <li class="dropdown-submenu">
                    <a href="{{Config::get('app.url')}}public/product" class="dropdown-toggle" data-toggle="dropdown">{{$menucats}}</a>
                    <ul class="dropdown-menu main-menu">
                        @foreach($childcat[$keys] as $childkey => $menuchild)
                            <li><a href="{{Config::get('app.url')}}public/product/category/{{$childkey}}">{{$menuchild}}</a></li>
                        @endforeach
                    </ul>
                </li>    
            @endif
        @endforeach
        <li class="dropdown-submenu">
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
        </li>

    </ul>
    </li> -->
  <li id='aboutus'><a href="<?php echo Config::get('app.url');?>public/aboutus">About Us</a></li> 
  <li id='product'><a href="<?php echo Config::get('app.url');?>public/product">Our Products</a></li> 
  
  <li id='event'><a href="<?php echo Config::get('app.url');?>public/news">News &amp; Events</a></li>
  <li id='contactus'><a href="<?php echo Config::get('app.url');?>public/contact">Contact Us</a></li>  
  <li id='payment'><a href="<?php echo Config::get('app.url');?>public/payment">Confirm Payment</a></li>  
</ul>
<script src="<?php echo Config::get('app.url');?>aset/main/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#{{$active}}').addClass('active category-menu');
    });
</script>
@stop