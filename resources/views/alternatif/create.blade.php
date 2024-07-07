@extends('layouts.app')
  
@section('title', 'Create alternatif')
  
@section('contents')
    <h1 class="mb-0">Add alternatif </h1>
    <hr />
    <form action="{{ route('alternatif.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row w-50">
                <input type="text" name="code_alternatif" class="form-control" placeholder="code alternatif">
            </div>
            <br>
            <div class="row w-50">
                <input type="text" name="nama" class="form-control" placeholder="nama">
            </div>    
        <div class="row">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection