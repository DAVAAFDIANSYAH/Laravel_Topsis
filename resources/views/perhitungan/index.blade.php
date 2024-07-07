@extends('layouts.app')
  
@section('title', 'Kriteria')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">TABLE KRITERIA</h1>
        <!-- <a href="{{ route('kriteria.create') }}" class="btn btn-primary">Add kriteria</a> -->
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>code kriteria</th>
                <th>nama</th>
                <th>bobot</th>
                <th>jenis</th>
            </tr>
        </thead>
    </table>
@endsection