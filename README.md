# JANJI
Saya Dicka Fachrunaldo Kartamiharja dengan NIM 2407846 mengerjakan Tugas Praktikum 8 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## ARSITEKTUR MVC 
Aplikasi ini dibangun menggunakan arsitektur Model-View-Controller (MVC) yang memisahkan aplikasi menjadi tiga komponen utama:
- Model :
  Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data yang ada di database.
- View :
  Bagian yang bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).
- Controller :
  Bagian yang bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung.

## Struktur Folder
/
├── index.php                          # Entry point aplikasi
├── tp_mvc25_ver2.sql                  # File SQL database

├── .vscode/
│   └── settings.json                  # Konfigurasi editor VSCode

├── Assets/                            # Asset front-end
│   ├── bootstrap.bundle.min.js        # Bootstrap JS
│   ├── bootstrap.min.css              # Bootstrap CSS
│   ├── bootstrap.min.js               # Bootstrap JS tambahan
│   ├── jquery.min.js                  # jQuery
│   └── popper.min.js                  # Popper.js (dependency Bootstrap)

├── Controller/                        # Semua controller aplikasi
│   ├── Base.Controller.php            # Controller dasar
│   ├── Dosen.Controller.php           # Controller untuk data dosen
│   ├── Jadwal.Controller.php          # Controller untuk data jadwal
│   └── MataKuliah.Controller.php      # Controller untuk data mata kuliah

├── Model/                             # Semua model aplikasi
│   ├── DB.Class.php                   # Koneksi database
│   ├── Dosen.Class.php                # Model data dosen
│   ├── Jadwal.Class.php               # Model data jadwal
│   └── MataKuliah.Class.php           # Model data mata kuliah

├── Template/                          # Template global
│   ├── Header.php                     # Template header untuk semua halaman
│   └── Footer.php                     # Template footer untuk semua halaman

└── View/                              # Semua tampilan halaman
    ├── Home.view.php                  # Halaman utama

    ├── Dosen/                         # View untuk manajemen dosen
    │   ├── index.php                  # Daftar dosen
    │   ├── create.php                 # Form tambah dosen
    │   └── edit.php                   # Form edit dosen

    ├── Jadwal/                        # View untuk manajemen jadwal
    │   ├── index.php                  # Daftar jadwal
    │   ├── create.php                 # Form tambah jadwal
    │   └── edit.php                   # Form edit jadwal

    └── MataKuliah/                    # View untuk manajemen mata kuliah
        ├── index.php                  # Daftar mata kuliah
        ├── create.php                 # Form tambah mata kuliah
        ├── edit.php                   # Form edit data mata kuliah
        └── delete.php                 # Halaman konfirmasi hapus

            
## DOKUMENTASI
https://github.com/user-attachments/assets/f04ad55e-c9e5-4345-a79a-946c9c1065fe
