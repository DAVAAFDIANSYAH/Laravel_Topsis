@extends('layouts.app')
  
@section('title', 'Show kriteria')
  
@section('contents')
    <h1 class="mb-0">Detail kriteria</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">kepadatan lalu lintas</label>
            <input type="text" name="kepadatan_lalu_lintas" class="form-control" placeholder="kepadatan lalu lintas" value="{{ $kriteria->kepadatan_lalu_lintas }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">populasi penduduk</label>
            <input type="text" name="Populasi_penduduk" class="form-control" placeholder="Populasi penduduk" value="{{ $kriteria->populasi_penduduk }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">persaingan bisnis</label>
            <input type="text" name="persaingan_bisnis" class="form-control" placeholder="persaingan  bisnis" value="{{ $kriteria->persaingan_bisnis }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">biaya sewa</label>
            <input type="text" name="biaya_sewa" class="form-control" placeholder="biaya sewa" value="{{ $kriteria->biaya_sewa }}" readonly>
        </div>
    </div>
        <div class="col mb-3 col-md-6">
            <label class="form-label">peluang tenaga kerja</label>
            <input type="text" name="peluang_tenaga_kerja" class="form-control" placeholder="peluang tenaga kerja" value="{{ $kriteria->peluang_tenaga_kerja }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $kriteria->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $kriteria->updated_at }}" readonly>
        </div>
    </div>
@endsection