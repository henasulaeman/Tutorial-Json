let mahasiswa = {
    nama :"Nayla Shaffa Azzahra",
    umur : "3",
    alamat:"perum GPI blok G 8"
}

// akan di tampilkan format objek
// console.log(mahasiswa);


// merubah objek ke JSON
// console.log(JSON.stringify(mahasiswa));

// Menggunakan AJAX vanila
let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(){
    if(xhr.readyState==4 && xhr.status==200){
        // Sebelum di parse ke Objek
        // let mahasiswa = this.responseText;
        
        //sesudah di parse ke objek
        let mahasiswa =  JSON.parse(this.responseText); 
        console.log(mahasiswa);
    }
}

// mengambil data dari coba.json asinkronous
xhr.open('GET','coba.json', true);
xhr.send();