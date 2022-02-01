@extends('layouts.tamplate')
@section('content')
<div class="shop-page padding-top padding-bottom ">
    <div class="container" style="margin-top: 5%">
        <div class="row justify-content-center pb-15">
            <div class="col-lg-4 col-md-7 col-12">
                <aside class="ps-lg-4">
                    <div class="widget widget-search">
                        <div class="widget-header">
                            <h5>{{ Auth::guard('users')->user()->name }} {{ Auth::guard('users')->user()->lastname }}</h5>
                        </div>
                    </div>

                    <div class="widget shop-widget">
                        <div class="widget-wrapper">
                            <ul>
                                <li><a href="{{ route('user.ticket') }}" class="btn btn-danger">Mes Tickets</a></li>
                                <li><a href="{{ route('user.profil') }}" style="margin-top: 5%" class="btn btn-danger">Modification Profil</a></li>
                                <li><a href="{{ route('logout') }}" style="margin-top: 5%" class="btn btn-danger">Déconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-12">
                @yield('content-back')
            </div>
        </div>
    </div>
</div>

@endsection
