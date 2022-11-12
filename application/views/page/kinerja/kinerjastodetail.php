<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Filter</h4>
                    <table id="">
                        <tr>
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/sto_detail') ?>">
                            <td style="width:10%;">
                                Pilih STO :
                                <select class="form-control" id="teritory" name="teritory" placeholder="teritory" style="color:#000;width:200px;"> 
                                    <?php 
                                        $getdatel=$this->db->query("select * from teritory where area='STO'")->result();
                                        foreach ($getdatel as $rowdatel) : 
                                    ?>
                                    <option value="<?php echo $rowdatel->id_teritory; ?>"><?php echo $rowdatel->teritory; ?></option>
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
                                </a>
                                <a href="<?php echo site_url('kinerja/editkinerjatarget'); ?>" class="btn btn-warning btn-icon-text">
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
                    <p class="card-title mb-0">Detail Kinerja <font style='color:red;'> <?php echo $this->db->query("select * from teritory where id_teritory='$getter'")->row()->teritory; ?></font></p><br>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                <th class="pl-0  pb-2 border-bottom">Unit</th>
                                <th class="border-bottom pb-2"><center>Indikator</center></th>
                                <th class="border-bottom pb-2"><center>S. Needed.</center></th>
                                <th class="border-bottom pb-2"><center>A. Plan</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $getarea=$this->db->query("SELECT DISTINCT(teritory) FROM `kinerja` where tanding='STO'")->result(); ?>
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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Kinerja <font style='color:red;'> <?php echo $this->db->query("select * from teritory where id_teritory='$getter'")->row()->teritory; ?></font></p><br>
                <div class="table-responsive">
                    <table id="tableuser" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr align="center">
                                <th style="vertical-align:middle;"><center>No</center></th>
                                <th style="vertical-align:middle;"><center>Nama Kinerja</center></th>
                                <th style="vertical-align:middle;"><center>Satuan</center></th>
                                <th style=''><center>Target <br><br><div class="badge badge-success" style='background-color:#757575'>(MTD)</div></center></th>
                                <th style=''><center>Real <br><br><div class="badge badge-success" style='background-color:#757575'>(MTD)</div></center></th>
                                <th style=''><center>Ach Mtd<br><br><div class="badge badge-success" style='background-color:#757575'>(MTD)</div></center></th>
                                <th style=''><center>Rank Mtd<br><br><div class="badge badge-success" style='background-color:#757575'>(MTD)</div></center></th>
                                <th style=''><center>Ach Ytd <br><br><div class="badge badge-primary">(YTD)</div></center></th>
                                <th><center>Shortage <br><br><div class="badge badge-primary">(YTD)</div></center></th>
                                <th style="vertical-align:middle;"><center>Detail</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($getkinerja as $row) : ?>
                                <!-- <tr>
                                    <td colspan="6">cek</td>
                                </tr> -->
                                <tr>
                                    <td style="vertical-align:middle;" align="center"><?php echo $no; ?></td>
                                    <td style="vertical-align:middle;">
                                        <?php 
                                            echo $row->indikator; 
                                        ?>
                                        <br>
                                        <font size="1"><i>Pic : <font color="red"><?php echo $row->pic_indikator; ?></font></i></font>
                                        <br>
                                            <?php $cekkat=$this->db->query("select * from kinerja inner join indikator on kinerja.id_indikator=indikator.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->kategori_indikator;
                                                $kat_ind=$this->db->query("select * from kategori where id_kategori='$cekkat'")->row()->kategori;

                                                if ($kat_ind=='KM')
                                                    $col='danger';
                                                else
                                                    $col='warning';
                                            ?>
                                            <div class="badge badge-<?php echo $col; ?>"><?php echo $kat_ind; ?></div>
                                            <br>
                                        <?php 
                                            $gettgl=explode(" ",$row->last_update);
                                            $tgl1=strtotime($gettgl[0]);
                                            $tgl2=strtotime(date("Y-m-d"));
                                            $jarak = $tgl2 - $tgl1;
                                            $hari = $jarak / 60 / 60 / 24;
                                        ?>
                                        <font size="1"><i>Last Update : <font color="blue"><?php echo $row->last_update; ?></font><font color="red"> (<?php echo $hari; ?> days ago)</font></i></font>
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
                                                    // if (empty($this->db->query("select (kinerja.$bulanac) as ac from indikator inner join kinerja on indikator.id_indikator = kinerja.id_indikator where kinerja.id_kinerja='$row->id_kinerja'")->row()->ac)) {
                                                    //     echo "-";
                                                    // }
                                                    // else
                                                    // {
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
                                                    // }
                                                ?>
                                            </center>
                                    </td>
                                    <td style="vertical-align:middle;" align="center">
                                        <?php
                                            $values = array();
                                            $angka=array();
                                            $bulanac='ac'.date('n');
                                            $ceknilaiachmtd=$this->db->query("select $bulanac as ac from kinerja where id_kinerja='$row->id_kinerja'")->row()->ac;
                                            $getrankdatel=$this->db->query("select $bulanac as ac from kinerja where id_indikator='$row->id_indikator' and tanding='Sto'")->result();
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
                                            <?php echo 'Rank ' .$angka[$ceknilaiachmtd]; ?>
                                        </a>
                                    </td>
                                    <td style="vertical-align:middle;" align="center">
                                        <center>
                                            <?php
                                                $getytd=$this->db->query("select * from kinerja where id_kinerja='$row->id_kinerja'")->row();
                                                // echo $getytd->ac2;
                                                $cekytd=$this->db->query("select * from kinerja where id_kinerja='$row->id_kinerja'")->row();
                                                if (($cekytd->id_uic_witel=='3') or ($cekytd->id_uic_witel=='4') or ($cekytd->id_uic_witel=='26'))
                                                {
                                                $ytd=0;
                                                for ($i=1;$i<=date('m');$i++)
                                                {
                                                    $bulanac='ac'.$i;
                                                    $getytd=$this->db->query("select $bulanac as ac from kinerja where id_kinerja='$row->id_kinerja'")->row()->ac;
                                                    $ytd=$ytd+$getytd;
                                                }
                                                $bulanhariin=date('m');
                                                $persenytd=$ytd/$bulanhariin;
                                                // echo number_format($persenytd);
                                                // echo $nilai[0];
                                                if (($persenytd<100) and ($persenytd>=90))
                                                {$color="#ffc107";}
                                                else if ($persenytd<90)
                                                {$color="#dc3545";}
                                                else
                                                {$color="#82cb87";}

                                                
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
                                    <td style="vertical-align:middle;" align="center">
                                        <center>
                                            <?php
                                                if (($cekytd->id_uic_witel=='3') or ($cekytd->id_uic_witel=='4') or ($cekytd->id_uic_witel=='26'))
                                                {
                                                    $tottarget=0;
                                                    for ($i=1;$i<=date('m');$i++)
                                                    {
                                                        $bulant='t'.$i;
                                                        $getottarget=$this->db->query("select $bulant as target from kinerja where id_kinerja='$row->id_kinerja'")->row()->target;
                                                        $tottarget=$tottarget+$getottarget;
                                                    }

                                                    $realtarget=0;
                                                    for ($i=1;$i<=date('m');$i++)
                                                    {
                                                        $bulanr='r'.$i;
                                                        $gerealtarget=$this->db->query("select $bulanr as realisasi from kinerja where id_kinerja='$row->id_kinerja'")->row()->realisasi;
                                                        $realtarget=$realtarget+$gerealtarget;
                                                    }

                                                    $shtg=($tottarget-$realtarget);

                                                    if ($shtg>0)
                                                    {
                                                        if ($sat=='Rp (M)')
                                                            echo number_format($shtg/1000000000,2);
                                                        else
                                                            echo $shtg;
                                                        
                                                        echo " ".$sat;
                                                    }
                                                    else
                                                    {
                                                        echo "-";
                                                    }
                                                }
                                                else
                                                {
                                                    echo "-";
                                                }
                                            ?>
                                        </center>
                                    </td>
                                    <td align="center" style="vertical-align:middle;">
                                        <div class="btn-group">
                                            <a href="<?php echo site_url("kinerja/cek_detail/$row->id_kinerja/$getter/sto"); ?>" class="btn btn-default"><center><i class="mdi mdi-format-list-bulleted" style="font-size:16px;" ></i></center></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> -->
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