@extends('includes.assia.app')
@section('content')
    <div class="contact-form-sec sec-pad r-bg- " >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <img src="{{ asset('asset/images/errors/404.png')}}" class="img-fluid mt-sm-5" alt="">
                    <p class="my-1">La Page <span class="ree-tt">{{ $page }}</span> est introuvable.</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('home')}}" class="ree-btn  ree-btn-grdt1  mw-80" >
                            <i class="fas fa-home fa-btn"></i> Retour à la Page d'Accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
