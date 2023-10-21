<form action="/siswa/{{$data->id}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" placeholder="NIS" name="nis" value="{{$data->nis}}"><br>
    <input type="text" placeholder="Nama" name="nama" value="{{$data->nama}}"><br>
    <input type="text" placeholder="Kelas" name="kelas" value="{{$data->kelas}}"><br>
    <select name="jk" required>
        <option value="">Jenis Kelamin</option>
        <option value="L" @if($data->jk == "L") selected @endif >Laki-laki</option>
        <option value="P" @if($data->jk == "P") selected @endif >Perempuan</option>
    </select><br>
    <input type="submit" name="submit" value="save"> 
</form>