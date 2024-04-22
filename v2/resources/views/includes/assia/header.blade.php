<style>
    :root {
        --assia-bg-primary : #ff5b2e;
    }
    .bg-assia{
        background-color: var(--assia-bg-primary) !important;
        color: #fff !important;
    }
    .assia-text-primary{
        color: var(--assia-bg-primary) !important;
    }
</style>
<header class="header-bhv ree-header fixed-top">
    <div class="mini-header-bar">
        <div class="sideone">
            <a href="tel:{{$info->telephone_1}}" class="contactinfo"><i class="far fa-envelope"></i> {{$info->telephone_1}}</a>
            <a href="mailto:{{$info->email_1}}" class="contactinfo"><i class="far fa-envelope"></i> {{$info->email_1}}</a>
            <a href="https://wa.me/{{ str()->of($info->telephone_2)->replaceMatches('/[^A-Za-z0-9]++/', '')}}" class="contactinfo" target="blank">
                <i class="fab fa-whatsapp"></i>
                {{$info->telephone_2}}
            </a>
        </div>
        <div class="sidetwo">
            <a href="{{route('about')}}" class="">{{__('Carrières')}}</a> 
            |<a href="{{route('about')}}" target="_blank">Espace Client</a> 
            | <a href="{{route('login')}}">Connexion</a>
            
            @if (App::isLocale('fr'))
                | <a href="#" class="text-uppercase"><img height="26" width="26" src="{{ asset('asset/images/flags/fr.png')}}" alt="" srcset=""> {{__('fr')}}</a>
            @else
            | <a href="#" class="text-uppercase"> <img src="{{ asset('asset/images/flags/us.png')}}" alt="" srcset=""> {{__('en')}}</a>
            @endif
            
        </div>
    </div>
    <div class="container-fluid m-p-l-r-0">
        <div class="menu-header horzontl">
            <div class="menu-logo">
                <div class="dskt-logo"><a class="nav-brand" href="{{route('home')}}"> 
                    <img src="{{asset($info->full_logo)}}" style="max-width: 206px;" alt="Assia Teachnologis Logo" class="ree-logo"> </a> 
                </div>
            </div>
            <div class="ree-nav" role="navigation">
                <ul class="nav-list">
                    <li class="">
                        <a href="{{route('carriere')}}" class="menu-links">Carrières</a>
                    </li>
                    <li class="megamenu">
                        <a href="#" class="menu-links">Services</a>
                        <div class="menu-dropdown">
                            <div class="menu-block-set">
                                <div class="container">
                                    <div class="menu-block-a">
                                        <div class="mega-menu-blocks">
                                            <p class="mb10">Besoin d'un site Web?</p>
                                            <h4>Nous façonnerons votre marque avec nos solutions numériques</h4>
                                            <a href="{{route('contact')}}" class="ree-btn ree-btn0 ree-btn-grdt2 mt30">
                                                Demander un devis <i class="fas fa-arrow-right fa-btn"></i>
                                            </a>
                                        </div>
                                        <div class="mega-menu-blocks">
                                            <div class="menu-inner-block-a">
                                                @if ($gs)
                                                    @foreach ($gs as $g)
                                                    <div class="inner-blockss">
                                                        <label class="menu-headings">{{ $g->libelle_groupe }}</label>
                                                        <ul class="menu-li-link">
                                                            @if ($g->services)
                                                                @foreach ($g->services as $s)
                                                                <li><a href="web-design.html">{{ $s->libelle_service}}</a></li>
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-Menu-Extra-Info />
                        </div>
                    </li>
                    <li class="megamenu">
                        <a href="#" class="menu-links">Industries</a>
                        <div class="menu-dropdown">
                            <div class="menu-block-set">
                                <div class="container">
                                    <div class="menu-block-a">
                                        <div class="mega-menu-blocks">
                                            <h4>Creative, Premium & Scalable Solutions For App and Web Development
                                            </h4>
                                            <a href="get-quote.html" class="ree-btn ree-btn0 ree-btn-grdt2 mt30">
                                                Request Quote <i class="fas fa-arrow-right fa-btn"></i></a>
                                        </div>
                                        <div class="mega-menu-blocks">
                                            <div class="menu-inner-block-a">
                                                <div class="inner-blockss">
                                                    <ul class="menu-li-link">
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="about-2.html">About Us - 2</a></li>
                                                        <li><a href="career.html">Career</a></li>
                                                        <li><a href="career-2.html">Career - 2</a></li>
                                                        <li><a href="case-study.html">Case Study</a></li>
                                                    </ul>
                                                </div>
                                                <div class="inner-blockss">
                                                    <ul class="menu-li-link">
                                                        <li><a href="case-study-details.html">Case Study Details</a>
                                                        </li>
                                                        <li><a href="core-values.html">Our Core Value</a></li>
                                                        <li><a href="get-quote.html">Contact Us</a></li>
                                                        <li><a href="get-quote-2.html">Contact Us - 2</a></li>
                                                        <li><a href="our-team.html">Our Team</a></li>
                                                    </ul>
                                                </div>
                                                <div class="inner-blockss">
                                                    <ul class="menu-li-link">
                                                        <li><a href="our-team-2.html">Our Team - 2</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="pricing-2.html">Pricing - 2</a></li>
                                                        <li><a href="services.html">Service</a></li>
                                                        <li><a href="services-2.html">Service - 2</a></li>
                                                    </ul>
                                                </div>
                                                <div class="inner-blockss">
                                                    <ul class="menu-li-link">
                                                        <li><a href="service-details.html">Service Details</a></li>
                                                        <li><a href="service-details-2.html">Service Details - 2</a>
                                                        </li>
                                                        <li><a href="why-us.html">Why Choose Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-Menu-Extra-Info />
                        </div>
                    </li>
                    <li class="megamenu">
                        <a href="#" class="menu-links">Insights</a>
                        <div class="menu-dropdown">
                            <div class="menu-block-set">
                                <div class="container">
                                    <div class="menu-block-a">
                                        <div class="mega-menu-blocks">
                                            <div class="menu-inner-block-a">
                                                <div class="inner-blockss">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('asset/images/menu/breaking.jpg')}}" class="card-img-top" alt="...">
                                                        
                                                        <div class="card-footer bg-assia text-center">
                                                            <a class="text-white" href="{{route('contact')}}">Blogs</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner-blockss">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('asset/images/menu/platform.jpg')}}" class="card-img-top" alt="...">
                                                        
                                                        <div class="card-footer bg-assia text-center">
                                                            <a class="text-white" href="{{route('contact')}}">Etudes de Cas</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner-blockss">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('asset/images/menu/press.png')}}" class="card-img-top" alt="...">
                                                        
                                                        <div class="card-footer bg-assia text-center">
                                                            <a class="text-white" href="{{route('contact')}}">Communiqués de Presse</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner-blockss">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('asset/images/menu/livre-blanc.png')}}" class="card-img-top" alt="...">
                                                        
                                                        <div class="card-footer bg-assia text-center">
                                                            <a class="text-white" href="{{route('contact')}}">Livres Blanc</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-Menu-Extra-Info />
                        </div>
                    </li>
                    <li class="megamenu">
                        <a href="#" class="menu-links">A Propos de Nous</a>
                        <div class="menu-dropdown">
                            <div class="menu-block-set">
                                <div class="container">
                                    <div class="menu-block-a">
                                        <div class="mega-menu-blocks">
                                            <div class="menu-inner-block-a">
                                                <div class="inner-blockss">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('asset/images/menu/breaking.jpg')}}" class="card-img-top" alt="...">
                                                        
                                                        <div class="card-footer bg-assia text-center">
                                                            <a class="text-white" href="{{route('contact')}}">Qui Sommes-nous?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner-blockss">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('asset/images/menu/platform.jpg')}}" class="card-img-top" alt="...">
                                                        
                                                        <div class="card-footer bg-assia text-center">
                                                            <a class="text-white" href="{{route('contact')}}">Notre Inspiration</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner-blockss">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('asset/images/menu/press.png')}}" class="card-img-top" alt="...">
                                                        
                                                        <div class="card-footer bg-assia text-center">
                                                            <a class="text-white" href="{{route('contact')}}">La vie à {{Str::ucfirst(Str::lower(config('app.name')))}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner-blockss">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('asset/images/menu/livre-blanc.png')}}" class="card-img-top" alt="...">
                                                        
                                                        <div class="card-footer bg-assia text-center">
                                                            <a class="text-white" href="{{route('contact')}}">Carrières</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-Menu-Extra-Info />
                        </div>
                    </li>
                    
                </ul>
            </div>
            <div class="ree-nav-cta">
                <ul>
                    <li><a href="{{ route('contact') }}" class="ree-btn ree-btn0 ree-btn-grdt2"> Contactez-Nous</a> </li>
                </ul>
            </div>
            <div class="mobile-menu2">
                <ul class="mob-nav2">
                    <li><a href="{{route('contact')}}" class="ree-btn2 ree-btn-grdt1"><i
                                class="fas fa-envelope-open-text"></i></a></li>
                    <li class="navm-"><a class="toggle" href="{{ route('contact') }}"> <span></span> </a> </li>
                </ul>
            </div>

            @include('includes.assia.nav')
        </div>
    </div>
</header>