@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table" border="1">
            <tr>
                <th class="col-2">NIP</th>
                <th class="col-2">Nama</th>
                <th class="col-2">Mapel</th>
            </tr>
            <tr>
                @foreach ($data as $dt)
                    <td class="col-2"> {{ $dt->nip }} </td>
                    <td class="col-2"> {{ $dt->nama }} </td>
                    <td class="col-2"> {{ $dt->namamapel }} </td>
                @endforeach
            </tr>
        </table>
    </div>
@endsection
