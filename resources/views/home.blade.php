<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    <title>.:Buku - @yield('title') :.</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 py-4 d-flex justify-content-between" style="background-color: #28a745;"> <!-- Changed to green -->
                <div></div> 
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User Profile
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/profile">Profile</a>
                        <a class="dropdown-item" href="/messages">Messages</a>
                        <a class="dropdown-item" href="/settings">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 vh-100">
                <div class="row mt-4">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link {{ ($key == "home") ? "active" : "" }}" id="v-pills-home-tab" href="/"> Home </a>
                            <a class="nav-link {{ ($key == "buku") ? "active" : "" }}" id="v-pills-buku-tab" href="/buku"> Buku </a>
                            <a class="nav-link" id="v-pills-messages-tab" href="#">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" href="/settings">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @yield('konten')
                        <div class="container mt-4">
                            <div class="jumbotron">
                                <h1 class="display-4">Selamat datang!</h1>
                                <p class="lead">Ini adalah penjualan buku.</p>
                                <hr class="my-4">
                                <p>Pencet dibawah ini untuk masuk ke halaman penjualan buku.</p>
                                <a class="btn btn-primary btn-lg" href="/buku" role="button" style="background-color: #28a745; border-color: #28a745;">Penjualan Buku</a> <!-- Changed to green -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/jquery.dataTables.js"></script>
</body>
</html>
