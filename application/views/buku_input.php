<br/>
<br/>
<br/>
<form action="<?php echo base_url(); ?>buku/insert" method="POST">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label class="control-label" for="judul">Judul:</label>
                <div class="controls">
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="penerbit">Penerbit :</label>
                <div class="controls">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="pengarang">Pengarang :</label>
                <div class="controls">
                    <input type="text" class="form-control" id="pengarang" name="pengarang" required>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label class="control-label" for="tanggal">Tanggal :</label>
                <div class="controls">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="stock">stock :</label>
                <div class="controls">
                    <input type="tel" maxlength="3" class="form-control" id="stock" name="stock" required>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="controls">
            <button class="btn btn-primary"><i class="icon-white icon-check"></i> Simpan</button>
        </div>
    </div>
</form>




