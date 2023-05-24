<form action="<?php echo $aksi = ($this->uri->segment(3) == 'tabungan') ? $action . '/tabungan' : $action; ?>" method="post">
    <div class="form-group">
        <label for="int">Nama Sampah <?php echo form_error('id_sampah') ?></label>
        <select class="form-control select2" name="id_sampah" id="id_sampah" style="width: 100%;">
            <?php if (isset($type) && $type == "Update") : ?>
                <?php
                foreach ($this->db->get('sampah')->result() as $row) {
                ?>
                    <option value="<?php echo $row->id_sampah ?>" <?= ($row->id_sampah == $id_sampah) ? "selected" : ""; ?>><?php echo $row->nama_sampah ?></option>
                <?php } ?>
            <?php else : ?>
                <?php
                foreach ($this->db->get('sampah')->result() as $row) {
                ?>
                    <option value="<?php echo $row->id_sampah ?>"><?php echo $row->nama_sampah ?></option>
                <?php } ?>
            <?php endif; ?>
        </select>

    </div>
    <div class="form-group">
        <label for="date">Tanggal Setor<?php echo form_error('tanggal') ?></label>
        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
    </div>
    <div class="form-group">
        <label for="int">NIN <?php echo form_error('id_anggota') ?></label>
        <!-- <input type="text" class="form-control" name="id_anggota" id="id_anggota" placeholder="Id Anggota" value="<?php echo $id_anggota; ?>" /> -->
        <select class="form-control select2" name="id_anggota" style="width: 100%;">

            <?php if (isset($type) && $type == "Update") : ?>
                <?php
                foreach ($this->db->get('anggota')->result() as $row) {
                ?>
                    <option value="<?php echo $row->id_anggota ?>" <?= ($row->id_anggota == $id_anggota) ? "selected" : ""; ?>><?php echo 'NSB00' . $row->id_anggota . '-' . $row->nama_anggota ?></option>
                <?php } ?>
            <?php else : ?>
                <?php
                foreach ($this->db->get('anggota')->result() as $row) {
                ?>
                    <option value="<?php echo $row->id_anggota ?>"><?php echo 'NSB00' . $row->id_anggota . '-' . $row->nama_anggota ?></option>
                <?php } ?>
            <?php endif; ?>

        </select>
    </div>
    <div class="form-group">
        <label for="int">Berat <?php echo form_error('berat') ?></label>
        <input type="text" class="form-control" name="berat" id="berat" onkeypress="jumTotal()" value="<?php echo $berat; ?>" />
    </div>
    <div class="form-group">
        <label for="int">Total <?php echo form_error('total') ?></label>
        <input type="text" class="form-control" name="total" id="total" value="<?php echo $total; ?>" />
    </div>
    <div class="form-group">
        <label for="int">Tambahkan ke Tabungan</label>
        <select name="tabungan" required class="form-control">
            <!-- <option value="<?php echo $tabungan ?>"><?php echo $tabungan ?></option> -->
            <option value="">Pilih</option>
            <option value="Tidak" <?= ($tabungan == "Tidak") ? "selected" : ""; ?>>Tidak</option>
            <option value="Ya" <?= ($tabungan == "Ya") ? "selected" : ""; ?>>Ya</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ket">Keterangan <?php echo form_error('ket') ?></label>
        <textarea class="form-control" rows="3" name="ket" id="ket"><?php echo $ket; ?></textarea>
    </div>
    <input type="hidden" name="id_pembelian" value="<?php echo $id_pembelian; ?>" />
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('pembelian') ?>" class="btn btn-default">Batal</a>
</form>

<script type="text/javascript">
    function jumTotal() {
        var id_sampah = $('#id_sampah').val();
        $.get("<?php echo base_url() ?>app/cekharga_beli/" + id_sampah, function(data, status) {

            //alert("Data: " + data + "\nStatus: " + status);
            var harga = data;
            var berat = $("#berat").val();
            var total = harga * berat;
            $('#total').val(total);
        });


    }
</script>