<?php include "header.php"; ?>

      <div class="container">
            <div class="row">
                  <div class="col-md-12">


            <?php 
                if(@$_GET['pesan']=="inputBerhasil"){
            ?>
                <div class="alert alert-success">
                    Terima kasih, pesan anda sudah terkirim!
                </div>
            <?php
                }
            ?>
                  <form action="proses-contact.php" method="post">
                        <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Isikan nama..">
                        </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Isikan email..">
                        </div>
                        <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" class="form-control input-md" required> </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                  </form>
                  </div>
            </div>
      </div> <br><br><br><br>


<?php include "footer.php"; ?>