<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Daftar Setoran</h2>
            </div>        
            <div class="m-b-4 text-right">
                  <div class="col-12">
                  <a href="<?=base_url('#');?>">
                        <span type="button" class="btn btn-success btn-sm" style="margin-bottom: 10px">
                        <i class="material-icons">scanner</i>
                            Scan
                        </span>
                    </a>
                    <a href="<?=base_url('Setoran/tambah_setoran');?>">
                        <span type="button" class="btn btn-success btn-sm" style="margin-bottom: 10px">
                            <i class="material-icons">add</i>
                            Tambah
                        </span>
                    </a>
                  </div>
            </div>      
			
			<!-- Condensed Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Daftar Setoran</h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="table1">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
										<th>TANGGAL</th>
                                        <th>JUMLAH PO</th>
                                        <th>JUMLAH SETORAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                        <td>1</td>
                                        <td>Angelina Sondakh</td>
                                        <td>12/12/2020</td>
                                        <td>500</td>
                                        <td>Rp. 50.000.000</td>
                                        
                                    </tr>
							<!--		<?php 									
									foreach($siswa as $ds){ 
									?>
                                    <tr>
                                        <th scope="row"><?=$ds->nis;?></th>
                                        <td><?=$ds->nama;?></td>
                                        <td><?=$ds->alamat;?></td>
                                        <td><?=$ds->tgl_lahir;?></td>
										<td><?=$ds->jenis_kelamin;?></td>
                                        <td><?=$ds->telp;?></td>
									
                                    	<td><a class="btn btn-warning" href="<?=base_url('siswa/siswa_nis_retrieve/').$ds->nis;?>">Edit</a> <a class="btn btn-danger" href="<?=base_url('siswa/siswa_delete/').$ds->nis;?>">Delete</a></td>
                                    </tr>
									<?php
									}
									?>
                            -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Condensed Table -->
        </div>
    </section>
 <!-- Jquery Core Js -->
    <script src="<?=base_url('plugins/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('plugins/bootstrap/js/bootstrap.js');?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url('plugins/bootstrap-select/js/bootstrap-select.js');?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url('plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('plugins/node-waves/waves.js');?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url('plugins/jquery-countto/jquery.countTo.js');?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?=base_url('plugins/raphael/raphael.min.js');?>"></script>
    <script src="<?=base_url('plugins/morrisjs/morris.js');?>"></script>

    <!-- ChartJs -->
    <script src="<?=base_url('plugins/chartjs/Chart.bundle.js');?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.resize.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.pie.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.categories.js');?>"></script>
    <script src="<?=base_url('plugins/flot-charts/jquery.flot.time.js');?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?=base_url('plugins/jquery-sparkline/jquery.sparkline.js');?>"></script>

    <!-- Custom Js -->
    <script src="<?=base_url('js/admin.js');?>"></script>
    <script src="<?=base_url('js/pages/tables/jquery-datatable.js');?>"></script>
    
    <!-- Input Mask Plugin Js -->
    <script src="<?=base_url('plugins/jquery-inputmask/jquery.inputmask.bundle.js');?>"></script>

    <!-- Demo Js -->
    <script src="<?=base_url('js/demo.js');?>"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="<?=base_url('plugins/jquery-datatable/jquery.dataTables.js');?>"></script>
    <script src="<?=base_url('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js');?>"></script>
    <script src="<?=base_url('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js');?>"></script>
    <script src="<?=base_url('plugins/jquery-datatable/extensions/export/buttons.flash.min.js');?>"></script>
    <script src="<?=base_url('plugins/jquery-datatable/extensions/export/jszip.min.js');?>"></script>
    <script src="<?=base_url('plugins/jquery-datatable/extensions/export/pdfmake.min.js');?>"></script>
    <script src="<?=base_url('plugins/jquery-datatable/extensions/export/vfs_fonts.js');?>"></script>
    <script src="<?=base_url('plugins/jquery-datatable/extensions/export/buttons.html5.min.js');?>"></script>
    <script src="<?=base_url('plugins/jquery-datatable/extensions/export/buttons.print.min.js');?>"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#table1').DataTable()
            
        });
    </script>
    <script type="text/javascript">
            $(function () {
                $('#datetime').datetimepicker();
            });
    </script>
</body>

</html>