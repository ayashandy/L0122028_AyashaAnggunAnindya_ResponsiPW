<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Insert Data</h2>
        <form action="{{ route('tambah') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Name:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur:</label>
                <input type="number" class="form-control" id="umur" name="umur" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis:</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
