@extends('layouts.app')
  
@section('title', 'Edit kriteria')
  
@section('contents')
    <h1 class="mb-0">Edit kriteria</h1>
    <hr />
    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">kepadatan lalu lintas</label>
                <input type="text" name="kepadatan_lalu_lintas" class="form-control" placeholder="kepadatan lalu lintas" value="{{ $kriteria->kepadatan_lalu_lintas }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">populasi penduduk</label>
                <input type="text" name="Populasi_penduduk" class="form-control" placeholder="populasi penduduk" value="{{ $kriteria->Populasi_penduduk }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">persaingan bisnis</label>
                <input type="text" name="persaingan_bisnis" class="form-control" placeholder="persaingan bisnis" value="{{ $kriteria->persaingan_bisnis }}" >
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">biaya sewa</label>
                    <input type="text" name="biaya_sewa" class="form-control" placeholder="biaya sewa" value="{{ $kriteria->biaya_sewa }}" >
                </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">peluang tenaga kerja</label>
                    <input type="text" name="peluang_tenaga_kerja" class="form-control" placeholder="peluang tenaga kerja" value="{{ $kriteria->peluang_tenaga_kerja }}" >
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