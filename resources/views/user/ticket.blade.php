@extends('user.backtemplate')
@section('content-back')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"> --}}
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<style>
    .dataTables_length{
        visibility: hidden;
    }
    .paginate_button {
        margin: 10px;
        background-color: #dc3545;
        padding: 5px 20px 5px 20px;
        border-radius: 5px
    }
</style>
<table id="example" class="display text-center" style="width:100%">
    <thead>
        <tr>
            <th>Date du Tirage</th>
            <th>Nombre de Lot</th>
            <th>Numéro du ticket</th>
            <th>Etat du ticket</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($tickets as $ticket )
        <tr>
            <td>{{ $ticket->tombola->date_tirage }}</td>
            <td>{{ $ticket->tombola->lot->sum("nombre") }}</td>
            <td>{{ $ticket->number }}</td>
            <td >
                @if($ticket->status == 0)
                    <span class="btn btn-danger"> Non payer</span> <br>
                    <a href="{{ route('ticket.repay',[$ticket->number]) }}" style="margin-top: 2%" class="btn btn-warning"> Payer maintenant</a>
                @else
                    <span class="btn btn-success"> Payer</span>
                @endif
            </td>

        </tr>
        @endforeach

    </tbody>

</table>
<script>
    $(document).ready(function() {
        $('#example').DataTable({searching: false, info: false});
    } );
</script>

@endsection
