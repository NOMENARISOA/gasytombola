@extends('layouts.tamplate')
@section('content')
<section class="pricing-section padding-top padding-bottom">
    <div class="container" style="margin-top: 5%">
        <div class="section-header">
            <h2>Achat d'un ticket Tombola {{ Carbon\Carbon::parse($tombola->date_tirage)->isoFormat("DD MMM YYYY") }}</h2>
        </div>
        <div class="section-wrapper mt-4">
            <div class="pricing-plan-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-item-inner">
                                <div class="price-top">
                                    <h6>TICKET TOMBOLA</h6>
                                    <h2>2 000 Ar</h2>
                                    <p>Numéro Ticket : {{ $ticket_number }}</p>
                                    <p>Date du tirage : {{ Carbon\Carbon::parse($tombola->date_tirage)->isoFormat("DD MMM YYYY") }}</p>
                                </div>
                                <div class="price-bottom">
                                    <button type="button" onclick="checkout()" class="default-button"><span>
                                        <img class="payment-logo paypal" style="width: 50%" src="{{asset('https://pro.ariarynet.com/img/logoVanilla.png')}}" alt=""> <br> Acheter
                                    </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function checkout(){
        var tombola = {{ $tombola->id }};
        var number_ticket = {{ $ticket_number }};
        $.ajax({
            url: '{{route('paiement.checkout',[$tombola->id])}}',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {tombola_id: tombola, ticket_number : number_ticket},
            success: function (response,ticket_number) {
                window.open(response.url,"_self")
            }
        });
        console.log('ok');
    }
</script>
@endsection
