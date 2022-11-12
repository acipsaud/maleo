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
                    <form class="pt-3" role="form" method="POST" action="<?php echo site_url('witel/update') ?>">
                        <div class="form-group">
                            Nama Witel 
                            <input type="hidden" class="form-control " value="<?php echo $getwitel->id_witel; ?>" id="id_witel" name="id_witel">
                            <input type="text" class="form-control " value="<?php echo $getwitel->witel; ?>" id="witel" name="witel" placeholder="witel">
                            <small class="text-danger">
                                <?php echo form_error('witel') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Regional
                            <select class="form-control" id="treg" name="treg" placeholder="treg" style="color:#000;">
                                <option value="<?php echo $getwitel->treg; ?>"><?php echo $this->db->query("select * from treg where id_treg='$getwitel->treg'")->row()->treg; ?></option>
                                <?php foreach ($gettreg as $rowtreg) : ?>   
                                    <option value="<?php echo $rowtreg->id_treg; ?>"><?php echo $rowtreg->treg; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('treg') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Status
                            <select class="form-control" id="aktif" name="aktif" placeholder="aktif" style="color:#000;">
                                <option value="<?php echo $getwitel->aktif; ?>">
                                    <?php 
                                        if ($getwitel->aktif=='Y')
                                            echo "Aktif"; 
                                        else
                                            echo "Non Aktif"
                                    ?>
                                </option>
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