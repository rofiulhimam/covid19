<?php

use Illuminate\Database\Seeder;

class PassienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	function getNama(){
		$nama_depan_cewe = ['Adiratna', 'Azura', 'Binar', 'Bulan', 'Bintang', 'Cahya', 'Citra', 'Gadis', 'Indira', 'Indah', 'Intan', 'Jelita', 'Juwita', 'Kemuning', 'Kemala', 'Kenanga', 'Maya', 'Mawar'];
  		$nama_belakang_cewe = ['Mega', 'Mentari', 'Mustika', 'Ningrum', 'Ningsih', 'Nandita', 'Naresha', 'Ndari', 'Nusantara', 'Nirmala', 'Puspita', 'Permata', 'Pertiwi', 'Ratih', 'Ratu', 'Ratna', 'Wangi', 'Wening'];

  		$nama_depan_cowo = ['Guritno', 'Gerhana', 'Gibran', 'Jayachandra', 'Hadrian', 'Panca', 'Perdana', 'Pramana', 'Prasetyo', 'Pramuditha', 'Rahardian', 'Rezvan', 'Raditya', 'Randika', 'Raka', 'Rafardhan'];
   		$nama_belakang_cowo = ['Agung ', 'Abyasa', 'Adika', 'Angkasa', 'Abimanyu', 'Banyu', 'Bakti', 'Baskoro', 'Batara', 'Bayu', 'Buana', 'Budi', 'Dharma', 'Dirga', 'Gema', 'Genta'];
		
		$nama = '';
		$jkl = '';
		$jk = ['laki', 'perempuan'];
		$gender = rand(0,1);
		if($gender == 0 ){
			$nama = strval($nama_depan_cowo[rand(0,15)]).' '.strval($nama_belakang_cowo[rand(0,15)]);
			$jkl = 'laki'; 
		} else{
			$nama = strval($nama_depan_cewe[rand(0,17)]).' '.strval($nama_belakang_cewe[rand(0,17)]);
			$jkl = 'perempuan';
		}
		return array($nama, $jkl);
   		}

   		$kota = ['Kabupaten Bogor Cibinong'
		,'Kabupaten Sukabumi Pelabuhanratu'
		,'Kabupaten Cianjur	Cianjur'
		,'Kabupaten Bandung	Soreang'
		,'Kabupaten Garut Tarogong Kidul'
		,'Kabupaten Tasikmalaya	Singaparna'
		,'Kabupaten Ciamis Ciamis'
		,'Kabupaten Kuningan Kuningan'
		,'Kabupaten Cirebon	Sumber'
		,'Kabupaten Majalengka Majalengka'
		,'Kabupaten Sumedang Sumedang'
		,'Kabupaten Indramayu Indramayu'
		,'Kabupaten Subang Subang'
		,'Kabupaten Purwakarta Purwakarta'
		,'Kabupaten Karawang Karawang'
		,'Kabupaten Bekasi Cikarang'
		,'Kabupaten Bandung Barat Ngamprah'
		,'Kabupaten Pangandaran	Parigi'
		,'Kota Bogor'
		,'Kota Sukabumi'
		,'Kota Bandung'
		,'Kota Cirebon'
		,'Kota Bekasi'
		,'Kota Depok'
		,'Kota Cimahi'
		,'Kota Tasikmalaya'
		,'Kota Banjar'];

   		$values= '';


    	for ($i=1; $i <=50; $i++) {
    		$seed[$i] = '("'.$i.'", "'.getNama()[0].'","'.rand(1,80).'","'.getNama()[1].'","'.strval($kota[rand(0,26)]).'","'.\Carbon\Carbon::now().'","1")';
    	}

    	$values= implode(',', $seed);
	    
	    DB::insert('INSERT INTO pasiens (nik,nama,umur,jenis_kelamin,alamat,odp_date,status) values '.$values.' ');
   }     
}



