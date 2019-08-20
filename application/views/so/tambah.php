
<script>
$(function(){

		
		
$("#id_main_project").click(function(){
	
            var id_main_project=$("#id_main_project").val();

            $.ajax({
                url:"<?php echo site_url('so/cariDetailproject');?>",
                type:"POST",
                data:"id_main_project="+id_main_project,
                cache:false,
                success:function(html){
                    $("#no_doc_project").val(html);
                }
            })
        })	
		
		
	




		
})		
</script>




<legend><?php echo $title;?></legend>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" />
    <?php echo validation_errors(); echo $message;?>
    
	
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Tgl Input</label>
        <div class="col-lg-3">
            <input type="datepicker" id="datepicker1" name="tgl_input" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Id Sales Order (Project)</label>
        <div class="col-lg-3">
            <input type="text" name="id_so" id="id_so" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Id Main Project</label>
        <div class="col-lg-7">
            <select name="id_main_project" class="form-control" id="id_main_project" class=required>
				<option></option>
				<?php foreach($mainproject as $mainproject):?>
				<option><?php echo $mainproject->id_main_project;?></option>
				<?php endforeach;?>
			</select>
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">No Document Project</label>
        <div class="col-lg-5">
			<input type="text" name="no_doc_project" id="no_doc_project" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Deskripsi</label>
        <div class="col-lg-7">
            <input type="text" name="deskripsi" id="deksripsi" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Nilai Project</label>
        <div class="col-lg-7">
            <input type="text" name="nilai_project" id="nilai_project" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Tanggal SO</label>
        <div class="col-lg-3">
            <input type="datepicker" id="datepicker2" name="bulan" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">No PO Kesepakatan</label>
        <div class="col-lg-7">
            <input type="text" name="no_po_kesepakatan" id="no_po_kesepakatan" class="form-control">
        </div>
    </div>
	
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Status Job</label>
        <div class="col-lg-3">
		<select name="status_job" class="form-control alamat" id="status_job">
				<option></option>
				<option value="belum dikerjakan">Belum Dikerjakan</option>
				<option value="On Progress">On Progress</option>
				<option value="bast">BAST</option>
				<option value="closed">Closed</option>
		</select>
		</div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Rutin atau Non Rutin</label>
        <div class="col-lg-3">
		<select name="rutin" class="form-control alamat" id="rutin">
				<option></option>
				<option value="rutin">Rutin</option>
				<option value="nonrutin">Non Rutin</option>
		</select>
		</div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Project Telkomsel?</label>
        <div class="col-lg-3">
            <select name="telkomsel" class="form-control alamat" id="telkomsel">
				<option></option>
				<option value="telkomsel">Telkomsel</option>
				<option value="nontelkomsel">Non Telkomsel</option>
			</select>
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Ber PO</label>
        <div class="col-lg-3">
            <select name="po_nonpo" class="form-control alamat" id="berpo">
				<option></option>
				<option value="ya">Ya</option>
				<option value="tidak">Tidak</option>
			</select>
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Status PO</label>
        <div class="col-lg-3">
            <select name="status_po" class="form-control alamat" id="berpo">
				<option></option>
				<option value="ada">Ada</option>
				<option value="belum ada">Belum Ada</option>
			</select>
        </div>
    </div>
	
	
 
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('so');?>" class="btn btn-default">Kembali</a>
    </div>
	<!--<script src="<?php echo base_url('assets/jquery-1.7.2.min.js')?>"</script>-->
</form>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>

<script>
$(function(){
	$('#datepicker1').datepicker({
		  format: 'yyyy-mm-dd'
		});

	$('#datepicker2').datepicker({
		  format: 'yyyy-mm-dd'
		});	
});
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.chained.min.js"></script>
<script type="text/javascript">

					 $("#no_doc_project").chained("#id_main_project"); <!-- parameter yang digunakan mesti sama dengan id select list-->

				 /*
				 */

</script>

<script type="text/javascript">

					 $("#kode_sitac").chained("#alamat"); <!-- parameter yang digunakan mesti sama dengan id select list-->

				 /*
				 */

</script>