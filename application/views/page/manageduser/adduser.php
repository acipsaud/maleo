<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah User</h4>
                  <p class="card-description">
                    <center><h4>
                                <?php if ($this->session->flashdata('message')) :
                                    echo $this->session->flashdata('message');
                                endif; ?>
                            </h4>
                    </center>
                  </p>
                    <form class="pt-3" role="form" method="POST" action="<?php echo site_url('manageuser/save') ?>">
                        <div class="form-group">
                            Username 
                            <input type="text" class="form-control " value=" <?= set_value('username'); ?>" id="username" name="username" placeholder="Username">
                            <small class="text-danger">
                                <?php echo form_error('username') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Password 
                            <input type="password" class="form-control " value=" <?= set_value('password'); ?>" id="password" name="password" placeholder="password">
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Nama Lengkap 
                            <input type="text" class="form-control " value=" <?= set_value('nama_lengkap'); ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                            <small class="text-danger">
                                <?php echo form_error('nama_lengkap') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Teritory
                            <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;"> 
                                <option></option>
                                <?php foreach ($getteritory as $row) : ?>   
                                    <option value="<?php echo $row->id_teritory; ?>"><?php echo $row->teritory; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            Lokasi Kerja
                            <select class="form-control" id="loker" name="loker" placeholder="loker" style="color:#000;">
                                <option></option>
                                <?php foreach ($getloker as $row1) : ?>   
                                    <option value="<?php echo $row1->id_loker; ?>"><?php echo $row1->nama_loker; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('loker') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            No Telpon
                            <input type="text" class="form-control " value=" <?= set_value('no_telp'); ?>" id="no_telp" name="no_telp" placeholder="no_telp">
                            <small class="text-danger">
                                <?php echo form_error('no_telp') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Level
                            <select class="form-control" id="level" name="level" placeholder="level" style="color:#000;">
                                <option value=""></option>
                                <option value="user">user</option>
                                <option value="admin">admin</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('level') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Status
                            <select class="form-control" id="blokir" name="blokir" placeholder="blokir" style="color:#000;">
                                <option value=""></option>
                                <option value="N">Aktif</option>
                                <option value="Y">Non Aktif</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('blokir') ?>
                            </small>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-primary btn-icon-text" style="width:100%">
                                <i class="ti-plus btn-icon-prepend"></i>
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>