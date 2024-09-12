<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM users WHERE id_user = $id LIMIT 1";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);

?>

<!-- ini dia -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT USER
            </div>
            <div class="card-body">
              <form action="update-user.php" method="POST">
                
                <!-- Gunakan hidden input untuk id_user -->
                <input type="hidden" name="id_user" value="<?php echo $row['id_user'] ?>">
                
                <!-- Menampilkan ID secara non-editable -->
                <div class="form-group">
                  <label>ID</label>
                  <p class="form-control-plaintext"><?php echo $row['id_user'] ?></p>
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Baru" class="form-control" readonly>
                </div>

                <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="text" class="form-control" name="kata_sandi" placeholder="Masukkan password baru" value="<?php echo $row['kata_sandi']; ?>" rows="4">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
