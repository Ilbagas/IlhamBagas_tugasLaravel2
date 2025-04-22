<!DOCTYPE html>
<html>
<head>
    <title>Data Tim F1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Tim Formula 1</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Tim</th>
                <th>Deskripsi</th>
                <th>Jumlah Juara Dunia</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tim as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_tim }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->juaradunia }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada data tim.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <!-- Mengarahkan ke route login -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
</body>
</html>