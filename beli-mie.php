<?php include "header.php"; ?><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php 
                if(@$_GET['pesan']=="inputBerhasil"){
            ?>
                <div class="alert alert-success">
                    Terima kasih, pesanan anda sudah terkirim!
                </div>
            <?php
                }
            ?>

            <form action="proses-beli-mie.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label for="no_hp">No Handphone</label>
                    <input type="number" name="no_hp" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="jenis_mie">Jenis Mie</label>
                    <select name="jenis_mie" id="jenis_mie" class="form-control">
                        <option value="">-- Pilih Mie --</option>
                        <option value="Mie Kuah">Mie Kuah</option>
                        <option value="Mie Goreng">Mie Goreng</option>
                        <option value="Mie Rebus">Mie Rebus</option>
                        <option value="Mie Tumis">Mie Tumis</option>
                        <option value="Mie Kwetiau">Mie Kwetiau</option>
                        <option value="Mie Goreng Korea">Mie Goreng Korea</option>
                        <option value="Mie Goreng Saus Tiram">Mie Goreng Saus Tiram</option>
                        <option value="Mie Instan">Mie Instan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control">
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="metode_pembayaran">Metode Pembayaran</label>
                    <select name="metode_pembayaran" class="form-control">
                        <option value="">-- Pilih Pembayaran --</option>
                        <option value="COD">COD</option>
                        <option value="Transfer">Transfer</option>
                    </select>
                </div><br>

                <input type="submit" name="kirim" value="Kirim" class="btn btn-success">
                <a href="product.php" class="btn btn-primary">Kembali</a>            
            </form>
        </div>
    </div>
</div><br><br><br>

<?php include "footer.php"; ?>
<script src="script.js"></script>
