<div class="menu-extra-info">
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div class="container">
        <div class="menu-extra-info-inner">
            <ul>
                <li>
                    <div class="menu-icon-ree">
                        <div class="webiocon"> <i class="far fa-envelope"></i> </div>
                    </div>
                    <a href="mailto:{{$info->email_1}}"><span class="">{{$info->email_1}}</span></a>
                </li>
                <li>
                    <div class="menu-icon-ree">
                        <div class="webiocon"> <i class="fas fa-phone-alt"></i> </div>
                    </div>
                    <a href="tel:{{$info->telephone_1}}">{{$info->telephone_1}}</a>
                </li>
                <li>
                    <div class="menu-icon-ree">
                        <div class="webiocon"> <i class="fab fa-whatsapp"></i> </div>
                    </div>
                    <a href="https://wa.me/{{ str()->of($info->telephone_2)->replaceMatches('/[^A-Za-z0-9]++/', '')}}">{{$info->telephone_2}}</a>
                </li>
                <li>
                    <div class="menu-icon-ree">
                        <div class="webiocon"> <i class="fab fa-skype"></i></div>
                    </div>
                    <a href="skype:{{$info->skype ?? config('app.name').'-compagny' }}">{{config('app.name')}}.Skype</a>
                </li>
                <li>
                    <div class="menu-icon-ree">
                        <div class="webiocon"> <i class="fas fa-question"></i> </div>
                    </div>
                    <a href="{{route('about')}}">Pourquoi Nous Choisir</a>
                </li>
            </ul>
        </div>
    </div>
</div>
