@extends('layouts.app')
  
@section('title', 'Edit kriteria')
  
@section('contents')
    <h1 class="mb-0">Edit alternatif</h1>
    <hr />
    <form action="{{ route('alternatif.update', $alternatif->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">code alternatif</label>
                <input type="text" name="code_alternatif" class="form-control" placeholder="kepadatan lalu lintas" value="{{ $alternatif->code_alternatif}}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">nama</label>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{$alternatif->nama}}" >
            </div>
        </div>
     <div class="col mb-0
            d-flex justify-content-center align-items-center">
            <div class="col-auto">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection    