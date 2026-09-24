# Tugas 1 — Class `RekeningBank` (Java & PHP)

**Nama :** Nevilla Ghilar Apryanti  
**NPM  :** 4525210054

## Domain

**Rekening Bank** — Merepresentasikan sistem sederhana untuk menyimpan dan mengelola saldo nasabah, dengan atribut identitas bawaan (nomor rekening) serta atribut operasional (saldo, pemilik).

## Struktur Class

| Field | Tipe | Keterangan |
|---|---|---|
| `nomorRekening` | `String` | Wajib diisi lewat constructor, tidak berubah |
| `pemilikRekening` | `String` | Wajib diisi lewat constructor |
| `saldo` | `double` | Jumlah uang di rekening, tidak boleh negatif |

### Method

- `getNomorRekening()`, `getPemilikRekening()`, `getSaldo()` — mengambil nilai field.
- `setor(jumlah)` — menambah saldo, hanya menerima jumlah > 0.
- `tarik(jumlah)` — mengurangi saldo, hanya menerima jumlah > 0 dan tidak melebihi saldo saat ini.

## Invarian & Alasan

### 1. `saldo` tidak boleh negatif.

Alasan: rekening bank tanpa fasilitas cerukan/overdraft tidak mungkin memiliki saldo di bawah nol dalam kondisi normal. Jika saldo boleh negatif tanpa kontrol, data yang dihasilkan tidak masuk akal secara bisnis. Invarian ini dijaga di method `tarik()`, yang menolak penarikan jika jumlahnya melebihi saldo saat ini. Pelanggaran akan melempar `IllegalArgumentException` (Java) / `InvalidArgumentException` (PHP).

### 2. `nomorRekening` tidak dapat diubah setelah objek dibuat.

Alasan: nomor rekening adalah identitas unik sebuah rekening. Jika nomor ini bisa diubah sewaktu-waktu lewat setter, referensi ke rekening tersebut di sistem lain (riwayat transaksi, laporan) bisa menjadi tidak valid. Field ini dibuat `final` (Java) / `readonly` (PHP) dan hanya diisi sekali lewat constructor — **tidak ada setter** untuk field ini maupun untuk `saldo`.


## Cara Menjalankan

### Java

```bash
javac RekeningBank.java Main.java
java Main
```

### PHP

```bash
php index.php
```

### Deklarasi Penggunaan AI
Saya menggunakan AI untuk membantu menyusun struktur dan format dokumen README.md ini, berdasarkan ketentuan tugas. AI juga membantu saya dalam mempelajari langsung bahasa java serta php dalam pengerjaan tugas ini.
