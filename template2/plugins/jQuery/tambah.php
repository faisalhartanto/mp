<style>
.table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>


<script>
	$(document).ready(function() {
            var nomor = 0;
			var status="";
            $(".tambah").click(function(){
            nomor ++;
                $('#konten').append(
                             '<tr class="baris">'
                         + '<input name="nomor[]" value="'+ nomor +'" type="hidden"></td>'
                         + '<td><input name="kode_barang_'+ nomor +'" class="form-control" type="text"></td>'
                         + '<td><input name="nama_barang_'+ nomor +'" class="form-control" type="text"></td>'
                         + '<td><input name="harga_barang_'+ nomor +'" type="text"></td>'
                         + '<td><input type="button" id="hapus" value="Hapus"></td></tr>'
                    );
                });

			$(".tambahcpu").live('click',function(){
            nomor ++;
                $('#konten').append(

                             '<tr class="baris">'
                         //+ '<td><input name="nomor[]" value="'+ nomor +'" type="hidden"></td>'
                         + '<td><input class="form-control" name="nomor[]" value ="'+ nomor +'" type="hidden"></td>'
                         + '<td><input class="form-control" name="serial_number[]" class="form-control" type="text"></td>'
                         + '<td><input class="form-control" name="nama_pengguna[]" class="form-control" type="text"></td>'
                         + '<td><input class="btn btn-danger" type="button" id="hapus" value="Hapus"></td></tr>'
                    );
                });
				
			$(".tambahdll").live('click',function(){
            nomor ++;
                $('#konten').append(

                             '<tr class="baris">'
                         //+ '<td><input name="nomor[]" value="'+ nomor +'" type="hidden"></td>'
                         + '<td><input class="form-control" name="nomor[]" value ="'+ nomor +'" type="hidden"></td>'
                         + '<td><input class="form-control" name="serial_number[]" class="form-control" type="text"></td>'
                         + '<td><input class="form-control" name="nama_pengguna[]" class="form-control" type="text"></td>'
                         + '<td><input class="btn btn-danger" type="button" id="hapus" value="Hapus"></td></tr>'
                    );
                });	


			$(".tambahkendaraan").live('click',function(){
            nomor ++;
                $('#konten').append(

                             '<tr class="baris">'
                         //+ '<td><input name="nomor[]" value="'+ nomor +'" type="hidden"></td>'
						 + '<td><input class="form-control" name="nomor[]" value="'+ nomor +'" type="hidden"></td>'
                         + '<td><input class="form-control" name="var2[]" type="text"></td>'
						 + '<td><input class="form-control" name="var4[]" type="text"></td>'
                         + '<td><input class="form-control" name="var5[]" type="text"></td>'
						 + '<td><input class="form-control" class="form-control" name="var8[]" type="text"></td>'
						 + '<td><input class="form-control" name="nama_pengguna[]" class="form-control" type="text"></td>'
                         + '<td><input class="btn btn-danger" type="button" id="hapus" value="Hapus"></td></tr>'
                    );
                });


                $("#hapus").live('click', function () {
					$(this).parents(".baris").remove();
            	});




        });

	function tampilTabel()
	{
		if(status=="")
		{
			$('#tabel').slideDown();
			status="1";
		}
		else
		{
			$('#tabel').slideUp();
			status="";
		}
	}

    $(function(){

        function loadData(args) {
            //code
            $("#tambah").load("<?php echo site_url('brg/tambah');?>");
        }
        loadData();

        function kosong(args) {
            //code
            $("#kode").val('');
            $("#nama_brg").val('');

        }



    $('#tgl_po').datepicker({});

	   $("#status_asset").change(function() {
        var id_nama_barang = $("#status_asset").val();
        $("#po").val("");


        if (id_nama_barang != "") {
            $("#po-group")
            $("#po-group").show();

        }

        if (id_nama_barang == "Asset") {

            $("#po-group").show();

        }

        if (id_nama_barang == "Inventaris") {
            $("#po-group").hide();
        }



        if (id_nama_barang == "") {

            $("#po-group").hide();
        }


		});



		$(function(){
		       $("#namabrg").change(function() {
				var id_nama_barang = $(this).val();
				   switch(id_nama_barang){
					   case "Ruko":
					   case "Rumah":
						  $('#jnsbrg').after('<div class="form-group" id="tanah-group1"><label class="col-lg-2 control-label">Jenis Sertifikat</label><div class="col-lg-5"><select name="var1" id="hak" class="form-control"><option></option>option value="shm">SHM</option><option value="girik">Girik</option><option value="petok d">Petok D</option><option value="hgb">HGB</option><option value="strata title">Strata Title</option></select></div></div><div class="form-group" id="tanah-group2"><label for="luas" class="col-lg-2 control-label">Luas</label><div class="col-lg-5"><input type="text" name="var2" id="luas" class="form-control" ></div></div><div class="form-group" id="tanah-group3" ><label for="tgl_sertifikat" class="col-lg-2 control-label">Tanggal Sertifikat</label><div class="col-lg-5"><input type="date" id="" name="var3" class="form-control" ></div></div><div class="form-group" id="tanah-group4" ><label for="no_sertifikat" class="col-lg-2 control-label">No Sertifikat</label><div class="col-lg-5"><input type="text" name="var4" id="no_sertifikat" class="form-control" ></div></div><div class="form-group" id="tanah-group6" ><label for="alamat" class="col-lg-2 control-label">Alamat</label><div class="col-lg-5"><input type="text" name="var5" id="alamat" class="form-control" ></div></div>');
							break;

						case "Notebook":
						case "CPU":
						case "Netbook":
						case "Komputer":
							$('#jnsbrg').after('<div class="form-group" id="cpu-group1"><label class="col-lg-2 control-label">Processor</label><div class="col-lg-5"><input type="text" name="processor" class="form-control processor" ></div></div><div class="form-group" id="cpu-group2"><label class="col-lg-2 control-label">RAM</label><div class="col-lg-5"><input type="text" name="ram"  class="form-control ram" ></div></div><div class="form-group" id="cpu-group3" ><label class="col-lg-2 control-label">Hardisk</label><div class="col-lg-5"><input type="text" name="hdd" class="form-control hardisk" ></div></div><a class="tambahcpu" href"#" style="cursor:pointer; padding:4px; border:0px solid #000; background-color:#FF9900; color:#000000;">Tambah Data</a><div id="notebook" class="table-responsive"><table class="table" cellpadding="0" cellspacing="0"><thead><tr><th></th><th>Serial Number</th><th>Nama Pengguna</th></tr></thead><tbody id="konten"></tbody></table></div>')
							break;

						case "Mobil":
						case "Motor":
							$('#jnsbrg').after('<div class="form-group" id="kendaraan-group1"><label class="col-lg-2 control-label">Tahun Pembuatan</label><div class="col-lg-5"><input type="text" name="var1" class="form-control" ></div></div><div class="form-group" id="kendaraan-group2"><label class="col-lg-2 control-label">CC</label><div class="col-lg-5"><input type="text" name="var6"  class="form-control" ></div></div><div class="form-group" id="kendaraan-group3" ><label class="col-lg-2 control-label">Warna</label><div class="col-lg-5"><input type="text" name="var7" class="form-control" ></div></div><div class="form-group" id="kendaraan-group4" ><label class="col-lg-2 control-label">Asuransi Leasing</label><div class="col-lg-5"><input type="text" name="var9" class="form-control" ></div></div><a class="tambahkendaraan" href"#" style="cursor:pointer; padding:4px; border:0px solid #000; background-color:#FF9900; color:#000000;">Tambah Data</a><div class="box-body" id="tabel"><div class="table-responsive"><table class="table" cellpadding="0" cellspacing="0"><thead><tr><th></th><th style="width: 150px">No Polisi</th><th style="width: 200px">No Mesin</th><th style="width: 250px">No Rangka</th><th style="width: 200px">No Leasing</th><th style="width: 200px">Nama Pengguna</th><th>Hapus</th></tr></thead><tbody id="konten"></tbody></table></div></div>')
							break;
						case "Brankas":	
						case "AC":
						case "Barcode":
						case "Handphone":
						case "Camera digital":
						case "Switch hub":
						case "Bor tangan":
						case "Las":
						case "Gerinda":
						case "Crimping Kabel":
						case "Crimping Skun":
						case "Obeng":
						case "Palu":
						case "Kunci Inggris 8inch":
						case "Kunci Inggris 12inch":
						case "Katrol":
						case "Tang Potong":
						case "Tang Kombinasi":
						case "Tang Ampere":
						case "Body Harnest":
						case "Toolbox":
						case "Dongkrak hidrolik":
						case "Vacum cleaner":
						case "Printer":
						case "Scanner":
						case "Kursi":
						case "Kasur Busa":
						case "Meteran":
						case "Kunci Ring":
						case "Compressor 1.5 PK":
						case "Racun Api":
						case "Compressor 3 PK":
						case "Water Heater":
						case "DVR":
						case "ups":
						case "Dongle":
						case "GPS Receiver":
						case "Tembak Suhu":
						case "Keyboard Wireless":
						case "VGA Card":
						case "Tempat Sampah":
						case "Mini Fogger":
						case "Laser Distance Meter":
						
						
						
						
							$('#jnsbrg').after('<a class="tambahdll" href"#" style="cursor:pointer; padding:4px; border:0px solid #000; background-color:#FF9900; color:#000000;">Tambah Data</a><div id="notebook" class="table-responsive"><table class="table" cellpadding="0" cellspacing="0"><thead><tr><th></th><th>Serial Number</th><th>Nama Pengguna</th></tr></thead><tbody id="konten"></tbody></table></div>')
							break;
							


					  default:

					     $('.tambahkendaraan').remove();
						 $('.tambahdll').remove();
						 $('.tambahcpu').remove();
						 $('#tabel').remove();
						 $('#tanah-group3').remove();
						 $('#tanah-group4').remove();
						 $('#tanah-group6').remove();
						 $('#kendaraan-group1').remove();
						 $('#kendaraan-group2').remove();
						 $('#kendaraan-group3').remove();
						 $('#kendaraan-group4').remove();
						 $('#kendaraan-group5').remove();
						 $('#kendaraan-group6').remove();
						 $('#kendaraan-group7').remove();
						 $('#general-group').remove();
						 $('#cpu-group1').remove();
						 $('#cpu-group2').remove();
						 $('#cpu-group3').remove();
						 $('#notebook').remove();
						 
						 
				   }
				});
		});




		$("#metode_pengadaan").change(function() {
        var id_metode_pengadaan = $("#metode_pengadaan").val();


        if (id_metode_pengadaan != "") {

        }



		if (id_metode_pengadaan == "po") {

			$("#kondisiPO-group1").show();
			$("#kondisiPO-group2").show();

        }

		if (id_metode_pengadaan == "beli_langsung") {

			$("#kondisiPO-group1").hide();
			$("#kondisiPO-group2").show();

        }



        if (id_metode_pengadaan == "") {

			$("#kondisiPO-group1").hide();
			$("#kondisiPO-group2").hide();

        }


		})


		/** $("#alokasibrg").click(function(){
            var alokasibrg=$("#alokasibrg").val();

            $.ajax({
                url:"<?php //echo site_url('brg/cariKodealokasi');?>",
                type:"POST",
                data:"alokasibrg="+alokasibrg,
                cache:false,
                success:function(html){
                    $("#kodealokasi").val(html);
                }
            })
        }) **/

		$("#status_asset").click(function(){
            var status_asset=$("#status_asset").val();

            $.ajax({
                url:"<?php echo site_url('brg/cariKodeAsset');?>",
                type:"POST",
                data:"status_asset="+status_asset,
                cache:false,
                success:function(html){
                    $("#kodeinventaris").val(html);
                }
            })
        })



		$("#lokasi").click(function(){
            var lokasi=$("#lokasi").val();

            $.ajax({
                url:"<?php echo site_url('brg/cariKodewilayah');?>",
                type:"POST",
                data:"lokasi="+lokasi,
                cache:false,
                success:function(html){
                    $("#kodewilayah").val(html);
                }
            })
        })

		$("#alokasibrg").click(function(){
            var divisi=$("#alokasibrg").val();

            $.ajax({
                url:"<?php echo site_url('brg/cariKodeDivisi');?>",
                type:"POST",
                data:"divisi="+divisi,
                cache:false,
                success:function(html){
                    $("#kode_divisi").val(html);
                }
            })
        })



		$("#harga").change(function(){
            var harga=$("#harga").val();

            $.ajax({
                url:"<?php echo site_url('brg/cariKodeAsset');?>",
                type:"POST",
                data:"harga="+harga,
                cache:false,
                success:function(msg){
					 data=msg.split("|");
                    $("#status_asset").val(data[0]);
					$("#kodeinventaris").val(data[1]);


                }
            })
        })




		$("#kategori").click(function(){
            var kategori=$("#kategori").val();
            var wilayah=$("#wilayah").val();

            $.ajax({
                url:"<?php echo site_url('brg/cariKodekategori');?>",
                type:"POST",
                data:"kategori="+kategori+"&wilayah="+wilayah,
                cache:false,
                success:function(msg){
					data=msg.split("|");
                    $("#kode_kategori").val(data[0]);
                    $("#kodeurut").val(data[1]);
                }
            })
        })





        $("#namabrg").click(function(){
            var namabrg=$("#namabrg").val();

            $.ajax({
                url:"<?php echo site_url('brg/cariKodebrg');?>",
                type:"POST",
                data:"namabrg="+namabrg,
                cache:false,
                success:function(msg){
                    data=msg.split("|");
                    $("#kodebarang").val(data[0]);

                }
            })
        })





		$("#namabrg2").click(function(){
		var namabrg=$("#namabrg").val();

		if (namabrg=="CPU"){
            $("#myModal2").modal("show");
			}
			else {return false};
        })



		/*
		$("#datepicker2").datepicker({
		onChange: function() {
        var tanggal = $("#datepicker2").val();

        $.ajax({
                url:"<?php echo site_url('brg/cariKodetahun');?>",
                type:"POST",
                data:"tanggal="+tanggal,
                cache:false,
                success:function(msg){
					data=msg.split("|");
                    $("#kodetahun").val(data[0]);
					$("#kodebulan").val(data[1]);
                }
            })

			}
		});

		*/






		/* datepicker by click

		$("#datepicker2").click(function(){
            var tanggal=$("#datepicker2").val();

            $.ajax({
                url:"<?php echo site_url('brg/cariKodetahun');?>",
                type:"POST",
                data:"tanggal="+tanggal,
                cache:false,
                success:function(msg){
					data=msg.split("|");
                    $("#kodetahun").val(data[0]);
					$("#kodebulan").val(data[1]);
                }
            })
        })


	    */

        $("#kode").keypress(function(){
            var keycode = (event.keyCode ? event.keyCode : event.which);

            if(keycode == '13'){
                var kode=$("#kode").val();

                $.ajax({
                    url:"<?php echo site_url('penyerahan/cariBrg');?>",
                    type:"POST",
                    data:"kode="+kode,
                    cache:false,
                    success:function(msg){
                        data=msg.split("|");
                        if (data==0) {
                            alert("data tidak ditemukan");
                            $("#nama_brg").val('');
                            $("#sn").val('');
                        }else{
                            $("#nama_brg").val(data[0]);
                            $("#sn").val(data[1]);
                            $("#tambah").focus();
                        }
                    }
                })
            }
        })



        $("#tambah").click(function(){
            var kode=$("#kode").val();
            var nama_brg=$("#nama_brg").val();
            var sn=$("#sn").val();

            if (kode=="") {
                //code
                alert("Kode brg Masih Kosong");
                return false;
            }else if (nama_brg=="") {
                //code
                alert("Data tidak ditemukan");
                return false
            }else{
                $.ajax({
                    url:"<?php echo site_url('penyerahan/tambah');?>",
                    type:"POST",
                    data:"kode="+kode+"&nama_brg="+nama_brg+"&sn="+sn,
                    cache:false,
                    success:function(html){
                        loadData();
                        kosong();
                    }
                })
            }

        })

		/*
		$(".detailmerk").click(function(){
            var detailmerk=$(".detailmerk").val();


            $.ajax({
                url:"<?php echo site_url('brg/caridetailmerk');?>",
                type:"POST",
                data:"detailmerk="+detailmerk,
                cache:false,
                success:function(msg){
                    data=msg.split("|");
                    $(".processor").val(data[0]);
					$(".ram").val(data[1]);
					$(".hardisk").val(data[2]);


                }
            })

        })
		*/


        $("#simpan").click(function(){
            var nomer=$("#nomor").val();
            var pinjam=$("#pinjam").val();
            var nik=$("#nik").val();
			var namo=$("#nama").val();
			var penempatan_brg=$("#lokasi").val();
			var nama_petugas=$("#nama_petugas").val();
            var jumlah=parseInt($("#jumlahTemp").val(),10);

            if (nik=="") {
                alert("Pilih Nik Siswa");
                return false;
            }else if (jumlah==0) {
                alert("pilih brg yang akan dipinjam");
                return false;
            }else{
                $.ajax({
                    url:"<?php echo site_url('penyerahan/sukses');?>",
                    type:"POST",
                    data:"nomer="+nomer+"&pinjam="+pinjam+"&nik="+nik+"&namo="+namo+"&penempatan_brg="+penempatan_brg+"&nama_petugas="+nama_petugas+"&jumlah="+jumlah,
                    cache:false,
                    success:function(html){
                        alert("Transaksi penyerahann berhasil");
                        location.reload()


                    }
                })
            }

        })



        $(".hapus").live("click",function(){
            var kode=$(this).attr("kode");

            $.ajax({
                url:"<?php echo site_url('penyerahan/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    loadData();
                }
            });
        });

        $("#cari").click(function(){
            $("#myModal2").modal("show");
        })

        $("#caribrg").keyup(function(){
            var caribrg=$("#caribrg").val();

            $.ajax({
                url:"<?php echo site_url('penyerahan/pencarianbrg');?>",
                type:"POST",
                data:"caribrg="+caribrg,
                cache:false,
                success:function(html){
                    $("#tampilbrg").html(html);
                }
            })
        })

        $(".tambah").live("click",function(){
            var spek_processor=$(this).attr("spek_processor");
            var spek_hardisk=$(this).attr("spek_hardisk");
            var spek_ram=$(this).attr("spek_ram");

            $("#spek_processor").val(spek_processor);
            $("#spek_hardisk").val(spek_hardisk);
            $("#spek_ram").val(spek_ram);

            $("#myModal2").modal("hide");
        })

    })
</script>

<section class="content-header">
  <h1>
	<?php echo $title;?>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="">Transaksi</li>
	<li class="active">Input Barang</li>
  </ol>
</section>



<section class="content">
<script type="text/javascript"> 

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

</script>
	<div class="box">
		<div class="box-body">
			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
			
				
				<?php echo validation_errors(); echo $message;?>


					<div class="form-group">
                    <label class="col-lg-2 control-label">Tanggal</label>
                    <div class="col-lg-5">
                        <input type="datepicker" id="datepicker1" name="tgl_input" class="form-control" />
                    </div>
					</div>

					<div class="form-group" >
						<label class="col-lg-2 control-label">Metode Pengadaan</label>
						<div class="col-lg-5">

							<select name="metode_pengadaan" id="metode_pengadaan" class="form-control">
							<option></option>
							<option value="po">PO</option>
							<option value="beli_langsung">Pembelian Langsung</option>
							<option value="hibah">Hibah</option>
							<option value="lainnya">Lainnya</option>
							</select>
						</div>
					</div>

					<div class="form-group" id="kondisiPO-group1" style="display: none;" style="display: ">
						<label for="po" class="col-lg-2 control-label">No. PO</label>
						<div class="col-lg-5">
							<input type="text" name="po" class="form-control" >
						</div>
					</div>

					<div class="form-group" id="kondisiPO-group2" style="display: none;" style="display: ">
									<label class="col-lg-2 control-label">Vendor</label>
									<div class="col-lg-5">
										<select name="vendor" class="form-control" id="vendor">
											<option></option>
											<?php foreach($vendor as $vendor):?>
											<option><?php echo $vendor->nama_vendor;?></option>
											<?php endforeach;?>
										</select>
									</div>
					</div>

					<div class="form-group">
                    <label class="col-lg-2 control-label">Tanggal Perolehan</label>
                    <div class="col-lg-5">
                        <input type="datepicker" id="datepicker2" name="tgl_perolehan" class="form-control" />
                    </div> * Tanggal serah terima barang
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Harga Perolehan</label>
						<div class="col-lg-5">
							<input type="text" name="harga" id="harga" class="form-control">
						</div> *harga diluar PPN
					</div>


					<div class="form-group">
								<label class="col-lg-2 control-label">Budget</label>
								<div class="col-lg-5">
									<select name="budget" class="form-control" id="budget">
										<option></option>
										<?php foreach($departemen as $departemen):?>
										<option><?php echo $departemen->nama_departemen;?></option>
										<?php endforeach;?>
									</select>
								</div>
					</div>

					<div class="form-group">
						<label for="status_asset" class="col-lg-2 control-label">Status Asset Barang</label>
						<div class="col-lg-5">
							<input type="text" name="status_asset" id="status_asset" class="form-control" readonly="readonly">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Metode Perolehan</label>
						<div class="col-lg-5">

							<select name="metode_perolehan" class="form-control">
							<option></option>
							<option value="beli">beli</option>
							<option value="sewa beli">sewa beli</option>
							<option value="hibah">hibah</option>
							<option value="sitaan">sitaan</option>
							<option value="ganti rugi">ganti rugi</option>
							</select>
						</div>
					</div>

					<div class="form-group">
								<label class="col-lg-2 control-label">Wilayah.</label>
								<div class="col-lg-5">
									<input type="text" name="wilayah" class="form-control" id="wilayah" value="<?php echo $wilayahid;?>" readonly="readonly">
								</div>
					</div>

					<div class="form-group">
                    <label class="col-lg-2 control-label">Lokasi</label>
                    <div class="col-lg-5">
                        <select name="lokasi" class="form-control" id="lokasi" class=required>
                            <option></option>
                            <?php foreach($lokasi as $lokasi):?>
                            <option><?php echo $lokasi->nama_wilayah;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
					</div>



					<div class="form-group">
						<label class="col-lg-2 control-label">Alokasi Barang</label>
						<div class="col-lg-5">
							<select name="alokasibrg" class="form-control" id="alokasibrg">
								<option></option>
								<?php foreach($alldivisi as $alldivisi):?>
								<option><?php echo $alldivisi->nama_divisi;?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>



					<div class="form-group">
								<label class="col-lg-2 control-label">Kategori Barang</label>
								<div class="col-lg-5">
									<select name="kategori" class="form-control" id="kategori">
										<option></option>
										<?php foreach($kategori as $kategori):?>
										<option value="<?php echo $kategori->kategori?>"><?php echo $kategori->kategori;?></option>
										<?php endforeach;?>
									</select>
								</div>
					</div>

					<div class="form-group" id="jnsbrg">
						<label for="nama_barang" class="col-lg-2 control-label">Jenis Barang</label>
						<div class="col-lg-5">
							<select name="namabrg" class="form-control" id="namabrg">
											<option></option>
											<?php foreach($typebarang as $typebarang):?>
											<option value="<?php echo $typebarang->nama_brg?>" class="<?php echo $typebarang->kategori; ?>"><?php echo $typebarang->nama_brg;?></option>
											<?php endforeach;?>
							</select>
						</div>
					</div>

					<div id="spinner"></div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Merk Barang</label>
						<div class="col-lg-5">
							<select name="merk" class="form-control detailmerk" id="merk">
											<option></option>
											<?php foreach($merk as $merk):?>
											<option value="<?php echo $merk->nama_merk?>" class="<?php echo $merk->nama_brg; ?>"><?php echo $merk->nama_merk;?></option>
											<?php endforeach;?>
							</select>
						</div>
					</div>





					<div class="form-group" >
						<label class="col-lg-2 control-label">Kondisi Barang</label>
						<div class="col-lg-5">

							<select name="kondisi" id="kondisi" class="form-control">
							<option></option>
							<option value="baru">Baru</option>
							<option value="second">Second</option>
							</select>
						</div>
					</div>

					<div class="form-group" id="kondisi-group" style="display: none;">
						<label class="col-lg-2 control-label">Kondisi kualitas</label>
						<div class="col-lg-5">

							<select name="kondisi_kualitas" id="kondisi_kualitas" class="form-control">
							<option></option>
							<option value="baik">Baik</option>
							<option value="rusak">Rusak</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Catatan</label>
						<div class="col-lg-5">
							<input type="text" name="catatan" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Kode Barang</label>
						<div class="col-lg-1">
							<input type="text" name="kodeinventaris" id="kodeinventaris" class="form-control" readonly="readonly">
						</div>
						<div class="col-lg-1">
							<input type="text" name="kode_kategori" id="kode_kategori" class="form-control" readonly="readonly">
						</div>
						<div class="col-lg-2">
							<input type="text" name="kodewilayah" id="kodewilayah" class="form-control" readonly="readonly">
						</div>
						<div class="col-lg-2">
							<input type="text" name="kode_divisi" id="kode_divisi" class="form-control" readonly="readonly">
						</div>
						<div class="col-lg-1">
							<input type="text" name="kodetahun" id="kodetahun" class="form-control" readonly="readonly">
						</div>
						<div class="col-lg-1">
							<input type="text" name="kodebulan" id="kodebulan" class="form-control" readonly="readonly">
						</div>
						<div class="col-lg-2">
							<input type="text" name="kodeurut" id="kodeurut" class="form-control" readonly="readonly">
						</div>

					</div>

					<button id="add_data" class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
					<a href="<?php echo site_url('dashboard');?>" class="btn btn-default">Kembali</a>

					<script src="<?php echo base_url(); ?>assets/jquery-1.7.2.min.js"></script>
					<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.chained.min.js"></script>

						<!-- Fungsi javascript untuk onchange -->


					<script type="text/javascript">

					 $("#namabrg").chained("#kategori"); <!-- parameter yang digunakan mesti sama dengan id select list-->

				 /*
				 */

					</script>

					<script type="text/javascript">

					$("#merk").chained("#namabrg"); <!-- parameter yang digunakan mesti sama dengan id select list-->

			 /*
			 */

					</script>

					<script type="text/javascript">

					$("#lokasi").chained("#wilayah"); <!-- parameter yang digunakan mesti sama dengan id select list-->

			 /*
			 */

					</script>

			</form>
		</div>
	</div>
</section>

	<?php include('assets/script.php');?>




<script>
$(function(){
	$('#datepicker1').datepicker({
		  format: 'yyyy-mm-dd'
		});
	$('#datepicker2').datepicker({
		format: 'yyyy-mm-dd'

	}).on("changeDate", function() {
		var tanggal=$("#datepicker2").val();

            $.ajax({
                url:"<?php echo site_url('brg/cariKodetahun');?>",
                type:"POST",
                data:"tanggal="+tanggal,
                cache:false,
                success:function(msg){
					data=msg.split("|");
                    $("#kodetahun").val(data[0]);
					$("#kodebulan").val(data[1]);
                }
            })
		});

	/*$("#datepicker2").datepicker({
		onSelect: function(dateText) {
		display("Selected date: " + dateText + "; input's current value: " + this.value);
		}
		}).on("change", function() {
		display("Got change event from field");
		});

	*/


		//Date picker
	$('#datepicker3').datepicker({
		format: 'yyyy-mm-dd'
	});
});
		//Date picker
		/*
		$('#datepicker1').datepicker({
		  autoclose: true,
		  format: 'yyyy-mm-dd'
		});

		//Date picker

		$('#datepicker2').datepicker({
		  autoclose: true,
		  format: 'yyyy-mm-dd'
		});
*/
		//Date picker
		/*
		$('#datepicker3').datepicker({
		  autoclose: true
		});
*/
		  jQuery(function($) {
			$(document).ready(function () {
				$(".sidebar-menu li").removeClass("active");//this will remove the active class from
												   //previously active menu item
				$('#transaksi').addClass('active');
				$('#input-barang').addClass('active');
				//for demo
				//$('#demo').addClass('active');
				//for sale
				//$('#sale').addClass('active');
			});
		});
	</script>

	</body>
</html>
