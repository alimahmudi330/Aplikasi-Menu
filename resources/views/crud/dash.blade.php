<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            text-align: center;
            padding: 15px;
            color: #ffffff;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #343a40;
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn-crud {
            margin: 0 10px;
            width: 150px;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
        }
    </style>

</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3">
                MIE GOCENG GODEAN
            </a>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-6 offset-md-3">
                <h2>DASHBOARD</h2>
                <div class="btn-container">
                    <a href="{{ url('menu/index') }}" class="btn btn-primary btn-lg btn-crud">View CRUD</a>
                    <a href="{{ route('logout') }}" class="btn btn-danger btn-lg btn-crud">LOGOUT</a>
                </div>
            </main>
        </div>
    </div>

    <footer>
        <p>---Mie Goceng Selalu Dihati---</p>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>