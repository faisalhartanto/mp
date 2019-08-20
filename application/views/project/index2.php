
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
<a href="<?php echo site_url('project/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
<hr>
<?php echo $message;?>
<table id="table" class="table table-bordered table-striped table-hover">
     <thead>
     <tr><td>NO</td><td>Tgl Input</td><td>Id Main Project</td><td>No Dokumen Project</td><td>Deskripsi</td></tr>
     </thead>
     <tbody>
     </tbody>
</table>
</div>
</div>
</section>


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
                url:"<?php echo site_url('inst/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('inst/index/delete_success');?>";
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
            "url": "<?php echo site_url('project/project_page')?>",
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


function delete_project(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('project/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                //$('#modal_form').modal('hide');
                //reload_table();
				window.location.href = "<?php echo site_url('project/index')?>";
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}
</script>

