var tampung_array = [];
var a;
var y; 

function add() {
   var masukan = document.getElementById('nomor');
   if(masukan.value != ""){
   tampung_array.push(masukan.value);
   show();
   cek();
   }
}

function show() {
   var html = '';
   a=tampung_array.length;
   for (var i=0; i<a; i++) {
      html += '' + tampung_array[i]+'';
   }
   var tampil = document.getElementById('tampil');
   tampil.value =''+html;
   document.getElementById("jumlah_kursi").value=''+a; 
   hitung()
}

function hitung(){
   var kursi = document.getElementById('nomor').value;
   var tanggal = document.getElementById('tanggal').value;
   var total = a * y ;
   if(kursi && tanggal != ""){
      if(total != 0){
         document.getElementById("total_harga").value=''+total;
      }
   }
}

function cek(){
   
    for(var i=0;i<a;i++){
      for(var j=i+1;j<a;j++){
         if(tampung_array[i] == tampung_array[j]){
            alert("Kursi sudah diambil");
            hapus();
         }
      }
   }
}

function hapus(){
   tampung_array.pop();
   show();
}

function harga(){
   var x = document.getElementById("tanggal").value;
   if (x == "24 Mei") {
      y = 35000;
      document.getElementById("harga_tiket").value=''+y;
   }
   else if(x == "25 Mei")
   {
      y = 35000;
      document.getElementById("harga_tiket").value=''+y;
   }
   else if(x == "26 Mei")
   {
      y = 35000;
      document.getElementById("harga_tiket").value=''+y;
   }
   else if(x == "27 Mei")
   {
      y = 35000;
      document.getElementById("harga_tiket").value=''+y;
   }
   else if(x == "28 Mei")
   {
      y = 40000;
      document.getElementById("harga_tiket").value=''+y;
   }
   else if(x == "29 Mei")
   {
      y = 50000;
      document.getElementById("harga_tiket").value=''+y;
   }
   else if(x == "30 Mei")
   {
      y = 50000;
      document.getElementById("harga_tiket").value=''+y;
   }
}



