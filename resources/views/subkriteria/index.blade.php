@extends('layouts.app')

@section('contents')
<table class="table table-striped table-hover">
<thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Sub Kriteria</th>
                <th>bobot</th>
                <th>kriteria</th>
            </tr>
        </thead>
        <tbody>
                @foreach($sub_kriteria as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->kriteria->code_kriteria}}</td>
                        <td class="align-middle">{{ $rs->nama}}</td>
                        <td class="align-middle">{{ $rs->kriteria->weight}}</td>
                        <td class="align-middle">{{ $rs->kriteria->nama}}</td>
                    </tr>
                @endforeach
        </tbody>
</table>

@endsection