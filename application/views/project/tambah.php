
<script>
$(function(){

		
		
$("#site_id").click(function(){
	
            var site_id=$("#site_id").val();

            $.ajax({
                url:"<?php echo site_url('inst/cariDetailsite');?>",
                type:"POST",
                data:"site_id="+site_id,
                cache:false,
                success:function(html){
                    $("#site_name").val(html);
                }
            })
        })	
		
		
$(".alamat").click(function(){
            var alamat=$(".alamat").val();

            $.ajax({
                url:"<?php echo site_url('inst/cariDetailsitac');?>",
                type:"POST",
                data:"alamat="+alamat,
                cache:false,
               success:function(msg){
					data=msg.split("|");
                    $("#lon").val(data[0]);
					$("#lat").val(data[1]);
					$("#kode_sitac").val(data[2]);
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
        <div class="col-lg-5">
            <input type="datepicker" id="datepicker1" name="tgl_input" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Id Project</label>
        <div class="col-lg-3">
            <input type="text" name="id_main_project" id="id_main_project" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">No Dokumen Project</label>
        <div class="col-lg-7">
            <input type="text" name="no_doc_project" id="no_doc_project" class="form-control">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-lg-2 control-label">Deskripsi Project</label>
        <div class="col-lg-7">
            <input type="text" name="deskripsi_project" id="deskripsi_project" class="form-control">
        </div>
    </div>
	
	
 
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('project');?>" class="btn btn-default">Kembali</a>
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

					 $("#alamat").chained("#rtp"); <!-- parameter yang digunakan mesti sama dengan id select list-->

				 /*
				 */

</script>

<script type="text/javascript">

					 $("#kode_sitac").chained("#alamat"); <!-- parameter yang digunakan mesti sama dengan id select list-->

				 /*
				 */

</script>