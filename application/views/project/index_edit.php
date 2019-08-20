<div class="nav navbar-nav navbar-right">
    <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('sitac/cari');?>" method="post">
        <div class="form-group">
            <label>Cari Kode / Judul sitac</label>
            <input type="text" class="form-control" placeholder="Search" name="cari">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
    </form>
</div>
<a href="<?php echo site_url('sitac/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
<hr>
<?php echo $message;?>
<Table class="table table-striped">
    <thead>
        <tr>
            <td>No.</td>
            <td>RTP</td>
            <td>Alamat</td>
            <td>Lon</td>
            <td>lat</td>
            <td>Power</td>
            <td>Tgl Awal</td>
            <td>Tgl Akhir</td>
            <td>Status</td>
            <td colspan="2"></td>
        </tr>
    </thead>
    <?php $no=0; foreach($sitac as $row ): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->rtp;?></td>
        <td><?php echo $row->alamat;?></td>
        <td><?php echo $row->lon;?></td>
        <td><?php echo $row->lat;?></td>
        <td><?php echo $row->power;?></td>
        <td><?php echo $row->tgl_awal;?></td>
        <td><?php echo $row->tgl_akhir;?></td>
        <td><?php echo $row->status;?></td>
        <td><a href="<?php echo site_url('sitac/edit/'.$row->kode_sitac);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
        <td><a href="#" class="hapus" kode="<?php echo $row->kode_sitac;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
    <?php endforeach;?>
</Table>
<?php echo $pagination;?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
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
                url:"<?php echo site_url('sitac/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('sitac/index/delete_success');?>";
                }
            });
        });
    });
    
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#sitac-table').DataTable({
        "ajax": {
            url : "<?php echo site_url("sitac/sitac_page") ?>",
            type : 'GET'
        },
    });
});
</script>