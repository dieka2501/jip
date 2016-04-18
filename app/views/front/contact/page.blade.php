@extends('front')
@section('content')
<!-- CONTENT -->
<section id="contactus">
    <div class="container">
        <div class="tabs tabs-style-flip">
                    <nav>
                        <ul>
                            <li><a href="#section-flip-5"><span>JHL Auto</span></a></li>
                            <li><a href="#section-flip-4"><span>JSI Circuit</span></a></li>
                            <li><a href="#section-flip-2"><span>JSI Mega Mendung</span></a></li>
                            <li><a href="#section-flip-3"><span>JSI Service Station</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap">
                        <section id="section-flip-1">
                            <div class="row">
                                <div class="col-md-5"><img src="<?php echo Config::get('app.url');?>assets/main/img/showroom.jpg" class="img-responsive"></div>
                                <div class="col-md-7">
                                    <h1>JHL Auto</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p><br>
                                    <p><i class="icon-briefcase icons"></i>&nbsp; JL.Boulevard Gading Serpong blok M5 no.9A.</p>
                                    <p><i class="icon-phone icons"></i>&nbsp; +62 21 - 542 20 918</p>
                                    <p><i class="icon-envelope-open icons"></i>&nbsp; marketing@jhlauto.com</p>
                                    <p><i class="icon-globe icons"></i>&nbsp; http://jhlauto.com</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </section>
                        <section id="section-flip-2">
                            <div class="row">
                                <div class="col-md-5"><img src="<?php echo Config::get('app.url');?>assets/main/img/showroom.jpg" class="img-responsive"></div>
                                <div class="col-md-7">
                                    <h1>JSI Circuit</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p><br>
                                    <p><i class="icon-briefcase icons"></i>&nbsp; JL.Boulevard Gading Serpong blok M5 no.9A.</p>
                                    <p><i class="icon-phone icons"></i>&nbsp; +62 21 - 542 20 918</p>
                                    <p><i class="icon-envelope-open icons"></i>&nbsp; marketing@jsicircuit.com</p>
                                    <p><i class="icon-globe icons"></i>&nbsp; http://jsicircuit.com</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </section>
                        <section id="section-flip-3">
                            <div class="row">
                                <div class="col-md-5"><img src="<?php echo Config::get('app.url');?>assets/main/img/showroom.jpg" class="img-responsive"></div>
                                <div class="col-md-7">
                                    <h1>JSI Mega Mendung</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p><br>
                                    <p><i class="icon-briefcase icons"></i>&nbsp; JL.Boulevard Gading Serpong blok M5 no.9A.</p>
                                    <p><i class="icon-phone icons"></i>&nbsp; +62 21 - 542 20 918</p>
                                    <p><i class="icon-envelope-open icons"></i>&nbsp; marketing@jsimegamendung.com</p>
                                    <p><i class="icon-globe icons"></i>&nbsp; http://jsimegamendung.com</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </section>
                        <section id="section-flip-4">
                            <div class="row">
                                <div class="col-md-5"><img src="<?php echo Config::get('app.url');?>assets/main/img/showroom.jpg" class="img-responsive"></div>
                                <div class="col-md-7">
                                    <h1>JSI Service Station</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p><br>
                                    <p><i class="icon-briefcase icons"></i>&nbsp; JL.Boulevard Gading Serpong blok M5 no.9A.</p>
                                    <p><i class="icon-phone icons"></i>&nbsp; +62 21 - 542 20 918</p>
                                    <p><i class="icon-envelope-open icons"></i>&nbsp; marketing@jsiservicestation.com</p>
                                    <p><i class="icon-globe icons"></i>&nbsp; http://jsiservicestation.com</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </section>
                    </div><!-- /content -->
        </div><!-- /tabs -->
    </div>
</section>
<!--FOOTER-->
@stop