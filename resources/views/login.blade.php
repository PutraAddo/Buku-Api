<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>.:Form Login:.</title>
    <style>
      body {
        background-color: #f8f9fa;
      }
      .card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border: none;
        border-radius: 10px;
      }
      .card-body {
        padding: 2rem;
      }
      .form-control {
        border-radius: 5px;
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 5px;
      }
      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
      }
      .img {
        border-radius: 50%;
        margin-bottom: 1.5rem;
      }
      .img-logo {
        width: 400px; 
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding: 1rem;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid" style="margin-top: 10%">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <img class="img-logo" src="https://blog.ecampuz.com/wp-content/uploads/2021/07/perpustakaan-digital-epustaka-ecampuz.jpg" alt="">

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Masukkan E-Mail"
                                class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Masukkan Password"
                                class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
