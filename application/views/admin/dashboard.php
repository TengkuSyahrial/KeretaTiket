<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Admin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HalamanDepan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">Admin Panel </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid my-5">
<div class="row">

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Daftar Stasiun</div>
            <div class="card-body">
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Stasiun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($stasiun as $st): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $st->nama_stasiun ?></td>
                            <td>
                                <a class="text-danger"href="">Hapus</a>
                                <a href="">Edit</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
<div class="card-header">Form Tambah Stasiun</div>
<div class="card-body">
<form action=""method="POST">
        <div class="form-group">
            <label>Nama Stasiun</label>
            <input type="text"class="form-control"name="stasiun" placeholder="Nama Stasiun">
        </div>
        <button class="btn btn-success">Tambah Stasiun</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    
    </body>
    </html> 