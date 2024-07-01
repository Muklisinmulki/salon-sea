# SEA Salon

SEA Salon adalah aplikasi web untuk layanan salon yang menawarkan berbagai layanan perawatan kecantikan dengan konsep keanggunan dan keindahan yang didefinisikan ulang. Web ini digunakan untuk persyaratan mengikuti bootcamp compfest

## Cara Memulai

### Prasyarat

Pastikan sudah terinstall di komputer Anda:
- PHP
- Composer
- Node.js dan NPM

### Instalasi

1. **Clone Repositori**
   ```bash
   git clone https://github.com/Muklisinmulki/salon-sea.git
   cd repo-anda
2. **Instal Dependensi PHP**
    Instal Dependensi PHP
3. **Instal Dependensi JavaScript**
    npm install
4. **Konfigurasi Environment**
    Duplikat file .env.example dan ubah nama menjadi .env. Sesuaikan konfigurasi database dan pengaturan lain yang diperlukan.
5. **Generate Key Aplikasi**
    php artisan key:generate
6. **Jalankan Migrasi dan Seeder**
    php artisan migrate --seed
## Menjalankan Aplikasi

    php artisan serve
    Aplikasi Laravel Anda sekarang akan berjalan di http://localhost:8000.


