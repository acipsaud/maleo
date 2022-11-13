<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Indikator</h4>
                    <p class="card-description">
                        <center>
                            <h4>
                                <?php if ($this->session->flashdata('message')) :
                                    echo $this->session->flashdata('message');
                                endif; ?>
                            </h4>
                        </center>
                    </p>
                    <form class="pt-3" role="form" method="POST" action="<?php echo site_url('indikator/save') ?>">
                        <div class="form-group">
                            Indikator
                            <input type="hidden" class="form-control " value="328" id="teritory" name="teritory"
                                placeholder="Masukan indikator ...">
                            <input type="text" class="form-control " value="" id="indikator" name="indikator"
                                placeholder="Masukan indikator ...">
                            <small class="text-danger">
                                <?php echo form_error('indikator') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Satuan
                            <input type="text" class="form-control " value="" id="satuan" name="satuan"
                                placeholder="Satuan (ex : SSL, Rp, % dll)..">
                            <small class="text-danger">
                                <?php echo form_error('satuan') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Kategori Indikator
                            <select class="form-control" id="kategori_indikator" name="kategori_indikator"
                                placeholder="kategori_indikator" style="color:#000;">
                                <?php foreach ($getkatindikator as $rowkatindikator) : ?>
                                <option value="<?php echo $rowkatindikator->id_kategori; ?>">
                                    <?php echo $rowkatindikator->kategori; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('kategori_indikator') ?>
                            </small>
                        </div>
                        <!-- <div class="form-group">
                            Teritory
                            <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;"> 
                                <?php //foreach ($getteritory as $rowteritory) : ?>   
                                    <option value="<?php// echo $rowteritory->id_teritory; ?>"><?php //echo $rowteritory->teritory; ?></option>
                                <?php //endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php// echo form_error('teritory') ?>
                            </small>
                        </div> -->
                        <div class="form-group">
                            UIC Witel
                            <select class="form-control" id="uic_witel" name="uic_witel" placeholder="uic_witel"
                                style="color:#000;">
                                <?php foreach ($getlokerwitel as $rowloker) : ?>
                                <option value="<?php echo $rowloker->id_loker; ?>"><?php echo $rowloker->nama_loker; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('uic_witel') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            UIC Regional
                            <select class="form-control" id="uic_treg" name="uic_treg" placeholder="uic_treg"
                                style="color:#000;">
                                <?php foreach ($getlokerregional as $rowloker) : ?>
                                <option value="<?php echo $rowloker->id_loker; ?>"><?php echo $rowloker->nama_loker; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('uic_treg') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Status
                            <select class="form-control" id="aktif" name="aktif" placeholder="aktif"
                                style="color:#000;">
                                <option value="Y">Aktif</option>
                                <option value="N">Non Aktif</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('aktif') ?>
                            </small>
                        </div>
                        <div class="form-group">
                            Create Kinerja
                            <?php
                                $getteritory=$this->db->query("select * from teritory order by area DESC")->result();
                                foreach($getteritory as $rowt) :
                                    if ($rowt->teritory=='TR7')
                                        continue;
                            ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name='teritoryku[]'
                                    value="<?php echo $rowt->id_teritory; ?>" nama="sto">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <?php 
                                            if ($rowt->teritory!='Witel Sulteng')
                                                echo $rowt->teritory; 
                                            else
                                                echo "Unit"
                                        ?>
                                </label>
                            </div>
                            <?php endforeach; ?>
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