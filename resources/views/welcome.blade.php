@extends('layouts.tamplate')
@section('content')
<!-- ===========Banner Section start Here========== -->
	<section class="banner" style="background-image: url({{ asset('assets/frontoffice/images/banner/bg.jpg') }});">
		<div class="container">
			<div class="row g-0">
				<div class="col-xl-6 col-lg-7 col-12">
					<div class="banner__content">
						<h3>the best website</h3>
						<h1>Online Casino</h1>
						<h2>Genuine Money Transaction</h2>
						<p>Assertively communicate an expanded array of mindshare rather than diverse technologies for magnetic applications eamlessly virtual then Conveniently monetize synergistic human capital</p>
						<a href="login.html" class="default-button"><span>join us today  <i class="icofont-play-alt-1"></i></span> </a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===========Banner Section Ends Here========== -->


	<!-- ===========Jaqport Section Ends Here========== -->
	<div class="jaqport padding-top padding-bottom" style="background-image: url(assets/images/jaqport/jaqport-bg.jpg);">
		<div class="container">
			<div class="section-header">
				<h2>TOMBOLA MALAGASY</h2>
				<p>At Modeltheme, we show only the best websites and portfolios built completely with passion, simplicity and creativity !</p>
			</div>
			<div class="section-wrapper">
				<div class="row">
					<div class="col-lg-4 col-12">
						<div class="jaqport__left">
							<div class="jaqport__title">
								<div class="jaqport__title-title">
									<h5>Tombola </h5>
								</div>
								<div class="jaqport__title-button">
									<a href="jaqpot.html" class="default-button"><span>Voir tous<i class="icofont-circled-right"></i></span></a>
								</div>
							</div>
							<div class="jaqport__body">
								<ul>
                                    @foreach ($tombolas as $tombola )
                                        @if($tombola->id != $next_tombola->id)
                                            <li class="jaqport__gamelist">
                                                <div class="jaqport__gamelist-left">
                                                    <p>{{ Carbon\Carbon::parse($tombola->date_tirage)->isoFormat(" DD MMMM YYYY") }}</p>
                                                </div>
                                                <div class="jaqport__gamelist-right">
                                                    <h6>{{ $tombola->lot->sum("nombre") }} Lots</h6>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach


								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-12">
						<div class="jaqport__right">
							<div class="jaqport__top">
								<div class="jaqport__title">
									<div class="jaqport__title-title">
										<h5>Prochains Tirage dans </h5>
									</div>
									<div class="jaqport__title-gametime">
										<ul class="countdown count-down" data-date="{{ $date_count_down }} 21:14:01">
											<li class="clock-item">
												<span class="count-number days">0</span>
												<p class="count-text">Jours</p>
											</li>

											<li class="clock-item">
												<span class="count-number hours">0</span>
												<p class="count-text">Heurs</p>
											</li>

											<li class="clock-item">
												<span class="count-number minutes">0</span>
												<p class="count-text">Minute</p>
											</li>
											<li class="clock-item">
												<span class="count-number seconds">0</span>
												<p class="count-text">Seconde</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="jaqport__body">
									<div class="row g-4 justify-content-center">

										@foreach ($next_tombola->lot as $lot )
                                            <div class="col-lg-4 col-sm-6 col-12">
                                                <div class="game__item item-layer">
                                                    <div class="game__inner text-center p-0">
                                                        <div class="game__thumb mb-0">
                                                            <h5>{{ $lot->nombre }}  @if($lot->nombre > 1)Lots @else Lot @endif</h5>
                                                            <img src="{{ route('file.open',['lot/tombola_'.$next_tombola->id,$lot->url]) }}" alt="game-img" class="rounded-3 w-100">
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ===========Jaqport Section Ends Here========== -->
@endsection
