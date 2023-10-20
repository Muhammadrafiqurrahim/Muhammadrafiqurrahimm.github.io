<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
?>
<html><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Unggah Gambar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <head>
        <title></title>
    </head>
    <body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-primary" style="font-size: ;">
    <div class="container-fluid">
        <img src="IMG/img1.png" alt="logo" width="50" height="44">
      <a class="navbar-brand fw-bold text-light" href="#" style="padding-left: 0.5%;">UploadIMG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="upload.php" >Upload Image</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php">View Image</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
 <h1 class="mt-5 text-warning text-center" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">This your image, you can delete if you want!</h1>
    <p class="text-center text-white">Just klik Upload Image if you want uplod your image again and klik a delete button if you want delete your Images</p>
    <button input type="submit" name="tombol" class="bg-light bg-gradient rounded" style="margin-left: 10px; font-size: medium; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><a href="upload.php">Upload Gambar</a></button>
  
  <table class="table table-dark table-striped mt-2" >  
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Keterangan</th>
                <th>Tipe</th>
                <th>Ukuran</th>
                <th>Action</th>
            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="image.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="100"/></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td><?php echo $row['tipe_gambar']; ?></td>
                    <td><?php echo $row['ukuran_gambar']; ?></td>
                    <td><a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>