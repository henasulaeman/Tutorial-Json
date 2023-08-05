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