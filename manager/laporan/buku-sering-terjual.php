<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Manager</title>
  </head>
  <body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
            <div class="card-header">
            <p style="font-size: 20px;">DATA BUKU BANYAK TERJUAL</p>
            <a class="nav-link" href="../manager.php" tabindex="-1" style="color:black; margin-left:90%; margin-top:-4%" >Back</a>
            </div>
            <div class="card-body" >
            <a href="#" type="button" class="btn btn-success">Export Excel</a>
            <table align="center" border="1" class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>NO ISBN</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Harga Jual</th>
                    <th>Total Jumlah Beli</th>
                    <th>Total Transaksi</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Harry Potter</td>
                    <td>BQ00001</td>
                    <td>Devita</td>
                    <td>Gramedia</td>
                    <td>50.000 </td>
                    <td>4</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>My Ice Boy</td>
                    <td>BQ00002</td>
                    <td>kinda</td>
                    <td>Grili</td>
                    <td>55.000 </td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Home</td>
                    <td>BQ00003</td>
                    <td>sata</td>
                    <td>Gramedia</td>
                    <td>90.000 </td>
                    <td>17</td>
                    <td>12</td>
                </tr>
                         
            </table>                       
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
