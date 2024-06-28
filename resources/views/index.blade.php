<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catszs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-family: 'Arial', sans-serif;
        }

        .table thead th {
            background-color: #343a40;
            color: #ffffff;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
            border-radius: 8px;
        }

        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header-row a {
            font-size: 1rem;
            text-decoration: none;
            color: #dc3545;
        }

        .header-row a:hover {
            text-decoration: underline;
        }

        .btn-insert {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: #ffffff;
        }

        .btn-edit {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #ffffff;
        }

        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header-row">
            <h1>Daftar Pelanggan Salon Catszs</h1>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <table class="table table-bordered table-striped-columns table-primary table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($kucing as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->umur }}</td>
                    <td>{{ $k->jenis }}</td>
                    <td>
                        <a href="{{ route('formedit', ['id' => $k->id]) }}" class="btn btn-edit">Edit</a>
                        <a href="{{ route('formhapus', ['id' => $k->id]) }}" class="btn btn-delete">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('formtambah')}}" class="btn btn-insert">Insert Data</a>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Salon Catszs. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
