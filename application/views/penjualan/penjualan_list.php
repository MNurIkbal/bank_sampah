<div class="row" style="margin-bottom: 10px">
    <div class="col-md-4">
        <?php echo anchor(site_url('penjualan/create'), 'Tambah', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-4 text-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="col-md-1 text-right">
    </div>
    <div class="col-md-3 text-right">
        <form action="<?php echo site_url('penjualan/index'); ?>" class="form-inline" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                <span class="input-group-btn">
                    <?php
                    if ($q <> '') {
                    ?>
                        <a href="<?php echo site_url('penjualan'); ?>" class="btn btn-default">Reset</a>
                    <?php
                    }
                    ?>
                    <button class="btn btn-primary" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div>
</div>
<table class="table table-bordered" style="margin-bottom: 10px">
    <tr>
        <th>No</th>
        <th>No Transaksi</th>
        <th>Sampah</th>
        <th>Tanggal</th>
        <th>Berat</th>
        <th>Total</th>
        <th>Petugas</th>
        <th>Action</th>
    </tr><?php
            foreach ($penjualan_data as $penjualan) {
            ?>
        <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td width="80px"><?php echo 'JUAL00' . $penjualan->id_penjualan; ?></td>
            <td><?php echo ambil_field_tabel('sampah', 'id_sampah', $penjualan->id_sampah, 'nama_sampah')   ?></td>
            <td><?php echo $penjualan->tanggal ?></td>
            <td><?php echo $penjualan->berat ?></td>
            <td><?php echo $penjualan->total ?></td>
            <td><?php echo $penjualan->petugas ?></td>
            <td style="text-align:center" width="200px">
                <?php

                echo anchor(site_url('penjualan/update/' . $penjualan->id_penjualan), '<span class="label label-info">Edit</span>');
                echo ' | ';
                echo anchor(site_url('penjualan/delete/' . $penjualan->id_penjualan), '<span class="label label-danger">Hapus</span>', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                ?>
            </td>
        </tr>
    <?php
            }
    ?>
</table>
<div class="row">
    <div class="col-md-6">
    </div>
    <div class="col-md-6 text-right">
        <?php echo $pagination ?>
    </div>
</div>