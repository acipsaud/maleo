<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Indikator</h4>
                <p class="card-description">
                    <a href="<?php echo site_url('indikator/add'); ?>" class="btn btn-outline-primary btn-icon-text">
                        <i class="ti-plus btn-icon-prepend"></i>
                        Tambah Indikator
                    </a>
                </p>
                <div class="table-responsive">
                    <table id="tableuser" class="table-striped display expandable-table wrap" cellspacing="0" width="100%">
                    <!-- <table id="tableuser" class="table table-striped display expandable-table table-bordered wrap" style="width:100%">     -->
                        <thead>
                            <tr align="center">
                                <th><center>No</center></th>
                                <th><center>Nama Indikator</center></th>
                                <th><center>Satuan</center></th>
                                <th><center>Kategori</center></th>
                                <th><center>UIC Witel</center></th>
                                <th><center>UIC Treg</center></th>
                                <th><center>Teritory</center></th>
                                <?php if ($this->session->userdata('level')=='admin'){ ?><th><center>Status</center></th>
                                <th><center>Action</center></th> <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($getindikator as $row) : 
                            if (($this->session->userdata('loker')==$row->uic_witel) or ($this->session->userdata('level')=='admin')) { 
                                ?>
                                <tr>
                                    <td style="vertical-align:middle;" align="center"><?php echo $no; ?></td>
                                    <td style="vertical-align:middle;"><?php echo $row->indikator; ?></td>
                                    <td style="vertical-align:middle;" align="center"><?php echo $row->satuan; ?></td>
                                    <td style="vertical-align:middle;" align="center"><?php echo $this->db->query("select * from kategori where id_kategori='$row->kategori_indikator'")->row()->kategori; ?></td>
                                    <td style="vertical-align:middle;" align="center"><?php echo $this->db->query("select * from loker where id_loker='$row->uic_witel'")->row()->nama_loker; ?></td>
                                    <td style="vertical-align:middle;" align="center">
                                        <?php 
                                            if (empty($this->db->query("select * from loker where id_loker='$row->uic_treg'")->row()->nama_loker)) {
                                                echo "-";
                                            }
                                            else
                                            {
                                                echo $this->db->query("select * from loker where id_loker='$row->uic_treg'")->row()->nama_loker; 
                                            }
                                        ?>
                                    </td>
                                    <td style="vertical-align:middle;" align="center"><?php echo $this->db->query("select * from teritory where id_teritory='$row->teritory'")->row()->teritory; ?></td>
                                    <?php if ($this->session->userdata('level')=='admin'){ ?>
                                    <td style="vertical-align:middle;" align="center">
                                        <?php 
                                        if ($row->aktif=="Y") 
                                        {
                                        ?>    
                                                <button type="button" class="btn btn-primary btn-sm">Aktif</button>
                                        <?php 
                                        }
                                            else 
                                        {
                                        ?>
                                                <button type="button" class="btn btn-danger btn-sm">Non Aktif</button>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td align="center" style="vertical-align:middle;">
                                        <div class="btn-group">
                                            <!-- <a href="javascript:void(0);" data=" $row->id_user " class="btn btn-danger item-hapus"><center><i class="mdi mdi-delete" style="font-size:16px;"></i></center></a> -->
                                            <a href="<?php echo site_url("indikator/edit/".$row->id_indikator); ?>" class="btn btn-success"><center><i class="mdi mdi-pencil-box-outline" style="font-size:16px;" ></i></center></a>
                                            <a href="<?php echo site_url("indikator/hapus/".$row->id_indikator); ?>" class="btn btn-danger item-hapus"><center><i class="mdi mdi-delete" style="font-size:16px;"></i></center></a>
                                        </div>
                                    </td>
                                    <?php } ?>
                                </tr>
                            <?php $no++; } endforeach; ?>
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