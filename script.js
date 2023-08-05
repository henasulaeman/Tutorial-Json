let mahasiswa = {

	nama:"Sandika",
	nrp:"12111077",
	email:"hen@2gmail.com"

}

//console.info(JSON.stringify(mahasiswa)); //Untuk merubah Objek ke json di javascript

let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function function_name() {
	if (xhr.readyState==4 && xhr.status==200) {
		let mahasiswa= JSON.parse(this.responseText); //Merubah json ke Objek
		console.log(mahasiswa);
	}
}

 xhr.open('GET','data.json',true);
 xhr.send();