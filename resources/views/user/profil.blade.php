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
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Date du Tirage</th>
            <th>Nombre de Lot</th>
            <th>Numéro du ticket</th>
            <th>Etat du ticket</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Date du Tirage</td>
            <td>Nombre de Lot</td>
            <td>Numéro du ticket</td>
            <td>Etat du ticket</td>
            <td>Action</td>
        </tr>

    </tbody>

</table>
<script>
    $(document).ready(function() {
        $('#example').DataTable({searching: false, info: false});
    } );
</script>
@endsection
