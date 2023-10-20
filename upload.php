<?php 
include('koneksi.php');
if(isset($_POST['tombol']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        if ($file_size < 204800000 and ($file_type =='image/jpeg' or $file_type == 'image/png' or $file_type == 'image/jpeg'or $file_type == 'image/bmp' ))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $keterangan = $_POST['keterangan'];
            mysqli_query($koneksi,"insert into tb_gambar (gambar,nama_gambar,tipe_gambar,ukuran_gambar,keterangan) values ('$image','$file_name','$file_type','$file_size','$keterangan')");
            header("location:index.php");
        }
        else
        {
            ///echo 'Ukuruan File / Tipe File Tidak Sesuai';
        }
    }
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Unggah Gambar</title>
    <link rel="stylesheet" type="text/css" href="style.css">

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
            <a class="nav-link text-light" href="image.php">View Image</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
 <h1 class="mt-5 text-warning text-center" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Upload and share your images.</h1>
    <p class="text-center text-white">Drag and drop anywhere you want and start uploading your images now. 64 MB limit. Direct image links, BBCode and HTML thumbnails.</p>
    <center>
    <div class=" rounded bg-primary mb-4 pt-5 p-3 mb-2 text-dark" style="height: 200px; width: 500px;">
        <i class="bi bi-cloud-arrow-up text-light"></i>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
            <td><p class="text-light" style="font-weight: bolder;">Pilih Gambar :</p></td>
            <td><input type="file" name="gambar"/></td>
        </tr>
        <tr>
            <td><p class="text-light">Keterangan :</p></td>
            <td><textarea name="keterangan"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button input type="submit" name="tombol" class="bg-light bg-gradient rounded" style="font-size: medium; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Upload Images</button>
              <p class="mt-5"></p></td>
        
        </tr>
    </table>
        
    </div>
    </form>
</center>
    </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>