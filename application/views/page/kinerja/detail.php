<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <table id="tableuser">
                        <tr>
                            <!-- <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/cek_detail1') ?>">
                            <td style="width:10%;">
                                Pilih Unit :
                                <select class="form-control" id="cekunitku" name="unit" placeholder="unit" style="color:#000;width:200px;"> 
                                    <option>Pilih unit..</option>
                                    <option value='All'>All</option>
                                    <?php 
                                        $getloker=$this->db->query("select * from loker where teritory='328'")->result();
                                        foreach ($getloker as $rowloker) : 
                                    ?>
                                    <option value="<?php echo $rowloker->id_loker; ?>"><?php echo $rowloker->nama_loker; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td style="width:1%;"></td>
                            <td style="width:10%;">
                                Pilih Kinerja :
                                <select class="form-control" id="cekidkinerjaku" name="id_kinerja" placeholder="id_kinerja" style="color:#000;width:200px;"> 
                                    <option>Pilih kinerja..</option>
                                    <?php 
                                        $getkiner=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
                                        foreach ($getkiner as $rowkiner) : 
                                    ?>
                                    <option value="<?php echo $rowkiner->id_kinerja; ?>"><?php echo $this->db->query("select * from indikator where id_indikator='$rowkiner->id_indikator'")->row()->indikator; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td style="width:1%;"></td> -->

                            <!-- </td>
                            <td style="width:10%;">
                                Pilih Kategori Indikator :
                                <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;width:200px;"> 
                                    <option>All Kategori</option>
                                </select>
                            </td> -->
                            <!-- <td style="width:2%;">

                            </td> -->
                            <!-- <td style="vertical-align:bottom;width:20%;">
                                <button type="submit" class="btn btn-outline-primary btn-icon-text" style="width:100%">
                                    <i class="ti-search btn-icon-prepend"></i>
                                    Lihat
                                </button>
                            </td> -->
                            <!-- </form> -->
                            <td style="" align="right">
                                <!-- <a href="<?php echo site_url('indikator/add'); ?>" class="btn btn-outline-primary btn-icon-text">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah Indikator
                                </a> -->
                                <?php  
                                    if ($loker=='unit')
                                    {
                                        $link='unit_detail';
                                    }
                                    else if ($loker=='datel')
                                    {
                                        $link='datel_detail';
                                    } 
                                    else if ($loker=='hero')
                                    {
                                        $link='hero_detail';
                                    }
                                    else if ($loker=='sto')
                                    {
                                        $link='sto_detail';
                                    }
                                    else
                                    {
                                        $link='all';
                                    }
                                ?>
                                <form class="" role="form" method="POST" action="<?php echo site_url('kinerja/'.$link); ?>">
                                <input type="hidden" name='teritory' value="<?php echo $getter; ?>">
                                <button type="submit" class="btn btn-primary btn-icon-text" style="width:100%">
                                    <i class="ti-shift-left btn-icon-prepend"></i>
                                    back <?php //echo $this->session->userdata('loker') ?> <?php //echo $getkinerja->id_uic_witel; ?>
                                </button>
                                </form>
                            </td>
                            <?php
                                if ($this->session->userdata('level')=='admin'){
                            ?>
                                <td style="" align="right">
                                    <!-- <a href="<?php echo site_url('indikator/add'); ?>" class="btn btn-outline-primary btn-icon-text">
                                        <i class="ti-plus btn-icon-prepend"></i>
                                        Tambah Indikator
                                    </a> -->
                                    <a href="<?php echo site_url('kinerja/editkinerjatarget/'.$getkinerja->id_kinerja); ?>" class="btn btn-warning btn-icon-text">
                                        <i class="ti-pencil btn-icon-prepend"></i>
                                        Edit Kinerja
                                    </a>
                                </td>
                            <?php
                                }
                                else 
                                {
                                    if ($this->session->userdata('loker')==$getkinerja->id_uic_witel){
                            ?>
                                <td style="" align="right">
                                    <!-- <a href="<?php echo site_url('indikator/add'); ?>" class="btn btn-outline-primary btn-icon-text">
                                        <i class="ti-plus btn-icon-prepend"></i>
                                        Tambah Indikator
                                    </a> -->
                                    <a href="<?php echo site_url('kinerja/editkinerjatarget/'.$getkinerja->id_kinerja); ?>" class="btn btn-warning btn-icon-text">
                                        <i class="ti-pencil btn-icon-prepend"></i>
                                        Edit Kinerja
                                    </a>
                                </td>
                            <?php } }?>
                        </tr>   
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">
                    <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                        <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Performance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Fact Finding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#references" role="tab" data-toggle="tab">Lesson Learn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buzz1" role="tab" data-toggle="tab">Support Needed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#references1" role="tab" data-toggle="tab">Action Plan</a>
                    </li>
                </ul>

                    <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Indikator Kinerja <font color="red"><?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></font><br><br> Tahun : <?php echo date('Y'); ?>
                            <?php 
                                $gettgl=explode(" ",$getkinerja->last_update);
                                $tgl1=strtotime($gettgl[0]);
                                $tgl2=strtotime(date("Y-m-d"));
                                $jarak = $tgl2 - $tgl1;
                                $hari = $jarak / 60 / 60 / 24;
                            ?>
                            <br><font size="1"><i>Last Update : <font color="red"><?php echo $getkinerja->last_update; ?></font> <font color="blue">(<?php echo $hari; ?> days ago)</font></i></font>
                        </p>
                        </div>
                        <canvas id="sales-chart" style='width:5px;'></canvas>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="buzz">
                        <div class="table-responsive">
                            <br>
                            <div class="d-flex justify-content-between">
                                <p class="card-title" style="margin-bottom:7px;font-size:20px;">Fact Finding <font color="blue"><?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></font></p>
                                <button type="button" class="btn btn-danger btn-icon-text" data-toggle="modal" data-target="#tambahdataff">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah 
                                </button>
                            </div>
                            <br>
                            <table id="" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr align="center">
                                    <th>No</th>
                                    <th style='width:20%;'>Tanggal</th>
                                    <th>Fact Finding</th>
                                    <th>Teritory</th>
                                    <th style='width:10%;'>Status</th>
                                    <th style='width:18%;'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $getff=$this->db->query("Select * from ff where id_kinerja='$getkinerja->id_kinerja' and status_ff='open'")->result();
                                    $noff=0;
                                    foreach ($getff as $rowff) :
                                    $noff++
                                    ?>
                                    <tr>
                                        <td style=""><center><?php echo $noff; ?></td>
                                        <td style=""><center><?php echo $rowff->tanggal; ?></td>
                                        <td style=""><?php echo $rowff->fact; ?></td>
                                        <td style=""><center><?php echo $this->db->query("select * from teritory where id_teritory='$rowff->teritory'")->row()->teritory; ?></td>
                                        <td style=""><center><?php echo $rowff->status_ff; ?></td>
                                        <td style="" align="center">
                                            <div class="btn-group" style="margin-top:2px;">
                                                <center>
                                                    <a href="<?php echo site_url('kinerja/hapusff/'.$rowff->id_ff.'/'.$getkinerja->id_kinerja); ?>" class="btn btn-danger" style="width:80px;font-size:12px;background-color:#c6c7c8;color:#000;border:none;">
                                                        <i class="ti-check btn-icon-prepend"></i>
                                                        close
                                                    </a> 
                                                </center>
                                            </div> 
                                            <!-- <div class="btn-group dropup">
                                                <button type="button" class="btn btn-primary">Status</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton1">
                                                    <h6 class="dropdown-header">Settings</h6>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div> -->
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="references">
                        <div class="table-responsive">
                            <br>
                            <div class="d-flex justify-content-between">
                                <p class="card-title" style="margin-bottom:7px;font-size:20px;">Lesson Learn <font color="blue"><?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></font></p>
                                <button type="button" class="btn btn-danger btn-icon-text" data-toggle="modal" data-target="#tambahdatall">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah 
                                </button>
                            </div>
                            <br>
                            
                            <table id="" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr align="center">
                                    <th>No</th>
                                    <th style='width:20%;'>Tanggal</th>
                                    <th>Lesson Learn</th>
                                    <th>Teritory</th>
                                    <th style='width:10%;'>Status</th>
                                        <th style='width:18%;'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $getll=$this->db->query("Select * from ll where id_kinerja='$getkinerja->id_kinerja' and status_ll='open'")->result();
                                    $noll=0;
                                    foreach ($getll as $rowll) :
                                    $noll++
                                    ?>
                                    <tr >
                                        <td style=""><center><?php echo $noll; ?></td>
                                        <td style=""><center><?php echo $rowll->tanggal; ?></td>
                                        <td style=""><?php echo $rowll->lesson; ?></td>
                                        <td style=""><center><?php echo $this->db->query("select * from teritory where id_teritory='$rowll->teritory'")->row()->teritory; ?></td>
                                        <td style=""><center><?php echo $rowll->status_ll; ?></td>
                                        <td style="" align="center">
                                            <div class="btn-group" style="margin-top:2px;">
                                                <center>
                                                    <a href="<?php echo site_url('kinerja/hapusll/'.$rowll->id_ll.'/'.$getkinerja->id_kinerja); ?>" class="btn btn-danger" style="width:80px;font-size:12px;background-color:#c6c7c8;color:#000;border:none;">
                                                        <i class="ti-check btn-icon-prepend"></i>
                                                        close
                                                    </a> 
                                                </center>
                                            </div> 
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="references1">
                        <div class="table-responsive">
                            <br>
                            <div class="d-flex justify-content-between">
                                <p class="card-title" style="margin-bottom:7px;font-size:20px;">Action Plan <font color="blue"><?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></font></p>
                                <button type="button" class="btn btn-danger btn-icon-text" data-toggle="modal" data-target="#tambahdataap">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah 
                                </button>
                            </div>
                            <br>
                            <table id="" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr align="center">
                                    <th>No</th>
                                    <th style='width:12%;'>Tanggal</th>
                                    <th style='width:10%;'>PIC</th>
                                    <th>Action Plan</th>
                                    <th>Key Result</th>
                                    <th style='width:8%;'>From</th>
                                    <th style='width:8%;'>To</th>
                                    <th>Kategori (PPT)</th>
                                    <th>Teritory</th>
                                    <th>Status</th>
                                        <th style='width:10%;'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $getap=$this->db->query("Select * from plan where id_kinerja='$getkinerja->id_kinerja' and status_plan='open'")->result();
                                    $noap=0;
                                    foreach ($getap as $rowap) :
                                    $noap++
                                    ?>
                                    <tr >
                                        <td style=""><center><?php echo $noap; ?></td>
                                        <td style=""><center><?php echo $rowap->tanggal; ?></td>
                                        <td style=""><center><?php echo $rowap->pic_plan; ?></td>
                                        <td style=""><?php echo $rowap->plan; ?></td>
                                        <td style=""><?php echo $rowap->key_result; ?></td>
                                        <td style=""><center><?php echo $rowap->awal; ?></td>
                                        <td style=""><center><?php echo $rowap->akhir; ?></td>
                                        <td style=""><center><?php echo $rowap->aspek_ppt; ?></td>
                                        <td style=""><center><?php echo $this->db->query("select * from teritory where id_teritory='$rowap->teritory'")->row()->teritory; ?></td>
                                        <td style=""><center><?php echo $rowap->status_plan; ?></td>
                                        <td style="" align="center">
                                            <div class="btn-group" style="margin-top:2px;">
                                                <center>
                                                    <a href="<?php echo site_url('kinerja/hapusap/'.$rowap->id_plan.'/'.$getkinerja->id_kinerja); ?>" class="btn btn-danger" style="width:80px;font-size:12px;background-color:#c6c7c8;color:#000;border:none;">
                                                        <i class="ti-check btn-icon-prepend"></i>
                                                        close
                                                    </a> 
                                                </center>
                                            </div> 
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="buzz1">
                        <div class="table-responsive">
                            <br>
                            <div class="d-flex justify-content-between">
                                <p class="card-title" style="margin-bottom:7px;font-size:20px;">Support Needed <font color="blue"><?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></font></p>
                                <button type="button" class="btn btn-danger btn-icon-text" data-toggle="modal" data-target="#tambahdatasupport">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah 
                                </button>
                            </div>
                            <br>
                            <table id="" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr align="center">
                                    <th>No</th>
                                    <th style="width:12%;">Tanggal</th>
                                    <th>Support Needed</th>
                                    <th>UIC</th>
                                    <th>Kategori (PPT)</th>
                                    <th>Teritory</th>
                                    <th>Status</th>
                                    <th style="width:12%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $getsn=$this->db->query("select * from support where id_kinerja='$getkinerja->id_kinerja' and status_support='open'")->result();
                                    $nosn=0;
                                    foreach ($getsn as $rowsn) :
                                    $nosn++
                                    ?>
                                    <tr>
                                    <td><center><?php echo ($nosn); ?></td>
                                    <td><center><?php echo $rowsn->tanggal; ?></td>
                                    <td><?php echo $rowsn->support; ?></td>
                                    <td><center><?php echo $this->db->query("select * from loker where id_loker='$rowsn->uic_support'")->row()->nama_loker; ?></td>
                                    <td><center><?php echo $rowsn->aspek_ppt; ?></td>
                                    <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $this->db->query("select * from teritory where id_teritory='$rowsn->teritory'")->row()->teritory; ?></td>
                                    <td><?php echo $rowsn->status_support; ?></td>
                                        <td align="center">
                                            <div class="btn-group" style="margin-top:2px;">
                                                <center>
                                                    <a href="<?php echo site_url('kinerja/hapussupport/'.$rowsn->id_support.'/'.$getkinerja->id_kinerja); ?>" class="btn btn-danger" style="width:80px;font-size:12px;background-color:#c6c7c8;color:#000;border:none;">
                                                        <i class="ti-check btn-icon-prepend"></i>
                                                        close
                                                    </a> 
                                                </center>
                                            </div> 
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>     
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <p class="card-title" style="margin-bottom:7px;font-size:15px;">Fact Finding <?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></p>
                        <table id="" class="display expandable-table" style="width:100%">
                            <thead>
                                <tr align="center">
                                <th>No</th>
                                <th style='width:20%;'>Tanggal</th>
                                <th>Fact Finding</th>
                                <th>Teritory</th>
                                <th style='width:10%;'>Status</th>
                                <th style='width:18%;'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $getff=$this->db->query("Select * from ff where id_kinerja='$getkinerja->id_kinerja' and status_ff='open'")->result();
                                $noff=0;
                                foreach ($getff as $rowff) :
                                $noff++
                                ?>
                                <tr>
                                    <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $noff; ?></td>
                                    <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowff->tanggal; ?></td>
                                    <td style="padding:0px;margin:0px;height:0px;"><?php echo $rowff->fact; ?></td>
                                    <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $this->db->query("select * from teritory where id_teritory='$rowff->teritory'")->row()->teritory; ?></td>
                                    <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowff->status_ff; ?></td>
                                    <td style="padding:0px;margin:0px;height:0px;" align="center">
                                        <div class="btn-group" style="margin-top:2px;">
                                            <center>
                                                <a href="<?php echo site_url('kinerja/hapusff/'.$rowff->id_ff.'/'.$getkinerja->id_kinerja); ?>" class="btn btn-danger" style="width:80px;font-size:12px;background-color:#c6c7c8;color:#000;border:none;">
                                                    <i class="ti-check btn-icon-prepend"></i>
                                                    close
                                                </a> 
                                            </center>
                                        </div> 
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/save_ff') ?>">
                                    <tr>
                                        <td><center><?php echo ($noff+1); ?></td>
                                        <td><center><?php echo date('d-m-Y'); ?></td>
                                        <td>
                                            <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_indikator; ?>" id="id_indikator" name="id_indikator" placeholder="id indikator">
                                            <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_kinerja; ?>" id="id_kinerja" name="id_kinerja" placeholder="id kinerja">
                                            <input type="text" class="form-control " value=" <?= set_value('fact'); ?>" id="fact" name="fact" placeholder="Fact Finding">
                                        </td>
                                        <td>
                                            <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                                                <?php $getteritory=$this->db->query("select * from teritory")->result(); foreach ($getteritory as $rowteritory) : ?>   
                                                    <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td><center>Open</td>
                                        <td align="center">
                                            <div class="btn-group">
                                                <center>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="ti-plus btn-icon-prepend"></i>
                                                    Add
                                                </button> 
                                                </center>
                                            </div> 
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <p class="card-title" style="margin-bottom:7px;font-size:15px;">Lesson Learn <?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></p>
                        <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr align="center">
                              <th>No</th>
                              <th style='width:20%;'>Tanggal</th>
                              <th>Lesson Learn</th>
                              <th>Teritory</th>
                              <th style='width:10%;'>Status</th>
                                <th style='width:18%;'>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $getll=$this->db->query("Select * from ll where id_kinerja='$getkinerja->id_kinerja' and status_ll='open'")->result();
                            $noll=0;
                            foreach ($getll as $rowll) :
                            $noll++
                            ?>
                            <tr >
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $noll; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowll->tanggal; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><?php echo $rowll->lesson; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $this->db->query("select * from teritory where id_teritory='$rowll->teritory'")->row()->teritory; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowll->status_ll; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;" align="center">
                                    <div class="btn-group" style="margin-top:2px;">
                                        <center>
                                            <a href="<?php echo site_url('kinerja/hapusll/'.$rowll->id_ll.'/'.$getkinerja->id_kinerja); ?>" class="btn btn-danger" style="width:80px;font-size:12px;background-color:#c6c7c8;color:#000;border:none;">
                                                <i class="ti-check btn-icon-prepend"></i>
                                                close
                                            </a> 
                                        </center>
                                    </div> 
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/save_ll') ?>">
                                <tr>
                                    <td><center><?php echo ($noll+1); ?></td>
                                    <td><center><?php echo date('d-m-Y'); ?></td>
                                    <td>
                                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_indikator; ?>" id="id_indikator" name="id_indikator" placeholder="id indikator">
                                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_kinerja; ?>" id="id_kinerja" name="id_kinerja" placeholder="id kinerja">
                                        <input type="text" class="form-control " value=" <?= set_value('lesson'); ?>" id="lesson" name="lesson" placeholder="Lesson Learn">
                                    </td>
                                    <td>
                                        <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                                            <?php $getteritory=$this->db->query("select * from teritory")->result(); foreach ($getteritory as $rowteritory) : ?>   
                                                <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td><center>Open</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <center>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="ti-plus btn-icon-prepend"></i>
                                                Add
                                            </button> 
                                            </center>
                                        </div> 
                                    </td>
                                </tr>
                            </form>
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <p class="card-title" style="margin-bottom:7px;font-size:15px;">Action Plan <?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></p>
                        <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr align="center">
                              <th>No</th>
                              <th style='width:12%;'>Tanggal</th>
                              <th style='width:10%;'>PIC</th>
                              <th>Action Plan</th>
                              <th>Key Result</th>
                              <th style='width:8%;'>From</th>
                              <th style='width:8%;'>To</th>
                              <th>Kategori (PPT)</th>
                              <th>Teritory</th>
                              <th>Status</th>
                                <th style='width:10%;'>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $getap=$this->db->query("Select * from plan where id_kinerja='$getkinerja->id_kinerja' and status_plan='open'")->result();
                            $noap=0;
                            foreach ($getap as $rowap) :
                            $noap++
                            ?>
                            <tr >
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $noap; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowap->tanggal; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowap->pic_plan; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><?php echo $rowap->plan; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><?php echo $rowap->key_result; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowap->awal; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowap->akhir; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowap->aspek_ppt; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $this->db->query("select * from teritory where id_teritory='$rowap->teritory'")->row()->teritory; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $rowap->status_plan; ?></td>
                                <td style="padding:0px;margin:0px;height:0px;" align="center">
                                    <div class="btn-group" style="margin-top:2px;">
                                        <center>
                                            <a href="<?php echo site_url('kinerja/hapusap/'.$rowap->id_plan.'/'.$getkinerja->id_kinerja); ?>" class="btn btn-danger" style="width:80px;font-size:12px;background-color:#c6c7c8;color:#000;border:none;">
                                                <i class="ti-check btn-icon-prepend"></i>
                                                close
                                            </a> 
                                        </center>
                                    </div> 
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/save_ap') ?>">
                            <tr>
                              <td><center><?php echo ($noap+1); ?></td>
                              <td style="width:9%;"><center><?php echo date('d-m-Y'); ?></td>
                              <td>
                                    <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_indikator; ?>" id="id_indikator" name="id_indikator" placeholder="id indikator">
                                    <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_kinerja; ?>" id="id_kinerja" name="id_kinerja" placeholder="id kinerja">
                                    <input type="text" class="form-control " value="" id="pic_plan" name="pic_plan" placeholder="Pic Plan"></td>
                              <td><input type="text" class="form-control " value="" id="plan" name="plan" placeholder="Plan"></td>
                              <td><input type="text" class="form-control " value="" id="key_result" name="key_result" placeholder="Key Result"></td>
                              <td><input type="text" class="form-control " value="" id="awal" name="awal" placeholder="From"></td>
                              <td><input type="text" class="form-control " value="" id="akhir" name="akhir" placeholder="To"></td>
                              <td>
                                    <select class="form-control" id="aspek_ppt" name="aspek_ppt" placeholder="aspek_ppt" style="color:#000;">
                                        <option>People</option>
                                        <option>Proses</option>
                                        <option>Tools</option>
                                    </select>
                              </td>
                              <td>
                                    <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                                        <?php $getteritory=$this->db->query("select * from teritory")->result(); foreach ($getteritory as $rowteritory) : ?>   
                                            <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                              </td>
                              <td>Open</td>
                              <td align="center" style="width:9%;">
                                <div class="btn-group">
                                    <center>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-plus btn-icon-prepend"></i>
                                        Add
                                    </button> 
                                    </center>
                                </div> 
                              </td>
                            </tr>
                            </form>
                          </tbody>
                      </table>
                    </div>
                    <div class="table-responsive">
                        <p class="card-title" style="margin-bottom:7px;font-size:15px;">Support Needed <?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator.' ('.$this->db->query("select * from teritory where id_teritory='$man->teritory'")->row()->teritory.')'; ?></p>
                        <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr align="center">
                              <th>No</th>
                              <th style="width:12%;">Tanggal</th>
                              <th>Support Needed</th>
                              <th>UIC</th>
                              <th>Kategori (PPT)</th>
                              <th>Teritory</th>
                              <th>Status</th>
                              <th style="width:12%;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $getsn=$this->db->query("select * from support where id_kinerja='$getkinerja->id_kinerja' and status_support='open'")->result();
                            $nosn=0;
                            foreach ($getsn as $rowsn) :
                            $nosn++
                            ?>
                            <tr>
                              <td><center><?php echo ($nosn); ?></td>
                              <td><center><?php echo $rowsn->tanggal; ?></td>
                              <td><?php echo $rowsn->support; ?></td>
                              <td><center><?php echo $this->db->query("select * from loker where id_loker='$rowsn->uic_support'")->row()->nama_loker; ?></td>
                              <td><center><?php echo $rowsn->aspek_ppt; ?></td>
                              <td style="padding:0px;margin:0px;height:0px;"><center><?php echo $this->db->query("select * from teritory where id_teritory='$rowsn->teritory'")->row()->teritory; ?></td>
                              <td><?php echo $rowsn->status_support; ?></td>
                                <td align="center">
                                    <div class="btn-group" style="margin-top:2px;">
                                        <center>
                                            <a href="<?php echo site_url('kinerja/hapussupport/'.$rowsn->id_support.'/'.$getkinerja->id_kinerja); ?>" class="btn btn-danger" style="width:80px;font-size:12px;background-color:#c6c7c8;color:#000;border:none;">
                                                <i class="ti-check btn-icon-prepend"></i>
                                                close
                                            </a> 
                                        </center>
                                    </div> 
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/save_support') ?>">
                            <tr>
                              <td><center><?php echo ($nosn+1); ?></td>
                              <td><center><?php echo date('d-m-Y'); ?></td>
                              <td>
                                  <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_indikator; ?>" id="id_indikator" name="id_indikator" placeholder="id indikator">
                                  <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_kinerja; ?>" id="id_kinerja" name="id_kinerja" placeholder="id kinerja">
                                  <input type="text" class="form-control " value="" id="support" name="support" placeholder="Support Needed"></td>
                              <td>
                                    <select class="form-control" id="uic_support" name="uic_support" placeholder="uic_support" style="color:#000;">
                                        <?php $getloker=$this->db->query("select * from loker")->result(); foreach ($getloker as $rowloker) : ?>   
                                            <option value="<?php echo $rowloker->id_loker; ?>"><?php echo $rowloker->nama_loker; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                              </td>
                              <td>
                                    <select class="form-control" id="aspek_ppt" name="aspek_ppt" placeholder="aspek_ppt" style="color:#000;">
                                        <option>People</option>
                                        <option>Proses</option>
                                        <option>Tools</option>
                                    </select>
                              </td>
                              <td>
                                    <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                                        <?php $getteritory=$this->db->query("select * from teritory")->result(); foreach ($getteritory as $rowteritory) : ?>   
                                            <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                              </td>
                              <td><center>Open</td>
                                <td align="center">
                                    <div class="btn-group">
                                        <center>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ti-plus btn-icon-prepend"></i>
                                            Add
                                        </button> 
                                        </center>
                                    </div> 
                                </td>
                            </tr>
                            </form>
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <h4>All Teritory Performance <font color="blue">(<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</font></h4><br>
    
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#witel" role="tab" data-toggle="tab">Witel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#datel" role="tab" data-toggle="tab">Datel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hero" role="tab" data-toggle="tab">Hero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sto" role="tab" data-toggle="tab">STO</a>
                    </li>
                </ul>

                    <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="witel">
                        <p class="card-title" style="margin-bottom:7px;font-size:19px;">Witel Performance <font color="blue">(<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</font></p>
                        <table id="" class="display expandable-table" style="width:100%;">
                            <thead>
                                <tr>
                                    <th style="background-color:#ac4949;">Area</th>
                                    <th style="background-color:#ac4949;">Jan</th>
                                    <th style="background-color:#ac4949;">Feb</th>
                                    <th style="background-color:#ac4949;">Mar</th>
                                    <th style="background-color:#ac4949;">Apr</th>
                                    <th style="background-color:#ac4949;">Mei</th>
                                    <th style="background-color:#ac4949;">Jun</th>
                                    <th style="background-color:#ac4949;">Jul</th>
                                    <th style="background-color:#ac4949;">Aug</th>
                                    <th style="background-color:#ac4949;">Sep</th>
                                    <th style="background-color:#ac4949;">Okt</th>
                                    <th style="background-color:#ac4949;">Nov</th>
                                    <th style="background-color:#ac4949;">Des</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Target</td>
                                    <?php
                                    $ceksat=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row()->satuan;
                                    ?>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t1/1000000000,2);}else{echo $getkinerja->t1;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t2/1000000000,2);}else{echo $getkinerja->t2;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t3/1000000000,2);}else{echo $getkinerja->t3;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t4/1000000000,2);}else{echo $getkinerja->t4;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t5/1000000000,2);}else{echo $getkinerja->t5;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t6/1000000000,2);}else{echo $getkinerja->t6;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t7/1000000000,2);}else{echo $getkinerja->t7;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t8/1000000000,2);}else{echo $getkinerja->t8;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t9/1000000000,2);}else{echo $getkinerja->t9;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t10/1000000000,2);}else{echo $getkinerja->t10;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t11/1000000000,2);}else{echo $getkinerja->t11;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->t12/1000000000,2);}else{echo $getkinerja->t12;}  ?></td>
                                </tr>
                                <tr>
                                    <td>Realisasi</td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r1/1000000000,2);}else{echo $getkinerja->r1;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r2/1000000000,2);}else{echo $getkinerja->r2;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r3/1000000000,2);}else{echo $getkinerja->r3;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r4/1000000000,2);}else{echo $getkinerja->r4;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r5/1000000000,2);}else{echo $getkinerja->r5;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r6/1000000000,2);}else{echo $getkinerja->r6;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r7/1000000000,2);}else{echo $getkinerja->r7;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r8/1000000000,2);}else{echo $getkinerja->r8;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r9/1000000000,2);}else{echo $getkinerja->r9;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r10/1000000000,2);}else{echo $getkinerja->r10;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r11/1000000000,2);}else{echo $getkinerja->r11;}  ?></td>
                                    <td><?php if ($ceksat=='Rp (M)'){echo number_format($getkinerja->r12/1000000000,2);}else{echo $getkinerja->r12;}  ?></td>
                                </tr>
                                <tr>
                                    <td>Ach</td>
                                    <?php if (($getkinerja->ac1<100) and ($getkinerja->ac1>=90)){$color="#b98800";} else if ($getkinerja->ac1<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac1;  ?>%</td>
                                    <?php if (($getkinerja->ac2<100) and ($getkinerja->ac2>=90)){$color="#b98800";} else if ($getkinerja->ac2<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac2;  ?>%</td>
                                    <?php if (($getkinerja->ac3<100) and ($getkinerja->ac3>=90)){$color="#b98800";} else if ($getkinerja->ac3<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac3;  ?>%</td>
                                    <?php if (($getkinerja->ac4<100) and ($getkinerja->ac4>=90)){$color="#b98800";} else if ($getkinerja->ac4<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac4;  ?>%</td>
                                    <?php if (($getkinerja->ac5<100) and ($getkinerja->ac5>=90)){$color="#b98800";} else if ($getkinerja->ac5<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac5;  ?>%</td>
                                    <?php if (($getkinerja->ac6<100) and ($getkinerja->ac6>=90)){$color="#b98800";} else if ($getkinerja->ac6<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac6;  ?>%</td>
                                    <?php if (($getkinerja->ac7<100) and ($getkinerja->ac7>=90)){$color="#b98800";} else if ($getkinerja->ac7<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac7;  ?>%</td>
                                    <?php if (($getkinerja->ac8<100) and ($getkinerja->ac8>=90)){$color="#b98800";} else if ($getkinerja->ac8<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac8;  ?>%</td>
                                    <?php if (($getkinerja->ac9<100) and ($getkinerja->ac9>=90)){$color="#b98800";} else if ($getkinerja->ac9<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac9;  ?>%</td>
                                    <?php if (($getkinerja->ac10<100) and ($getkinerja->ac10>=90)){$color="#b98800";} else if ($getkinerja->ac10<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac10;  ?>%</td>
                                    <?php if (($getkinerja->ac11<100) and ($getkinerja->ac11>=90)){$color="#b98800";} else if ($getkinerja->ac11<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac11;  ?>%</td>
                                    <?php if (($getkinerja->ac12<100) and ($getkinerja->ac12>=90)){$color="#b98800";} else if ($getkinerja->ac12<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                    <td><font color="<?php echo $color; ?>"><?php echo $getkinerja->ac12;  ?>%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="datel">
                        <div class="table-responsive pt-3" >
                            <p class="card-title" style="margin-bottom:7px;font-size:19px;">Datel Performance <font color="blue">(<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</font></p>
                            <table id="" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th colspan=2 style="background-color:#ac4949;">Area</th>
                                        <th style="background-color:#ac4949;">Jan</th>
                                        <th style="background-color:#ac4949;">Feb</th>
                                        <th style="background-color:#ac4949;">Mar</th>
                                        <th style="background-color:#ac4949;">Apr</th>
                                        <th style="background-color:#ac4949;">Mei</th>
                                        <th style="background-color:#ac4949;">Jun</th>
                                        <th style="background-color:#ac4949;">Jul</th>
                                        <th style="background-color:#ac4949;">Aug</th>
                                        <th style="background-color:#ac4949;">Sep</th>
                                        <th style="background-color:#ac4949;">Okt</th>
                                        <th style="background-color:#ac4949;">Nov</th>
                                        <th style="background-color:#ac4949;">Des</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $getdatel=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='DATEL'")->result(); 
                                foreach ($getdatel as $rowdatel) :
                                ?>
                                    <tr style="background-color:#ececec;">
                                        <td rowspan='3'>
                                            <?php echo $this->db->query("select * from teritory where id_teritory='$rowdatel->teritory'")->row()->teritory; ?>
                                            <br>

                                            <?php
                                                $values = array();
                                                $angka=array();
                                                $bulanac='ac'.date('n');
                                                $ceknilaiachmtd=$this->db->query("select $bulanac as ac from kinerja where id_kinerja='$rowdatel->id_kinerja'")->row()->ac;
                                                $getrankdatel=$this->db->query("select $bulanac as ac from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='DATEL'")->result();
                                                $i=0;
                                                // echo "<br>".$ceknilaiachmtd."<br><br>";
                                                foreach ($getrankdatel as $rowrankdatel) :
                                                    $values[$i]=$rowrankdatel->ac;
                                                    $i++;
                                                endforeach;

                                                $ordered_values = $values;
                                                rsort($ordered_values);
                                                
                                                foreach ($values as $key => $value) {
                                                    foreach ($ordered_values as $ordered_key => $ordered_value) {
                                                        if ($value === $ordered_value) {
                                                            $key = $ordered_key;
                                                            break;
                                                        }
                                                    }
                                                    $angka[$value]=((int) $key + 1);
                                                }
                                                if ($angka[$ceknilaiachmtd]==1)
                                                {$color="#82cb87";}
                                                else
                                                {$color="#dc3545";}
                                            ?>
                                            <a href="#" class="btn btn-primary" style="font-size:12px;background-color:<?php echo $color; ?>;border:none;">
                                                <?php echo 'Rank Mtd #' .$angka[$ceknilaiachmtd]; ?>
                                            </a>
                                        </td>
                                        <td>Target</td>
                                        <?php
                                            $ceksat=$this->db->query("select * from indikator where id_indikator='$rowdatel->id_indikator'")->row()->satuan;
                                        ?>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t1/1000000000,2);}else{echo $rowdatel->t1;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t2/1000000000,2);}else{echo $rowdatel->t2;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t3/1000000000,2);}else{echo $rowdatel->t3;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t4/1000000000,2);}else{echo $rowdatel->t4;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t5/1000000000,2);}else{echo $rowdatel->t5;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t6/1000000000,2);}else{echo $rowdatel->t6;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t7/1000000000,2);}else{echo $rowdatel->t7;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t8/1000000000,2);}else{echo $rowdatel->t8;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t9/1000000000,2);}else{echo $rowdatel->t9;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t10/1000000000,2);}else{echo $rowdatel->t10;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t11/1000000000,2);}else{echo $rowdatel->t11;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->t12/1000000000,2);}else{echo $rowdatel->t12;}  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Realisasi</td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r1/1000000000,2);}else{echo $rowdatel->r1;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r2/1000000000,2);}else{echo $rowdatel->r2;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r3/1000000000,2);}else{echo $rowdatel->r3;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r4/1000000000,2);}else{echo $rowdatel->r4;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r5/1000000000,2);}else{echo $rowdatel->r5;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r6/1000000000,2);}else{echo $rowdatel->r6;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r7/1000000000,2);}else{echo $rowdatel->r7;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r8/1000000000,2);}else{echo $rowdatel->r8;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r9/1000000000,2);}else{echo $rowdatel->r9;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r10/1000000000,2);}else{echo $rowdatel->r10;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r11/1000000000,2);}else{echo $rowdatel->r11;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowdatel->r12/1000000000,2);}else{echo $rowdatel->r12;}  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ach</td>
                                        <?php if (($rowdatel->ac1<100) and ($rowdatel->ac1>=90)){$color="#b98800";} else if ($rowdatel->ac1<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac1;  ?>%</td>
                                        <?php if (($rowdatel->ac2<100) and ($rowdatel->ac2>=90)){$color="#b98800";} else if ($rowdatel->ac2<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac2;  ?>%</td>
                                        <?php if (($rowdatel->ac3<100) and ($rowdatel->ac3>=90)){$color="#b98800";} else if ($rowdatel->ac3<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac3;  ?>%</td>
                                        <?php if (($rowdatel->ac4<100) and ($rowdatel->ac4>=90)){$color="#b98800";} else if ($rowdatel->ac4<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac4;  ?>%</td>
                                        <?php if (($rowdatel->ac5<100) and ($rowdatel->ac5>=90)){$color="#b98800";} else if ($rowdatel->ac5<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac5;  ?>%</td>
                                        <?php if (($rowdatel->ac6<100) and ($rowdatel->ac6>=90)){$color="#b98800";} else if ($rowdatel->ac6<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac6;  ?>%</td>
                                        <?php if (($rowdatel->ac7<100) and ($rowdatel->ac7>=90)){$color="#b98800";} else if ($rowdatel->ac7<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac7;  ?>%</td>
                                        <?php if (($rowdatel->ac8<100) and ($rowdatel->ac8>=90)){$color="#b98800";} else if ($rowdatel->ac8<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac8;  ?>%</td>
                                        <?php if (($rowdatel->ac9<100) and ($rowdatel->ac9>=90)){$color="#b98800";} else if ($rowdatel->ac9<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac9;  ?>%</td>
                                        <?php if (($rowdatel->ac10<100) and ($rowdatel->ac10>=90)){$color="#b98800";} else if ($rowdatel->ac10<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac10;  ?>%</td>
                                        <?php if (($rowdatel->ac11<100) and ($rowdatel->ac11>=90)){$color="#b98800";} else if ($rowdatel->ac11<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac11;  ?>%</td>
                                        <?php if (($rowdatel->ac12<100) and ($rowdatel->ac11>=90)){$color="#b98800";} else if ($rowdatel->ac12<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowdatel->ac12;  ?>%</td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="hero">
                        <div class="table-responsive pt-3" >
                            <p class="card-title" style="margin-bottom:7px;font-size:19px;">Hero Performance <font color="blue">(<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</font></p>
                            <table id="" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th colspan=2 style="background-color:#ac4949;">Area</th>
                                        <th style="background-color:#ac4949;">Jan</th>
                                        <th style="background-color:#ac4949;">Feb</th>
                                        <th style="background-color:#ac4949;">Mar</th>
                                        <th style="background-color:#ac4949;">Apr</th>
                                        <th style="background-color:#ac4949;">Mei</th>
                                        <th style="background-color:#ac4949;">Jun</th>
                                        <th style="background-color:#ac4949;">Jul</th>
                                        <th style="background-color:#ac4949;">Aug</th>
                                        <th style="background-color:#ac4949;">Sep</th>
                                        <th style="background-color:#ac4949;">Okt</th>
                                        <th style="background-color:#ac4949;">Nov</th>
                                        <th style="background-color:#ac4949;">Des</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $gethero=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='HERO'")->result(); 
                                foreach ($gethero as $rowhero) :
                                ?>
                                    <tr style="background-color:#ececec;">
                                        <td rowspan='3'>
                                            <?php echo $this->db->query("select * from teritory where id_teritory='$rowhero->teritory'")->row()->teritory; ?>
                                            <br>
                                            <?php
                                                $values = array();
                                                $bulanac='ac'.date('n');
                                                $angka=array();
                                                $ceknilaiachmtd=$this->db->query("select $bulanac as ac from kinerja where id_kinerja='$rowhero->id_kinerja'")->row()->ac;
                                                $getrankdatel=$this->db->query("select $bulanac as ac from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='HERO'")->result();
                                                $i=0;
                                                // echo "<br>".$ceknilaiachmtd."<br><br>";
                                                foreach ($getrankdatel as $rowrankdatel) :
                                                    $values[$i]=$rowrankdatel->ac;
                                                    $i++;
                                                endforeach;

                                                $ordered_values = $values;
                                                rsort($ordered_values);
                                                
                                                foreach ($values as $key => $value) {
                                                    foreach ($ordered_values as $ordered_key => $ordered_value) {
                                                        if ($value === $ordered_value) {
                                                            $key = $ordered_key;
                                                            break;
                                                        }
                                                    }
                                                    $angka[$value]=((int) $key + 1);
                                                }
                                                if ($angka[$ceknilaiachmtd]==1)
                                                {$color="#82cb87";}
                                                else if ($angka[$ceknilaiachmtd]==4)
                                                {$color="#dc3545";}
                                                else
                                                {$color="#ffc107";}
                                            ?>

                                            <a href="#" class="btn btn-primary" style="font-size:12px;background-color:<?php echo $color; ?>;border:none;">
                                                <?php echo 'Rank Mtd #' .$angka[$ceknilaiachmtd]; ?>
                                            </a>
                                        </td>
                                        <td>Target</td>
                                        <?php
                                            $ceksat=$this->db->query("select * from indikator where id_indikator='$rowhero->id_indikator'")->row()->satuan;
                                        ?>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t1/1000000000,2);}else{echo $rowhero->t1;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t2/1000000000,2);}else{echo $rowhero->t2;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t3/1000000000,2);}else{echo $rowhero->t3;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t4/1000000000,2);}else{echo $rowhero->t4;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t5/1000000000,2);}else{echo $rowhero->t5;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t6/1000000000,2);}else{echo $rowhero->t6;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t7/1000000000,2);}else{echo $rowhero->t7;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t8/1000000000,2);}else{echo $rowhero->t8;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t9/1000000000,2);}else{echo $rowhero->t9;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t10/1000000000,2);}else{echo $rowhero->t10;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t11/1000000000,2);}else{echo $rowhero->t11;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->t12/1000000000,2);}else{echo $rowhero->t12;}  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Realisasi</td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r1/1000000000,2);}else{echo $rowhero->r1;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r2/1000000000,2);}else{echo $rowhero->r2;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r3/1000000000,2);}else{echo $rowhero->r3;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r4/1000000000,2);}else{echo $rowhero->r4;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r5/1000000000,2);}else{echo $rowhero->r5;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r6/1000000000,2);}else{echo $rowhero->r6;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r7/1000000000,2);}else{echo $rowhero->r7;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r8/1000000000,2);}else{echo $rowhero->r8;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r9/1000000000,2);}else{echo $rowhero->r9;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r10/1000000000,2);}else{echo $rowhero->r10;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r11/1000000000,2);}else{echo $rowhero->r11;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowhero->r12/1000000000,2);}else{echo $rowhero->r12;}  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ach</td>
                                        <?php if (($rowhero->ac1<100) and ($rowhero->ac1>=90)){$color="#b98800";} else if ($rowhero->ac1<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac1;  ?>%</td>
                                        <?php if (($rowhero->ac2<100) and ($rowhero->ac2>=90)){$color="#b98800";} else if ($rowhero->ac2<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac2;  ?>%</td>
                                        <?php if (($rowhero->ac3<100) and ($rowhero->ac3>=90)){$color="#b98800";} else if ($rowhero->ac3<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac3;  ?>%</td>
                                        <?php if (($rowhero->ac4<100) and ($rowhero->ac4>=90)){$color="#b98800";} else if ($rowhero->ac4<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac4;  ?>%</td>
                                        <?php if (($rowhero->ac5<100) and ($rowhero->ac5>=90)){$color="#b98800";} else if ($rowhero->ac5<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac5;  ?>%</td>
                                        <?php if (($rowhero->ac6<100) and ($rowhero->ac6>=90)){$color="#b98800";} else if ($rowhero->ac6<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac6;  ?>%</td>
                                        <?php if (($rowhero->ac7<100) and ($rowhero->ac7>=90)){$color="#b98800";} else if ($rowhero->ac7<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac7;  ?>%</td>
                                        <?php if (($rowhero->ac8<100) and ($rowhero->ac8>=90)){$color="#b98800";} else if ($rowhero->ac8<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac8;  ?>%</td>
                                        <?php if (($rowhero->ac9<100) and ($rowhero->ac9>=90)){$color="#b98800";} else if ($rowhero->ac9<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac9;  ?>%</td>
                                        <?php if (($rowhero->ac10<100) and ($rowhero->ac10>=90)){$color="#b98800";} else if ($rowhero->ac10<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac10;  ?>%</td>
                                        <?php if (($rowhero->ac11<100) and ($rowhero->ac11>=90)){$color="#b98800";} else if ($rowhero->ac11<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac11;  ?>%</td>
                                        <?php if (($rowhero->ac12<100) and ($rowhero->ac12>=90)){$color="#b98800";} else if ($rowhero->ac12<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowhero->ac12;  ?>%</td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="sto">
                        <div class="table-responsive pt-3" >
                            <p class="card-title" style="margin-bottom:7px;font-size:19px;">STO Performance <font color="blue">(<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</font></p>
                            <table id="" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th colspan=2 style="background-color:#ac4949;">Area</th>
                                        <th style="background-color:#ac4949;">Jan</th>
                                        <th style="background-color:#ac4949;">Feb</th>
                                        <th style="background-color:#ac4949;">Mar</th>
                                        <th style="background-color:#ac4949;">Apr</th>
                                        <th style="background-color:#ac4949;">Mei</th>
                                        <th style="background-color:#ac4949;">Jun</th>
                                        <th style="background-color:#ac4949;">Jul</th>
                                        <th style="background-color:#ac4949;">Aug</th>
                                        <th style="background-color:#ac4949;">Sep</th>
                                        <th style="background-color:#ac4949;">Okt</th>
                                        <th style="background-color:#ac4949;">Nov</th>
                                        <th style="background-color:#ac4949;">Des</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $getsto=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='STO'")->result(); 
                                foreach ($getsto as $rowsto) :
                                ?>
                                    <tr style="background-color:#ececec;">
                                        <td rowspan='3'>
                                            <?php echo $this->db->query("select * from teritory where id_teritory='$rowsto->teritory'")->row()->teritory; ?>
                                            <br>
                                            <?php
                                                $values = array();
                                                $bulanac='ac'.date('n');
                                                $angka=array();
                                                $ceknilaiachmtd=$this->db->query("select $bulanac as ac from kinerja where id_kinerja='$rowsto->id_kinerja'")->row()->ac;
                                                $getrankdatel=$this->db->query("select $bulanac as ac from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='STO'")->result();
                                                $i=0;
                                                // echo "<br>".$ceknilaiachmtd."<br><br>";
                                                foreach ($getrankdatel as $rowrankdatel) :
                                                    $values[$i]=$rowrankdatel->ac;
                                                    $i++;
                                                endforeach;

                                                $ordered_values = $values;
                                                rsort($ordered_values);
                                                
                                                foreach ($values as $key => $value) {
                                                    foreach ($ordered_values as $ordered_key => $ordered_value) {
                                                        if ($value === $ordered_value) {
                                                            $key = $ordered_key;
                                                            break;
                                                        }
                                                    }
                                                    $angka[$value]=((int) $key + 1);
                                                }

                                                if (($angka[$ceknilaiachmtd]==1) or ($angka[$ceknilaiachmtd]==2) or ($angka[$ceknilaiachmtd]==3))
                                                {$color="#82cb87";}
                                                else if (($angka[$ceknilaiachmtd]==19) or ($angka[$ceknilaiachmtd]==20) or ($angka[$ceknilaiachmtd]==21))
                                                {$color="#dc3545";}
                                                else
                                                {$color="#ffc107";}
                                                
                                            ?>

                                            <a href="#" class="btn btn-primary" style="font-size:12px;background-color:<?php echo $color; ?>;border:none;">
                                                <?php echo 'Rank Mtd #' .$angka[$ceknilaiachmtd]; ?>
                                            </a>
                                        </td>
                                        <td>Target</td>
                                        <?php
                                            $ceksat=$this->db->query("select * from indikator where id_indikator='$rowsto->id_indikator'")->row()->satuan;
                                        ?>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t1/1000000000,2);}else{echo $rowsto->t1;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t2/1000000000,2);}else{echo $rowsto->t2;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t3/1000000000,2);}else{echo $rowsto->t3;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t4/1000000000,2);}else{echo $rowsto->t4;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t5/1000000000,2);}else{echo $rowsto->t5;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t6/1000000000,2);}else{echo $rowsto->t6;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t7/1000000000,2);}else{echo $rowsto->t7;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t8/1000000000,2);}else{echo $rowsto->t8;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t9/1000000000,2);}else{echo $rowsto->t9;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t10/1000000000,2);}else{echo $rowsto->t10;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t11/1000000000,2);}else{echo $rowsto->t11;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->t12/1000000000,2);}else{echo $rowsto->t12;}  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Realisasi</td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r1/1000000000,2);}else{echo $rowsto->r1;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r2/1000000000,2);}else{echo $rowsto->r2;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r3/1000000000,2);}else{echo $rowsto->r3;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r4/1000000000,2);}else{echo $rowsto->r4;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r5/1000000000,2);}else{echo $rowsto->r5;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r6/1000000000,2);}else{echo $rowsto->r6;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r7/1000000000,2);}else{echo $rowsto->r7;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r8/1000000000,2);}else{echo $rowsto->r8;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r9/1000000000,2);}else{echo $rowsto->r9;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r10/1000000000,2);}else{echo $rowsto->r10;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r11/1000000000,2);}else{echo $rowsto->r11;}  ?></td>
                                        <td><?php if ($ceksat=='Rp (M)'){echo number_format($rowsto->r12/1000000000,2);}else{echo $rowsto->r12;}  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ach</td>
                                        <?php if (($rowsto->ac1<100) and ($rowsto->ac1>=90)){$color="#b98800";} else if ($rowsto->ac1<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac1;  ?>%</td>
                                        <?php if (($rowsto->ac2<100) and ($rowsto->ac2>=90)){$color="#b98800";} else if ($rowsto->ac2<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac2;  ?>%</td>
                                        <?php if (($rowsto->ac3<100) and ($rowsto->ac3>=90)){$color="#b98800";} else if ($rowsto->ac3<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac3;  ?>%</td>
                                        <?php if (($rowsto->ac4<100) and ($rowsto->ac4>=90)){$color="#b98800";} else if ($rowsto->ac4<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac4;  ?>%</td>
                                        <?php if (($rowsto->ac5<100) and ($rowsto->ac5>=90)){$color="#b98800";} else if ($rowsto->ac5<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac5;  ?>%</td>
                                        <?php if (($rowsto->ac6<100) and ($rowsto->ac6>=90)){$color="#b98800";} else if ($rowsto->ac6<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac6;  ?>%</td>
                                        <?php if (($rowsto->ac7<100) and ($rowsto->ac7>=90)){$color="#b98800";} else if ($rowsto->ac7<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac7;  ?>%</td>
                                        <?php if (($rowsto->ac8<100) and ($rowsto->ac8>=90)){$color="#b98800";} else if ($rowsto->ac8<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac8;  ?>%</td>
                                        <?php if (($rowsto->ac9<100) and ($rowsto->ac9>=90)){$color="#b98800";} else if ($rowsto->ac9<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac9;  ?>%</td>
                                        <?php if (($rowsto->ac10<100) and ($rowsto->ac10>=90)){$color="#b98800";} else if ($rowsto->ac10<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac10;  ?>%</td>
                                        <?php if (($rowsto->ac11<100) and ($rowsto->ac11>=90)){$color="#b98800";} else if ($rowsto->ac11<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac11;  ?>%</td>
                                        <?php if (($rowsto->ac12<100) and ($rowsto->ac12>=90)){$color="#b98800";} else if ($rowsto->ac12<90){$color="#dc3545";}else{$color="#82cb87";}?>
                                        <td><font color="<?php echo $color; ?>"><?php echo $rowsto->ac12;  ?>%</td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal dialog hapus data-->
<div class="modal fade" id="tambahdataff" role="dialog" aria-labelledby="tambahdataff" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Tambah Fact Finding</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="" role="form" method="POST" action="<?php echo site_url('kinerja/save_ff') ?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tanggal</label>
                      <br><b><?php echo date('d-m-Y'); ?></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fact Finding</label>
                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_indikator; ?>" id="id_indikator" name="id_indikator" placeholder="id indikator">
                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_kinerja; ?>" id="id_kinerja" name="id_kinerja" placeholder="id kinerja">
                        <!-- <input type="text" class="form-control " value="" id="fact" name="fact" placeholder="Fact Finding"> -->
                        <textarea id="summernote" id="fact" name="fact">
                            
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Teritory</label>
                        <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                            <?php $getteritory=$this->db->query("select * from teritory")->result(); foreach ($getteritory as $rowteritory) : ?>   
                                <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Status</label>
                      <br><b>Open</b>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="tambahdatall" role="dialog" aria-labelledby="tambahdatall" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Tambah Lesson Learn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="" role="form" method="POST" action="<?php echo site_url('kinerja/save_ll') ?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tanggal</label>
                      <br><b><?php echo date('d-m-Y'); ?></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lesson Learn</label>
                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_indikator; ?>" id="id_indikator" name="id_indikator" placeholder="id indikator">
                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_kinerja; ?>" id="id_kinerja" name="id_kinerja" placeholder="id kinerja">
                        <!-- <input type="text" class="form-control " value="" id="lesson" name="lesson" placeholder="Lesson Learn"> -->
                        <textarea id="summernote1" id="lesson" name="lesson">
                            
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Teritory</label>
                        <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                            <?php $getteritory=$this->db->query("select * from teritory")->result(); foreach ($getteritory as $rowteritory) : ?>   
                                <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Status</label>
                      <br><b>Open</b>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="tambahdataap" role="dialog" aria-labelledby="tambahdataap" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Tambah Action Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/save_ap') ?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tanggal</label>
                      <br><b><?php echo date('d-m-Y'); ?></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">PIC </label>
                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_indikator; ?>" id="id_indikator" name="id_indikator" placeholder="id indikator">
                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_kinerja; ?>" id="id_kinerja" name="id_kinerja" placeholder="id kinerja">
                        <!-- <input type="text" class="form-control " value="" id="pic_plan" name="pic_plan" placeholder="Pic Plan"></td> -->
                        <select class="form-control" id="pic_plan" name="pic_plan" placeholder="pic_plan" style="color:#000;">
                            <?php $getpic=$this->db->query("select * from new_user")->result(); foreach ($getpic as $rowpic) : ?>   
                                <option value="<?php echo $rowpic->nama_lengkap; ?>"><?php echo $rowpic->nama_lengkap; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Action Plan </label>
                        <!-- <input type="text" class="form-control " value="" id="plan" name="plan" placeholder="Plan"> -->
                        <textarea id="summernote2" id="plan" name="plan">
                            
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Key Result </label>
                        <!-- <input type="text" class="form-control " value="" id="key_result" name="key_result" placeholder="Key Result"> -->
                        <textarea id="summernote4" id="key_result" name="key_result">
                            
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">From </label>
                        <input type="text" class="form-control " value="" id="awal" name="awal" placeholder="From">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">To </label>
                        <input type="text" class="form-control " value="" id="akhir" name="akhir" placeholder="To">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori </label>
                        <select class="form-control" id="aspek_ppt" name="aspek_ppt" placeholder="aspek_ppt" style="color:#000;">
                            <option>People</option>
                            <option>Proses</option>
                            <option>Tools</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Teritory</label>
                        <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                            <?php $getteritory=$this->db->query("select * from teritory")->result(); foreach ($getteritory as $rowteritory) : ?>   
                                <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Status</label>
                      <br><b>Open</b>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="tambahdatasupport" role="dialog" aria-labelledby="tambahdatasupport" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Tambah Support Needed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/save_support') ?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tanggal</label>
                      <br><b><?php echo date('d-m-Y'); ?></b>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Support Needed </label>
                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_indikator; ?>" id="id_indikator" name="id_indikator" placeholder="id indikator">
                        <input type="hidden" class="form-control " value="<?php echo $getkinerja->id_kinerja; ?>" id="id_kinerja" name="id_kinerja" placeholder="id kinerja">
                        <!-- <input type="text" class="form-control " value="" id="support" name="support" placeholder="Support Needed"></td> -->
                        <textarea id="summernote3" id="support" name="support">
                            
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UIC </label>
                        <select class="form-control" id="uic_support" name="uic_support" placeholder="uic_support" style="color:#000;">
                            <?php $getloker=$this->db->query("select * from loker")->result(); foreach ($getloker as $rowloker) : ?>   
                                <option value="<?php echo $rowloker->id_loker; ?>"><?php echo $rowloker->nama_loker; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori </label>
                        <select class="form-control" id="aspek_ppt" name="aspek_ppt" placeholder="aspek_ppt" style="color:#000;">
                            <option>People</option>
                            <option>Proses</option>
                            <option>Tools</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Teritory</label>
                        <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;">
                            <?php $getteritory=$this->db->query("select * from teritory")->result(); foreach ($getteritory as $rowteritory) : ?>   
                                <option value="<?php echo $rowteritory->id_teritory; ?>"><?php echo $rowteritory->teritory; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Status</label>
                      <br><b>Open</b>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script>
$(document).ready(function() {
    // ambil data kabupaten ketika data memilih provinsi
    // $('body').on("change","#cekunitku",function(){
    //     var id_loker = $(this).val();
    //     var data = "id_loker="+id_loker;
    //     $.ajax({
    //     type: 'POST',
    //     url: <?php echo site_url('kinerja/getkinerja'); ?>,
    //     data: data,
    //     success: function(hasil) {
    //         $('#cekidkinerjaku').html(response);
    //     }
    //     });
    // });

    $('#cekunitku').change(function() { // Jika Select Box id provinsi dipilih
     var id_loker = $(this).val(); // Ciptakan variabel provinsi
     $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST
            url: '<?php echo site_url('kinerja/getkinerja'); ?>', // File yang akan memproses data
            data: 'id_loker=' + id_loker, // Data yang akan dikirim ke file pemroses
            success: function(response) { // Jika berhasil
              $('#cekidkinerjaku').html(response); // Berikan hasil ke id kota
            }
       });
    });


});
</script>

<script>
    

    //menampilkan data ketabel dengan plugin datatables
    $('#tableuser').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableuser').on('click', '.item-hapus', function() {
        //ambil data dari atribute data 
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
        //pada controller mahasiswa
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>mahasiswa/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>


<script type="text/javascript">
    (function($) {
    'use strict';
    $(function() {
        if ($("#order-chart").length) {
        var areaData = {
            labels: ["10","","","20","","","30","","","40","","", "50","","", "60","","","70"],
            datasets: [
            {
                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350", "590", "350", "620", "500", "990", "780", "650"],
                borderColor: [
                '#4747A1'
                ],
                borderWidth: 2,
                fill: false,
                label: "Orders"
            },
            {
                data: [400, 450, 410, 500, 480, 600, 450, 550, 460, "560", "450", "700", "450", "640", "550", "650", "400", "850", "800"],
                borderColor: [
                '#F09397'
                ],
                borderWidth: 2,
                fill: false,
                label: "Downloads"
            }
            ]
        };
        var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
            filler: {
                propagate: false
            }
            },
            scales: {
            xAxes: [{
                display: true,
                ticks: {
                display: true,
                padding: 10,
                fontColor:"#6C7383"
                },
                gridLines: {
                display: false,
                drawBorder: false,
                color: 'transparent',
                zeroLineColor: '#eeeeee'
                }
            }],
            yAxes: [{
                display: true,
                ticks: {
                display: true,
                autoSkip: false,
                maxRotation: 0,
                stepSize: 200,
                min: 200,
                max: 1200,
                padding: 18,
                fontColor:"#6C7383"
                },
                gridLines: {
                display: true,
                color:"#f2f2f2",
                drawBorder: false
                }
            }]
            },
            legend: {
            display: false
            },
            tooltips: {
            enabled: true
            },
            elements: {
            line: {
                tension: .35
            },
            point: {
                radius: 0
            }
            }
        }
        var revenueChartCanvas = $("#order-chart").get(0).getContext("2d");
        var revenueChart = new Chart(revenueChartCanvas, {
            type: 'line',
            data: areaData,
            options: areaOptions
        });
        }
        if ($("#order-chart-dark").length) {
        var areaData = {
            labels: ["10","","","20","","","30","","","40","","", "50","","", "60","","","70"],
            datasets: [
            {
                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350", "590", "350", "620", "500", "990", "780", "650"],
                borderColor: [
                '#4747A1'
                ],
                borderWidth: 2,
                fill: false,
                label: "Orders"
            },
            {
                data: [400, 450, 410, 500, 480, 600, 450, 550, 460, "560", "450", "700", "450", "640", "550", "650", "400", "850", "800"],
                borderColor: [
                '#F09397'
                ],
                borderWidth: 2,
                fill: false,
                label: "Downloads"
            }
            ]
        };
        var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
            filler: {
                propagate: false
            }
            },
            scales: {
            xAxes: [{
                display: true,
                ticks: {
                display: true,
                padding: 10,
                fontColor:"#fff"
                },
                gridLines: {
                display: false,
                drawBorder: false,
                color: 'transparent',
                zeroLineColor: '#575757'
                }
            }],
            yAxes: [{
                display: true,
                ticks: {
                display: true,
                autoSkip: false,
                maxRotation: 0,
                stepSize: 200,
                min: 200,
                max: 1200,
                padding: 18,
                fontColor:"#fff"
                },
                gridLines: {
                display: true,
                color:"#575757",
                drawBorder: false
                }
            }]
            },
            legend: {
            display: false
            },
            tooltips: {
            enabled: true
            },
            elements: {
            line: {
                tension: .35
            },
            point: {
                radius: 0
            }
            }
        }
        var revenueChartCanvas = $("#order-chart-dark").get(0).getContext("2d");
        var revenueChart = new Chart(revenueChartCanvas, {
            type: 'line',
            data: areaData,
            options: areaOptions
        });
        }

        if ($("#sales-chart").length) {
        var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
        var SalesChart = new Chart(SalesChartCanvas, {
            type: 'bar',
            data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May","Jun","Jul","Aug","Sep","Oct","Nov","Des"],
            datasets: [{
                label: 'Target',
                data: [<?php 
                    $getsat=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row()->satuan;
                    if ($getsat=='Rp (M)')
                        echo number_format($getkinerja->t1/1000000000,1).','.number_format($getkinerja->t2/1000000000,1).','.number_format($getkinerja->t3/1000000000,1).','.number_format($getkinerja->t4/1000000000,1).','.number_format($getkinerja->t5/1000000000,1).','.number_format($getkinerja->t6/1000000000,1).','.number_format($getkinerja->t7/1000000000,1).','.number_format($getkinerja->t8/1000000000,1).','.number_format($getkinerja->t9/1000000000,1).','.number_format($getkinerja->t10/1000000000,1).','.number_format($getkinerja->t11/1000000000,1).','.number_format($getkinerja->t12/1000000000,1); 
                    else
                        echo "$getkinerja->t1,$getkinerja->t2,$getkinerja->t3,$getkinerja->t4,$getkinerja->t5,$getkinerja->t6,$getkinerja->t7,$getkinerja->t8,$getkinerja->t9,$getkinerja->t10,$getkinerja->t11,$getkinerja->t12,"; 
                    ?>],
                backgroundColor: '#98BDFF',
                datalabels:{
                    color:'black',
                    anchor:'end',
                    align:'top',
                    borderWidth: 1,
                    padding:4,
                    backgroundColor: "#98BDFF"
                }
                },
                {
                label: 'Realisasi',
                data: [<?php 
                if ($getsat=='Rp (M)')
                    echo number_format($getkinerja->r1/1000000000,1).','.number_format($getkinerja->r2/1000000000,1).','.number_format($getkinerja->r3/1000000000,1).','.number_format($getkinerja->r4/1000000000,1).','.number_format($getkinerja->r5/1000000000,1).','.number_format($getkinerja->r6/1000000000,1).','.number_format($getkinerja->r7/1000000000,1).','.number_format($getkinerja->r8/1000000000,1).','.number_format($getkinerja->r9/1000000000,1).','.number_format($getkinerja->r10/1000000000,1).','.number_format($getkinerja->r11/1000000000,1).','.number_format($getkinerja->r12/1000000000,1); 
                else
                    echo "$getkinerja->r1,$getkinerja->r2,$getkinerja->r3,$getkinerja->r4,$getkinerja->r5,$getkinerja->r6,$getkinerja->r7,$getkinerja->r8,$getkinerja->r9,$getkinerja->r10,$getkinerja->r11,$getkinerja->r12,"; 
                    ?>],
                backgroundColor: '#4B49AC',
                datalabels:{
                    color:'white',
                    anchor:'end',
                    align:'top',
                    boxWidth: 20,
                    padding:4,
                    borderWidth: 1,
                    backgroundColor: "#4B49AC"
                }
                }
            ]},
            plugins: [ChartDataLabels],
            options: {
            cornerRadius: 5,
            plugins:{
                legend: {
                    position:'bottom',
                }
            },
            responsive: true,
            maintainAspectRatio: true,
            layout: {
                padding: {
                left: 0,
                right: 0,
                top: 20,
                bottom: 0
                }
            },
            scales: {
                yAxes: [{
                display: true,
                gridLines: {
                    display: true,
                    drawBorder: false,
                    color: "#F2F2F2"
                },
                ticks: {
                    display: true,
                    min: 0,
                    <?php $max=max($getkinerja->r1,$getkinerja->r2,$getkinerja->r3,$getkinerja->r4,$getkinerja->r5,$getkinerja->r6,$getkinerja->r7,$getkinerja->r8,$getkinerja->r9,$getkinerja->r10,$getkinerja->r11,$getkinerja->r12,$getkinerja->t1,$getkinerja->t2,$getkinerja->t3,$getkinerja->t4,$getkinerja->t5,$getkinerja->t6,$getkinerja->t7,$getkinerja->t8,$getkinerja->t9,$getkinerja->t10,$getkinerja->t11,$getkinerja->t12); ?>
                    max: <?php 
                    if ($getsat=='Rp (M)')
                        echo number_format($max/1000000000,2); 
                    else 
                        echo $max;
                    ?>,
                    callback: function(value, index, values) {
                    return  value + '' ;
                    },
                    autoSkip: true,
                    maxTicksLimit: 10,
                    fontColor:"#6C7383"
                }
                }],
                xAxes: [{
                stacked: false,
                ticks: {
                    beginAtZero: true,
                    fontColor: "#6C7383"
                },
                gridLines: {
                    color: "rgba(0, 0, 0, 0)",
                    display: false
                },
                barPercentage: 1
                }]
            },
            legend: {
                display: true,
                position: 'bottom',
            },
            elements: {
                point: {
                radius: 0
                }
            }
            },
        });
        document.getElementById('sales-chart').innerHTML = SalesChart.generateLegend();
        }
        if ($("#sales-chart-dark").length) {
        var SalesChartCanvas = $("#sales-chart-dark").get(0).getContext("2d");
        var SalesChart = new Chart(SalesChartCanvas, {
            type: 'bar',
            data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May"],
            datasets: [{
                label: 'Offline Sales',
                data: [480, 230, 470, 210, 330],
                backgroundColor: '#98BDFF'
                },
                {
                label: 'Online Sales',
                data: [400, 340, 550, 480, 170],
                backgroundColor: '#4B49AC'
                }
            ]
            },
            options: {
            cornerRadius: 5,
            responsive: true,
            maintainAspectRatio: true,
            layout: {
                padding: {
                left: 0,
                right: 0,
                top: 20,
                bottom: 0
                }
            },
            scales: {
                yAxes: [{
                display: true,
                gridLines: {
                    display: true,
                    drawBorder: false,
                    color: "#575757"
                },
                ticks: {
                    display: true,
                    min: 0,
                    max: 500,
                    callback: function(value, index, values) {
                    return  value + '$' ;
                    },
                    autoSkip: true,
                    maxTicksLimit: 10,
                    fontColor:"#F0F0F0"
                }
                }],
                xAxes: [{
                stacked: false,
                ticks: {
                    beginAtZero: true,
                    fontColor: "#F0F0F0"
                },
                gridLines: {
                    color: "#575757",
                    display: false
                },
                barPercentage: 1
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                radius: 0
                }
            }
            },
        });
        document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
        }
        if ($("#north-america-chart").length) {
        var areaData = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [{
                data: [100, 50, 50],
                backgroundColor: [
                "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
            }
            ]
        };
        var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 78,
            elements: {
            arc: {
                borderWidth: 4
            }
            },      
            legend: {
            display: false
            },
            tooltips: {
            enabled: true
            },
            legendCallback: function(chart) { 
            var text = [];
            text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
                text.push('<p class="mb-0">88333</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                text.push('<p class="mb-0">66093</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                text.push('<p class="mb-0">39836</p>');
                text.push('</div>');
            text.push('</div>');
            return text.join("");
            },
        }
        var northAmericaChartPlugins = {
            beforeDraw: function(chart) {
            var width = chart.chart.width,
                height = chart.chart.height,
                ctx = chart.chart.ctx;
        
            ctx.restore();
            var fontSize = 3.125;
            ctx.font = "500 " + fontSize + "em sans-serif";
            ctx.textBaseline = "middle";
            ctx.fillStyle = "#13381B";
        
            var text = "90",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 2;
        
            ctx.fillText(text, textX, textY);
            ctx.save();
            }
        }
        var northAmericaChartCanvas = $("#north-america-chart").get(0).getContext("2d");
        var northAmericaChart = new Chart(northAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: northAmericaChartPlugins
        });
        document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
        }
        if ($("#north-america-chart-dark").length) {
        var areaData = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [{
                data: [100, 50, 50],
                backgroundColor: [
                "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
            }
            ]
        };
        var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 78,
            elements: {
            arc: {
                borderWidth: 4
            }
            },      
            legend: {
            display: false
            },
            tooltips: {
            enabled: true
            },
            legendCallback: function(chart) { 
            var text = [];
            text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
                text.push('<p class="mb-0">88333</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                text.push('<p class="mb-0">66093</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                text.push('<p class="mb-0">39836</p>');
                text.push('</div>');
            text.push('</div>');
            return text.join("");
            },
        }
        var northAmericaChartPlugins = {
            beforeDraw: function(chart) {
            var width = chart.chart.width,
                height = chart.chart.height,
                ctx = chart.chart.ctx;
        
            ctx.restore();
            var fontSize = 3.125;
            ctx.font = "500 " + fontSize + "em sans-serif";
            ctx.textBaseline = "middle";
            ctx.fillStyle = "#fff";
        
            var text = "90",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 2;
        
            ctx.fillText(text, textX, textY);
            ctx.save();
            }
        }
        var northAmericaChartCanvas = $("#north-america-chart-dark").get(0).getContext("2d");
        var northAmericaChart = new Chart(northAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: northAmericaChartPlugins
        });
        document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
        }

        if ($("#south-america-chart").length) {
        var areaData = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [{
                data: [60, 70, 70],
                backgroundColor: [
                "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
            }
            ]
        };
        var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 78,
            elements: {
            arc: {
                borderWidth: 4
            }
            },      
            legend: {
            display: false
            },
            tooltips: {
            enabled: true
            },
            legendCallback: function(chart) { 
            var text = [];
            text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
                text.push('<p class="mb-0">495343</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                text.push('<p class="mb-0">630983</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                text.push('<p class="mb-0">290831</p>');
                text.push('</div>');
            text.push('</div>');
            return text.join("");
            },
        }
        var southAmericaChartPlugins = {
            beforeDraw: function(chart) {
            var width = chart.chart.width,
                height = chart.chart.height,
                ctx = chart.chart.ctx;
        
            ctx.restore();
            var fontSize = 3.125;
            ctx.font = "600 " + fontSize + "em sans-serif";
            ctx.textBaseline = "middle";
            ctx.fillStyle = "#000";
        
            var text = "76",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 2;
        
            ctx.fillText(text, textX, textY);
            ctx.save();
            }
        }
        var southAmericaChartCanvas = $("#south-america-chart").get(0).getContext("2d");
        var southAmericaChart = new Chart(southAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: southAmericaChartPlugins
        });
        document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
        }
        if ($("#south-america-chart-dark").length) {
        var areaData = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [{
                data: [60, 70, 70],
                backgroundColor: [
                "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
            }
            ]
        };
        var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 78,
            elements: {
            arc: {
                borderWidth: 4
            }
            },      
            legend: {
            display: false
            },
            tooltips: {
            enabled: true
            },
            legendCallback: function(chart) { 
            var text = [];
            text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Offline sales</p></div>');
                text.push('<p class="mb-0">495343</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                text.push('<p class="mb-0">630983</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                text.push('<p class="mb-0">290831</p>');
                text.push('</div>');
            text.push('</div>');
            return text.join("");
            },
        }
        var southAmericaChartPlugins = {
            beforeDraw: function(chart) {
            var width = chart.chart.width,
                height = chart.chart.height,
                ctx = chart.chart.ctx;
        
            ctx.restore();
            var fontSize = 3.125;
            ctx.font = "600 " + fontSize + "em sans-serif";
            ctx.textBaseline = "middle";
            ctx.fillStyle = "#fff";
        
            var text = "76",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 2;
        
            ctx.fillText(text, textX, textY);
            ctx.save();
            }
        }
        var southAmericaChartCanvas = $("#south-america-chart-dark").get(0).getContext("2d");
        var southAmericaChart = new Chart(southAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: southAmericaChartPlugins
        });
        document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
        }

        function format ( d ) {
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="width:100%;">'+
            '<tr class="expanded-row">'+
                '<td colspan="8" class="row-bg"><div><div class="d-flex justify-content-between"><div class="cell-hilighted"><div class="d-flex mb-2"><div class="mr-2 min-width-cell"><p>Policy start date</p><h6>25/04/2020</h6></div><div class="min-width-cell"><p>Policy end date</p><h6>24/04/2021</h6></div></div><div class="d-flex"><div class="mr-2 min-width-cell"><p>Sum insured</p><h5>$26,000</h5></div><div class="min-width-cell"><p>Premium</p><h5>$1200</h5></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Quote no.</p><h6>Incs234</h6></div><div class="mr-2"><p>Vehicle Reg. No.</p><h6>KL-65-A-7004</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Policy number</p><h6>Incsq123456</h6></div><div class="mr-2"><p>Policy number</p><h6>Incsq123456</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-3 d-flex"><div class="highlighted-alpha"> A</div><div><p>Agent / Broker</p><h6>Abcd Enterprices</h6></div></div><div class="mr-2 d-flex"> <img src="../../images/faces/face5.jpg" alt="profile"/><div><p>Policy holder Name & ID Number</p><h6>Phillip Harris / 1234567</h6></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Branch</p><h6>Koramangala, Bangalore</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Channel</p><h6>Online</h6></div></div></div></div></td>'
            '</tr>'+
        '</table>';
    }
    var table = $('#example').DataTable( {
        "ajax": "js/data.txt",
        "columns": [
            { "data": "Quote" },
            { "data": "Product" },
            { "data": "Business" },
            { "data": "Policy" }, 
            { "data": "Premium" }, 
            { "data": "Status" }, 
            { "data": "Updated" }, 
            {
            "className":      'details-control',
            "orderable":      false,
            "data":           null,
            "defaultContent": ''
            }
        ],
        "order": [[1, 'asc']],
        "paging":   false,
        "ordering": true,
        "info":     false,
        "filter": false,
        columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
        }],
        select: {
        style: 'os',
        selector: 'td:first-child'
        }
    } );
    $('#example tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = table.row( tr );

    if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
    }
    else {
        // Open this row
        row.child( format(row.data()) ).show();
        tr.addClass('shown');
    }
    } );
    
    });
    })(jQuery);
</script>

