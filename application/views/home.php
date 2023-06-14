<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tes Junior Programmer</title>
</head>

<body>
    <center>
        <h2>DATA PRODUK</h2>
    </center>
    <br>

    <a class="btn btn-primary" href="<?php echo base_url('/home/halaman_tambah')  ?>" role="button">Tambah Data</a>
    <br>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">ID Produk</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Kategori</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($queryAllPrdk as $key => $row) {
            ?>
                <tr>
                    <td><?php echo $row->id_produk ?></td>
                    <td><?php echo $row->nama_produk ?></td>
                    <td><?php echo $row->harga ?></td>
                    <td><?php echo $row->kategori ?></td>
                    <td><?php echo $row->status ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo base_url('/home/halaman_edit')  ?>/<?php echo $row->id_produk ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('/home/hapus_aksi')  ?>/<?php echo $row->id_produk ?>" role="button" onclick="return confirm('Apakah anda yakin ?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>