<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <div class="form-line">
            <label for="varchar">Nama User <?php echo form_error('nama_user') ?></label>
            <input type="text" class="form-control" name="nama_user" id="nama_user" value="<?php echo $nama_user; ?>" />
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" />
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>" />
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" />
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            <label for="varchar">Foto User </label>
            <input type="file" class="form-control" name="foto_user" id="foto_user" />

        </div>
        <?php
        if ($foto_user !== '') {
        ?>
            <div>
                <img src="image/user/<?php echo $foto_user ?>" style="width: 100px;height: 100px;">
            </div>
        <?php
        } else {
            #kosngs
        }
        ?>
    </div>
    <div class="form-group">
        <label>Jabatan Pengelola</label>
        <input type="text" name="jabatan" class="form-control" value="<?php echo $jabatan ?>">
    </div>
    <div class="form-group">
        <div class="form-line">
            <label for="varchar">Level </label>
            <select class="form-control show-tick" name="level">
                <option value="">Pilih</option>
                <?php if($this->session->userdata('level') == "admin") : ?>
                    <option value="admin" <?= ($level == "admin") ? "selected" : ""; ?>>Admin</option>
                    <?php else: ?>
                        <option value="operator" <?= ($level == "operator") ? "selected" : ""; ?>>Operator</option>
                    <?php endif; ?>
            </select>
        </div>
    </div>
    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="<?php echo site_url('user') ?>" class="btn btn-default">Batal</a>
</form>