<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modal CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='#' rel='shortcut icon' type='image/x-icon' />
    <link rel="stylesheet" href="dataTable/jquery.dataTables.min.js">
    <link href="css/app.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <center>
                    <h3 style="margin-top:  25px;"><b>JS Data Tabel</b></h3>
                </center>
            </div>

        </div>

        <table class="table table-bordered table-hover" id="tabel_js">
            <thead>
                <tr>
                    <th>
                        <center>No
                    </th>
                    <th>
                        <center>Nama
                    </th>
                    <th>
                        <center>Opsi
                    </th>

                </tr>
            </thead>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * from user ");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td>
                        <center><?php echo $no++ ?>
                    </td>
                    <td>
                        <?php echo $d['nama']; ?>
                    </td>
                    <td>
                        <center>
                            <a type="button" class="btn btn-danger btn-sm" href="hapus.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm('Anda yakin Hapus data user <?php echo $d['nama']; ?> ?')">Hapus</a>
                            </a><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#user<?php echo $d['nama'] ?>" id=".$d['nama'].">Edit</button>
                            </a><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail<?php echo $d['nama'] ?>" id=".$d['nama'].">Detail</button>
                    </td>
                </tr>


            <?php
            } ?>
        </table>
    </div>

    </div>

    <script src="dataTable/jquery.js"></script>
    <script src="dataTable/jquery.dataTables.min.js"></script>
    <script src="dataTable/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#tabel_js').DataTable();
        });
    </script>
</body>

</html>