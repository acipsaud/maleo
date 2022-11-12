<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Filterscek</h4>
                    <table id="">
                        <tr>
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/unit_detail') ?>">
                            <td style="width:10%;">
                                Pilih Unit :
                                <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;width:200px;"> 
                                    <option>Pilih unit..</option>
                                    <?php 
                                        $getunit=$this->db->query("select * from loker where teritory='328' and id_loker<>'12'")->result();
                                        foreach ($getunit as $rowunit) : 
                                    ?>
                                    <option value="<?php echo $rowunit->id_loker; ?>"><?php echo $rowunit->nama_loker; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td style="width:1%;">

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
                                <!-- <a href="<?php echo site_url('indikator/add'); ?>" class="btn btn-outline-primary btn-icon-text">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah Indikator
                                </a> -->
                                <!-- <a href="<?php echo site_url('kinerja/editkinerjatarget'); ?>" class="btn btn-warning btn-icon-text">
                                    <i class="ti-pencil btn-icon-prepend"></i>
                                    Edit Kinerja
                                </a> -->
                            </td>
                        </tr>   
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Detail Kinerja Unit</p><br>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                <th class="pl-0  pb-2 border-bottom">Unit</th>
                                <th class="border-bottom pb-2"><center>Indikator</center></th>
                                <th class="border-bottom pb-2"><center>Supp. Needed</center></th>
                                <th class="border-bottom pb-2"><center>Act. Plan</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($getunit as $rowunit) : ?>
                                    <tr>
                                        <td class="pl-0" style='vertical-align:middle;'><?php echo $rowunit->singkatan; ?></td>
                                        <td><p class="mb-0">
                                            <center>
                                                <div class="badge badge-primary" style="width:30px;font-size:12px;">
                                                    <?php 
                                                        $getjumlahindikator=$this->db->query("select * from kinerja where id_uic_witel='$rowunit->id_loker' and teritory='328'")->num_rows();
                                                        echo $getjumlahindikator;
                                                    ?>
                                                <div>
                                            </center>
                                        </td>
                                        <td><p class="mb-0">
                                            <center>
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <?php 
                                                        $getjumlahSupport=$this->db->query("select * from kinerja inner join support on support.id_indikator = kinerja.id_indikator where kinerja.id_uic_witel='$rowunit->id_loker' and kinerja.teritory='328'")->num_rows();
                                                        echo $getjumlahSupport;
                                                    ?>
                                                </button>
                                            </center>
                                        </td>
                                        <td class="text-muted">
                                            <center>
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <?php 
                                                        $getjumlahAP=$this->db->query("select * from kinerja inner join plan on plan.id_indikator = kinerja.id_indikator where kinerja.id_uic_witel='$rowunit->id_loker' and kinerja.teritory='328'")->num_rows();
                                                        echo $getjumlahAP;
                                                    ?>
                                                </button>
                                            </center>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tableuser" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr align="center">
                                <th style="vertical-align:middle;"><center>No</center></th>
                                <th style="vertical-align:middle;"><center>Nama Kinerja</center></th>
                                <th style="vertical-align:middle;"><center>Satuan</center></th>
                                <th><center>Target <br><br><div class="badge badge-success">(MTD)</div></center></th>
                                <th><center>Real <br><br><div class="badge badge-success">(MTD)</div></center></th>
                                <th><center>Ach <br><br><div class="badge badge-success">(MTD)</div></center></th>
                                <th><center>Ach Ytd <br><br><div class="badge badge-primary">(YTD)</div></center></th>
                                <th style="vertical-align:middle;"><center>Detail</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($getkinerja as $row) : ?>
                                <tr>
                                    <td style="vertical-align:middle;" align="center"><?php echo $no; ?></td>
                                    <td style="vertical-align:middle;">
                                        <?php 
                                            echo $row->indikator; 
                                        ?>
                                        <br>
                                        <font size="1"><i>UIC : <font color="red"><?php echo $this->db->query("select * from loker where id_loker='$row->id_uic_witel'")->row()->nama_loker; ?></font></i></font>
                                    </td>
                                    <td style="vertical-align:middle;" align="center"><?php $sat=$this->db->query("select * from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where indikator.id_indikator='$row->id_indikator'")->row()->satuan; echo $sat; ?></td>
                                    <td style="vertical-align:middle;" align="center">
                                        <?php 
                                            $bulant='t'.date('n');
                                            $bulanr='r'.date('n');
                                            $bulanac='ac'.date('n');
                                            if (empty($this->db->query("select (kinerja.$bulant) as target_YTD from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->target_YTD)) {
                                                echo "0";
                                            }
                                            else
                                            {
                                                if ($sat=='Rp (M)')
                                                    echo number_format($this->db->query("select (kinerja.$bulant) as target_YTD from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->target_YTD/1000000000,2); 
                                                else
                                                    echo $this->db->query("select (kinerja.$bulant) as target_YTD from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->target_YTD; 
                                            }
                                        ?>
                                    </td>
                                    <td style="vertical-align:middle;" align="center">
                                        <?php 
                                            if (empty($this->db->query("select (kinerja.$bulanr) as realisasi_YTD from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->realisasi_YTD)) {
                                                echo "0";
                                            }
                                            else
                                            {
                                                if ($sat=='Rp (M)')
                                                    echo number_format($this->db->query("select (kinerja.$bulanr) as realisasi_YTD from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->realisasi_YTD/1000000000,2); 
                                                else
                                                    echo $this->db->query("select (kinerja.$bulanr) as realisasi_YTD from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->realisasi_YTD; 
                                            }
                                        ?>
                                    </td>
                                    <td style="vertical-align:middle;" align="center">
                                            <center>
                                                <?php
                                                    
                                                        $ach=$this->db->query("select (kinerja.$bulanac) as ac from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->ac;
                                                        if (($ach<100) and ($ach>=90))
                                                        {$color="#ffc107";}
                                                        else if ($ach<90)
                                                        {$color="#dc3545";}
                                                        else
                                                        {$color="#82cb87";}
                                                ?>
                                                        <a href="#" class="btn btn-primary" style="font-size:12px;background-color:<?php echo $color; ?>;border:none;">
                                                        <?php echo $this->db->query("select (kinerja.$bulanac) as ac from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->ac; ?>%
                                                        </a>
                                                <?php
                                                ?>
                                            </center>
                                    </td>
                                    <td style="vertical-align:middle;" align="center">
                                            <center>
                                                <?php
                                                    
                                                        $getytd=$this->db->query("select * from kinerja where id_kinerja='$row->id_kinerja'")->row();
                                                        $ytd=0;
                                                        for ($i=1;$i<=date('m');$i++)
                                                        {
                                                            $bulanac='ac'.$i;
                                                            $getytd=$this->db->query("select $bulanac as ac from kinerja where id_kinerja='$row->id_kinerja'")->row()->ac;
                                                            $ytd=$ytd+$getytd;
                                                        }
                                                        $bulanhariin=date('m');
                                                        $persenytd=$ytd/$bulanhariin;
                                                        if (($persenytd<100) and ($persenytd>=90))
                                                        {$color="#ffc107";}
                                                        else if ($persenytd<90)
                                                        {$color="#dc3545";}
                                                        else
                                                        {$color="#82cb87";}

                                                        $cekytd=$this->db->query("select * from kinerja where id_kinerja='$row->id_kinerja'")->row();
                                                        if (($cekytd->id_uic_witel=='3') or ($cekytd->id_uic_witel=='4') or ($cekytd->id_uic_witel=='26'))
                                                        {
                                                ?>
                                                        <a href="#" class="btn btn-primary" style="font-size:12px;background-color:<?php echo $color; ?>;border:none;">
                                                            <?php echo number_format($persenytd).'%'; ?>
                                                        </a>
                                                <?php
                                                        }
                                                        else {echo "-";}
                                                ?>
                                            </center>
                                    </td>
                                    <td align="center" style="vertical-align:middle;">
                                        <div class="btn-group">
                                            <a href="<?php echo site_url("kinerja/cek_detail/$row->id_kinerja"); ?>" class="btn btn-default"><center><i class="mdi mdi-format-list-bulleted" style="font-size:16px;" ></i></center></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div> -->
    </div>
    <div class="row">
        <!-- <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Detail Kinerja <font style='color:red;'> <?php echo $this->db->query("select * from teritory where id_teritory='$getter'")->row()->teritory; ?></font></p><br>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                <th class="pl-0  pb-2 border-bottom">Unit</th>
                                <th class="border-bottom pb-2"><center>Indikator</center></th>
                                <th class="border-bottom pb-2"><center>Supp. Needed</center></th>
                                <th class="border-bottom pb-2"><center>Act. Plan</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $getarea=$this->db->query("SELECT DISTINCT(teritory) FROM `kinerja` where tanding='DATEL'")->result(); ?>
                                <?php $no=1;$warna=''; foreach ($getarea as $rowarea) : 

                                    if ($getter==$rowarea->teritory) 
                                        $warna="#bbddff";
                                ?>
                                <tr style="background-color:<?php echo $warna; ?>">
                                    <td class="pl-0" style='vertical-align:middle;'><?php echo $this->db->query("select * from teritory where id_teritory='$rowarea->teritory'")->row()->teritory; ?></td>
                                    <td style="vertical-align:middle;"><center><div class="badge badge-warning" style="width:30px;font-size:12px;"><?php echo $this->db->query("select * from kinerja where teritory='$rowarea->teritory'")->num_rows(); ?></div></center></td>
                                    <td style="vertical-align:middle;">
                                    <center>
                                        <div class="badge badge-primary" style="width:30px;font-size:12px;">
                                        <?php 
                                            $getjumlahSupport=$this->db->query("select * from kinerja inner join support on support.id_kinerja = kinerja.id_kinerja where kinerja.teritory='$rowarea->teritory'")->num_rows();
                                            echo $getjumlahSupport;
                                        ?>
                                        </div>
                                    </center>
                                    </td>
                                    <td style="vertical-align:middle;">
                                    <center>
                                        <div class="badge badge-danger" style="width:30px;font-size:12px;">
                                        <?php 
                                            $getjumlahAP=$this->db->query("select * from kinerja inner join plan on plan.id_kinerja = kinerja.id_kinerja where kinerja.teritory='$rowarea->teritory'")->num_rows();
                                            echo $getjumlahAP;
                                        ?>
                                        </div>
                                    </center>
                                    </td>
                                </tr>
                                <?php $no++;$warna=''; endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-title">Flaging <font color="red"> Unit </font> based on Average Achievement
                        </p>
                    </div>
                    <?php
                        $dataach=array();
                        $getareadatel=$this->db->query("SELECT * FROM `loker` where teritory='328'")->result();
                        $no=0;
                        foreach ($getareadatel as $rowarea) :
                            if ($rowarea->id_loker==12)
                                continue;
                            $no++;
                            $dataach[$no]['id']=$rowarea->id_loker;
                            $dataach[$no]['nama_teritory']=$rowarea->nama_loker;
                            $bulanac='ac'.date('m');
                            $getach=$this->db->query("SELECT $bulanac as bulanach,indikator,id_uic_witel FROM `kinerja` where id_uic_witel='$rowarea->id_loker' and tanding='Witel'")->result();
                            $jumlahach=0;
                            $getjml=0;
                            foreach ($getach as $rowach) :
                                $getjml++;
                                if (($rowach->bulanach=='') or ($rowach->bulanach=='NaN'))
                                    $rowachbu=0;
                                else
                                    $rowachbu=$rowach->bulanach;

                                $jumlahach=$jumlahach+$rowachbu;
                                // echo $rowach->id_uic_witel;
                                // echo '-'.$rowach->indikator.'- ach'.$rowach->bulanach.'-';
                                // echo $jumlahach."<br>";
                            endforeach;

                            if ($getjml>0)
                            {
                                $averageach=($jumlahach/$getjml);
                            }
                            else
                            {
                                $averageach=0;
                            }

                            $dataach[$no]['avg']=$averageach;
                            endforeach;
                            function aasort(&$arr, $col, $dir) {
                                $sort_col = array();
                                foreach ($arr as $key => $row) {
                                    $sort_col[$key] = $row[$col];
                                }
                                array_multisort($sort_col, $dir, $arr);
                            }

                        aasort($dataach,"avg",SORT_ASC);
                    ?>
                    <canvas id="sales-chart" style='width:5px;'></canvas>
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
        const labels=[<?php foreach ($dataach as $rowhasil) : echo '"'.$rowhasil['nama_teritory'].'"'.","; endforeach; ?>];
        const data=[<?php foreach ($dataach as $rowhasil) : echo '"'.number_format($rowhasil['avg'],1).'"'.","; endforeach; ?>];
        const backgroundColor=[];
        var i;
        for (i=0;i<labels.length;i++)
        {
            if (data[i] >= 100)
            {
                backgroundColor.push('#64bd64');
            }
            else if (data[i] >= 90) 
            {
                backgroundColor.push('#fb8c30');
            }
            else
            {
                backgroundColor.push('#eb5b69');
            }
        }

        var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
        var SalesChart = new Chart(SalesChartCanvas, {
            type: 'bar',
            data: {
            labels: labels,
            datasets: [{
                label: 'Score',
                data: [<?php foreach ($dataach as $rowhasil) : echo '"'.number_format($rowhasil['avg'],1).'"'.","; endforeach; ?>],
                backgroundColor: backgroundColor,
                datalabels:{
                    color:'white',
                    anchor:'end',
                    align:'top',
                    borderWidth: 1,
                    padding:4,
                    backgroundColor: backgroundColor,
                }
                },
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
                    max: 105,
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