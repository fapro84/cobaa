@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary mb-3" href="/siswa/create">Tambah Data Siswa</a>
        <table border="1" class="table" style="text-align: center">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
            </tr>
            @foreach ($data as $dt)
                <tr>
                    <td> {{ $dt->id }} </td>
                    <td> {{ $dt->nis }} </td>
                    <td> {{ $dt->nama }} </td>
                    <td> {{ $dt->kelas }} </td>
                    <td>
                        @if ($dt->jk == 'L')
                            Laki-laki
                        @elseif($dt->jk == 'P')
                            Perempuan
                        @endif
                    </td>
                    <td class="btn-group space" role="group">
                        <a class="btn btn-warning" href="siswa/{{ $dt->id }}/action"> update </a>
                        <form action="/siswa/{{ $dt->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input class=" btn btn-danger" type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
