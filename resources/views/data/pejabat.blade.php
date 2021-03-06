@extends('layouts.base')

@section('content')
    <div class="page-header">
        <h1>Data Pejabat</h1>
    </div>
    <div class="col-xs-10">
        {{-- <a href="/pejabat/tambah">Tambah Pejabat</a> --}}
        <a href="/pejabat/tambah" class="btn btn-lg btn-success"><i class="ace-icon glyphicon glyphicon-plus"></i>Tambah Pejabat</a>
    </div>
    <div class="col-xs-12">
        <table class="table table-bordered table-hover" id="tabel1">
            <thead>
                <tr>
                    <th>No</th>
                    <th> NIP</th>
                    <th>Nama Pejabat</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($pejabat as $item)
                    <tr>
                        <th>{{$no++}}</th>
                        <th>{{$item->nip}}</th>
                        <th>{{$item->nama_pejabat}}</th>
                        <th>{{$item->jabatan}}</th>
                        <th>
                            <a href="pejabat/edit/{{$item->id}}  "><button class="btn btn-xs btn-info">
                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </button></a>
                            <form action="pejabat/hapus/{{$item->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin menghapus data')">
                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </button>
                            </form>
                            {{-- <a href="pejabat/hapus"  data-confirm="Are you sure to delete this item?"> --}}

                        </th>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('customjs')
<script>
    jQuery(function($) {
        var tableId = '#tabel1'
        var $_table = $(tableId).DataTable()
    })
</script>
@endsection
