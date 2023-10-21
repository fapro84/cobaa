<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pembuatan Entri</title>
</head>
<body>
    <h2>Formulir Pembuatan Entri</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/entries" method="POST">
        @csrf
        <label for="title">Judul:</label>
        <input type="text" name="title" value="{{ old('title') }}"><br>
        <label for="content">Konten:</label>
        <textarea name="content">{{ old('content') }}</textarea><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
