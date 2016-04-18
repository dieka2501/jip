@extends('front.template')
@section('content')

<div class="wrapper-breadcrumb bg-grey">
	<div class="container">
		<h3>About</h3>
		<ol class="breadcrumb">
		  <li><a href="{{Config::get('app.url')}}public/">Home</a></li>
		  <li><a href="{{Config::get('app.url')}}public/aboutus">About</a></li>
		</ol>
	</div>
</div>
<section id="content">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<img src="<?php echo Config::get('app.url');?>aset/main/img/showroom.jpg" class="img-responsive center-block">
			<br>
			<br>
			<p>Jeep Stasion Indonesia will present the new 2016 Range Rover Sport HST Limited Edition at the 2015 New York International Auto Show. </p>
			<p>The HST enhances the high performance Range Rover Sport driving experience thanks to its upgraded 380hp 3.0-liter supercharged V6 engine, unique chassis settings and 
bespoke design features. </p>
			<p>David Mitchell, Vehicle Program Director Range Rover Sport, said, "The HST extends our Range Rover Sport line-up giving customers even greater choice. Sitting between the 
existing 340hp Range Rover Sport 3.0-liter supercharged V6 and the 550hp supercharged variant, it delivers enhanced V6 performance to go with the renowned comfort and 
refinement of the Range Rover Sport." </p>
			<p>Additional updates to the 2016 Model Year Range Rover Sport line-up will also be 
showcased in New York, including the availability of a new Hands-Free Gesture Tailgate and the introduction of Automatic Access Height.</p>
			<h2>New Jeep Sport HST Limited Edition</h2>
			<p>The bold new Range Rover Sport HST Limited Edition is identified by its unique exterior design and interior enhancements, which give the luxury SUV a distinctive and dynamic appearance. </p>
			<p>A striking black theme is the hallmark of the exterior design. The HST is fitted with 
darkened front and rear lamps, which feature non-reflective surrounds and combine with a Santorini Black contrast roof and a new spoiler to give the luxury SUV a defined profile. </p>
			<p>The distinctive 21-inch alloy wheels on the HST feature an exclusive dark satin grey finish helping to highlight the upgraded brakes, which are identified by red brake calipers. </p>
			<p>The hood and front fender vents, grille and fog lamp bezels all feature a Gloss Black finish, echoed by the 'Range Rover' lettering on the edge of the hood and tailgate. Sculpted body-colored lower door panels and additional vent detailing on the bumpers are also fitted. </p>
		</div>
	</div>
</section>

@stop