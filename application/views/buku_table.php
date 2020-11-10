<div class="table-responsive">
    <table class="table">
        <tr class="table-dark">
            <td><?= ucfirst('Kode') ?></td>
            <td><?= ucfirst('judul') ?></td>
            <td><?= ucfirst('penerbit') ?></td>
            <td><?= ucfirst('pengarang') ?></td>
            <td><?= ucfirst('tanggal') ?></td>
            <td><?= ucfirst('stock') ?></td>
            <td><?= ucfirst('Action') ?></td>
        </tr>
        <?php foreach ($buku_database as $key => $buku): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $buku->judul ?></td>
                <td><?php echo $buku->penerbit ?></td>
                <td><?php echo $buku->pengarang ?></td>
                <td><?php echo $buku->tanggal ?></td>
                <td><?php echo $buku->stock ?></td>
                <td><a href="<?php echo site_url() ?>buku/ubah/<?php echo $buku->kode; ?>">Ubah</a> || <a
                            href="<?php echo site_url() ?>buku/delete/<?php echo $buku->kode ?>"
                            onclick="return confirm('Apakah sudah benar benar yakin untuk menghapus data ??? :D')">Hapus</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>