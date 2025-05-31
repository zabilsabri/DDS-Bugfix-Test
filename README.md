# Laravel Bug Fix Test – PT. Dignity Digital Space

Author: Zabil Sabri Muhammad\
Repository ini berisi source code Laravel yang digunakan untuk menyelesaikan **tes bug fixing** dari **PT. Dignity Digital Space**.

Perbaikan Bug:
1. Mengubah tipe data untuk kolom gender: `integer` -> `enum`
2. Mengubah tipe data untuk kolom birthdate: `string` -> `date`
3. Memperbaiki deklarasi namespace: App\Controllers -> `App\Http\Controllers`
4. Menambah pemanggilan model patient pada PatientController: `use App\Models\Patient`
5. Memperbaiki typo pemanggilan variabel: `patientsx` -> `patients`
6. Menambah validasi inputan pada PatientController sebelum insert data pasien
7. Menambah id pada variabel guarded di model Patient: `$guarded = []` -> `$guarded = ['id']`
8. Menambah accessor untuk mengubah format tanggal pada tabel pasien

<img src="https://ik.imagekit.io/ewypvu74fk/SIMPUS%20D_CARE%20-%20Google%20Chrome%202025-05-31%2014-38-03.gif?updatedAt=1748673861601&tr=n-ik_ml_thumbnail" width="450" height="450" alt="Demo Aplikasi">

## Cara Menjalankan Project

1. **Clone Repository**

```bash
git clone https://github.com/zabilsabri/DDS-Bugfix-Test.git
cd DDS-Bugfix-Test
```

2. **Install Dependency**
```bash
composer install
npm install && npm run dev
```

3. **Salin File .env dan Atur Konfigurasi**
```bash
cp .env.example .env
```

4. ***Generate App Key***
```bash
php artisan key:generate
```

5. ***Jalankan Migrasi dan Seeder***
```bash
php artisan migrate --seed
```

6. ***Jalankan Server***
```bash
php artisan serve
```

# Catatan Tambahan #
Project ini bersifat non-komersial dan hanya ditujukan untuk keperluan uji kemampuan teknis.
