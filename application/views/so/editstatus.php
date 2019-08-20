
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
        <label class="col-lg-2 control-label">Id Sales Order (Project)</label>
        <div class="col-lg-3">
            <input type="text" name="id_so" id="id_so" class="form-control" value="<?php echo $so['id_so'];?>" readonly="readonly">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Id Main Project</label>
        <div class="col-lg-7">
            <select name="id_main_project" class="form-control" id="id_main_project" class=required readonly="readonly">
				<option><?php echo $so['id_main_project'];?></option>
				<?php foreach($mainproject as $mainproject):?>
				<option><?php echo $mainproject->id_main_project;?></option>
				<?php endforeach;?>
			</select>
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">No Document Project</label>
        <div class="col-lg-5">
			<input type="text" name="no_doc_project" id="no_doc_project" class="form-control" value="<?php echo $so['no_doc_project'];?>" readonly="readonly">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Deskripsi</label>
        <div class="col-lg-7">
            <input type="text" name="deskripsi" id="deksripsi" class="form-control" value="<?php echo $so['deskripsi'];?>" readonly="readonly">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Nilai Project</label>
        <div class="col-lg-7">
            <input type="text" name="nilai_project" id="nilai_project" class="form-control" value="<?php echo $so['nilai_project'];?>" readonly="readonly">
        </div>
    </div>
	
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Status Job</label>
        <div class="col-lg-3">
		<select name="status_job" class="form-control alamat" id="status_job">
				<option><?php echo $so['status_job'];?></option>
				<option value="On Progress">On Progress</option>
				<option value="bast">BAST</option>
				<option value="closed">Closed</option>
		</select>
		</div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Tanggal Update</label>
        <div class="col-lg-3">
            <input type="datepicker1" id="datepicker1" name="tgl_update" class="form-control">
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