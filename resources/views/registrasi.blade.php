
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Puma Admin Dashboard</title>
    <link rel="stylesheet" href="/admin/css/bootstrap.css">
    
    <link rel="shortcut icon" href="/admin/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/admin/css/app.css">
</head>

<body>
    <div id="auth">
        
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="/admin/images/logo.png" height="48" class='mb-2'>
                        <h3>Mendaftar Akun Puma Star Jaya</h3>
                    </div>
                    <form action="/registrasi/submit" method="post">
                        @csrf
                        
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Nama</label>
                            <div class="position-relative">
                                <input type="text" name="nama" class="form-control" id="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Email</label>
                            <div class="position-relative">
                                <input type="email" name="email" class="form-control" id="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                
                            </div>
                            <div class="position-relative">
                                <input type="password" name="password" class="form-control" id="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix">
                                <button class="btn float-right" style="background-color: #D5006D; border-color: #D5006D; color: white;">Daftar</button>
                        </div>
                        @if(session('gagal'))
                        <div class="text-danger">
                            {{ session('gagal')}}
                        </div>
                        @endif
                        
                        <div class='text-center mt-5'>
                            <a href="/login" style="color: #D5006D" >Sudah Memiliki Akun? klik disini untuk login</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="/admin/js/feather-icons/feather.min.js"></script>
    <script src="/admin/js/app.js"></script>
    
    <script src="/admin/js/main.js"></script>
</body>

</html>
