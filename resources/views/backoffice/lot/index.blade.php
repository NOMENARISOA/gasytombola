@extends('layouts.dashboard')
@section('content')
<div class="card card-custom " style="width: 100%">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-favourite text-primary"></i>
            </span>
            <h3 class="card-label">List des lot pour le tirage {{ $tombola->date_tirage }}</h3>
        </div>
        <div class="card-toolbar">
            <button data-toggle="modal" data-target="#createTombola" class="btn btn-primary font-weight-bolder">
            <i class="la la-plus"></i>Nouvelle Lot</button>
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
                    <form action="{{ route('admin.lot.store') }}" method="POST"  enctype="multipart/form-data">
                    <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label>Nom du lot
                                <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Nom du lot">
                            </div>
                            <div class="form-group">
                                <label>Nombre du lot
                                <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="nombre" placeholder="Nombre du lot">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelects">Entreprise</label>
                                <select class="form-control form-control-sm" name="company_id" id="exampleSelects">
                                    @foreach (App\Models\company::all() as $company )
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="tombola_id" value="{{ $tombola->id }}">
                            <div class="form-group">
                                <label>Image de présentation</label>
                                <div></div>
                                <div class="custom-file">
                                    <input type="file" name="picture" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
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
        <table class="table table-bordered table-hover table-checkable" id="datatable" style="margin-top: 13px !important">
            <thead>
                <tr>
                    <th>Identification</th>
                    <th>Image de présentation</th>
                    <th>Nom du lot</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lots as $lot )
                    <tr>
                        <td>{{ $lot->id }}</td>
                        <td><img src="{{ route('file.open',['lot/tombola_'.$tombola->id,$lot->url]) }}" style="max-height: 100px" alt="" srcset=""></td>
                        <td>{{ $lot->name }} </td>
                        <td>{{ $lot->company->name }}</td>

                        <td>
                            <button class="btn btn-sm btn-warning" style="width: 100%;">Modifier</button>
                            <button class="btn btn-sm btn-danger" style="width: 100%;margin-top: 2%">Supprimer</button>
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
