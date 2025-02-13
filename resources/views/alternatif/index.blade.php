@extends('layouts.app')
  
@section('title', 'Altenatif')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">TABLE ALTERNATIF</h1>
        <a href="{{ route('alternatif.create')}}" class="btn btn-primary">Add alternatif</a>
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
                <th>id</th>
                <th>code alternatif</th>
                <th>nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($alternatif->count() > 0)
                @foreach($alternatif as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->code_alternatif }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('alternatif.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="#" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection