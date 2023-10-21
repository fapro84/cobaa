<form action="/siswa/add" method="POST">
    @csrf
    <input type="text" placeholder="NIS" name="nis"><br>
    <input type="text" placeholder="Nama" name="nama"><br>
    <input type="text" placeholder="Kelas" name="kelas"><br>
    <select name="jk" required>
        <option value="">Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <input type="file" name="file"> <br>
    <input type="submit" name="submit" value="save"> 
</form>