<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
            <div class="card-header">
                <p style="font-size: 20px;">Form Distributor</p>
                <a class="nav-link" href="../admin.php" tabindex="-1" style="color:black; margin-left:90%; margin-top:-4%" >Back</a>
            </div>
            <div class="card-body" >
                <div class="mb-3 col-sm-6" style="width:100%">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Nama Distributor </label>
                    <input type="text" class="form-control" placeholder="Masukan nama distributor">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">Alamat :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3 col-sm-6" style="width:100%">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Telpon </label>
                    <input type="text" class="form-control" placeholder="Masukan Telpon">
                </div>
                <a href="#" type="button" class="btn btn-primary">Simpan</a> 
            </div>
        </div>
        <!-- cari -->
        <div class="mb-3 col-sm-6" style="margin-top: 20px; margin-left:55%; width:250px;">
            <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Pencarian :</label>
            <input type="text" class="form-control" style="margin-top:-35px; margin-left: 100px; "placeholder="Masukan nama distributor">
        </div>
        <div class="btn-distributor" style="margin-top: -55px; margin-left:87.5%;">
            <a href="#" type="button" class="btn btn-info" style="color: white;">Cari</a>
            <a href="#" type="button" class="btn btn-success" style="color: white;">Refresh</a>
        </div>

        <!-- tabel -->
        <table align="center" border="1" class="table table-bordered mt-4">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telpon</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>

            <tr>
                <td>Devita</td>
                <td>Palalangon</td>
                <td>085880894556</td>
                <td><a href='#' class="btn btn-danger">HAPUS</a></td>
                <td><a href="#" class="btn btn-warning"> EDIT </a></td>
            </tr>

            <tr>
                <td>Asya</td>
                <td>Tajur City</td>
                <td>087869879086</td>
                <td><a href='#' class="btn btn-danger">HAPUS</a></td>
                <td><a href="#" class="btn btn-warning"> EDIT </a></td>
            </tr>

            <tr>
                <td>Alaw</td>
                <td>Ciawi</td>
                <td>086588976556</td>
                <td><a href='#' class="btn btn-danger">HAPUS</a></td>
                <td><a href="#" class="btn btn-warning"> EDIT </a></td>
            </tr>
        </table>       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
