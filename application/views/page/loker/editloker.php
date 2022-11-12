<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit User</h4>
                  <p class="card-description">
                    <center><h4>
                                <?php if ($this->session->flashdata('message')) :
                                    echo $this->session->flashdata('message');
                                endif; ?>
                            </h4>
                    </center>
                  </p>
                    <form class="pt-3" role="form" method="POST" action="<?php echo site_url('loker/update') ?>">
                        <div class="form-group">
                            Nama Loker 
                            <input type="hidden" class="form-control " value="<?php echo $getloker->id_loker; ?>" id="id_loker" name="id_loker">
                            <input type="text" class="form-control " value="<?php echo $getloker->nama_loker; ?>" id="nama_loker" name="nama_loker" placeholder="nama_loker">
                            <small class="text-danger">
                                <?php echo form_error('nama_loker') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Singkatan 
                            <input type="text" class="form-control " value="<?php echo $getloker->singkatan; ?>" id="singkatan" name="singkatan" placeholder="singkatan">
                            <small class="text-danger">
                                <?php echo form_error('singkatan') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Teritory
                            <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;"> 
                                <option value="<?php echo $getloker->teritory; ?>"><?php echo $this->db->query("select * from teritory where id_teritory='$getloker->teritory'")->row()->teritory; ?></option>
                                <?php foreach ($getteritory as $rowteritory) : ?>   
                                    <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            Datel
                            <select class="form-control" id="datel" name="datel" placeholder="datel" style="color:#000;"> 
                                <option value="<?php echo $getloker->datel; ?>"><?php echo $this->db->query("select * from datel where id_datel='$getloker->datel'")->row()->datel; ?></option>
                                <?php foreach ($getkandatel as $rowdatel) : ?>   
                                    <option value="<?php echo $rowdatel->id_datel; ?>"><?php echo $rowdatel->datel; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div><div class="form-group">
                            Witel
                            <select class="form-control" id="witel" name="witel" placeholder="witel" style="color:#000;"> 
                                <option value="<?php echo $getloker->witel; ?>"><?php echo $this->db->query("select * from witel where id_witel='$getloker->witel'")->row()->witel; ?></option>
                                <?php foreach ($getwitel as $rowwitel) : ?>   
                                    <option value="<?php echo $rowwitel->id_witel; ?>"><?php echo $rowwitel->witel; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            Status
                            <select class="form-control" id="aktif" name="aktif" placeholder="aktif" style="color:#000;">
                                <option value="<?php echo $getloker->aktif; ?>">
                                    <?php 
                                        if ($getloker->aktif=='Y')
                                            echo "Aktif"; 
                                        else
                                            echo "Non Aktif"
                                    ?>
                                </option>
                                <option value="Y">Aktif</option>
                                <option value="N">Non Aktif</option>
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