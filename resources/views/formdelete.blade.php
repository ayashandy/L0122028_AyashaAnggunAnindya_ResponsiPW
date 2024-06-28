<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center">
            <div class="card-body">
                <h2 class="card-title">Delete Data</h2>
                <p class="card-text">Are you sure you want to delete this data?</p>
                <form action="{{ route('hapus') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $kucing->id }}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ route('show') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
