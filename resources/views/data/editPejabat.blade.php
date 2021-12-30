@extends('layouts.base')
@section('content')
{{-- {{dd($pejabat);}} --}}
<div class="page-header">

    <h1>
        Edit Data Pejabat
    </h1>
</div>
<div class="container ">
    <form method="post" action="/pejabat/{{$pejabat->id_pejabat}}">
        @csrf
        @method('PUT')
        @foreach ($pejabat as $pejabat)
        <div class="form-group row">
            <label for="nip">Nip Pejabat : </label>
            <input type="text" class="form-control" name="nip" value="{{$pejabat->nip}}" id="nip">
        </div>
        <div class="form-group row">
            <label for="nama_pejabat">Nama Pejabat :</label>
            <input type="text" class="form-control" id="nama_pejabat" value="{{$pejabat->nama_pejabat}}" name="nama_pejabat">
        </div>

        <div class="form-group row">
            <label for="jabatan">Jabatan :</label>
            <input type="text" class="form-control" id="jabatan" value="{{$pejabat->jabatan}}" name="jabatan">
        </div>

        @endforeach


        <div>
            <button class="btn btn-primary">Submit</button>
        </div>


    </form>
</div>
@endsection
