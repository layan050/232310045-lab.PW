document.writeln("<CENTER>");
document.writeln("<HR WIDTH=600 COLOR=Black>");
document.writeln("<H1>INSTITUTE BISNIS DAN INFORMATIK KESATUAN BOGOR</H1>");
document.writeln("<H2>FAKULTAS INFORMATIKA DAN PARIWISATA<H2>");
document.writeln("<H3>JURUSAN TEKNOLOGI INFORMASI<H3>");
document.writeln("<HR WIDTH=600 COLOR=Black>");
document.writeln("</CENTER>");


function jumlah() {
    var bilangan_1 = parseFloat(document.fform.bilangan_1.value) || 0;
    var bilangan_2 = parseFloat(document.fform.bilangan_2.value) || 0;
    alert("Hasil Penjumlahan = " + (bilangan_1 + bilangan_2));
}

function tekan() {
    document.fform.onama.value = document.fform.nama.value;
    document.fform.oalamat.value = document.fform.alamat.value;
}

function radio_box() {
    var gender = document.querySelector('input[name="gender"]:checked');
    alert("Anda adalah seorang " + (gender ? gender.value : "Belum memilih"));
}

function hobby_check() {
    var hobby = [];
    if (document.getElementById("bola").checked) hobby.push("Nonton Bola");
    if (document.getElementById("tv").checked) hobby.push("Nonton TV");
    alert("Hobby anda: " + (hobby.length > 0 ? hobby.join(", ") : "HOBBYLESS...."));
}

function tekanKet() {
    document.fform.Oket.value = document.fform.Ket.value;
}



function tanyabilangan() {
    var bil = parseFloat(document.fform.bilangan.value);
    if (isNaN(bil)) {
        alert("Anda Belum memasukkan Bilangan");
    } else {
        var jenis = bil > 0 ? "Adalah bilangan Positif" : bil < 0 ? "Adalah bilangan Negatif" : "Adalah Nol";
        alert(bil + " " + jenis);
    }
}
function hitungip() {
    var quis = parseFloat(document.fform.iquis.value);
    var tugas = parseFloat(document.fform.itugas.value);
    var uts = parseFloat(document.fform.iuts.value);
    var uas = parseFloat(document.fform.iuas.value);
    var ip = " ";
    var ket = " ";
    var na = 0.1 * quis + 0.2 * tugas + 0.3 * uts + 0.4 * uas;
    if (na > 80 && na <= 100) {
      ip = "A";
      ket = "Lulus dengan Sangat Baik";
    } else if (na > 68 && na <= 80) {
      ip = "B";
      ket = "Lulus dengan Baik";
    } else if (na > 55 && na <= 68) {
      ip = "C";
      ket = "Lulus dengan Cukup";
    } else if (na > 38 && na <= 55) {
      ip = "D";
      ket = "Lulus dengan Kurang";
    } else {
      ip = "E";
      ket = "Tidak Lulus";
    }
    document.fform.oip.value = ip;
    document.fform.oket.value = ket;
    // gunakan untuk mengecek alert (ip+""+na);
  }

  function tanyabulan() {
    var bulan = parseFloat(document.fform.ibulan.value);
    var namabulan = " ";
    switch (bulan) {
      case 1:
        namabulan = "Bulan ke 1 adalah = Januari";
        break;
      case 2:
        namabulan = "Bulan ke 2 adalah = Februari";
        break;
      case 3:
        namabulan = "Bulan ke 3 adalah = Maret";
        break;
      case 4:
        namabulan = "Bulan ke 4 adalah = April";
        break;
      case 5:
        namabulan = "Bulan ke 5 adalah = Mei";
        break;
      case 6:
        namabulan = "Bulan ke 6 adalah = Juni";
        break;
      case 7:
        namabulan = "Bulan ke 7 adalah = Juli";
        break;
      case 8:
        namabulan = "Bulan ke 8 adalah = Agustus";
        break;
      case 9:
        namabulan = "Bulan ke 9 adalah = September";
        break;
      case 10:
        namabulan = "Bulan ke 10 adalah = Oktober";
        break;
      case 11:
        namabulan = "Bulan ke 11 adalah = November";
        break;
      case 12:
        namabulan = "Bulan ke 12 adalah = Desember";
        break;
      default:
        namabulan = "Anda salah mengisi";
    }
    alert(namabulan);
  }

  function a() {
    var nim = document.fform.nim.value;
    var nama = document.fform.nama.value;
    var gender = document.fform.jenisKelamin.value;
    var agama = document.fform.agama.value;
    alert(nim + " " + nama + " " + agama + " " + gender);
  }
  function a() {
    // Get form values
    var nim = document.forms["fform"]["nim"].value;
    var nama = document.forms["fform"]["nama"].value;
    
    // Get selected gender
    var gender = document.querySelector('input[name="jenisKelamin"]:checked');
    var jenisKelamin = gender ? gender.value : "Not selected";

    // Get selected religion
    var agama = document.forms["fform"]["agama"].value;

    // Display values
    alert("NIM: " + nim + "\nNama: " + nama + "\nJenis Kelamin: " + jenisKelamin + "\nAgama: " + agama);
}

function tekanJurusan() {
    // Get the selected value from the dropdown
    var jurusan = document.querySelector('select[name="Jurusan"]').value;

    // Set the selected value in the output text field
    document.querySelector('input[name="Ojurusan"]').value = jurusan;
}

