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
        <tbody>+
            @if($kriteria->count() > 0)
                @foreach($kriteria as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration}}</td>
                        <td class="align-middle">{{ $rs->code_kriteria}}</td>
                        <td class="align-middle">{{ $rs->nama}}</td>
                        <td class="align-middle">{{ $rs->weight}}</td>
                        <td class="align-middle">{{ $rs->jenis}}</td>
                        <!-- <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kriteria.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('kriteria.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('kriteria.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td> -->
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">kriteria not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection