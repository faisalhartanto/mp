
<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
<section class="content">
    <div class="box">
        <div class="box-body">
			<div class="panel panel-default">
				<div class="panel-body">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="form-filter">
                <?php echo validation_errors(); ?>
                <div class="form-horizontal">
                    
                    
                    <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <!--<button type="button" id="btn-filter" class="btn btn-primary"  >Filter</button>-->
                            <button type="button" id="btn-reset" class="btn btn-default" style="display : none ">Reset</button>
                            <button type="button" id="btn-excel" class="btn btn-default" style="display : none ">Export Excel</button>
                        </div>
                    </div>
                    
                    
                </div>  
				</form>
				</div>
			</div>
<a href="<?php echo site_url('so/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
<hr>

<div class="row">
    <div class="col-md-12">
			<div class="card">
				<div class="card-body">
                <!--<a href="<?php echo site_url('combat/tambah');?>" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambah</a>-->

                <?php echo $message;?>
                <div class="table-responsive">

				<table id="table" class="table table-bordered table-striped table-hover">
					 <thead>
					 <tr><td>NO</td><td>Tgl Input</td><td>Id SO</td><td>Id Project</td><td>No Doc Project</td><td>Deskripsi</td><td>Nilai Project</td><td>Tanggal SO</td><td>No PO Kesepakatan</td><td>Status Job</td><!--<td>Rutin</td><td>Telkomsel</td><td>PO atau Non PO</td><td>Status PO</td>--></tr>
					 </thead>
					 <tbody>
					 </tbody>
					 
					 
				</table>
				</div>			
				</div>
			</div>			
	</div>
</div>

</div>
<section>

<!--<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>-->
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>   
<script>
    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
            var kode=$("#idhapus").val();
            
            $.ajax({
                url:"<?php echo site_url('so/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('so/index/delete_success');?>";
                }
            });
        });
    });
    
</script>

<script type="text/javascript">

var table;    
$(document).ready(function() {
    table=$('#table').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "searching": true,


       "ajax": {
            "url": "<?php echo site_url('so/so_page')?>",
            "type": "POST",
            "data": function ( data ) {
                data.combat = $('#combat').val();
                data.alamat = $('#alamat').val();
                data.status = $('#status').val();
                
            }
             //"data": "",
        },
		
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
});


    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });

});


  

function delete_so(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('so/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                //$('#modal_form').modal('hide');
                //reload_table();
				window.location.href = "<?php echo site_url('so/index')?>";
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}
</script>

