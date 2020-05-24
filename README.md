# Welcome to LaporPemadamanListrik Project

Projek ini merupakan pengembangan sistem informasi pelaporan pemadaman listrik berbasis website.

## Background problem (Latar Belakang Permasalahan)
- Terdapat kendala atau keluhan pelaporan pakai sistem konvensional menggunakan telepon regular sifatnya masih berbayar.
- Pihak PLN kurang begitu detil mendapatkan informasi pelaporan, hanya dapat informasi klaim nama dan nomor handphone tercatat.
- Perlu adanya transparansi pelaporan pemadaman listrik supaya public data bisa dijadikan penelitian lebih lanjut atau bisa dijadikan data training penelitian.
- Perlu adanya blacklist atau suspend waktu tertentu pada pelapor fiktif supaya tidak spam laporan fiktif.
- Miss-hearing, salah dengar atau kurang jelas ketika proses penyampaian alamat melalui telpon regular.

## Chapter II

## 🖥 Environment Support

- Modern browsers and Internet Explorer 11 (with [polyfills](https://stackoverflow.com/questions/57020976/polyfills-in-2019-for-ie11))
- Server-side Rendering
- [Electron](https://www.electronjs.org/)

## Features need to build:
### Todos
- Tampilkan peta laporan pemadaman listrik,
- Tampilkan tabel history pelaporan,
- register menggunakan verifikasi kode OTP,
- input type image untuk foto swafoto account verification,
- anchor href type='tel' untuk 123,
- suspend account pelapor fiktif dengan durasi tertentu.
- Permission geolocation API

## History Table menggunakan SmartyPants
|ID_laporan      |NIK (max_length=16) (min_length=16) |Time                    |
|----------------|-------------------------------|-----------------------------|
|00000001		 |351902682323233                   |30 Mei 2020            |
|00000002        |                             |                    |
|00000003		 |351                           |                          |

## Contributions

Please feel free to contribute to the quality of this content by submitting PRs for improvements to code snippets, explanations, etc. While typo fixes are welcomed, they will likely be caught through normal editing/publishing processes, **so please don't worry about them right now.**

Any contributions you make to this effort **are of course greatly appreciated**.

But **PLEASE** read the [Contributions Guidelines](CONTRIBUTING.md) carefully before submitting a PR.

If you'd like to contribute financially towards the effort (or any of my other OSS efforts), please consider these options:

* [Github Sponsorship](https://github.com/users/AdiPratama15/sponsorship)

## References:
- Koyuko, H., Sinsuw, A. A., & Najoan, X. B. (2016). Perancangan Aplikasi Monitoring Pemadaman Listrik Berbasis Android Studi kasus PT. PLN area Manado. Jurnal Teknik Informatika, 9(1).
https://ejournal.unsrat.ac.id/index.php/informatika/article/view/13903