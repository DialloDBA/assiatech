@extends("includes.assia.app")

@section("content")
<div class="contact-head-sec r-bg-a pt85 pb120">
    <div class="container">
        <div class="row pt80">
            <div class="col-lg-5 vcenter">
                <div class="page-headings">
                    <span class="sub-heading mb15"><i class="fas fa-headset mr5"></i> Let's Talk</span>
                    <h1 class="mb15"> Les bonnes discussions font les bons projets</h1>
                    <p>Nous serions heureux d'avoir de vos nouvelles, veuillez remplir le formulaire ci-dessous ou envoyez-nous vos besoins.</p>
                </div>
            </div>
            <div class="col-lg-7 vcenter">
                <div class="row">
                    <div class="col-lg-6 m-mt30">
                        <div class="contact-details-block">
                            <div class="ree-row-set">
                                <div class="ree-icon-set dtb-icon"> <i class="fas fa-phone-alt"></i> </div>
                                <div class="ree-details-set dtb-details">
                                    <span>Département des ventes</span>
                                    <a href="tel:+911234567890"> +91 1234567890 </a>
                                    <a href="tel:+911234567890"> +91 1234567890 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-mt30">
                        <div class="contact-details-block">
                            <div class="ree-row-set">
                                <div class="ree-icon-set dtb-icon"> <i class="fas fa-phone-alt"></i> </div>
                                <div class="ree-details-set dtb-details">
                                    <span>Département des RH</span>
                                    <a href="tel:+911234567890"> +91 1234567890 </a>
                                    <a href="tel:+911234567890"> +91 1234567890 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt30">
                    <div class="col-lg-6">
                        <div class="contact-details-block">
                            <div class="ree-row-set">
                                <div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i> </div>
                                <div class="ree-details-set dtb-details">
                                    <span>Département des ventes</span>
                                    <a href="/cdn-cgi/l/email-protection#790a18150a1c391c01181409151c571a1614">
                                        <span class="__cf_email__"
                                            data-cfemail="483b29243b2d082d30292538242d662b2725">[courriel protégé]</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-mt30">
                        <div class="contact-details-block">
                            <div class="ree-row-set">
                                <div class="ree-icon-set dtb-icon"> <i class="fas fa-envelope"></i> </div>
                                <div class="ree-details-set dtb-details">
                                    <span>Département des HR</span>
                                    <a href="#"> <span class="__cf_email__"
                                            data-cfemail="99f1ebd9fce1f8f4e9f5fcb7faf6f4">[courriel protégé]</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-form-sec sec-pad r-bg-d">
    <div class="container">
        <div class="row flx-end">
            <div class="col-lg-6">
                <div class="sec-heading m-center">
                    <span class="sub-heading mb15">DEMANDE</span>
                    <h2 class="mb15"><span class="ree-text rt40">Approuvé</span> par des Milliers</h2>
                    <p>
                        Nous serions heureux d'avoir de vos nouvelles, veuillez remplir le formulaire ci-dessous ou envoyez-nous vos besoins par courrier
                    </p>
                </div>
                <div class="trust-logo-block mt60">
                    <ul class="ree-card">
                        <li><img src="asset/images/brand-logo/partner-logo-1.svg" alt="logo"></li>
                        <li><img src="asset/images/brand-logo/partner-logo-2.svg" alt="logo"></li>
                        <li><img src="asset/images/brand-logo/partner-logo-3.svg" alt="logo"></li>
                        <li><img src="asset/images/brand-logo/partner-logo-4.svg" alt="logo"></li>
                        <li><img src="asset/images/brand-logo/partner-logo-5.svg" alt="logo"></li>
                        <li><img src="asset/images/brand-logo/partner-logo-6.svg" alt="logo"></li>
                    </ul>
                </div>
                <div class="ree-card mt30 trust-review owl-carousel">
                    <div class="items">
                        <div class="review-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type.</p>
                        </div>
                        <div class="ree-row-set mt30">
                            <div class="media vcenter">
                                <div class="ree-icon-set img-round80"><img src="asset/images/users/user4.jpg" alt="img"
                                        class="img-fluid"></div>
                                <div class="ree-details-set user-info">
                                    <h5>Lora Myka</h5>
                                    <p>ABC Business, <small>Jaipur, Rajasthan</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="review-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type.</p>
                        </div>
                        <div class="ree-row-set mt30">
                            <div class="media vcenter">
                                <div class="ree-icon-set img-round80"><img src="asset/images/users/user4.jpg" alt="img"
                                        class="img-fluid"></div>
                                <div class="ree-details-set user-info">
                                    <h5>Lora Myka</h5>
                                    <p>ABC Business, <small>Jaipur, Rajasthan</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                @php
                    $css="form-contact-hom m-mt60";
                    $bg="c";
                @endphp
                <x-Contact-Message-Form :css="$css" :bg="$bg"/>
            </div>
        </div>
    </div>
</div>


<section class="location-sec sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-heading text-center">
                    <span class="sub-heading mb15">Trouvez-nous</span>
                    <h2>Emplacement de nos <span class="ree-text rt40">Bureaux</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="location-block- mt60">
                    <div class="loc-icon-nam">
                        <img src="asset/images/icons/new-delhi.svg" alt="new-delhi">
                        <p><span class="ree-text rt40">Conakry</span></p>
                    </div>
                    <p class="pt20 pb20">
                        Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan
                        123456
                    </p>
                    <div class="loc-contct">
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Map Location">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Phone Number">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Email Address">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Skype Id">
                            <i class="fab fa-skype"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="location-block- mt60">
                    <div class="loc-icon-nam">
                        <img src="asset/images/icons/burj-al-arab.svg" alt="burj-al-arab">
                        <p><span class="ree-text rt40">Region de Boké</span></p>
                    </div>
                    <p class="pt20 pb20">Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan
                        123456</p>
                    <div class="loc-contct">
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Map Location"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Phone Number"><i class="fas fa-phone-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Skype Id"><i class="fab fa-skype"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="location-block- mt60">
                    <div class="loc-icon-nam">
                        <img src="asset/images/icons/big-ben.svg" alt="big-ben">
                        <p><span class="ree-text rt40">Région de Mamou</span></p>
                    </div>
                    <p class="pt20 pb20">Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan
                        123456</p>
                    <div class="loc-contct">
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Map Location"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Phone Number"><i class="fas fa-phone-alt"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Email Address"><i class="fas fa-envelope"></i></a>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"
                            data-toggle="tooltip" title="Skype Id"><i class="fab fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop