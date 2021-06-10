Laporan Akhir Proyek
M.K. Rekayasa Perangkat Lunak (KOM331)


Asisten Praktikum :
1. Indah Puspita 
2. Qoriatul Khairunnisa




IPB Building




Disusun oleh
(Kelompok 7 - Paralel 3) :
Josua Sinaga                (G24180003)
Mufidah Ghina Z.        (G24180024)
Tiara Oktariani         (G24180025)
Annida Fauziyyatul A (G24180048)






  







Departemen Ilmu Komputer
Fakultas Matematika dan Ilmu Pengetahuan Alam
Institut Pertanian Bogor
2021
________________


PEMBAGIAN KERJA DALAM KELOMPOK 
Tabel 1. Pembagian kerja anggota kelompok
Nama 
	NIM 
	Berperan Sebagai
	Josua Sinaga
	G24180003
	

	Mufidah Ghina Z.
	G24180024
	

	Tiara Oktariani 
	G24180025
	

	Annida Fauziyyatul A
	G24180048
	

	

DESKRIPSI SINGKAT APLIKASI
IPB Building merupakan suatu aplikasi yang ditujukan untuk membantu mahasiswa yang terkait dalam sistem peminjaman ruangan yang ada di kampus IPB. IPB sendiri menjadi instansi utama dari aplikasi ini. IPB merupakan salah satu perguruan tinggi yang ada terletak di Kota Bogor, Jawa Barat. Kampus IPB lebih dikenal sebagai kampus pertanian terbesar di Indonesia, dan  saat ini menjadi kampus terbaik versi Kemendikbud. Kampus ini dipilih menjadi instansi utama karena pihak pemilik ide aplikasi adalah mahasiswa IPB. Mahasiswa IPB yang terlibat dalam perancangan aplikasi sistem informasi tersebut terdiri dari 4 orang, yaitu 1 pria dan 3 wanita. Keseluruhan merupakan mahasiswa jurusan Meteorologi Terapan angkatan 55. Ide ini muncul karena melihat keresahan banyak mahasiswa saat adanya hal yang mengharuskan adanya peminjaman ruangan.


USER ANALYSIS
Kebutuhan perangkat lunak dalam pengembangan website IPB Building ditulis dalam bentuk “User Stories”, seperti berikut :
* Sebagai aktivis mahasiswa, seringkali diadakannya kegiatan rapat atau acara untuk suatu organisasi. 
* Setiap kegiatan tentu memerlukan banyak persiapan, yang terutama adalah ruangan pelaksanaan. Kampus IPB adalah kampus dengan desain bangunan yang rumit, rumit di tata letak lebih tepatnya. 
* Salah satu mahasiswa yang menjadi orang yang bertugas untuk mencari ruangan yang bisa dipinjam agar kegiatan bisa dilaksanakan, tak jarang yang kebingungan untuk melakukan peminjaman ruangan kepada siapa, atau ruangan yang cocok untuk kegiatan tersebut seperti apa. 
* Akhirnya kebanyakan dari mahasiswa selalu menanyakan tentang peminjaman ruangan ke bagian administrasi pendidikan, padahal itu bukan bagian dari tugasnya. Namun, sekarang IPB Building hadir di lingkup kampus IPB yang sangat membantu dalam mencari ruangan, Pada website ini, semua mahasiswa IPB dapat mencari ruangan dengan mudah, baik lokasi atau kapasitas. Bisa melihat ruang kuliah, atau auditorium yang bisa dipinjam untuk suatu kegiatan.


SPESIFIKASI TEKNIS LINGKUNGAN PENGEMBANGAN
        Spesifikasi teknis lingkungan pengembangan  website IPB Building dibantu dari 3 faktor, diantaranya: 
1. Software
* Text Editor: Sublime Text 3
* Database: MySQL
* Server: Apache
* Framework: Bootstrap 4
2. Hardware
* Laptop: Toshiba Satellite C40-A
* Processor: Intel(R) Core(TM) i3-2348M CPU @ 2.3GHz
* RAM: 8,00 GB
* Operating System: Windows 10 Pro 64-bit
3. Tech Stack
* Version Control dan Collaboration Platform : Github, Trello, WhatsApp, Google Meet
* Teknologi: CSS, HTML, Javascript, dan PHP


 HASIL DAN PEMBAHASAN
        DESAIN
  

Gambar 1. Use case diagram IPB Building
        UML (Unified Modeling Language) adalah bahasa spesifikasi standar untuk mendokumentasikan, menspesifikasikan, dan membangun sistem perangkat lunak.UML terdiri dari use case diagram, class diagram, sequence diagram, dan activity diagram. UML pada Gambar 1 merupakan jenis User Case.  Use case diagram memvisualisasikan interaksi satu aktor atau lebih pada sistem, baik yang dilakukan aktor terhadap sistem maupun yang dilakukan sistem terhadap aktor (Grechanik et al. 2007). Selain itu diagram ini juga digunakan untuk mengetahui semua fungsi yang terdapat di dalam sistem dan menjelaskan tentang siapa saja yang berhak menggunakan fungsi-fungsi tersebut (Aminuddin 2019). Use case diagram pada gambar 1 merupakan pemodelan website IPB Building untuk menjelaskan perilaku aktor dalam menjalankan suatu sistem informasi. User dapat melakukan aktivitas seperti login, memesan gedung, melihat history, menghapus pesanan/membatalkan, mengupdate pesanan dan melakukan logout. Selain user, terdapat admin yang berperan dalam pemrosesan login dan logout pada database serta data peminjaman ruangan.


  

Gambar 2. Activity diagram IPB Building


        Gambar 2 menunjukkan activity diagram antara user dengan sistem yang terdiri dari aktivitas login dan melihat data mahasiswa, melakukan peminjaman ruangan dengan menambah data, memilih gedung, memilih tanggal pemesanan dan jenis transaksi. Sistem akan menampilkan data histori peminjaman maupun tampilan utama website IPB Building. Sequence diagram menggambarkan kelakuan objek pada use case dengan mendeskripsikan waktu hidup objek dan pesan yang dikirimkan dan diterima antar objek.


  

Gambar 3. Class diagram IPB Building


        Class diagram merupakan gambaran struktur sistem dari segi pendefinisian kelas- kelas yang akan dibuat untuk membangun sistem. Gambar 3 menunjukkan kelas diagram untuk sistem website IPB Building yang terdiri dari admin, user, dan peminjam (mahasiswa). Setiap kelas memiliki atribut yang berbeda ditunjukkan untuk menggambarkan suatu model sistem informasi. Relasi yang dibentuk pada tiap entitas user dan peminjaman, lalu entitas peminjaman dan admin mempunyai kardinalitas one or more (mandatory).
  

Gambar 4. ERD IPB Building


Entity Relationship Diagram (ERD) adalah suatu rancangan atau bentuk hubungan suatu kegiatan di dalam sistem yang berkaitan langsung dan mempunyai fungsi di dalam proses tersebut (Puspitasari 2016). Sistem yang dibangun untuk website IPB Building merupakan sistem penyewaan ruangan yang memiliki 3 entitas yaitu user, peminjaman (mahasiswa), dan admin. Masing-masing entitas memiliki atribut dengan satu primary key. Antara entitas satu dengan entitas yang lain memiliki hubungan asosiasi.  
     


  
         
Gambar 5. Arsitektur sistem IPB Building


FUNGSI UTAMA YANG DIKEMBANGKAN
Fungsi utama yang dikembangkan dalam aplikasi ini adalah fungsi dalam peminjaman gedung yang ada di IPB dengan rekaman tiap variabel data yang di update dalam database. 


Tabel 2 Fungsi CRUD (create, read, update, delete) untuk memperbarui konteks database mahasiswa
Use Case
	Mahasiswa
	Admin
	Meminjam ruangan 
	Create, Delete
	Read, Update
	Histori peminjaman 
	Read
	Create, Delete, Update
	Log in website
	Create 
	Read, Delete, Update
	 Transaksi         
	 Create        
	    Delete,Update
	                                         
HASIL IMPLEMENTASI
   
Gambar 6.  Tampilan form login
  

Gambar 7.  Tampilan berhasil login
  

Gambar 8.  Tampilan gagal login karena tidak memasukkan email atau password
  

Gambar 9.  Tampilan gagal login karena tidak menggunakan email IPB atau email atau password salah
  

Gambar 10.  Tampilan awal (home) website
  

Gambar 11.  Tampilan untuk fitur memesan gedung (fitur create)
  

Gambar 12.  Tampilan dari fitur Tampil Data (fungsi read)
  

Gambar 13.  Tampilan fitur update
  

Gambar 14.  Tampilan jika berhasil menghapus data (fitur delete)
  

Gambar 15.  Tampilan logout pada icon pojok kanan atas


TESTING (TEST CASE)
1. Positive Cases
1. Tambah data dapat dilakukan dengan baik oleh mahasiswa sesuai pilihan yang diinginkan 
2. Histori data mahasiswa dalam melakukan peminjaman ruangan dapat dilihat dan diedit
b. Negative Cases (Optional, jika ada jadi nilai tambah)
1. Tidak dapat login jika tidak menggunakan email IPB
2. Tidak dapat login jika tidak memasukkan email atau password
3. Tidak dapat login jika memasukkan email atau password yang salah
4. Tidak dapat memesan gedung di tanggal yang sama


SARAN UNTUK PENGEMBANGAN SELANJUTNYA
1. Menambahkan fitur informasi tentang gedung yang disewakan, seperti fitur Rincian Gedung
2. Dalam Rincian Gedung tersebut, terdapat informasi seperti gambar gedung, kapasitas, harga sewa, lokasi, nama penanggung jawab gedung, dan contact person penanggung jawab gedung.
3. Menambahkan fitur untuk upload surat resmi meminjam gedung (apabila terdapat acara khusus dan menyewa gedung khusus)
4. Menambahkan fitur profil
## Catatan
- Laporan terakhir dikumpul sebelum presentasi projek pada pertemuan-14. Keterlambatan pengumpulan akan mengurangi nilai.
- Silahkan mempersiapkan presentasi dengan sebaik mungkin, jadwal presentasi akan diumumkan 1 jam sebelum presentasi. 
- Harap mempersiapkan slide, trello, github, dan demo aplikasi 5 menit sebelum jadwal presentasi Anda.
- Waktu presentasi hanya 20 menit untuk masing-masing kelompok (tidak ada penambahan waktu bagi yang telat join ke google meet)