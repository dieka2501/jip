@extends('front.template')
@section('content')
<div class="jsi-bg">
<div class="lead">
<div class="container">
Check Out
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Sample</a></li>
  <li class="active">Breadcrumb</li>
</ol>
</div>
</div>
</div>
<section class="white-bg section">
	<div class="container">
                    <div class="panel-group checkout-accordions">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseOne">
                                        1.billing address
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse in" style="height: auto;">
                                <div class="panel-body step-1">

                                    <form class="form-billing-address">

                                        <div class="row field-row">
                                            <div class="col-xs-6">
                                                <input class="required form-control  " placeholder="first name*">
                                            </div>

                                            <div class="col-xs-6">

                                                <input class="required form-control" placeholder="last name*">

                                            </div>
                                        </div>


                                        <div class="row field-row ">
                                            <div class="col-xs-12">
                                                <input class="form-control" placeholder="company name (optional)">
                                            </div>
                                        </div>

                                        <div class="row field-row ">
                                            <div class="col-xs-12">
                                                <input class="required form-control" placeholder="street address*">

                                            </div>
                                        </div>

                                        <div class="row field-row ">
                                            <div class="col-xs-12">
                                                <input class="required form-control col-xs-12" placeholder="town*">

                                            </div>
                                        </div>

                                        <div class="row field-row ">
                                            <div class="col-xs-2">
                                                <input class="required form-control " placeholder="postcode/zip*">
                                            </div>
                                            <div class="col-xs-10">
                                                <input class="form-control" placeholder="state/country">
                                            </div>
                                        </div>
                                        <div class="row field-row ">
                                            <div class="col-xs-6">
                                                <input class="required form-control" placeholder="email address*">
                                            </div>
                                            <div class="col-xs-6">
                                                <input class="form-control" placeholder="phone number">
                                            </div>
                                        </div>

                                        <div class="row field-row checkout-button-row">
                                            <div class="col-xs-3 button-holder right">
                                                <button type="button" class="btn btn-success">continue</button>
                                            </div>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                                        2.account
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body step-3">

                                    <form class="form-account">

                                        <div class="row field-row">
                                            <div class="col-xs-12">
                                                <input class="required form-control  " placeholder="username/login*">
                                            </div>

                                        </div>


                                        <div class="row field-row ">
                                            <div class="col-xs-6">
                                                <input class="form-control" placeholder="password*">
                                            </div>

                                            <div class="col-xs-6">

                                                <input class="required form-control" placeholder="confirm password*">

                                            </div>
                                        </div>

                                        <div class="row field-row ">
                                            <div class="col-xs-12">
                                                <input class="form-control" placeholder="security question">

                                            </div>
                                        </div>

                                        <div class="row field-row ">
                                            <div class="col-xs-12">
                                                <input class="required form-control" placeholder="answer">

                                            </div>
                                        </div>

                                        <div class="row field-row ">
                                            <div class="col-xs-6">
                                                <input class="form-control " placeholder="date of birth yyyy/mm/dd">
                                            </div>
                                            <div class="col-xs-6">
                                                <input class="form-control" placeholder="preffered language">
                                            </div>
                                        </div>


                                        <div class="row field-row checkout-button-row">
                                            <div class="col-xs-12 col-sm-6  ">
                                                <div class="checkbox-holder">
                                                    <div class="md-check" style="position: relative;"><input class="md-check" type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> I have read and agree to the <a href="">Terms of Service</a> and <a href="">Customer Privacy Policy</a>.
                                                </div>
                                                <div class="checkbox-holder">
                                                    <div class="md-check" style="position: relative;"><input class="md-check" type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> I want to recieve News and Announcements to my email.
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6  button-holder pull-right">
                                                <button type="button" class="btn btn-success pull-right">continue</button>
                                                <button type="button" class="btn btn-primary pull-right" style="margin-right:10px;">continue without registering</button>
                                            </div>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>


                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
                                        3.your order
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body step-4">

                                    <form class="form-order">
                                        <p class="text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo urna, sollicitudin ac est ac, egestas ultricies ante. Maecenas sagittis nec augue vitae tincidunt. Pellentesque auctor pellentesque odio eget adipiscing. 
                                        </p>

                                        <div class="row order-summary-row">
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="order-info-item">
                                                    <h4>billing information</h4>
                                                    <div class="body">
                                                        <p>
                                                            John Doe<br>
                                                            Lorem Street 11<br>
                                                            12 331 New York


                                                        </p>

                                                        <p>
                                                            Phone: 219 123 123<br>
                                                            Email: email@to.me

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">

                                                <div class="order-info-item">
                                                    <h4>shipping information</h4>
                                                    <div class="body">
                                                        <p>
                                                            John Doe<br>
                                                            Lorem Street 11<br>
                                                            12 331 New York


                                                        </p>

                                                        <p>
                                                            Phone: 219 123 123<br>
                                                            Email: email@to.me

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">

                                                <div class="order-info-item">
                                                    <h4>choosed payment</h4>
                                                    <div class="body">


                                                        <p>
                                                            Method: Paypal<br>
                                                            PayPal address: email@to.me

                                                        </p>
                                                        <p>Shipping: Always free</p>

                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>

                                        <textarea class="form-control col-xs-12" rows="7">type here your comment about order</textarea>
                                    </form>
                                    <div style="clear:both;"></div>
                                    <div class="table-responsive">
                                            <table class="table borderless">
                                                <thead>
                                                    <tr>
                                                        <th>products</th> 

                                                        <th></th> 
                                                        <th>total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="order-title">super daily bag - grey color with addons</td>

                                                        <td></td>
                                                        <td class="order-price">$220,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="order-title">chanel - slim pants - grey with wight down</td>

                                                        <td></td>
                                                        <td class="order-price">$137,00</td>
                                                    </tr>
                                                    <tr><td></td><td></td><td></td></tr>
                                                    <tr class="line"><td></td><td></td><td></td></tr>
                                                    <tr class="summary">

                                                        <td class="clearfix"></td>
                                                        <td>
                                                            <label>cart subtotal</label>
                                                        </td>
                                                        <td class="order-price">$257,00</td>
                                                    </tr>

                                                    <tr class="summary">

                                                        <td class="clearfix"></td>
                                                        <td>
                                                            <label>shipping</label>
                                                        </td>
                                                        <td class="order-price"><i>FREE SHIPPING</i></td>
                                                    </tr>

                                                    <tr class="summary">

                                                        <td class="clearfix"></td>
                                                        <td>
                                                            <label>order total</label>
                                                        </td>
                                                        <td class="order-price">$257,00</td>
                                                    </tr>
                                                    <tr><td></td><td></td><td></td></tr>
                                                    <tr class="summary">
                                                        <td></td>

                                                        <td>

                                                        </td>
                                                        <td><button class="btn btn-success large">Submit</button></td>


                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>
@stop