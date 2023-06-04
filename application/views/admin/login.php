<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">

</head>
<body>
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-5">
        <div class="card my-5">
            <div class="card-header bg-primary text-white text-center">Login Sebagai Admin</div>
            <div class="card-body">
                <form action="<?= base_url('prosesLogin')?>"method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <button class="btn btn-success btn-block">Login</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
 

<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    
    </body>
    </html> 
    
</body>
</html>