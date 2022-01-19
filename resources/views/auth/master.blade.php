<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>DEGUS-APP | Connexion</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        @include('layouts.admin.css')

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="#" class="logo logo-admin"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
                    </h3>

                    @yield('contenu')

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        @include('layouts.admin.js')

    </body>
</html>
