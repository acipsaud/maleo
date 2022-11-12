<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Kategori</h4>
                  <p class="card-description">
                    <center><h4>
                                <?php if ($this->session->flashdata('message')) :
                                    echo $this->session->flashdata('message');
                                endif; ?>
                            </h4>
                    </center>
                  </p>
                    <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kat_indikator/update') ?>">
                        <div class="form-group">
                            Kategori 
                            <input type="hidden" class="form-control " value="<?php echo $getkat->id_kategori; ?>" id="id_kategori" name="id_kategori">
                            <input type="text" class="form-control " value="<?php echo $getkat->kategori; ?>" id="kategori" name="kategori" placeholder="kategori">
                            <small class="text-danger">
                                <?php echo form_error('kategori') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Status
                            <select class="form-control" id="aktif" name="aktif" placeholder="aktif" style="color:#000;">
                                <option value="<?php echo $getkat->aktif; ?>">
                                    <?php 
                                        if ($getkat->aktif=='Y')
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