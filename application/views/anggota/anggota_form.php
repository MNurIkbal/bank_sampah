<form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
        <label for="varchar">Nama Anggota <?php echo form_error('nama_anggota') ?></label>
        <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" value="<?php echo $nama_anggota; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Umur <?php echo form_error('umur') ?></label>
        <input type="text" class="form-control" name="umur" id="umur" value="<?php echo $umur; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
        <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Username <?php echo form_error('username') ?></label>
        <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Password <?php echo form_error('password') ?></label>
        <input type="text" class="form-control" name="password" id="password" value="<?php echo $password; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Level <?php echo form_error('level') ?></label>
        <input type="text" class="form-control" name="level" id="level" value="<?php echo $level; ?>" />
    </div>
    <input type="hidden" name="level" value="anggota">
    <input type="hidden" name="id_anggota" value="<?php echo $id_anggota; ?>" />
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('anggota') ?>" class="btn btn-default">Batal</a>
</form>