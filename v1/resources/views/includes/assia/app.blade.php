<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="utf-8">
    <title>{{config("app.name")}} Web Design &amp; Digital Marketing Agency HTML Template</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="{{config("app.name")}} - Diallodba ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#e8f1ff">

    <link href="{{asset('asset/images/Favicon_assia.png')}}" rel="icon">

    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/plugin.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/all.min.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
        @yield('css')

    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet">
</head>

<body>

    {{-- <div class="onloadpage" id="page-load">
        <div class="loader-div">
            <div class="on-img">
                <img src="asset/images/loader.gif" alt="Logo" class="img-fluid">
                <span>{{ __('Veuillez Patientez...')}}</span>
            </div>
        </div>
    </div> --}}
    @include("includes.assia.header")
    @yield('content')
    <footer class="footer-a">
        <div class="footer-fist-row pt40">
            <div class="container">
                <div class="footer-rowset">
                    <div class="col footer-head">
                        <h5>{{__('Informations de Contact')}}</h5>
                        <ul class="footer-links-list social-linkz">
                            <li>
                                <a href="tel:{{$info->telephone_1}}">
                                    <span><i class="fas fa-phone-square-alt"></i></span>
                                     {{$info->telephone_1}} 
                                </a>
                                </li>
                            <li>
                                <a href="tel:{{$info->telephone_2}}">
                                    <span><i class="fab fa-whatsapp-square"></i></span> {{$info->telephone_2}}
                                </a>
                            </li>
                            <li>
                                <a href="mailto:{{ $info->email_1 }}">
                                    <span><i class="fas fa-envelope"></i></span> <span class="">{{ $info->email_1 }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:{{ $info->email_2 }}">
                                    <span><i class="fas fa-envelope"></i></span> <span class="">{{ $info->email_2 }}</span>
                                </a>
                            </li>
                            <li><a href="skype:{{config("app.name")}}.company"><span><i class="fab fa-skype"></i></span>
                                {{config("app.name")}}-skype</a></li>
                        </ul>
                    </div>
                    <div class="col footer-head">
                        <h5>Prestations de service</h5>
                        <ul class="footer-links-list social-linkz">
                            <li><a href="javascript:void(0)"><span><i class="fab fa-facebook-f"></i></span> Facebook</a>
                            </li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-twitter"></i></span> Twitter </a>
                            </li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-instagram"></i></span> Instagram</a>
                            </li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-pinterest-p"></i></span>
                                    Pinterest</a></li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-linkedin-in"></i></span>
                                    linkedin</a></li>
                            <li><a href="javascript:void(0)"><span><i class="fab fa-youtube"></i></span> Youtube</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col footer-head">
                        <h5>Aperçu</h5>
                        <ul class="footer-links-list">
                            <li><a href="javascript:void(0)">Hire Dedicated Developers</a></li>
                            <li><a href="javascript:void(0)">Web App Development</a></li>
                            <li><a href="javascript:void(0)">Mobile App Development</a></li>
                            <li><a href="javascript:void(0)">Search Engine Optimization</a></li>
                            <li><a href="javascript:void(0)">Pay-Per-Click</a></li>
                            <li><a href="javascript:void(0)">Social Media Marketing</a></li>
                        </ul>
                    </div>
                    <div class="col footer-head">
                        <h5>les Industries</h5>
                        <ul class="footer-links-list">
                            <li><a href="javascript:void(0)">Healthcare</a></li>
                            <li><a href="javascript:void(0)">Education</a></li>
                            <li><a href="javascript:void(0)">Retail</a></li>
                            <li><a href="javascript:void(0)">Logistics</a></li>
                            <li><a href="javascript:void(0)">Oil & Gas</a></li>
                            <li><a href="javascript:void(0)">Music & Video</a></li>
                        </ul>
                    </div>
                    <div class="col footer-head">
                        <h5>Portfolio</h5>
                        <ul class="footer-links-list">
                            <li><a href="javascript:void(0)">StockNow - Investment App</a></li>
                            <li><a href="javascript:void(0)">Dochelp - Patient Monitoring</a></li>
                            <li><a href="javascript:void(0)">Roster - Pizza Delivery</a></li>
                            <li><a href="javascript:void(0)">Nikea - Logo Design</a></li>
                            <li><a href="javascript:void(0)">Eptire - Blockchain Solution</a></li>
                            <li><a href="javascript:void(0)">ShopTop - Grocery App</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-abt mt70 pt40 pb40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 vcenter">
                            <div class="footer-ree-lg">
                                <div class="footer-logo"> 
                                    {{-- {{asset('storage').'/'.$info->full_logo }} --}}
                                    <a href="{{route('home')}}"> <img src="{{asset($info->full_logo)}}" style="max-height: 60px; max-width:159px;" alt="reeven" class="img"> </a>
                                </div>
                                <div class="star-rating-review mt30">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h6 class="mt10">La note globale des clients est de 4,9 sur 8 500 Clients pour AssiaTech {{config("app.name")}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 vcenter">
                            <div class="ref-logo">
                                <a href="#"> <img src="asset/images/brand-logo/app-futura.png" alt="Logo"> </a>
                                <a href="#"> <img src="asset/images/brand-logo/clutch.png" alt="Logo"> </a>
                                <a href="#"> <img src="asset/images/brand-logo/goodfirm.png" alt="Logo"> </a>
                                <a href="#"> <img src="asset/images/brand-logo/itfirm.png" alt="Logo"> </a>
                            </div>
                        </div>
                        <div class="col-lg-3 vcenter ft-btn">
                            <a href="javascript:void(0);" class="ree-btn  ree-btn-grdt1 mw-80 no-shadows">Notre Brochure <i
                                    class="fas fa-arrow-right fa-btn"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ft-cpy">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="ft-copyright">
                            <p>Nous suivons toute intention de piratage.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ft-copyright ft-r">
                            <p>
                                Copyright © 2023 {{config("app.name")}}. Tous les droits sont réservés. | <a class="assia-text-primary" href="{{route('privacy-policy')}}" target="blank">Politique de confidentialité</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('asset/js/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset/js/app.bundle.js')}}"></script>
    <script src="{{asset('asset/js/parallax.min.js')}}"></script>
    @yield('js')
    <script src="{{asset('asset/js/main.js')}}"></script>
</body>

</html>