<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lesson Learn</h4>
                <div class="table-responsive">
                    <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                    <table id="tableuser" class="table-striped display expandable-table wrap" cellspacing="0" width="100%">
                    <!-- <table class="table-striped table-hover wrap" id="product_table" cellspacing="0" width="100%"> -->
                        <thead>
                            <tr align="center" style=''>
                                <th style='width:5%;'><center>No</center></th>
                                <th style='width:5%;'><center>Tanggal</center></th>
                                <th style='width:5%;'><center>Kinerja</center></th>
                                <th style='width:5%;'><center>Fact Finding</center></th>
                                <th style='width:5%;'><center>Teritory</center></th>
                                <th style='width:5%;'><center>Status</center></th>
                                <th style='width:5%;'><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($getll as $row) : ?>
                                <tr style=''>
                                    <td style="vertical-align:middle;width:5%;font-size:11px;" align="center"><?php echo $no; ?></td>
                                    <td style="vertical-align:middle;width:5%;font-size:11px;" align="center"><?php echo $row->tanggal; ?></td>
                                    <td style="vertical-align:middle;width:5%;font-size:11px;" align="center"><?php echo $this->db->query("select * from kinerja where id_kinerja='$row->id_kinerja'")->row()->indikator; ?></td>
                                    <td style="vertical-align:middle;width:20%;font-size:11px;">
                                        <?php echo $row->lesson; ?>
                                    </td>
                                    <td style="vertical-align:middle;width:5%;font-size:11px;" align="center"><?php echo $this->db->query("select * from teritory where id_teritory='$row->teritory'")->row()->teritory; ?></td>
                                    <td style="vertical-align:middle;width:5%;font-size:11px;" align="center">
                                        <?php 
                                        if ($row->status_ll=="close") 
                                        {
                                        ?>    
                                                <button type="button" class="btn btn-primary btn-sm">Close</button>
                                        <?php 
                                        }
                                            else 
                                        {
                                        ?>
                                                <button type="button" class="btn btn-danger btn-sm">Open</button>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td align="center" style="vertical-align:middle;width:5%">
                                        <div class="btn-group">
                                            <!-- <a href="javascript:void(0);" data=" $row->id_user " class="btn btn-danger item-hapus"><center><i class="mdi mdi-delete" style="font-size:16px;"></i></center></a> -->
                                            <a href="<?php echo site_url('track/update/ll/'.$row->id_ll); ?>" class="btn btn-success"><center><i class="ti-check btn-icon-prepend" style="font-size:11px;" ></i></center></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php $no++; endforeach; ?>
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