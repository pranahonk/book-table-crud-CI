<br/>
<br/>
<br/>
<form action="<?php echo base_url(); ?>buku/update" method="POST">
    <?php foreach ($buku_database as $buku): ?>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="control-label" for="judul">Judul :</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="kode" value="<?php echo $buku->kode; ?>" name="kode"
                               readonly="readonly" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="judul">Judul :</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="judul" value="<?php echo $buku->judul; ?>"
                               name="judul"
                               required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="nama">Penerbit :</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="penerbit" name="penerbit"
                               value="<?php echo $buku->penerbit; ?>" required>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="control-label" for="alamat">Pengarang :</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="pengarang" name="pengarang"
                               value="<?php echo $buku->pengarang; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="alamat">Tanggal :</label>
                    <div class="controls">
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                               value="<?php echo $buku->tanggal; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="alamat">stock :</label>
                    <div class="controls">
                        <input type="tel" maxlength="3" class="form-control" id="stock" name="stock"
                               value="<?php echo $buku->stock; ?>" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="controls text-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
            </div>
        </div>
    <?php endforeach; ?>
</form>



