function tampilkan_semua_menu() {
	$.getJSON('data-donat.json', function (data) {
	//console.info(data);
	//ambil data dan menu
	let menu = data.menu;

	//console.info(menu);

		$.each(menu, function (i, data) {

			//console.log(i); //Akan Tampil index dari menu
			//console.log(data); // akan tampil data dari menu

			$('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3" ><img class="card-img-top" src="gambar/'+data.gambar+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text">'+data.deskripsi+'</p><p class="card-text"><?php echo "Rp". '+data.harga+')  ?></p><a href="#" class="btn btn-primary">Pesan</a></div></div></div>');
		});
	
	});
}

tampilkan_semua_menu();

// untuk aktif dan menon aktifkan class active pada menu
	$('.nav-link').on('click',function(){
		$('.nav-link').removeClass('active'); //remove dulu
		$(this).addClass('active'); // aktifkan kembali setelah di pilih $(this) li yang d klik

		let kategori=$(this).html(); //untuk mengambil html nav-link yang di klik
		//console.log(kategori); //untuk menampilkan html yg di klik
		$('h1').html(kategori);

		$.getJSON('data-donat.json', function (data){
		let menu = data.menu;
		let content ='';

		$.each(menu, function(i, data){
			let lowercase_kategori=kategori.toLowerCase();
			if (data.kategori == lowercase_kategori){
				content+='<div class="col-md-4"><div class="card mb-3" ><img class="card-img-top" src="gambar/'+data.gambar+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text">'+data.deskripsi+'</p><p class="card-text"><?php echo "Rp". '+data.harga+')  ?></p><a href="#" class="btn btn-primary">Pesan</a></div></div></div>';
				console.log(lowercase_kategori);
				
			}
			// let a = kategori.toLowerCase();
				// console.log(a);
			console.log(lowercase_kategori);
		});

		$('#daftar-menu').html(content);
	 });
   });
