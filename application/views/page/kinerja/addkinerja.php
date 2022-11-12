<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Kinerja</h4>
                  <p class="card-description">
                  </p>
                    <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/savekinerja') ?>">
                        <!-- <div class="form-group">
                            Area 
                            <select class="form-control" id="tanding" name="tanding" placeholder="tanding" style="color:#000;"> 
                                <option value="WITEL">WITEL</option>
                                <option value="STO">STO</option>
                                <option value="DATEL">DATEL</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            PIC Indikator 
                            <select class="form-control" id="pic_indikator" name="pic_indikator" placeholder="pic_indikator" style="color:#000;"> 
                                <?php 

                                if ($this->session->userdata('level')=='admin'){
                                    $getpic=$this->db->query("select * from new_user")->result();
                                }
                                else
                                {
                                    $id_loker=$this->session->userdata('loker');
                                    $getpic=$this->db->query("select * from new_user where loker='$id_loker'")->result();
                                }

                                $inc=0;
                                foreach ($getpic as $rowpic) : $inc++;?>   
                                    <option value="<?php echo $rowpic->nama_lengkap; ?>"><?php echo $inc.'. '.$rowpic->nama_lengkap; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            UIC Witel
                            <select class="form-control" id="id_uic_witel" name="id_uic_witel" placeholder="id_uic_witel" style="color:#000;"> 
                                <?php 
                                    if ($this->session->userdata('level')=='admin'){
                                        $getwitel=$this->db->query("select * from loker where teritory='328'")->result();
                                    }
                                    else
                                    {
                                        $id_loker=$this->session->userdata('loker');
                                        $getwitel=$this->db->query("select * from loker where id_loker='$id_loker'")->result();
                                    }
                                    foreach ($getwitel as $row) : ?>   
                                    <option value="<?php echo $row->id_loker; ?>"><?php echo $row->nama_loker; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            Indikator
                            <select class="form-control" id="id_indikator" name="id_indikator" placeholder="id_indikator" style="color:#000;">
                                <?php 
                                if ($this->session->userdata('level')=='admin'){
                                    $getindikator=$this->db->query("select * from indikator")->result();
                                }
                                else
                                {
                                    $id_loker=$this->session->userdata('loker');
                                    $getindikator=$this->db->query("select * from indikator where uic_witel='$id_loker'")->result();
                                }
                                
                                $inc=0;
                                foreach ($getindikator as $row1) : $inc++; ?>   
                                    <option value="<?php echo $row1->id_indikator; ?>"><?php echo $inc.'. '.$row1->indikator; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            Teritory
                            <!-- <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">  -->
                                <?php 
                                    //$getteritory=$this->db->query("select * from teritory order by teritory DESC")->result();
                                    //foreach ($getteritory as $row) : if ($row->teritory=='TR7'){continue;}?>   
                                    <!-- <option value="<?php //echo $row->id_teritory; ?>"><?php //if ($row->teritory!='Witel Sulteng'){ echo $row->teritory;}else{echo "Unit Witel";} ?></option> -->
                                <?php //endforeach; ?>
                            <!-- </select> -->
                            <?php
                                $getteritory=$this->db->query("select * from teritory order by area DESC")->result();
                                foreach($getteritory as $rowt) :
                                    if ($rowt->teritory=='TR7')
                                        continue;
                            ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='teritory[]' value="<?php echo $rowt->id_teritory; ?>" nama="sto">
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