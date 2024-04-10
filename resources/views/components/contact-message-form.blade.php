<!-- Simplicity is an acquired taste. - Katharine Gerould -->
<div class="{{ $css }} bg-w">
    <div class="form-block {{$bg}}">
        <div class="form-head">
            <h4>Veuillez remplir le formulaire ci-dessous ou envoyez-nous vos besoins :)</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session('notification.message'))
                        <div class="alert alert-{{ session('notification.type') }} alert-dismissible fade show" role="alert">
                            {{ session('notification.message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <style>
            .m-0{
                margin: 0 !important;
            }

        </style>
        <div class="form-body">
            <form action="{{ route('contact.store')}}" method="post" name="feedback-form" >
                @csrf
                @method("POST")
                <div class="fieldsets row">
                    <div class="col-md-6 @error('nom_complet') my-2 @enderror">
                        <input type="text" class="@error('nom_complet') m-0 @enderror" placeholder="Nom et Prénom / Societé " name="nom_complet" value="{{ old('nom_complet')}}">
                        @error('nom_complet')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 @error('email') my-2 @enderror">
                        <input type="email" class="@error('email') m-0 @enderror" placeholder="E-mail : abcd@xyz.com" name="email" value="{{ old('email')}}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="fieldsets row">
                    <div class="col-md-6 @error('telephone') my-2 @enderror">
                        <input type="tel" class="@error('telephone') m-0 @enderror" value="{{old('telephone')}}" placeholder="Telephone : +224623010102" name="telephone">
                        @error('telephone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 @error('site_web') my-2 @enderror">
                        <input type="url" class="@error('site_web') m-0 @enderror" placeholder="Site Web : www.abcd.com" value="{{old('site_web')}}" name="site_web">
                        @error('site_web')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="fieldsets row">
                    <div class="col-md-6 @error('sujet') my-2 @enderror">
                        <input type="text" class="@error('sujet') m-0 @enderror" placeholder="Sujet de votre message" value="{{old('sujet')}}" name="sujet">
                        @error('sujet')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 @error('domaine') my-2 @enderror">
                        <select name="domaine" id="domaine" class="@error('domaine') m-0 @enderror">
                            <option value="">Interessé par</option>
                            <option value="5">Web Design</option>
                            <option value="4">Graphic Design</option>
                            <option value="3">App Development</option>
                            <option value="2">Digital Marketing</option>
                            <option value="1">Business Development</option>
                            <option value="0">Other...</option>
                        </select>
                        @error('domaine')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="fieldsets @error('message') my-2 @enderror">
                    <textarea class="@error('message') m-0 @enderror" placeholder="Votre Message..." name="message">{{old('message')}}</textarea>
                    @error('message')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="termes_et_conditions" checked="checked">
                    @error('termes_et_conditions')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <label class="custom-control-label label-f-form" for="customCheck">J'accepte les <a href="{{route('termes-conditions')}}"> termes &amp; Conditions</a> d'
                        {{config('app.name')}}.</label>
                </div>
                <div class="fieldsets mt20"> 
                    <button type="submit" name="submit" class="ree-btn  ree-btn-grdt1 w-100">Envoyez votre demande 
                        <i class="fas fa-arrow-right fa-btn"></i>
                    </button> 
                </div>
                <p class="trm">
                    <i class="fas fa-lock"></i>Nous détestons les spams et nous respectons votre vie privée.
                </p>
                <div class="form-btm-set text-center mt15">
                    <h5>Nous livrons</h5>
                    <div class="icon-setss mt20">
                        <div class="icon-rows">
                            <div class="icon-imgg">
                                <img src="{{asset('asset/images/icons/money.svg')}}" alt="#"></div>
                            <div class="icon-txt">
                                <p>Meilleur prix</p>
                            </div>
                        </div>
                        <div class="icon-rows">
                            <div class="icon-imgg">
                                <img src="{{asset('asset/images/icons/quality.svg')}}" alt="#">
                            </div>
                            <div class="icon-txt">
                                <p>Service de qualité</p>
                            </div>
                        </div>
                        <div class="icon-rows">
                            <div class="icon-imgg">
                                <img src="{{asset('asset/images/icons/call-agent.svg')}}" alt="#">
                            </div>
                            <div class="icon-txt">
                                <p>Bon soutien</p>
                            </div>
                        </div>
                        <div class="icon-rows">
                            <div class="icon-imgg">
                                <img src="{{asset('asset/images/icons/satisfaction.svg')}}" alt="#">
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