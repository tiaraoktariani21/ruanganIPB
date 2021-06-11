## Laporan akhir projek

**IPB BUILDING**

Nama Asisten Praktikum
- Indah Puspita
- Qoriatul Khairunnisa

Kelompok 7 Paralel P3
- Josua Sinaga		     (G24180003) as Frontend
- Mufidah Ghina Z.	     (G24180024) as Backend
- Tiara Oktariani 	     (G24180025) as Frontend
- Annida Fauziyyatul A (G24180048) as Backend

**Deskripsi singkat aplikasi**
- IPB Building merupakan suatu aplikasi yang ditujukan untuk membantu mahasiswa yang terkait dalam sistem peminjaman ruangan yang ada di kampus IPB. IPB sendiri menjadi instansi utama dari aplikasi ini. IPB merupakan salah satu perguruan tinggi yang ada terletak di Kota Bogor, Jawa Barat. Kampus IPB lebih dikenal sebagai kampus pertanian terbesar di Indonesia, dan  saat ini menjadi kampus terbaik versi Kemendikbud. Kampus ini dipilih menjadi instansi utama karena pihak pemilik ide aplikasi adalah mahasiswa IPB. Mahasiswa IPB yang terlibat dalam perancangan aplikasi sistem informasi tersebut terdiri dari 4 orang, yaitu 1 pria dan 3 wanita. Keseluruhan merupakan mahasiswa jurusan Meteorologi Terapan angkatan 55. Ide ini muncul karena melihat keresahan banyak mahasiswa saat adanya hal yang mengharuskan adanya peminjaman ruangan. 

**User analysis** 
  * User story
Kebutuhan perangkat lunak dalam pengembangan website IPB Building ditulis dalam bentuk “User Stories”, seperti berikut :
      1. Sebagai aktivis mahasiswa, seringkali diadakannya kegiatan rapat atau acara untuk suatu organisasi. 
      2. Setiap kegiatan tentu memerlukan banyak persiapan, yang terutama adalah ruangan pelaksanaan. Kampus IPB adalah kampus dengan desain bangunan yang rumit, rumit di tata letak lebih tepatnya. 
      3. Salah satu mahasiswa yang menjadi orang yang bertugas untuk mencari ruangan yang bisa dipinjam agar kegiatan bisa dilaksanakan, tak jarang yang kebingungan untuk melakukan peminjaman ruangan kepada siapa, atau ruangan yang cocok untuk kegiatan tersebut seperti apa. 
       4. Akhirnya kebanyakan dari mahasiswa selalu menanyakan tentang peminjaman ruangan ke bagian administrasi pendidikan, padahal itu bukan bagian dari tugasnya. Namun, sekarang IPB Building hadir di lingkup kampus IPB yang sangat membantu dalam mencari ruangan, Pada website ini, semua mahasiswa IPB dapat mencari ruangan dengan mudah, baik lokasi atau kapasitas. Bisa melihat ruang kuliah, atau auditorium yang bisa dipinjam untuk suatu kegiatan.

**Spesifikasi teknis lingkungan pengembangan**
1. Software:
    - Text Editor: Sublime Text 3
    - Database: MySQL
    - Server: Apache
    - Framework: Bootstrap 4
2. Hardware:
    - Laptop: Toshiba Satellite C40-A
    - Processor: Intel(R) Core(TM) i3-2348M CPU @ 2.3GHz
    - RAM: 8,00 GB
    - Operating System: Windows 10 Pro 64-bit
3. Tech Stack
    - Version Control dan Collaboration Platform : Github, Trello, WhatsApp, Google Meet
    - Teknologi: CSS, HTML, Javascript, dan PHP

**Hasil dan pembahasan** 
  * Use case diagram 
![Untitled Diagram (70)](https://user-images.githubusercontent.com/70147800/121577242-8953d100-ca53-11eb-8f10-f0289d446a09.png)
  * Activity diagram 
![Untitled Diagram (71)](https://user-images.githubusercontent.com/70147800/121577427-b4d6bb80-ca53-11eb-8e74-ca3c2ca3f73a.png)
  * Class diagram 
![Untitled Diagram (74)](https://user-images.githubusercontent.com/70147800/121577476-bef8ba00-ca53-11eb-852f-13d1f56b53da.png)
  * Entity Relationship Diagram 
![WhatsApp Image 2021-06-11 at 01 25 08](https://user-images.githubusercontent.com/70147800/121577684-fa938400-ca53-11eb-9acf-d7133dcc0b71.jpeg)
  * Arsitektur sistem 
![Screenshot (526)](https://user-images.githubusercontent.com/70147800/121578085-7ab9e980-ca54-11eb-8245-37a274eda53c.png)
  * Fungsi utama yang dikembangkan
Fungsi utama yang dikembangkan dalam aplikasi ini adalah fungsi dalam peminjaman gedung yang ada di IPB dengan rekaman tiap variabel data yang di update dalam database. 
  * Fungsi CRUD
![Screenshot (527)](https://user-images.githubusercontent.com/70147800/121578323-c076b200-ca54-11eb-8602-2b7bd51e7eee.png)

**Hasil implementasi** 
  * Screenshot sistem 
       - Tampilan form login
![Screenshot (514)](https://user-images.githubusercontent.com/70147800/121579762-329bc680-ca56-11eb-8955-25ad11779999.png)
       - Tampilan berhasil login
![Screenshot (515)](https://user-images.githubusercontent.com/70147800/121579887-59f29380-ca56-11eb-8f9e-97eb8d4951ef.png)
       - Tampilan gagal login karena tidak memasukkan email atau password
![Screenshot (524)](https://user-images.githubusercontent.com/70147800/121579941-6840af80-ca56-11eb-89c8-70ad294ec0e7.png)
       - Tampilan gagal login karena tidak menggunakan email IPB atau email atau password salah
![Screenshot (525)](https://user-images.githubusercontent.com/70147800/121580204-aa69f100-ca56-11eb-8e88-1529d0b5301f.png)
       - Tampilan awal (home) website
![Screenshot (516)](https://user-images.githubusercontent.com/70147800/121580227-b0f86880-ca56-11eb-8ec0-4f91c87a7f43.png)
       - Tampilan untuk fitur memesan gedung (fitur create)
![Screenshot (522)](https://user-images.githubusercontent.com/70147800/121580272-c1104800-ca56-11eb-94a9-eef275f20980.png)
       - Tampilan dari fitur Tampil Data (fungsi read)
![Screenshot (518)](https://user-images.githubusercontent.com/70147800/121580321-cec5cd80-ca56-11eb-8707-98c5ef5a63b6.png)
       - Tampilan fitur update
![Screenshot (520)](https://user-images.githubusercontent.com/70147800/121580343-d5544500-ca56-11eb-85c5-8bac9755f5f3.png)
       - Tampilan jika berhasil menghapus data (fitur delete)
![Screenshot (521)](https://user-images.githubusercontent.com/70147800/121580367-dc7b5300-ca56-11eb-9485-07c46d3dded9.png)
       - Tampilan logout pada icon pojok kanan atas
![Screenshot (523)](https://user-images.githubusercontent.com/70147800/121580391-e43af780-ca56-11eb-8d6d-b1f899309602.png)

**Testing (Test cases)**
  * Positive Cases
      1. Tambah data dapat dilakukan dengan baik oleh mahasiswa sesuai pilihan yang diinginkan 
      2. Mahasiswa dalam melakukan peminjaman gedung, dapat melihat histori dan dapat mengedit pesanan
  * Negative Cases (Optional, jika ada jadi nilai tambah)
      1. Tidak dapat login jika tidak menggunakan email IPB
      2. Tidak dapat login jika tidak memasukkan email atau password
      3. Tidak dapat login jika memasukkan email atau password yang salah
      4. Tidak dapat memesan gedung di tanggal yang sama

**Saran untuk pengembangan selanjutnya**
      1. Menambahkan fitur informasi tentang gedung yang disewakan, seperti fitur Rincian Gedung
      2. Dalam Rincian Gedung tersebut, terdapat informasi seperti gambar gedung, kapasitas, harga sewa, lokasi, nama penanggung jawab gedung, contact person penanggung jawab gedung, dan no rekening penanggung jawab
      3. Menambahkan fitur untuk upload surat resmi meminjam gedung (apabila terdapat acara khusus dan menyewa gedung khusus)
      4. Menambahkan fitur profil
      5. Menambahkan fitur search

## Catatan
- Laporan terakhir dikumpul sebelum presentasi projek pada pertemuan-14. Keterlambatan pengumpulan akan mengurangi nilai.
- Silahkan mempersiapkan presentasi dengan sebaik mungkin, jadwal presentasi akan diumumkan 1 jam sebelum presentasi. 
- Harap mempersiapkan slide, trello, github, dan demo aplikasi 5 menit sebelum jadwal presentasi Anda.
- Waktu presentasi hanya 20 menit untuk masing-masing kelompok (tidak ada penambahan waktu bagi yang telat join ke google meet)

