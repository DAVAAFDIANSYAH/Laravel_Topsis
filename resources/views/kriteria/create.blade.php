@extends('layouts.app')
  
@section('title', 'Create kriteria')
  
@section('contents')
    <h1 class="mb-0">Add kriteria</h1>
    <hr />
    <form action="{{ route('kriteria.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kepadatan_lalu_lintas" class="form-control" placeholder="kepadatan lalu lintas">
            </div>
            <div class="col">
                <input type="text" name="Populasi_penduduk" class="form-control" placeholder="populasi penduduk">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="persaingan_bisnis" class="form-control" placeholder="persaingan bisnis">
            </div>
        <div class="col">
            <div class="row mb-3">
                <input type="text" name="biaya_sewa" class="form-control" placeholder="biaya sewa">
            </div>
        <div class="col">
            <div class="row mb-3">
                <input type="text" name="peluang_tenaga_kerja" class="form-control" placeholder="peluang tenaga kerja">
            </div>
        <div class="row">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection