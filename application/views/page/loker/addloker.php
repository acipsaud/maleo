<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Loker</h4>
                  <p class="card-description">
                    <center><h4>
                                <?php if ($this->session->flashdata('message')) :
                                    echo $this->session->flashdata('message');
                                endif; ?>
                            </h4>
                    </center>
                  </p>
                    <form class="pt-3" role="form" method="POST" action="<?php echo site_url('loker/save') ?>">
                        <div class="form-group">
                            Nama Loker 
                            <input type="text" class="form-control " value=" <?= set_value('nama_loker'); ?>" id="nama_loker" name="nama_loker" placeholder="nama_loker">
                            <small class="text-danger">
                                <?php echo form_error('nama_loker') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Singkatan 
                            <input type="text" class="form-control " value=" <?= set_value('singkatan'); ?>" id="singkatan" name="singkatan" placeholder="singkatan">
                            <small class="text-danger">
                                <?php echo form_error('singkatan') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Teritory
                            <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                                <?php foreach ($getteritory as $rowteritory) : ?>   
                                    <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('teritory') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Datel
                            <select class="form-control" id="datel" name="datel" placeholder="datel" style="color:#000;">
                                <?php foreach ($getkandatel as $rowdatel) : ?>   
                                    <option value="<?php echo $rowdatel->id_datel; ?>"><?php echo $rowdatel->datel; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('datel') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Witel
                            <select class="form-control" id="witel" name="witel" placeholder="witel" style="color:#000;"> 
                                <?php foreach ($getwitel as $rowwitel) : ?>   
                                    <option value="<?php echo $rowwitel->id_witel; ?>"><?php echo $rowwitel->witel; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('witel') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Status
                            <select class="form-control" id="aktif" name="aktif" placeholder="aktif" style="color:#000;">
                                <option value="Y">Aktif</option>
                                <option value="N">Non Aktif</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('aktif') ?>
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