@extends("includes.assia.app")

@section("content")
{{-- <section class="header-title head-dez3 dark-bg pera-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 vcenter">
                <span class="sub-heading mb15"><i class="fas fa-headset mr5"></i> Contact Us</span>
                <h1>We are a creative digital agency based in India.</h1>
                <p class="h-light">Please fill in the form below or mail us your requirements.</p>
            </div>
            <div class="col-lg-6 vcenter">
                <div class="sol-img m-mt30">
                    <img src="assets/images/others/smiling-girl.png" alt="img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section> --}}


<div class="contact-form-sec sec-pad r-bg-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="form-contact-hom m-mt60">
                    <div class="form-block bg-w">
                        <div class="form-head">
                            <h3>Please fill in the form below.</h3>
                        </div>
                        <div class="form-body">
                            <form action="#" method="post" name="feedback-form">
                                <div class="fieldsets row">
                                    <div class="col-md-6"><input type="text" placeholder="Full Name" name="name">
                                    </div>
                                    <div class="col-md-6"><input type="email" placeholder="Email Address"
                                            name="email"></div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-6"><input type="number" placeholder="Contact Number"
                                            name="phone"></div>
                                    <div class="col-md-6"><input type="text" placeholder="Skype" name="skype"></div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-6"><input type="text" placeholder="Subject" name="subject">
                                    </div>
                                    <div class="col-md-6">
                                        <select>
                                            <option>interested in</option>
                                            <option>Web Design</option>
                                            <option>Graphic Design</option>
                                            <option>App Development</option>
                                            <option>Digital Marketing</option>
                                            <option>Business Development</option>
                                            <option>Other...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="fieldsets"><textarea placeholder="Message" name="message"></textarea>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck"
                                        name="example1" checked="checked">
                                    <label class="custom-control-label label-f-form" for="customCheck">I agree to
                                        the <a href="javascript:void(0)">Terms &amp; Conditions</a> of
                                        Reevan.</label>
                                </div>
                                <div class="fieldsets mt20"> <button type="submit" name="submit"
                                        class="ree-btn  ree-btn-grdt1 w-100">Send your inquiry <i
                                            class="fas fa-arrow-right fa-btn"></i></button> </div>
                                <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.
                                </p>
                                <div class="form-btm-set text-center mt15">
                                    <h5>We Deliver</h5>
                                    <div class="icon-setss mt20">
                                        <div class="icon-rows">
                                            <div class="icon-imgg"><img src="assets/images/icons/money.svg" alt="#"></div>
                                            <div class="icon-txt">
                                                <p>Best Price</p>
                                            </div>
                                        </div>
                                        <div class="icon-rows">
                                            <div class="icon-imgg"><img src="assets/images/icons/quality.svg" alt="#">
                                            </div>
                                            <div class="icon-txt">
                                                <p>Quality Service</p>
                                            </div>
                                        </div>
                                        <div class="icon-rows">
                                            <div class="icon-imgg"><img src="assets/images/icons/call-agent.svg" alt="#">
                                            </div>
                                            <div class="icon-txt">
                                                <p>Good Support</p>
                                            </div>
                                        </div>
                                        <div class="icon-rows">
                                            <div class="icon-imgg"><img src="assets/images/icons/satisfaction.svg" alt="#">
                                            </div>
                                            <div class="icon-txt">
                                                <p>Satisfaction</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>




<div class="pt60 pb60 r-bg-d">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="icon-block-ree">
                    <div class="icon-card-title">
                        <img src="images/icons/world.svg" alt="services">
                        <p>Work at Your Time Zone</p>
                    </div>
                    <div class="icon-card-title">
                        <img src="images/icons/conversation.svg" alt="services">
                        <p>Easy & Timely Communication</p>
                    </div>
                    <div class="icon-card-title">
                        <img src="images/icons/tech-support.svg" alt="services">
                        <p>Support Available at 24 Hours</p>
                    </div>
                    <div class="icon-card-title">
                        <img src="images/icons/rate.svg" alt="services">
                        <p>Ratings 4.9 out of 8,500 Clients</p>
                    </div>
                    <div class="icon-card-title">
                        <img src="images/icons/awards.svg" alt="services">
                        <p>Award Wining Service and Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop