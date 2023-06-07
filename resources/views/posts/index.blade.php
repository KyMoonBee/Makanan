<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <p class="text-4xl text-center font-bold">Daftar makanan</p>
    @foreach ($makanans as $makanan)
        <ul>
            <li>{{ $makanan->nama }} - Rp. {{ $makanan->harga }} </li>
            <li><img src="{{ $makanan->gambar }}" alt=""></li>
        </ul>
    @endforeach
</body>

</html>
