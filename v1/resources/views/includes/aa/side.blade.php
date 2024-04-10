<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Tableau de Bord</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.home') ? 'active' :''}}"  href="{{route("admin.home")}}">Admin Dashboard</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Gestion du Site Internet</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Articles </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.posts.index') ? 'active' :''}}"  href="{{route("admin.posts.index")}}">Liste des Articles</a></li>
                        <li><a class="{{ request()->route()->named('admin.posts.create') ? 'active' :''}}" href="{{route("admin.posts.create")}}">Ajouter un Article</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Sliders </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.sliders.index') ? 'active' :''}}"  href="{{route("admin.sliders.index")}}">Liste des sliders</a></li>
                        <li><a class="{{ request()->route()->named('admin.sliders.create') ? 'active' :''}}" href="{{route("admin.sliders.create")}}">Ajouter un Slider</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Temoignages </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.temoignages.index') ? 'active' :''}}"  href="{{route("admin.temoignages.index")}}">Liste des Témoignages</a></li>
                        <li><a class="{{ request()->route()->named('admin.temoignages.create') ? 'active' :''}}" href="{{route("admin.temoignages.create")}}">Ajouter un Témoignages</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Groupes Services </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.services.index') ? 'active' :''}}"  href="{{route("admin.services.index")}}">Liste des Témoignages</a></li>
                        <li><a class="{{ request()->route()->named('admin.services.create') ? 'active' :''}}" href="{{route("admin.services.create")}}">Ajouter un Témoignages</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Services </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.services.index') ? 'active' :''}}"  href="{{route("admin.services.index")}}">Liste des Témoignages</a></li>
                        <li><a class="{{ request()->route()->named('admin.services.create') ? 'active' :''}}" href="{{route("admin.services.create")}}">Ajouter un Témoignages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('admin.contact-messages.index')}}" class="{{ request()->route()->named('admin.contact-messages.index') ? 'active' :''}}">
                        <i class="la la-question"></i> <span>Les Messages de Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>