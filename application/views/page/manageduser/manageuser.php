<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Managed User</h4>
                <p class="card-description">
                    <a href="<?php echo site_url('manageuser/add'); ?>" class="btn btn-outline-primary btn-icon-text">
                        <i class="ti-plus btn-icon-prepend"></i>
                        Tambah User
                    </a>
                </p>
                <div class="table-responsive">
                    <table id="tableuser" class="table-striped display expandable-table wrap" cellspacing="0" width="100%">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Teritory</th>
                                <th>Loker</th>
                                <th>Nomor Telp</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Last Login</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($getuser as $row) : ?>
                                <tr>
                                    <td style="vertical-align:middle;" align="center"><?php echo $no; ?></td>
                                    <td style="vertical-align:middle;"><?php echo $row->username; ?></td>
                                    <td style="vertical-align:middle;"><?php echo $row->nama_lengkap; ?></td>
                                    <td style="vertical-align:middle;" align="center"><?php echo $this->db->query("select * from teritory where id_teritory='$row->teritory'")->row()->teritory; ?></td>
                                    <td style="vertical-align:middle;" align="center"><?php echo $this->db->query("select * from loker where id_loker='$row->loker'")->row()->nama_loker; ?></td>
                                    <td style="vertical-align:middle;"><?php echo $row->no_telp; ?></td>
                                    <td style="vertical-align:middle;" align="center"><?php echo $row->level; ?></td>
                                    <td style="vertical-align:middle;" align="center">
                                        <?php 
                                        if ($row->blokir=="N") 
                                        {
                                        ?>    
                                                <i class="mdi mdi-account-check" style="font-size:24px;color:green;"></i>
                                        <?php 
                                        }
                                            else 
                                        {
                                        ?>
                                                <i class="mdi mdi-account-remove" style="font-size:24px;color:red;"></i>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td style="vertical-align:middle;"><?php echo $row->last_login; ?></td>
                                    <td align="center" style="vertical-align:middle;">
                                        <div class="btn-group">
                                            <!-- <a href="javascript:void(0);" data=" $row->id_user " class="btn btn-danger item-hapus"><center><i class="mdi mdi-delete" style="font-size:16px;"></i></center></a> -->
                                            <a href="<?php echo site_url("manageuser/edit/".$row->id_user); ?>" class="btn btn-success"><center><i class="mdi mdi-pencil-box-outline" style="font-size:16px;" ></i></center></a>
                                            <a href="<?php echo site_url("manageuser/hapus/".$row->id_user); ?>" class="btn btn-danger item-hapus"><center><i class="mdi mdi-delete" style="font-size:16px;"></i></center></a>
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