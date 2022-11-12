<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Filter Edit Kinerja</h4>
                    <table id="tableuser">
                        <tr>
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/editkinerjatarget1') ?>">
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
                                <!-- <a href="<?php echo site_url('kinerja/editkinerja'); ?>" class="btn btn-primary btn-icon-text">
                                    <i class="ti-pencil btn-icon-prepend"></i>
                                    Update Kinerja
                                </a> -->
                            </td>
                        </tr>   
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php
    if ($jumlahkinerja>'0') {
    ?>
    <h4>All Teritory Performance (<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</h4><br>
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title" style="margin-bottom:7px;font-size:19px;">Witel Performance (<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</p>
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
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/editkinerjatargetwitelsave') ?>">
                            <tr>
                                <td>Target</td>
                                <td>
                                    <input type="hidden" name='id_kinerja' class="form-control" value='<?php echo $getkinerja->id_kinerja;  ?>'>
                                    <input type="text" name='t1' id='twitel1' class="form-control" style="font-size:10px;"  value='<?php echo $getkinerja->t1;  ?>'>
                                </td>
                                <td><input type="text" name='t2' id='twitel2' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t2;  ?>'></td>
                                <td><input type="text" name='t3' id='twitel3' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t3;  ?>'></td>
                                <td><input type="text" name='t4' id='twitel4' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t4;  ?>'></td>
                                <td><input type="text" name='t5' id='twitel5' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t5;  ?>'></td>
                                <td><input type="text" name='t6' id='twitel6' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t6;  ?>'></td>
                                <td><input type="text" name='t7' id='twitel7' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t7;  ?>'></td>
                                <td><input type="text" name='t8' id='twitel8' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t8;  ?>'></td>
                                <td><input type="text" name='t9' id='twitel9' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t9;  ?>'></td>
                                <td><input type="text" name='t10' id='twitel10' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t10;  ?>'></td>
                                <td><input type="text" name='t11' id='twitel11' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t11;  ?>'></td>
                                <td><input type="text" name='t12' id='twitel12' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->t12;  ?>'></td>
                            </tr>
                            <tr>
                                <td>Realisasi</td>
                                <td><input type="text" name='r1' id='rwitel1' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r1;  ?>'></td>
                                <td><input type="text" name='r2' id='rwitel2' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r2;  ?>'></td>
                                <td><input type="text" name='r3' id='rwitel3' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r3;  ?>'></td>
                                <td><input type="text" name='r4' id='rwitel4' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r4;  ?>'></td>
                                <td><input type="text" name='r5' id='rwitel5' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r5;  ?>'></td>
                                <td><input type="text" name='r6' id='rwitel6' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r6;  ?>'></td>
                                <td><input type="text" name='r7' id='rwitel7' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r7;  ?>'></td>
                                <td><input type="text" name='r8' id='rwitel8' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r8;  ?>'></td>
                                <td><input type="text" name='r9' id='rwitel9' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r9;  ?>'></td>
                                <td><input type="text" name='r10' id='rwitel10' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r10;  ?>'></td>
                                <td><input type="text" name='r11' id='rwitel11' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r11;  ?>'></td>
                                <td><input type="text" name='r12' id='rwitel12' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->r12;  ?>'></td>
                            </tr>
                            <tr>
                                <td>Ach</td>
                                <td><input type="text" name='ac1' id='acwitel1' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac1;  ?>' readonly></td>
                                <td><input type="text" name='ac2' id='acwitel2' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac2;  ?>' readonly></td>
                                <td><input type="text" name='ac3' id='acwitel3' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac3;  ?>' readonly></td>
                                <td><input type="text" name='ac4' id='acwitel4' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac4;  ?>' readonly></td>
                                <td><input type="text" name='ac5' id='acwitel5' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac5;  ?>' readonly></td>
                                <td><input type="text" name='ac6' id='acwitel6' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac6;  ?>' readonly></td>
                                <td><input type="text" name='ac7' id='acwitel7' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac7;  ?>' readonly></td>
                                <td><input type="text" name='ac8' id='acwitel8' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac8;  ?>' readonly></td>
                                <td><input type="text" name='ac9' id='acwitel9' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac9;  ?>' readonly></td>
                                <td><input type="text" name='ac10' id='acwitel10' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac10;  ?>' readonly></td>
                                <td><input type="text" name='ac11' id='acwitel11' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac11;  ?>' readonly></td>
                                <td><input type="text" name='ac12' id='acwitel12' class="form-control" style="font-size:10px;" value='<?php echo $getkinerja->ac12;  ?>' readonly></td>
                            </tr>
                            <tr>
                                <td colspan='13'>
                                    <button type="submit" class="btn btn-outline-danger btn-icon-text" style="width:100%">
                                        <i class="ti-pencil btn-icon-prepend"></i>
                                        Update
                                    </button>
                                </td>
                            </tr>
                            </form>
                        </tbody>
                    </table>

                    
                    <div class="table-responsive pt-3" >
                        <p class="card-title" style="margin-bottom:7px;font-size:19px;">Datel Performance (<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</p>
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
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/editkinerjatargetdatelsave') ?>">
                            <?php $getdatel=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='DATEL'")->result(); 
                            
                            $k=1;
                            foreach ($getdatel as $rowdatel) :
                            ?>
                                <tr style="background-color:#ececec;"><td rowspan='3'><?php echo $this->db->query("select * from teritory where id_teritory='$rowdatel->teritory'")->row()->teritory; ?></td>
                                    <td>Target</td>
                                    <td>
                                        <input type="hidden" name='datelid_kinerja[]' class="form-control" value='<?php echo $rowdatel->id_kinerja;  ?>'>
                                        <input type="text" name='datelt1[]' id='tdatel<?php echo $k; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t1;  ?>'></td>
                                    <td><input type="text" name='datelt2[]' id='tdatel<?php echo $k; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t2;  ?>'></td>
                                    <td><input type="text" name='datelt3[]' id='tdatel<?php echo $k; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t3;  ?>'></td>
                                    <td><input type="text" name='datelt4[]' id='tdatel<?php echo $k; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t4;  ?>'></td>
                                    <td><input type="text" name='datelt5[]' id='tdatel<?php echo $k; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t5;  ?>'></td>
                                    <td><input type="text" name='datelt6[]' id='tdatel<?php echo $k; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t6;  ?>'></td>
                                    <td><input type="text" name='datelt7[]' id='tdatel<?php echo $k; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t7;  ?>'></td>
                                    <td><input type="text" name='datelt8[]' id='tdatel<?php echo $k; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t8;  ?>'></td>
                                    <td><input type="text" name='datelt9[]' id='tdatel<?php echo $k; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t9;  ?>'></td>
                                    <td><input type="text" name='datelt10[]' id='tdatel<?php echo $k; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t10;  ?>'></td>
                                    <td><input type="text" name='datelt11[]' id='tdatel<?php echo $k; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t11;  ?>'></td>
                                    <td><input type="text" name='datelt12[]' id='tdatel<?php echo $k; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->t12;  ?>'></td>
                                </tr>
                                <tr>
                                    <td>Realisasi</td>
                                    <td><input type="text" name='datelr1[]' id='rdatel<?php echo $k; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r1;  ?>'></td>
                                    <td><input type="text" name='datelr2[]' id='rdatel<?php echo $k; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r2;  ?>'></td>
                                    <td><input type="text" name='datelr3[]' id='rdatel<?php echo $k; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r3;  ?>'></td>
                                    <td><input type="text" name='datelr4[]' id='rdatel<?php echo $k; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r4;  ?>'></td>
                                    <td><input type="text" name='datelr5[]' id='rdatel<?php echo $k; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r5;  ?>'></td>
                                    <td><input type="text" name='datelr6[]' id='rdatel<?php echo $k; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r6;  ?>'></td>
                                    <td><input type="text" name='datelr7[]' id='rdatel<?php echo $k; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r7;  ?>'></td>
                                    <td><input type="text" name='datelr8[]' id='rdatel<?php echo $k; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r8;  ?>'></td>
                                    <td><input type="text" name='datelr9[]' id='rdatel<?php echo $k; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r9;  ?>'></td>
                                    <td><input type="text" name='datelr10[]' id='rdatel<?php echo $k; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r10;  ?>'></td>
                                    <td><input type="text" name='datelr11[]' id='rdatel<?php echo $k; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r11;  ?>'></td>
                                    <td><input type="text" name='datelr12[]' id='rdatel<?php echo $k; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->r12;  ?>'></td>
                                </tr>
                                <tr>
                                    <td>Ach</td>
                                    <td><input type="text" name='datelac1[]' id='acdatel<?php echo $k; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac1;  ?>' readonly></td>
                                    <td><input type="text" name='datelac2[]' id='acdatel<?php echo $k; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac2;  ?>' readonly></td>
                                    <td><input type="text" name='datelac3[]' id='acdatel<?php echo $k; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac3;  ?>' readonly></td>
                                    <td><input type="text" name='datelac4[]' id='acdatel<?php echo $k; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac4;  ?>' readonly></td>
                                    <td><input type="text" name='datelac5[]' id='acdatel<?php echo $k; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac5;  ?>' readonly></td>
                                    <td><input type="text" name='datelac6[]' id='acdatel<?php echo $k; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac6;  ?>' readonly></td>
                                    <td><input type="text" name='datelac7[]' id='acdatel<?php echo $k; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac7;  ?>' readonly></td>
                                    <td><input type="text" name='datelac8[]' id='acdatel<?php echo $k; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac8;  ?>' readonly></td>
                                    <td><input type="text" name='datelac9[]' id='acdatel<?php echo $k; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac9;  ?>' readonly></td>
                                    <td><input type="text" name='datelac10[]' id='acdatel<?php echo $k; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac10;  ?>' readonly></td>
                                    <td><input type="text" name='datelac11[]' id='acdatel<?php echo $k; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac11;  ?>' readonly></td>
                                    <td><input type="text" name='datelac12[]' id='acdatel<?php echo $k; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowdatel->ac12;  ?>' readonly></td>
                                </tr>
                            <?php $k++; endforeach; ?>

                                <tr>
                                    <td colspan='14'>
                                        <button type="submit" class="btn btn-outline-danger btn-icon-text" style="width:100%">
                                            <i class="ti-pencil btn-icon-prepend"></i>
                                            Update
                                        </button>
                                    </td>
                                </tr>
                            </form>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive pt-3" >
                        <p class="card-title" style="margin-bottom:7px;font-size:19px;">Hero Performance (<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</p>
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
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/editkinerjatargetherosave') ?>">
                            <?php $gethero=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='HERO'")->result(); 
                            $l=1;
                            foreach ($gethero as $rowhero) :
                            ?>
                                <tr style="background-color:#ececec;"><td rowspan='3'><?php echo $this->db->query("select * from teritory where id_teritory='$rowhero->teritory'")->row()->teritory; ?></td>
                                    <td>Target</td>
                                    <td>
                                        <input type="hidden" name='heroid_kinerja[]' class="form-control" value='<?php echo $rowhero->id_kinerja;  ?>'>
                                        <input type="text" name='herot1[]' id='thero<?php echo $l; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t1;  ?>'></td>
                                    <td><input type="text" name='herot2[]' id='thero<?php echo $l; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t2;  ?>'></td>
                                    <td><input type="text" name='herot3[]' id='thero<?php echo $l; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t3;  ?>'></td>
                                    <td><input type="text" name='herot4[]' id='thero<?php echo $l; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t4;  ?>'></td>
                                    <td><input type="text" name='herot5[]' id='thero<?php echo $l; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t5;  ?>'></td>
                                    <td><input type="text" name='herot6[]' id='thero<?php echo $l; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t6;  ?>'></td>
                                    <td><input type="text" name='herot7[]' id='thero<?php echo $l; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t7;  ?>'></td>
                                    <td><input type="text" name='herot8[]' id='thero<?php echo $l; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t8;  ?>'></td>
                                    <td><input type="text" name='herot9[]' id='thero<?php echo $l; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t9;  ?>'></td>
                                    <td><input type="text" name='herot10[]' id='thero<?php echo $l; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t10;  ?>'></td>
                                    <td><input type="text" name='herot11[]' id='thero<?php echo $l; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t11;  ?>'></td>
                                    <td><input type="text" name='herot12[]' id='thero<?php echo $l; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->t12;  ?>'></td>
                                </tr>
                                <tr>
                                    <td>Realisasi</td>
                                    <td><input type="text" name='heror1[]' id='rhero<?php echo $l; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r1;  ?>'></td>
                                    <td><input type="text" name='heror2[]' id='rhero<?php echo $l; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r2;  ?>'></td>
                                    <td><input type="text" name='heror3[]' id='rhero<?php echo $l; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r3;  ?>'></td>
                                    <td><input type="text" name='heror4[]' id='rhero<?php echo $l; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r4;  ?>'></td>
                                    <td><input type="text" name='heror5[]' id='rhero<?php echo $l; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r5;  ?>'></td>
                                    <td><input type="text" name='heror6[]' id='rhero<?php echo $l; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r6;  ?>'></td>
                                    <td><input type="text" name='heror7[]' id='rhero<?php echo $l; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r7;  ?>'></td>
                                    <td><input type="text" name='heror8[]' id='rhero<?php echo $l; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r8;  ?>'></td>
                                    <td><input type="text" name='heror9[]' id='rhero<?php echo $l; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r9;  ?>'></td>
                                    <td><input type="text" name='heror10[]' id='rhero<?php echo $l; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r10;  ?>'></td>
                                    <td><input type="text" name='heror11[]' id='rhero<?php echo $l; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r11;  ?>'></td>
                                    <td><input type="text" name='heror12[]' id='rhero<?php echo $l; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->r12;  ?>'></td>
                                </tr>
                                <tr>
                                    <td>Ach</td>
                                    <td><input type="text" name='heroac1[]' id='achero<?php echo $l; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac1;  ?>' readonly></td>
                                    <td><input type="text" name='heroac2[]' id='achero<?php echo $l; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac2;  ?>' readonly></td>
                                    <td><input type="text" name='heroac3[]' id='achero<?php echo $l; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac3;  ?>' readonly></td>
                                    <td><input type="text" name='heroac4[]' id='achero<?php echo $l; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac4;  ?>' readonly></td>
                                    <td><input type="text" name='heroac5[]' id='achero<?php echo $l; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac5;  ?>' readonly></td>
                                    <td><input type="text" name='heroac6[]' id='achero<?php echo $l; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac6;  ?>' readonly></td>
                                    <td><input type="text" name='heroac7[]' id='achero<?php echo $l; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac7;  ?>' readonly></td>
                                    <td><input type="text" name='heroac8[]' id='achero<?php echo $l; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac8;  ?>' readonly></td>
                                    <td><input type="text" name='heroac9[]' id='achero<?php echo $l; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac9;  ?>' readonly></td>
                                    <td><input type="text" name='heroac10[]' id='achero<?php echo $l; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac10;  ?>' readonly></td>
                                    <td><input type="text" name='heroac11[]' id='achero<?php echo $l; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac11;  ?>' readonly></td>
                                    <td><input type="text" name='heroac12[]' id='achero<?php echo $l; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowhero->ac12;  ?>' readonly></td>
                                </tr>
                            <?php $l++; endforeach; ?>
                                <tr>
                                    <td colspan='14'>
                                        <button type="submit" class="btn btn-outline-danger btn-icon-text" style="width:100%">
                                            <i class="ti-pencil btn-icon-prepend"></i>
                                            Update
                                        </button>
                                    </td>
                                </tr>
                            </form>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive pt-3" >
                        <p class="card-title" style="margin-bottom:7px;font-size:19px;">STO Performance (<?php $nam=$this->db->query("select * from indikator where id_indikator='$getkinerja->id_indikator'")->row();$man=$this->db->query("select * from kinerja where id_kinerja='$getkinerja->id_kinerja'")->row(); echo $nam->indikator; ?>)</p>
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
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/editkinerjatargetstosave') ?>">
                            <?php $getsto=$this->db->query("select * from kinerja where id_indikator='$getkinerja->id_indikator' and tanding='STO'")->result(); 
                            $m=1;
                            foreach ($getsto as $rowsto) :
                            ?>
                                <tr style="background-color:#ececec;"><td rowspan='3'><?php echo $this->db->query("select * from teritory where id_teritory='$rowsto->teritory'")->row()->teritory; ?></td>
                                    <td>Target</td>
                                    <td>
                                        <input type="hidden" name='stoid_kinerja[]' class="form-control" value='<?php echo $rowsto->id_kinerja;  ?>'>
                                        <input type="text" name='stot1[]' id='tsto<?php echo $m; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t1;  ?>'></td>
                                    <td><input type="text" name='stot2[]' id='tsto<?php echo $m; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t2;  ?>'></td>
                                    <td><input type="text" name='stot3[]' id='tsto<?php echo $m; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t3;  ?>'></td>
                                    <td><input type="text" name='stot4[]' id='tsto<?php echo $m; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t4;  ?>'></td>
                                    <td><input type="text" name='stot5[]' id='tsto<?php echo $m; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t5;  ?>'></td>
                                    <td><input type="text" name='stot6[]' id='tsto<?php echo $m; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t6;  ?>'></td>
                                    <td><input type="text" name='stot7[]' id='tsto<?php echo $m; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t7;  ?>'></td>
                                    <td><input type="text" name='stot8[]' id='tsto<?php echo $m; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t8;  ?>'></td>
                                    <td><input type="text" name='stot9[]' id='tsto<?php echo $m; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t9;  ?>'></td>
                                    <td><input type="text" name='stot10[]' id='tsto<?php echo $m; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t10;  ?>'></td>
                                    <td><input type="text" name='stot11[]' id='tsto<?php echo $m; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t11;  ?>'></td>
                                    <td><input type="text" name='stot12[]' id='tsto<?php echo $m; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->t12;  ?>'></td>
                                </tr>
                                <tr>
                                    <td>Realisasi</td>
                                    <td><input type="text" name='stor1[]' id='rsto<?php echo $m; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r1;  ?>'></td>
                                    <td><input type="text" name='stor2[]' id='rsto<?php echo $m; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r2;  ?>'></td>
                                    <td><input type="text" name='stor3[]' id='rsto<?php echo $m; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r3;  ?>'></td>
                                    <td><input type="text" name='stor4[]' id='rsto<?php echo $m; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r4;  ?>'></td>
                                    <td><input type="text" name='stor5[]' id='rsto<?php echo $m; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r5;  ?>'></td>
                                    <td><input type="text" name='stor6[]' id='rsto<?php echo $m; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r6;  ?>'></td>
                                    <td><input type="text" name='stor7[]' id='rsto<?php echo $m; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r7;  ?>'></td>
                                    <td><input type="text" name='stor8[]' id='rsto<?php echo $m; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r8;  ?>'></td>
                                    <td><input type="text" name='stor9[]' id='rsto<?php echo $m; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r9;  ?>'></td>
                                    <td><input type="text" name='stor10[]' id='rsto<?php echo $m; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r10;  ?>'></td>
                                    <td><input type="text" name='stor11[]' id='rsto<?php echo $m; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r11;  ?>'></td>
                                    <td><input type="text" name='stor12[]' id='rsto<?php echo $m; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->r12;  ?>'></td>
                                </tr>
                                <tr>
                                    <td>Ach</td>
                                    <td><input type="text" name='stoac1[]' id='acsto<?php echo $m; ?>1' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac1;  ?>' readonly></td>
                                    <td><input type="text" name='stoac2[]' id='acsto<?php echo $m; ?>2' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac2;  ?>' readonly></td>
                                    <td><input type="text" name='stoac3[]' id='acsto<?php echo $m; ?>3' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac3;  ?>' readonly></td>
                                    <td><input type="text" name='stoac4[]' id='acsto<?php echo $m; ?>4' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac4;  ?>' readonly></td>
                                    <td><input type="text" name='stoac5[]' id='acsto<?php echo $m; ?>5' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac5;  ?>' readonly></td>
                                    <td><input type="text" name='stoac6[]' id='acsto<?php echo $m; ?>6' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac6;  ?>' readonly></td>
                                    <td><input type="text" name='stoac7[]' id='acsto<?php echo $m; ?>7' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac7;  ?>' readonly></td>
                                    <td><input type="text" name='stoac8[]' id='acsto<?php echo $m; ?>8' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac8;  ?>' readonly></td>
                                    <td><input type="text" name='stoac9[]' id='acsto<?php echo $m; ?>9' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac9;  ?>' readonly></td>
                                    <td><input type="text" name='stoac10[]' id='acsto<?php echo $m; ?>10' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac10;  ?>' readonly></td>
                                    <td><input type="text" name='stoac11[]' id='acsto<?php echo $m; ?>11' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac11;  ?>' readonly></td>
                                    <td><input type="text" name='stoac12[]' id='acsto<?php echo $m; ?>12' class="form-control" style="font-size:10px;" value='<?php echo $rowsto->ac12;  ?>' readonly></td>
                                </tr>
                            <?php $m++; endforeach; ?>
                                <tr>
                                    <td colspan='14'>
                                        <button type="submit" class="btn btn-outline-danger btn-icon-text" style="width:100%">
                                            <i class="ti-pencil btn-icon-prepend"></i>
                                            Update
                                        </button>
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
    <?php } ?>
</div>


<?php
    // $bulan=date('n');
    // $bulant='t'.date('n');
    // $datatarget='';
    // $datareal='';
    // for ($i=1;$i<=$bulan;$i++)
    // {
    //     $datatarget.='$getkinerja'.'->t'.$i.',';
    // }

    // for ($i=1;$i<=$bulan;$i++)
    // {
    //     $datareal.='$getkinerja'.'->r'.$i.',';
    // }
?>

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
    
    ///////////////WITEL
    <?php
    for ($i=1;$i<=12;$i++){
    ?>
        $("#rwitel<?php echo $i; ?>").keyup(function(){
            var a = parseFloat($("#twitel<?php echo $i; ?>").val());
            var b = parseFloat($("#rwitel<?php echo $i; ?>").val());
            <?php if (($getkinerja->id_indikator!=28) and ($getkinerja->id_indikator!=27)) { ?>
            var c = (b/a)*100;
            <?php } else { ?>
            var c = (a/b)*100;
            <?php } ?>
            var c = c.toFixed(1);
            $("#acwitel<?php echo $i; ?>").val(c);
        });
    <?php
    }
    ?>


    ///////////////DATEL
    <?php
    for ($i=1;$i<=12;$i++){
        for ($a=1;$a<=12;$a++){
    ?>
        $("#rdatel<?php echo $i.$a; ?>").keyup(function(){
            var a = parseFloat($("#tdatel<?php echo $i.$a; ?>").val());
            var b = parseFloat($("#rdatel<?php echo $i.$a; ?>").val());
            <?php if (($getkinerja->id_indikator!=28) and ($getkinerja->id_indikator!=27)) { ?>
            var c = (b/a)*100;
            <?php } else { ?>
            var c = (a/b)*100;
            <?php } ?>
            var c = c.toFixed(1);
            $("#acdatel<?php echo $i.$a; ?>").val(c);
        });
    <?php 
        } 
    }
    ?>

    ///////////////HERO
    <?php
    for ($i=1;$i<=12;$i++){
        for ($a=1;$a<=12;$a++){
    ?>
        $("#rhero<?php echo $i.$a; ?>").keyup(function(){
            var a = parseFloat($("#thero<?php echo $i.$a; ?>").val());
            var b = parseFloat($("#rhero<?php echo $i.$a; ?>").val());
            <?php if (($getkinerja->id_indikator!=28) and ($getkinerja->id_indikator!=27)) { ?>
            var c = (b/a)*100;
            <?php } else { ?>
            var c = (a/b)*100;
            <?php } ?>
            var c = c.toFixed(1);
            $("#achero<?php echo $i.$a; ?>").val(c);
        });
    <?php 
        } 
    }
    ?>

    ///////////////STO
    <?php
    for ($i=1;$i<=24;$i++){
        for ($a=1;$a<=12;$a++){
    ?>
        $("#rsto<?php echo $i.$a; ?>").keyup(function(){
            var a = parseFloat($("#tsto<?php echo $i.$a; ?>").val());
            var b = parseFloat($("#rsto<?php echo $i.$a; ?>").val());
            <?php if (($getkinerja->id_indikator!=28) and ($getkinerja->id_indikator!=27)) { ?>
            var c = (b/a)*100;
            <?php } else { ?>
            var c = (a/b)*100;
            <?php } ?>
            var c = c.toFixed(1);
            $("#acsto<?php echo $i.$a; ?>").val(c);
        });
    <?php 
        } 
    }
    ?>

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
                data: [<?php echo "$getkinerja->t1,$getkinerja->t2,$getkinerja->t3,$getkinerja->t4,$getkinerja->t5,$getkinerja->t6,$getkinerja->t7,$getkinerja->t8,$getkinerja->t9,$getkinerja->t10,$getkinerja->t11,$getkinerja->t12,"; ?>],
                backgroundColor: '#98BDFF'
                },
                {
                label: 'Realisasi',
                data: [<?php echo "$getkinerja->r1,$getkinerja->r2,$getkinerja->r3,$getkinerja->r4,$getkinerja->r5,$getkinerja->r6,$getkinerja->r7,$getkinerja->r8,$getkinerja->r9,$getkinerja->r10,$getkinerja->r11,$getkinerja->r12,"; ?>],
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