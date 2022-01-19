<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo">Admiry</a>-->
            <a href="{{ route('dashboard') }}" class="logo"><img src="{{ asset('images/logoAd.png') }}" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div class="user-details">
            <div class="text-center">
                <img src="{{ asset(''.$user->photo.'') }}" alt="" class="rounded-circle">
            </div>
            <div class="user-info">
                <h4 class="font-16 text-white">{{ $user->prenom.' '.strtoupper($user->nom) }}</h4>
                <span class="text-white"><i class="fa fa-dot-circle-o text-success"></i> En ligne</span>
            </div>
        </div>

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title text-white">General</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ti-home"></i><span> Dashboard </span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-palette"></i> <span> Mes Dégustations </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('degustations.create') }}">Ajouter une dégustation</a></li>
                        <li><a href="{{ route('dashboard.degustations') }}">Liste des dégustations</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('degustations.index') }}" class="waves-effect">
                        <i class="ti-panel"></i><span> Autres Dégustations </span>
                    </a>
                </li>

                @if($user->role == 'Admin')


                <li class="menu-title text-white">Gestion</li>

                <li>
                    <a href="{{ route('categories.index') }}" class="waves-effect">
                        <i class="ti-direction-alt"></i><span> Catégories </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.degustations.list') }}" class="waves-effect">
                        <i class="ti-pie-chart"></i><span> Dégustations </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('commentaires.index') }}" class="waves-effect">
                        <i class="ti-comments"></i><span> Commentaires </span>
                    </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-id-badge"></i> <span> Utilisateurs </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('users.create') }}">Ajouter un Admin</a></li>
                        <li><a href="{{ route('users.index') }}">Tout les Utilisateus</a></li>
                    </ul>
                </li>
                @endif
                <li class="menu-title text-white">Extra</li>

                <li>
                    <a href="{{ route('users.show', $user->id) }}" class="waves-effect">
                        <i class="ti-user"></i><span> Profile </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('deconnections') }}" class="waves-effect">
                        <i class="ti-lock"></i><span> Se Déconnecter </span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
