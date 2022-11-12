<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Teritory</h4>
                  <p class="card-description">
                    <center><h4>
                                <?php if ($this->session->flashdata('message')) :
                                    echo $this->session->flashdata('message');
                                endif; ?>
                            </h4>
                    </center>
                  </p>
                    <form class="pt-3" role="form" method="POST" action="<?php echo site_url('teritory/update') ?>">
                        <div class="form-group">
                            Nama Teritory 
                            <input type="hidden" class="form-control " value="<?php echo $getteritory->id_teritory; ?>" id="id_teritory" name="id_teritory">
                            <input type="text" class="form-control " value="<?php echo $getteritory->teritory; ?>" id="teritory" name="teritory" placeholder="teritory">
                            <small class="text-danger">
                                <?php echo form_error('teritory') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Area
                            <select class="form-control" id="area" name="area" placeholder="area" style="color:#000;"> 
                                <option value="<?php echo $getteritory->area; ?>"><?php echo $getteritory->area; ?></option>
                                <option value ="Datel">Datel</option>
                                <option value ="STO">STO</option>
                                <option value ="Hero">Hero</option>
                                <option value ="Witel">Witel</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('area') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Datel
                            <select class="form-control" id="datel" name="datel" placeholder="datel" style="color:#000;"> 
                                <option value="<?php echo $getteritory->datel; ?>"><?php echo $this->db->query("select * from datel where id_datel='$getteritory->datel'")->row()->datel; ?></option>
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
                                <option value="<?php echo $getteritory->witel; ?>"><?php echo $this->db->query("select * from witel where id_witel='$getteritory->witel'")->row()->witel; ?></option>
                                <?php foreach ($getwitel as $rowwitel) : ?>   
                                    <option value="<?php echo $rowwitel->id_witel; ?>"><?php echo $rowwitel->witel; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('witel') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Regional
                            <select class="form-control" id="treg" name="treg" placeholder="treg" style="color:#000;"> 
                                <option value="<?php echo $getteritory->treg; ?>"><?php echo $this->db->query("select * from treg where id_treg='$getteritory->treg'")->row()->treg; ?></option>
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
                                <option value="<?php echo $getteritory->aktif; ?>">
                                    <?php 
                                        if ($getteritory->aktif=='Y')
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