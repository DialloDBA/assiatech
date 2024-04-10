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
                                    <div class="col-md-8 offset-md-2">
                                        <input type="text" placeholder="Nom d'Utilisateur , Adresse Email ou Telephone" value="" name="username" required>
                                    </div>
                                    <div class="col-md-8 offset-md-2">
                                        <input type="password" name="password" placeholder="*************************" required value="">
                                    </div>
                                </div>
                                
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
                                        <label class="custom-control-label label-f-form" for="customCheck">I agree to
                                            the <a href="javascript:void(0)">Terms &amp; Conditions</a> of
                                            Reevan.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="fieldsets mt20"> 
                                        <button type="submit" name="submit"  class="ree-btn  ree-btn-grdt1 w-100">Send your inquiry 
                                            <i class="fas fa-arrow-right fa-btn"></i>
                                        </button> 
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