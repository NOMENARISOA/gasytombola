@extends('layouts.tamplate')
@section('content')
<section class="collection-section padding-top padding-bottom" >
    <div class="container" style="margin-top: 5%">
        <div class="section-wrapper">

            <ul class="collection-filter-button-group common-filter-button-group d-flex flex-wrap justify-content-center mb-5 text-uppercase">
               <h5 style="margin-top: 10px">Date du Tirrage : </h5>
                @foreach ( $tombolas as $tombola )
                        <li @if($tombola->id == $next_tombola->id) class="is-checked" @endif data-filter=".collection-{{$tombola->id}}">{{ Carbon\Carbon::parse($tombola->date_tirage)->isoFormat("DD MMM YYYY") }}</li>
                @endforeach
            </ul>
            <div class="row g-4 justify-content-center collection-grid">
                @foreach ($tombolas  as $tombola )
                    @foreach ($tombola->lot as $lot )
                        <div class="col-lg-3 col-md-4 col-sm-6 gameListItem collection-{{$tombola->id}}">
                            <div class="game__item item-layer">
                                <div class="game__inner text-center p-0">
                                    <div class="game__thumb mb-0">
                                        <h5>{{ $lot->nombre }}  @if($lot->nombre > 1)Lots @else Lot @endif</h5>
                                        <img src="{{ route('file.open',['lot/tombola_'.$tombola->id,$lot->url]) }}" alt="game-img" class="rounded-3 w-100">
                                    </div>
                                    <div class="game__overlay">
                                        <h5>{{ $lot->name }}</h5>
                                        <p>Donateur :</p>
                                        <div class="default-button" style="color: black !important"><span>{{ $lot->company->name }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ===========Collection Section Ends Here========== -->
@endsection
