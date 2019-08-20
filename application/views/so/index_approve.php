
<section class="content-header">
  <h1>
	<?php echo $title;?>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
		
		
				
		<hr>
		<?php echo $message;?>
		<form name="forms" action="<?php echo site_url('so/approveso/'); ?>" method="POST" enctype="multipart/form-data" id="form-filter">
		<table id="example1" class="table table-striped" class="display nowrap" cellspacing="0" width="100%">
			
			<thead>
			<tr>
			
			
			<input type="checkbox" id="checkAll" ><label>Check All</label>
			
			
			<hr />
			</tr>
				<tr>
					<th>No.</th>
					<th style="min-width: 200px">Id SO</th>
					<th style="min-width: 100px">Tanggal Input</th>
					<th style="min-width: 150px">Id Main Project</th>
					<th>No Doc Project</th>
					<th>Deskripsi</th>
					<th style="min-width: 150px">Nilai Project</th>
					<th style="min-width: 100px">Tanggal SO</th>
					<th style="min-width: 100px">Status PO</th>
					<th style="min-width: 100px">NO PO Kesepakatan</th>
					

				</tr>
			</thead>
			
			<?php $no=1;?>
			<?php foreach($so as $row ) {?>
			
			<tbody>
				<tr>
					<td><?php echo $no++;?></td>
					<td><input type="checkbox" name="forms[]" id="forms[]" value="<?php print $row->id_so; ?>"/><label>&nbsp;<?php echo $row->id_so; ?></label></td>
					<td><?php echo $row->tgl_input;?></td>
					<td><?php echo $row->id_main_project;?></td>
					<td><?php echo $row->no_doc_project;?></td>
					<td><?php echo $row->deskripsi;?></td>
					<td><?php echo $row->nilai_project;?></td>
					<td><?php echo $row->bulan;?></td>
					<td><?php echo $row->status_po;?></td>
					<td><?php echo $row->no_po_kesepakatan;?></td>
					
					
				</tr>
		
			<?php } ?>
			</tbody>
					
			<button type="submit" class="btn btn-primary"><i class=""></i>Approve</button>
		</table>
		</form>
		<?php echo $pagination;?>
				</div>
			</div>
		</div>
	</div>
</section>

	<?php include('assets/script.php');?>
	<script>	
		  
		  jQuery(function($) {
			$(document).ready(function () {
				$(".sidebar-menu li").removeClass("active");//this will remove the active class from  
												   //previously active menu item 
				$('#beranda').addClass('active');
				//for demo
				//$('#demo').addClass('active');
				//for sale 
				//$('#sale').addClass('active');
			});
		});
		
		$(document).ready(function() {
		$('#example1').DataTable( {
			"scrollX": true,
			"paging":   false,
			"ordering": false,
			"searching": false,
			"info":     false
		} );
	} );
		
	</script>

<script>
    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });
		
		$('#checkAll').click(function () {    
		$('input:checkbox').prop('checked', this.checked);    
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
	</body>
</html>