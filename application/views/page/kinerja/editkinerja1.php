<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Filter</h4>
                    <table id="tableuser">
                        <tr>
                            <form class="pt-3" role="form" method="POST" action="<?php echo site_url('kinerja/cek_detail1') ?>">
                            <td style="width:10%;">
                                Pilih Kinerja :
                                <select class="form-control" id="id_kinerja" name="id_kinerja" placeholder="id_kinerja" style="color:#000;width:200px;"> 
                                    <option>Pilih kinerja..</option>
                                    <?php 
                                        $getkiner=$this->db->query("select * from kinerja where tanding='WITEL'")->result();
                                        foreach ($getkiner as $rowkiner) : 
                                    ?>
                                    <option value="<?php echo $rowkiner->id_kinerja; ?>"><?php echo $this->db->query("select * from indikator where id_indikator='$rowkiner->id_indikator'")->row()->indikator; ?></option>
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
                                <a href="<?php echo site_url('indikator/add'); ?>" class="btn btn-outline-primary btn-icon-text">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Tambah Indikator
                                </a>
                                <a href="<?php echo site_url('kinerja/editkinerja'); ?>" class="btn btn-warning btn-icon-text">
                                    <i class="ti-pencil btn-icon-prepend"></i>
                                    Edit Kinerja
                                </a>
                            </td>
                        </tr>   
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="https://docs.google.com/spreadsheets/d/1OxqEND2kFGJxKSrORZWo6Ee_SVQ-i2TDsyKRscM9tVk/edit#gid=0" target="_blank" class="btn btn-primary btn-icon-text">
                        <i class="ti-go btn-icon-prepend"></i>
                        Go To Spreadshet
                    </a>
                    <a href="https://sulteng.telkom.co.id/SultengDashboardSheet/Updatekinerja.php" class="btn btn-danger btn-icon-text">
                        <i class="ti-go btn-icon-prepend"></i>
                        Sinkronisasi
                    </a>
                    <br><br>
                    <p class="card-title mb-0">Edit Kinerja Unit 
                    </p>
                    <br>
                    <!-- <div class="table-responsive pt-3"> -->
                    <iframe src="https://docs.google.com/spreadsheets/d/1OxqEND2kFGJxKSrORZWo6Ee_SVQ-i2TDsyKRscM9tVk/edit#gid=0" style="width:100%;" height="800px;" title="Iframe Example"></iframe>
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