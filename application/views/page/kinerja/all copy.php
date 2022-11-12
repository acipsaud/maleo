<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Filter</h4>
                    <table id="tableuser">
                        <tr>
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/unit_detail') ?>">
                            <td style="width:10%;">
                                Pilih Kinerja :
                                <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;width:200px;"> 
                                    <option>Pilih kinerja..</option>
                                    <?php 
                                        $getkiner=$this->db->query("select * from indikator")->result();
                                        foreach ($getkiner as $rowkiner) : 
                                    ?>
                                    <option value="<?php echo $rowkiner->id_indikator; ?>"><?php echo $rowkiner->indikator; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td style="width:1%;"></td>

                            <!-- </td>
                            <td style="width:10%;">
                                Pilih Kategori Indikator :
                                <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;width:200px;"> 
                                    <option>All Kategori</option>
                                </select>
                            </td> -->
                            <!-- <td style="width:2%;">

                            </td> -->
                            <td style="vertical-align:bottom;width:20%;">
                                <button type="submit" class="btn btn-outline-primary btn-icon-text" style="width:100%">
                                    <i class="ti-search btn-icon-prepend"></i>
                                    Lihat
                                </button>
                            </td>
                            </form>
                            <td style="width:78%;vertical-align:bottom;" align="right">
                                <a href="<?php echo site_url('indikator/add'); ?>" class="btn btn-outline-primary btn-icon-text">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah Indikator
                                </a>
                                <a href="<?php echo site_url('manageuser/add'); ?>" class="btn btn-outline-danger btn-icon-text">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah Kinerja
                                </a>
                            </td>
                        </tr>   
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                            <p class="card-title">Indikator Kinerja <font color="red"><?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator'")->row(); echo $nam->indikator.' - ('.$man->tanding.')'; ?></font></p>
                            <a href="#" class="text-info">View all</a>
                            </div>
                            <p class="font-weight-500">Berikut report Target vs Realisasi <?php echo $nam->indikator.' - ('.$man->tanding.')'; ?></p>
                            <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                            <canvas id="sales-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <p class="card-title" style="margin-bottom:7px;font-size:15px;">Fact Finding</p>
                        <table id="" class="display expandable-table" style="width:100%">
                            <thead>
                                <tr>
                                <th >No</th>
                                <th>Tanggal</th>
                                <th>Fact Finding</th>
                                <th>Teritory</th>
                                <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>26-09-2022</td>
                                <td>Perlu Tindak Lanjut untuk memperbaiki PS</td>
                                <td>Datel Luwuk</td>
                                <td>Open</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <p class="card-title" style="margin-bottom:7px;font-size:15px;">Lesson Learn</p>
                        <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Lesson Learn</th>
                              <th>Teritory</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>26-09-2022</td>
                              <td>Perlu Tindak Lanjut untuk memperbaiki PS</td>
                              <td>Datel Luwuk</td>
                              <td>Open</td>
                            </tr>
                            
                          </tbody>
                      </table>
                    </div>
                    <div class="table-responsive">
                        <p class="card-title" style="margin-bottom:7px;font-size:15px;">Action Plan</p>
                        <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Lesson Learn</th>
                              <th>Teritory</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>26-09-2022</td>
                              <td>Perlu Tindak Lanjut untuk memperbaiki PS</td>
                              <td>Datel Luwuk</td>
                              <td>Open</td>
                            </tr>
                            
                          </tbody>
                      </table>
                    </div>
                    <div class="table-responsive">
                        <p class="card-title" style="margin-bottom:7px;font-size:15px;">Support Needed</p>
                        <table id="" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Support Needed</th>
                              <th>UIC</th>
                              <th>Kategori (PPT)</th>
                              <th>Teritory</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>26-09-2022</td>
                              <td>Perlu Tindak Lanjut untuk memperbaiki PS</td>
                              <td>CS</td>
                              <td>People</td>
                              <td>STO Bungku</td>
                              <td>Open</td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    Witel
                    <table id="" class="table table-striped table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Area</th>
                                <th>Jan</th>
                                <th>Feb</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>Mei</th>
                                <th>Jun</th>
                                <th>Jul</th>
                                <th>Aug</th>
                                <th>Sep</th>
                                <th>Okt</th>
                                <th>Nov</th>
                                <th>Des</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Target</td>
                                <td><?php echo $getkinerja->t1;  ?></td>
                                <td><?php echo $getkinerja->t2;  ?></td>
                                <td><?php echo $getkinerja->t3;  ?></td>
                                <td><?php echo $getkinerja->t4;  ?></td>
                                <td><?php echo $getkinerja->t5;  ?></td>
                                <td><?php echo $getkinerja->t6;  ?></td>
                                <td><?php echo $getkinerja->t7;  ?></td>
                                <td><?php echo $getkinerja->t8;  ?></td>
                                <td><?php echo $getkinerja->t9;  ?></td>
                                <td><?php echo $getkinerja->t10;  ?></td>
                                <td><?php echo $getkinerja->t11;  ?></td>
                                <td><?php echo $getkinerja->t12;  ?></td>
                            </tr>
                            <tr>
                                <td>Realisasi</td>
                                <td><?php echo $getkinerja->r1;  ?></td>
                                <td><?php echo $getkinerja->r2;  ?></td>
                                <td><?php echo $getkinerja->r3;  ?></td>
                                <td><?php echo $getkinerja->r4;  ?></td>
                                <td><?php echo $getkinerja->r5;  ?></td>
                                <td><?php echo $getkinerja->r6;  ?></td>
                                <td><?php echo $getkinerja->r7;  ?></td>
                                <td><?php echo $getkinerja->r8;  ?></td>
                                <td><?php echo $getkinerja->r9;  ?></td>
                                <td><?php echo $getkinerja->r10;  ?></td>
                                <td><?php echo $getkinerja->r11;  ?></td>
                                <td><?php echo $getkinerja->r12;  ?></td>
                            </tr>
                            <tr>
                                <td>Ach</td>
                                <td><?php echo $getkinerja->ac1;  ?></td>
                                <td><?php echo $getkinerja->ac2;  ?></td>
                                <td><?php echo $getkinerja->ac3;  ?></td>
                                <td><?php echo $getkinerja->ac4;  ?></td>
                                <td><?php echo $getkinerja->ac5;  ?></td>
                                <td><?php echo $getkinerja->ac6;  ?></td>
                                <td><?php echo $getkinerja->ac7;  ?></td>
                                <td><?php echo $getkinerja->ac8;  ?></td>
                                <td><?php echo $getkinerja->ac9;  ?></td>
                                <td><?php echo $getkinerja->ac10;  ?></td>
                                <td><?php echo $getkinerja->ac11;  ?></td>
                                <td><?php echo $getkinerja->ac12;  ?></td>
                            </tr>
                        </tbody>
                    </table>

                    
                    <div class="table-responsive pt-3" >
                        Datel
                        <table id="" class="table table-striped table-bordered border-bottom border-top " style="width:100%">
                            <thead>
                                <tr>
                                    <th colspan=2>Area</th>
                                    <th>Jan</th>
                                    <th>Feb</th>
                                    <th>Mar</th>
                                    <th>Apr</th>
                                    <th>Mei</th>
                                    <th>Jun</th>
                                    <th>Jul</th>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Okt</th>
                                    <th>Nov</th>
                                    <th>Des</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $getdatel=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='DATEL'")->result(); 
                            foreach ($getdatel as $rowdatel) :
                            ?>
                                <tr><td rowspan='3'><?php echo $this->db->query("select * from teritory where id_teritory='$rowdatel->teritory'")->row()->teritory; ?></td>
                                    <td>Target</td>
                                    <td><?php echo $rowdatel->t1;  ?></td>
                                    <td><?php echo $rowdatel->t2;  ?></td>
                                    <td><?php echo $rowdatel->t3;  ?></td>
                                    <td><?php echo $rowdatel->t4;  ?></td>
                                    <td><?php echo $rowdatel->t5;  ?></td>
                                    <td><?php echo $rowdatel->t6;  ?></td>
                                    <td><?php echo $rowdatel->t7;  ?></td>
                                    <td><?php echo $rowdatel->t8;  ?></td>
                                    <td><?php echo $rowdatel->t9;  ?></td>
                                    <td><?php echo $rowdatel->t10;  ?></td>
                                    <td><?php echo $rowdatel->t11;  ?></td>
                                    <td><?php echo $rowdatel->t12;  ?></td>
                                </tr>
                                <tr>
                                    <td>Realisasi</td>
                                    <td><?php echo $rowdatel->r1;  ?></td>
                                    <td><?php echo $rowdatel->r2;  ?></td>
                                    <td><?php echo $rowdatel->r3;  ?></td>
                                    <td><?php echo $rowdatel->r4;  ?></td>
                                    <td><?php echo $rowdatel->r5;  ?></td>
                                    <td><?php echo $rowdatel->r6;  ?></td>
                                    <td><?php echo $rowdatel->r7;  ?></td>
                                    <td><?php echo $rowdatel->r8;  ?></td>
                                    <td><?php echo $rowdatel->r9;  ?></td>
                                    <td><?php echo $rowdatel->r10;  ?></td>
                                    <td><?php echo $rowdatel->r11;  ?></td>
                                    <td><?php echo $rowdatel->r12;  ?></td>
                                </tr>
                                <tr>
                                    <td>Ach</td>
                                    <td><?php echo $rowdatel->ac1;  ?></td>
                                    <td><?php echo $rowdatel->ac2;  ?></td>
                                    <td><?php echo $rowdatel->ac3;  ?></td>
                                    <td><?php echo $rowdatel->ac4;  ?></td>
                                    <td><?php echo $rowdatel->ac5;  ?></td>
                                    <td><?php echo $rowdatel->ac6;  ?></td>
                                    <td><?php echo $rowdatel->ac7;  ?></td>
                                    <td><?php echo $rowdatel->ac8;  ?></td>
                                    <td><?php echo $rowdatel->ac9;  ?></td>
                                    <td><?php echo $rowdatel->ac10;  ?></td>
                                    <td><?php echo $rowdatel->ac11;  ?></td>
                                    <td><?php echo $rowdatel->ac12;  ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive pt-3" >
                        Hero
                        <table id="" class="table table-striped table-bordered border-bottom border-top " style="width:100%">
                            <thead>
                                <tr>
                                    <th colspan=2>Area</th>
                                    <th>Jan</th>
                                    <th>Feb</th>
                                    <th>Mar</th>
                                    <th>Apr</th>
                                    <th>Mei</th>
                                    <th>Jun</th>
                                    <th>Jul</th>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Okt</th>
                                    <th>Nov</th>
                                    <th>Des</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $gethero=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='HERO'")->result(); 
                            foreach ($gethero as $rowhero) :
                            ?>
                                <tr><td rowspan='3'><?php echo $this->db->query("select * from teritory where id_teritory='$rowhero->teritory'")->row()->teritory; ?></td>
                                    <td>Target</td>
                                    <td><?php echo $rowhero->t1;  ?></td>
                                    <td><?php echo $rowhero->t2;  ?></td>
                                    <td><?php echo $rowhero->t3;  ?></td>
                                    <td><?php echo $rowhero->t4;  ?></td>
                                    <td><?php echo $rowhero->t5;  ?></td>
                                    <td><?php echo $rowhero->t6;  ?></td>
                                    <td><?php echo $rowhero->t7;  ?></td>
                                    <td><?php echo $rowhero->t8;  ?></td>
                                    <td><?php echo $rowhero->t9;  ?></td>
                                    <td><?php echo $rowhero->t10;  ?></td>
                                    <td><?php echo $rowhero->t11;  ?></td>
                                    <td><?php echo $rowhero->t12;  ?></td>
                                </tr>
                                <tr>
                                    <td>Realisasi</td>
                                    <td><?php echo $rowhero->r1;  ?></td>
                                    <td><?php echo $rowhero->r2;  ?></td>
                                    <td><?php echo $rowhero->r3;  ?></td>
                                    <td><?php echo $rowhero->r4;  ?></td>
                                    <td><?php echo $rowhero->r5;  ?></td>
                                    <td><?php echo $rowhero->r6;  ?></td>
                                    <td><?php echo $rowhero->r7;  ?></td>
                                    <td><?php echo $rowhero->r8;  ?></td>
                                    <td><?php echo $rowhero->r9;  ?></td>
                                    <td><?php echo $rowhero->r10;  ?></td>
                                    <td><?php echo $rowhero->r11;  ?></td>
                                    <td><?php echo $rowhero->r12;  ?></td>
                                </tr>
                                <tr>
                                    <td>Ach</td>
                                    <td><?php echo $rowhero->ac1;  ?></td>
                                    <td><?php echo $rowhero->ac2;  ?></td>
                                    <td><?php echo $rowhero->ac3;  ?></td>
                                    <td><?php echo $rowhero->ac4;  ?></td>
                                    <td><?php echo $rowhero->ac5;  ?></td>
                                    <td><?php echo $rowhero->ac6;  ?></td>
                                    <td><?php echo $rowhero->ac7;  ?></td>
                                    <td><?php echo $rowhero->ac8;  ?></td>
                                    <td><?php echo $rowhero->ac9;  ?></td>
                                    <td><?php echo $rowhero->ac10;  ?></td>
                                    <td><?php echo $rowhero->ac11;  ?></td>
                                    <td><?php echo $rowhero->ac12;  ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive pt-3" >
                        STO
                        <table id="" class="table table-striped table-bordered border-bottom border-top " style="width:100%">
                            <thead>
                                <tr>
                                    <th colspan=2>Area</th>
                                    <th>Jan</th>
                                    <th>Feb</th>
                                    <th>Mar</th>
                                    <th>Apr</th>
                                    <th>Mei</th>
                                    <th>Jun</th>
                                    <th>Jul</th>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Okt</th>
                                    <th>Nov</th>
                                    <th>Des</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $getsto=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='STO'")->result(); 
                            foreach ($getsto as $rowsto) :
                            ?>
                                <tr><td rowspan='3'><?php echo $this->db->query("select * from teritory where id_teritory='$rowsto->teritory'")->row()->teritory; ?></td>
                                    <td>Target</td>
                                    <td><?php echo $rowsto->t1;  ?></td>
                                    <td><?php echo $rowsto->t2;  ?></td>
                                    <td><?php echo $rowsto->t3;  ?></td>
                                    <td><?php echo $rowsto->t4;  ?></td>
                                    <td><?php echo $rowsto->t5;  ?></td>
                                    <td><?php echo $rowsto->t6;  ?></td>
                                    <td><?php echo $rowsto->t7;  ?></td>
                                    <td><?php echo $rowsto->t8;  ?></td>
                                    <td><?php echo $rowsto->t9;  ?></td>
                                    <td><?php echo $rowsto->t10;  ?></td>
                                    <td><?php echo $rowsto->t11;  ?></td>
                                    <td><?php echo $rowsto->t12;  ?></td>
                                </tr>
                                <tr>
                                    <td>Realisasi</td>
                                    <td><?php echo $rowsto->r1;  ?></td>
                                    <td><?php echo $rowsto->r2;  ?></td>
                                    <td><?php echo $rowsto->r3;  ?></td>
                                    <td><?php echo $rowsto->r4;  ?></td>
                                    <td><?php echo $rowsto->r5;  ?></td>
                                    <td><?php echo $rowsto->r6;  ?></td>
                                    <td><?php echo $rowsto->r7;  ?></td>
                                    <td><?php echo $rowsto->r8;  ?></td>
                                    <td><?php echo $rowsto->r9;  ?></td>
                                    <td><?php echo $rowsto->r10;  ?></td>
                                    <td><?php echo $rowsto->r11;  ?></td>
                                    <td><?php echo $rowsto->r12;  ?></td>
                                </tr>
                                <tr>
                                    <td>Ach</td>
                                    <td><?php echo $rowsto->ac1;  ?></td>
                                    <td><?php echo $rowsto->ac2;  ?></td>
                                    <td><?php echo $rowsto->ac3;  ?></td>
                                    <td><?php echo $rowsto->ac4;  ?></td>
                                    <td><?php echo $rowsto->ac5;  ?></td>
                                    <td><?php echo $rowsto->ac6;  ?></td>
                                    <td><?php echo $rowsto->ac7;  ?></td>
                                    <td><?php echo $rowsto->ac8;  ?></td>
                                    <td><?php echo $rowsto->ac9;  ?></td>
                                    <td><?php echo $rowsto->ac10;  ?></td>
                                    <td><?php echo $rowsto->ac11;  ?></td>
                                    <td><?php echo $rowsto->ac12;  ?></td>
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

<!-- Modal dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

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
                data: [<?php echo "$getkinerja->t1,$getkinerja->t2,$getkinerja->t3,$getkinerja->t4,$getkinerja->t5,$getkinerja->t6,$getkinerja->t7,$getkinerja->t8,$getkinerja->t9,$getkinerja->t10,$getkinerja->t11,$getkinerja->t12"; ?>],
                backgroundColor: '#98BDFF'
                },
                {
                label: 'Realisasi',
                data: [<?php echo "$getkinerja->r1,$getkinerja->r2,$getkinerja->r3,$getkinerja->r4,$getkinerja->r5,$getkinerja->r6,$getkinerja->r7,$getkinerja->r8,$getkinerja->r9,$getkinerja->r10,$getkinerja->r11,$getkinerja->r12"; ?>],
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
                    color: "#F2F2F2"
                },
                ticks: {
                    display: true,
                    min: 0,
                    <?php $max=$this->db->query("select GREATEST (t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) as maxnum from kinerja")->row()->maxnum; ?>
                    max: <?php echo 200; ?>,
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