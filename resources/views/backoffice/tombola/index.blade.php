@extends('layouts.dashboard')
@section('content')
<div class="card card-custom " style="width: 100%">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-favourite text-primary"></i>
            </span>
            <h3 class="card-label">HTML(DOM) Sourced Data</h3>
        </div>
        <div class="card-toolbar">
            <button data-toggle="modal" data-target="#createTombola" class="btn btn-primary font-weight-bolder">
            <i class="la la-plus"></i>Nouveau Tombola</button>
        </div>
        <div class="modal fade" id="createTombola" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form action="{{ route('admin.tombola.store') }}" method="POST">
                    <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label>Date du Tirage
                                <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" value="{{ now() }}" name="date">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Enregistrer</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-bordered table-hover table-checkable text-center" id="datatable" style="margin-top: 13px !important">
            <thead>
                <tr>
                    <th>Identification</th>
                    <th>Date de création</th>
                    <th>Date de tirage</th>
                    <th>Nombre de Lot</th>
                    <th>Nombre de ticket vendue</th>
                    <th>Etat de publication</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($tombolas as $tombola )
                    <tr>
                        <td>{{ $tombola->id }}</td>
                        <td>{{ $tombola->created_at }}</td>
                        <td>{{ $tombola->date_tirage }} </td>
                        <td>{{ $tombola->lot->sum("nombre") }}</td>
                        <td>{{ $tombola->ticket->count() }}</td>
                        <td>
                            @if($tombola->status == 0)
                                <span class="badge badge-danger">Non publié</span>
                            @elseif($tombola->status == 1)
                                <span class="badge badge-success">Publié</span>
                            @else
                                <span class="badge badge-dark">Terminer</span>
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('admin.lot.index',[$tombola->id]) }}" class="btn btn-sm btn-info" style="width: 100%">Lot</a>
                                    <a class="btn btn-sm btn-success" style="width: 100%;margin-top: 2%">Ticket</a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-sm btn-warning" style="width: 100%;">Modifier</button>
                                    <button class="btn btn-sm btn-danger" style="width: 100%;margin-top: 2%">Supprimer</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#datatable').DataTable();
    })
</script>

@endsection
