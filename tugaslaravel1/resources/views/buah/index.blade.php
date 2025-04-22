<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buah</title>
    <style>
        table { border-collapse: collapse; width: 60%; }
        th, td { padding: 8px; border: 1px solid black; text-align: center; }
    </style>
</head>
<body>
    <h1>Daftar Buah</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Warna</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buah as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->warna }}</td>
                <td>{{ $item->stok }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
