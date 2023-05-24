<form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
        <label for="varchar">Nama Sampah <?php echo form_error('nama_sampah') ?></label>
        <input type="text" class="form-control" name="nama_sampah" id="nama_sampah" value="<?php echo $nama_sampah; ?>" />
    </div>
    <div class="form-group">
        <label for="int">Jenis Sampah<?php echo form_error('id_jenis') ?></label>
        
        <select class="form-control" name="id_jenis" style="width: 100%;">
            
            <?php if ($type == "Update" && isset($type)) : ?>
                <?php
                foreach ($this->db->get('jenis_sampah')->result() as $row) {
                ?>
                    <option value="<?php echo $row->id_jenis ?>" <?= ($row->id_jenis == $id_jenis) ? "selected" : ""; ?>><?php echo $row->jenis_sampah ?></option>
                <?php } ?>
                <?php else: ?>
                <?php
                foreach ($this->db->get('jenis_sampah')->result() as $row) {
                ?>
                    <option value="<?php echo $row->id_jenis ?>"><?php echo $row->jenis_sampah ?></option>
                <?php } ?>
                <?php endif; ?>

        </select>

    </div>
    <div class="form-group">
        <label for="int">Harga Beli <?php echo form_error('harga_beli') ?></label>
        <input type="number" class="form-control" name="harga_beli" id="harga_beli" value="<?php echo $harga_beli; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Satuan <?php echo form_error('stok') ?></label>
        <input type="text" class="form-control" name="stok" id="stok" value="<?php echo $stok; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Deskripsi <?php echo form_error('harga_jual') ?></label>
        <input type="text" class="form-control" name="harga_jual" id="harga_jual" value="<?php echo $harga_jual; ?>" />
    </div>
    
    <input type="hidden" name="id_sampah" value="<?php echo $id_sampah; ?>" />
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('sampah') ?>" class="btn btn-default">Batal</a>
</form>