<div class="row" style="margin-bottom: 10px">
    <div class="col-md-4">
        <?php echo anchor(site_url('pembelian/create'), 'Tambah', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-4 text-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="col-md-1 text-right">
    </div>
    <div class="col-md-3 text-right">
        <form action="<?php echo site_url('pembelian/index'); ?>" class="form-inline" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                <span class="input-group-btn">
                    <?php
                    if ($q <> '') {
                    ?>
                        <a href="<?php echo site_url('pembelian'); ?>" class="btn btn-default">Reset</a>
                    <?php
                    }
                    ?>
                    <button class="btn btn-primary" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div>
</div>
<table class="table table-bordered table-hover text-center" style="margin-bottom: 10px">
    <tr>
        <th>No</th>
        <th>Kode Setor</th>
        <th>Nama Sampah</th>
        <th>Tanggal Setor</th>
        <th>NIN</th>
        <th>Berat</th>
        <th>Total</th>
        <th>Tabungan</th>
        <th>Aksi</th>
    </tr><?php
            foreach ($pembelian_data as $pembelian) {
            ?>
        <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo 'STR00' . $pembelian->id_pembelian ?></td>
            <td><?php echo  ambil_field_tabel('sampah', 'id_sampah', $pembelian->id_sampah, 'nama_sampah')  ?></td>
            <td><?php echo $pembelian->tanggal ?></td>
            <td><?php echo ambil_field_tabel('anggota', 'id_anggota', $pembelian->id_anggota, 'nama_anggota') ?></td>
            <td><?php echo $pembelian->berat ?></td>
            <td><?php echo $pembelian->total ?></td>
            <td><?php echo $pembelian->tabungan ?></td>
            <td style="text-align:center" width="200px">
                <?php
                echo anchor(site_url('pembelian/read/' . $pembelian->id_pembelian), '<span class="label label-default">Detail</span>');
                echo ' | ';
                echo anchor(site_url('pembelian/update/' . $pembelian->id_pembelian), '<span class="label label-info">Edit</span>');
                echo ' | ';
                echo anchor(site_url('pembelian/delete/' . $pembelian->id_pembelian), '<span class="label label-danger">Hapus</span>', 'onclick="javasciprt: return confirm(\'Yakin hapus ?\')"');
                ?>
            </td>
        </tr>
    <?php
            }
    ?>
</table>
<div class="row">
    <div class="col-md-6 text-right">
        <?php echo $pagination ?>
    </div>
</div>