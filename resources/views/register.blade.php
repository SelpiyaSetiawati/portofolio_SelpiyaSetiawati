<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

  <style>
    body{
        background-color: rgb(235, 235, 235);
    }
  </style>
    {{-- <div class="container">
        <div class="row">
          <div class="col-3">

          </div>
            <div class="col col-md-6">
                <center><h2>Daftar</h2></center>
                <form action="register\daftar" method="post">
                  @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password"name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
     --}}

     <div class="container">
      <div class="row">
          <div class="col-4">

          </div>
          
          <div class="col-4 py-5 mt-3">
              <div class="card">

              {{-- <div class="card-header"> --}}
              <div class="card text-bg-light py-3">
              <h2 class="pt-3 text-center">Sign Up</h2>
              {{-- </div> --}}
              <div class="card-body">
                <form action="register\daftar" method="post">
                  @csrf
                        <div class="mb-3">
                            {{-- <label for="exampleInputEmail1" class="form-label">Nama</label> --}}
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Nama Lengkap">
                          </div>
                        <div class="mb-3">
                          {{-- <label for="exampleInputEmail1" class="form-label">Username</label> --}}
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                        <div class="mb-3">
                          {{-- <label for="exampleInputPassword1" class="form-label">Password</label> --}}
                          <input type="password"name="password" class="form-control" id="exampleInputPassword1"placeholder="Password">
                        </div>
                        <button type="submit" class="w-100 btn btn-primary">Submit</button>
                        <div>
                        <center><p>Already have an account?      <a href="/">Sign In</a></p></center>
                        </div>
                </form>
              </div>
              {{-- <div class="card-footer text-center"><p>&copy; selpiya</p></div> --}}
          </div>
      </div>
  </div>
          <div class="col-4">

          </div>
      </div>
  </div>
</body>
</html>