<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang
Hallo semua nya ini merupakan sebuah aplikasi untuk pemesanan tiket liburan berdasarkan package yang sudah di sediakan, aplikasi ini masih berjalan di local tapi jika teman teman mau melakukan hosting ke aplikasi ini bisa menggunakan hosting yang teman teman miliki, bisa hubungi saya jika teman teman kesulitan untuk melakukan hosting.

## Tampilan aplikasi ini
### Tampilan Admin
**Country Menu** <br>
![App Screenshot](https://raw.githubusercontent.com/magerngulik/api-healing-apps/main/database/showcase/country.png)
**Package Menu**<br>
![App Screenshot](https://raw.githubusercontent.com/magerngulik/api-healing-apps/main/database/showcase/package.png)
**Destinasi Menu**<br>
![App Screenshot](https://raw.githubusercontent.com/magerngulik/api-healing-apps/main/database/showcase/destinasi.png)
### Tampilan Mobile
**Tampilan Login**<br>
![App Screenshot](https://raw.githubusercontent.com/magerngulik/api-healing-apps/main/database/showcase/tampilan%20login.png)
**Tampilam Home Page**<br>
![App Screenshot](https://raw.githubusercontent.com/magerngulik/api-healing-apps/main/database/showcase/home%20page.png)
**Tampilan Detail Package**<br>
![App Screenshot](https://raw.githubusercontent.com/magerngulik/api-healing-apps/main/database/showcase/tampilan%20destination.png)
**Tampilan Detail Destinasi**<br>
![App Screenshot](https://raw.githubusercontent.com/magerngulik/api-healing-apps/main/database/showcase/tampilan%20detail%20destination.png)


## Cara menjalankan project ini
Untuk mengakses api ini teman teman perlu melakukan beberapa tahap sebagai berikut:
- Menginstall Composser
- Menginstall laravel
- Membuat data base di php myadmin
- Melakukan import file ke database, lokasi di file database/healing_app.sql
- Membuat sebuah file env
- Melakukan generate key, **php artisan key:generate**
- Memasukan nama database yang sudah di buat sebelumnya
- Lakukan printah **composser intall** di terminal <br>
memang tahapan nya agak panjang, mungkin teman teman dapat melihat tutorial install project dari laravel di [sini](https://www.youtube.com/watch?v=PYFV_IFHg2U)


## Menu Admin
Untuk mengakses ke menu admin bisa ke **Url /admin** example : _https://healing-app.test/admin_
Email : admin@admin.com
Password : password

## Basis URL

Base url tergantung dengan setting pada komputer teman teman, disini karna masih menggunakan local maka base url yang saya gunakan sebagai berikut:
```
http://127.0.0.1:8000
```
## Authentification
### Login 

**Deskripsi**: Melakukan login ke dalam sistem.

**URL**: `api/auth/login`

**Metode**: POST

**Parameter Wajib Di Isi**:

- `email` (wajib): admin@admin.com
- `password` (wajib): password

**Contoh Permintaan**:
```http
POST /api/auth/login
Content-Type: application/json

{
  "email": "admin@admin.com",
  "password": "password"
}
```
**Contoh Respons**:

```json
{
  "status": "success",
  "data": {
    "token": "8|dCBn36JNlXgpUDmX4O6vm5CXTslKWmdgrTO9PtVb",
    "user": {
      "id": 11,
      "email": "admin@admin.com",
      "avatar": null
    }
  }
}

```

### Register 

**Deskripsi**: Melakukan login ke dalam sistem.

**URL**: `api/auth/login`

**Metode**: POST

**Parameter Wajib Di Isi**:

- `email` (wajib): admin@admin.com
- `password` (wajib): password,
- `name` (wajib): admin ganteng,
- `tanggal_lahir` (wajib): 2016-08-05,
- `nomor_telp` (wajib): 083333333,
- `alamat` (wajib): jalan keuning,
- `avatar` (optional): file,

**Contoh Permintaan**:
```http
POST /api/auth/register
Content-Type: application/json

{
  "email": "admin@admin.com",
  "password" : "password",
  "name": "zulkarnaen",
  "tanggal_lahir": "2016-08-05",
  "nomor_telp": "083333333",
  "alamat":  "jalan keuning"
}
```
**Contoh Respons**:

```json
{
  "message": "User registered successfully"
}

```

### Logout

API ini memerlukan autentikasi menggunakan token. Untuk mengakses endpoint ini, Anda perlu menyertakan token autentikasi dalam header permintaan. untuk mendapatkan token nya ketika di akses pada end point [login](#login) di atas.

**Deskripsi**: Melakukan logout dari sistem.

**URL**: `api/auth/login`

**Metode**: GET

```http
GET /api/auth/logout
Authorization: Bearer {token}

```
**Contoh Respons**:

```json
{
  "status": "success",
  "message": "berhasil logout"
}

```

### Profile

API ini memerlukan autentikasi menggunakan token. Untuk mengakses endpoint ini, Anda perlu menyertakan token autentikasi dalam header permintaan. untuk mendapatkan token nya ketika di akses pada end point [login](#login) di atas.

**Deskripsi**: Melihat profile user yang sedang login dengan token yang tersedia

**URL**: `api/auth/profile`

**Metode**: GET

```http
GET /api/auth/profile
Authorization: Bearer {token}

```
**Contoh Respons**:

```json
{
  {
  "id": 1,
  "role_id": 1,
  "name": "Admin",
  "email": "admin@admin.com",
  "avatar": "users/default.png",
  "tanggal_lahir": null,
  "alamat": null,
  "nomor_telp": null,
  "email_verified_at": null,
  "settings": [],
  "created_at": "2023-06-22T05:43:56.000000Z",
  "updated_at": "2023-06-22T05:43:56.000000Z"
}
}

```

## Package

### Get Active Package
**Deskripsi**: Untuk mendapatkan package yang masih aktif, filter ini berdasarkan data yang sudah di mulai dan belum berakhir

**URL**: `api/active-package`

**Metode**: GET

```http
GET /api/package/active
```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 7,
      "name": "Paket Liburan Romantis",
      "description": "<p>Nikmati momen romantis bersama pasangan Anda dengan paket liburan ini. Dengan pemandangan yang indah dan akomodasi mewah, paket ini akan menciptakan kenangan tak terlupakan.</p>",
      "price": 5000000,
      "image": "http://healing-app.test/storage/packages/June2023/DlbeHqw4Z8lzx7Q10UMr.jpg",
      "start_date": "2023-06-26",
      "end_date": "2023-06-30",
      "person": 2,
      "destination": [
        {
          "name": "Pulau Maldives",
          "description": "<p>Nikmati keindahan Pulau Maldives yang memukau dengan pasir putih, air laut yang jernih, dan vila-vila mewah menghadap lautan. Rasakan romansa yang memikat dengan pemandangan matahari terbenam yang spektakuler dan pengalaman menyelam bersama pasangan Anda</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/EhFWUKIh0UsOCQdhTyjL.jpg",
          "location_name": "Maldives"
        },
        {
          "name": "Labuan Bajo",
          "description": "<p>Labuan Bajo adalah gerbang menuju Taman Nasional Komodo yang terkenal. Anda dapat menjelajahi pulau-pulau kecil di sekitar Labuan Bajo, melakukan snorkeling atau diving di perairan yang kaya akan kehidupan laut, dan menyaksikan matahari terbenam yang memukau.</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/4TvFsUdK5ta1ImfFN2uj.jpg",
          "location_name": "Bali"
        }
      ]
    },
  ]
}

```

### Get Single Active Package
**Deskripsi**: Untuk mendapatkan single package yang aktif

**URL**: `api/active-package/{id}`

**Metode**: GET

```http
GET /api/package/active/10

```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 7,
      "name": "Paket Liburan Romantis",
      "description": "<p>Nikmati momen romantis bersama pasangan Anda dengan paket liburan ini. Dengan pemandangan yang indah dan akomodasi mewah, paket ini akan menciptakan kenangan tak terlupakan.</p>",
      "price": 5000000,
      "image": "http://healing-app.test/storage/packages/June2023/DlbeHqw4Z8lzx7Q10UMr.jpg",
      "start_date": "2023-06-26",
      "end_date": "2023-06-30",
      "person": 2,
      "destination": [
        {
          "name": "Pulau Maldives",
          "description": "<p>Nikmati keindahan Pulau Maldives yang memukau dengan pasir putih, air laut yang jernih, dan vila-vila mewah menghadap lautan. Rasakan romansa yang memikat dengan pemandangan matahari terbenam yang spektakuler dan pengalaman menyelam bersama pasangan Anda</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/EhFWUKIh0UsOCQdhTyjL.jpg",
          "location_name": "Maldives"
        },
        {
          "name": "Labuan Bajo",
          "description": "<p>Labuan Bajo adalah gerbang menuju Taman Nasional Komodo yang terkenal. Anda dapat menjelajahi pulau-pulau kecil di sekitar Labuan Bajo, melakukan snorkeling atau diving di perairan yang kaya akan kehidupan laut, dan menyaksikan matahari terbenam yang memukau.</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/4TvFsUdK5ta1ImfFN2uj.jpg",
          "location_name": "Bali"
        }
      ]
    },
  ]
}

```


### Searching Package

**Deskripsi**: Untuk mendapatkan package yang sesuai tiga parameter di bawah

**URL**: `/api/package/serching?start_date=2023-06-25&max_capacity=2&location_id=30`

**Metode**: GET

```http
GET /api/package/serching?start_date=2023-06-25&max_capacity=2&location_id=30
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| start_date     | Header       | Ya    | string  | Tanggal mulai data yang diinginkan.      |
| max_capacity   | Header       | Ya    | integer | Kapasitas maksimum data yang diinginkan. |
| location_id    | Header       | Ya    | string  | ID lokasi data yang diinginkan.          |

**Respons**
- Kode Status 200: OK. Data berhasil ditemukan.

- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.

**Contoh Penggunaa**
```yaml
GET /api/package/serching?start_date=2023-06-25&max_capacity=2&location_id=30
Headers:
  start_date: 2022-01-15
  max_capacity: 6
  location_id: 3
```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 7,
      "name": "Paket Liburan Romantis",
      "description": "<p>Nikmati momen romantis bersama pasangan Anda dengan paket liburan ini. Dengan pemandangan yang indah dan akomodasi mewah, paket ini akan menciptakan kenangan tak terlupakan.</p>",
      "price": 5000000,
      "image": "http://healing-app.test/storage/packages/June2023/DlbeHqw4Z8lzx7Q10UMr.jpg",
      "start_date": "2023-06-26",
      "end_date": "2023-06-30",
      "person": 2,
      "destination": [
        {
          "name": "Pulau Maldives",
          "description": "<p>Nikmati keindahan Pulau Maldives yang memukau dengan pasir putih, air laut yang jernih, dan vila-vila mewah menghadap lautan. Rasakan romansa yang memikat dengan pemandangan matahari terbenam yang spektakuler dan pengalaman menyelam bersama pasangan Anda</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/EhFWUKIh0UsOCQdhTyjL.jpg",
          "location_name": "Maldives"
        },
        {
          "name": "Labuan Bajo",
          "description": "<p>Labuan Bajo adalah gerbang menuju Taman Nasional Komodo yang terkenal. Anda dapat menjelajahi pulau-pulau kecil di sekitar Labuan Bajo, melakukan snorkeling atau diving di perairan yang kaya akan kehidupan laut, dan menyaksikan matahari terbenam yang memukau.</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/4TvFsUdK5ta1ImfFN2uj.jpg",
          "location_name": "Bali"
        }
      ]
    },
  ]
}

```


### Get package menggunakan country id

**Deskripsi**: Mengembalikan semua data berdasarkan country id, jadi data yang di kembalikan akan sesuai dengan negara yang di pilih<br>
**URL**: `api/transaction/user-transaction` <br>
**Metode**: GET

```http
GET /api/get-by-location-id
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| country_id     | Header       | Ya    | int     | id dari tabel country                    |

**Respons**
- Kode Status 200: OK
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.
**Contoh Penggunaa**
```yaml
GET /api/transaction/user-transaction?country_id=1
Headers:
country_id: 1
```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 7,
      "name": "Paket Liburan Romantis",
      "description": "<p>Nikmati momen romantis bersama pasangan Anda dengan paket liburan ini. Dengan pemandangan yang indah dan akomodasi mewah, paket ini akan menciptakan kenangan tak terlupakan.</p>",
      "price": 5000000,
      "image": "http://healing-app.test/storage/packages/June2023/DlbeHqw4Z8lzx7Q10UMr.jpg",
      "start_date": "2023-06-26",
      "end_date": "2023-06-30",
      "person": 2,
      "destination": [
        {
          "name": "Pulau Maldives",
          "description": "<p>Nikmati keindahan Pulau Maldives yang memukau dengan pasir putih, air laut yang jernih, dan vila-vila mewah menghadap lautan. Rasakan romansa yang memikat dengan pemandangan matahari terbenam yang spektakuler dan pengalaman menyelam bersama pasangan Anda</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/EhFWUKIh0UsOCQdhTyjL.jpg",
          "location_name": "Maldives"
        },
        {
          "name": "Labuan Bajo",
          "description": "<p>Labuan Bajo adalah gerbang menuju Taman Nasional Komodo yang terkenal. Anda dapat menjelajahi pulau-pulau kecil di sekitar Labuan Bajo, melakukan snorkeling atau diving di perairan yang kaya akan kehidupan laut, dan menyaksikan matahari terbenam yang memukau.</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/4TvFsUdK5ta1ImfFN2uj.jpg",
          "location_name": "Bali"
        }
      ]
    }
  ]
}
```


### Get package menggunakan people

**Deskripsi**: Mengembalikan semua data berdasarkan jumlah people<br>
**URL**: `api/transaction/user-transaction` <br>
**Metode**: GET

```http
GET /api/package/people/2
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| people     | Url       | Ya    | int     | jumlah dari people                    |

**Respons**
- Kode Status 200: OK
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.
**Contoh Penggunaa**
```yaml
GET /api/package/people/2
Headers:
country_id: 1
```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 7,
      "name": "Paket Liburan Romantis",
      "description": "<p>Nikmati momen romantis bersama pasangan Anda dengan paket liburan ini. Dengan pemandangan yang indah dan akomodasi mewah, paket ini akan menciptakan kenangan tak terlupakan.</p>",
      "price": 5000000,
      "image": "http://healing-app.test/storage/packages/June2023/DlbeHqw4Z8lzx7Q10UMr.jpg",
      "start_date": "2023-06-26",
      "end_date": "2023-06-30",
      "person": 2,
      "destination": [
        {
          "name": "Pulau Maldives",
          "description": "<p>Nikmati keindahan Pulau Maldives yang memukau dengan pasir putih, air laut yang jernih, dan vila-vila mewah menghadap lautan. Rasakan romansa yang memikat dengan pemandangan matahari terbenam yang spektakuler dan pengalaman menyelam bersama pasangan Anda</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/EhFWUKIh0UsOCQdhTyjL.jpg",
          "location_name": "Maldives"
        },
        {
          "name": "Labuan Bajo",
          "description": "<p>Labuan Bajo adalah gerbang menuju Taman Nasional Komodo yang terkenal. Anda dapat menjelajahi pulau-pulau kecil di sekitar Labuan Bajo, melakukan snorkeling atau diving di perairan yang kaya akan kehidupan laut, dan menyaksikan matahari terbenam yang memukau.</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/4TvFsUdK5ta1ImfFN2uj.jpg",
          "location_name": "Bali"
        }
      ]
    }
  ]
}
```

### Get package menggunakan destination id

**Deskripsi**: Mengembalikan semua data berdasarkan id destinatsi<br>
**URL**: `api/transaction/user-transaction` <br>
**Metode**: GET

```http
GET /api/package/destination/7
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| id     | Url       | Ya    | int     | id destinasi                    |

**Respons**
- Kode Status 200: OK
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.
**Contoh Penggunaa**
```yaml
GET /api/package/destination/7
Headers:
country_id: 1
```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 9,
      "name": "Paket Liburan Keluarga",
      "description": "<p>Jadikan waktu bersama keluarga lebih istimewa dengan paket liburan ini. Dengan berbagai fasilitas dan kegiatan yang ramah keluarga, paket ini akan memberikan kegembiraan kepada seluruh anggota keluarga</p>",
      "days": 3,
      "price": 4000000,
      "image": "http://healing-app.test/storage/packages/June2023/QzI0dY5IqR1qtEyIvtxq.jpg",
      "start_date": "2023-07-08",
      "end_date": "2023-07-31",
      "person": 5,
      "destination": [
        {
          "id": 7,
          "name": "Paris",
          "description": "<p>Deskripsi: Disneyland Paris adalah taman hiburan yang menyenangkan bagi seluruh keluarga. Dengan berbagai atraksi dan wahana yang menarik, pertunjukan karakter Disney, dan suasana magis yang tak tertandingi, destinasi ini menawarkan kesenangan dan kegembiraan bagi anak-anak dan orang dewasa. Nikmati petualangan dengan karakter favorit Disney dan buat kenangan yang indah bersama keluarga Anda.</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/8jTUcypo6xY2leCQTBuE.webp",
          "location_name": "Paris"
        }
      ]
    }
  ]
}
```



### Get package menggunakan jumlah people dan destination id

**Deskripsi**: Mengembalikan semua data berdasarkan id destinatsi<br>
**URL**: `api/transaction/user-transaction` <br>
**Metode**: GET

```http
GET /api/package/peopledestinatin/?people=5&destination_id=7
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| destination_id     | Header       | Ya    | int     | id destinasi                    |
| people     | Header       | Ya    | int     | id destinasi                    |

**Respons**
- Kode Status 200: OK
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.
**Contoh Penggunaa**
```yaml
GET /api/package/peopledestinatin/?people=5&destination_id=7
Headers:
country_id: 1
```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 9,
      "name": "Paket Liburan Keluarga",
      "description": "<p>Jadikan waktu bersama keluarga lebih istimewa dengan paket liburan ini. Dengan berbagai fasilitas dan kegiatan yang ramah keluarga, paket ini akan memberikan kegembiraan kepada seluruh anggota keluarga</p>",
      "days": 3,
      "price": 4000000,
      "image": "http://healing-app.test/storage/packages/June2023/QzI0dY5IqR1qtEyIvtxq.jpg",
      "start_date": "2023-07-08",
      "end_date": "2023-07-31",
      "person": 5,
      "destination": [
        {
          "id": 7,
          "name": "Paris",
          "description": "<p>Deskripsi: Disneyland Paris adalah taman hiburan yang menyenangkan bagi seluruh keluarga. Dengan berbagai atraksi dan wahana yang menarik, pertunjukan karakter Disney, dan suasana magis yang tak tertandingi, destinasi ini menawarkan kesenangan dan kegembiraan bagi anak-anak dan orang dewasa. Nikmati petualangan dengan karakter favorit Disney dan buat kenangan yang indah bersama keluarga Anda.</p>",
          "image": "http://healing-app.test/storage/destinations/June2023/8jTUcypo6xY2leCQTBuE.webp",
          "location_name": "Paris"
        }
      ]
    }
  ]
}
```


## Location
### Get All Location

**Deskripsi**: Untuk mendapatkan id location yang di miliki oleh tabel location, digunakan pada bagian [serching](#searching-package) di atas 

**URL**: `api/location/getall`

**Metode**: GET

```http
GET /api/location/getall
```
**Respons**
- Kode Status 200: OK. Data berhasil ditemukan.
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.

**Contoh Penggunaa**
```yaml
GET api/location/getall
```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 1,
      "name": "Bali",
      "city": "Denpasar",
      "country": "Indonesia"
    },
    {
      "id": 2,
      "name": "Paris",
      "city": "Paris",
      "country": "France"
    },
  ] 
}

```
### Get Country Name

**Deskripsi**: Mengembalikan semua data country name, id dari sini nanti di gunakan untuk [select by country id](#get-transaksi-menggunakan-country-id)<br>
**URL**: `/api/location/get-country` <br>
**Metode**: GET

```http
GET /api/location/get-country
```

**Respons**
- Kode Status 200: OK
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.
**Contoh Penggunaa**
```yaml
GET /api/location/get-country
```
**Contoh Respons**:

```json
[
  {
    "id": 1,
    "name": "Indonesia"
  },
  {
    "id": 2,
    "name": "Amerika"
  },
]
```


## Transaction
### Add Transaction
**Deskripsi**: Untuk melakukan transaksi pastikan semua data yang di minta diisi dengan benar <br>
**URL**: `api/transaction/add` <br>
**Metode**: POST <br>

```http
POST /api/transaction/add
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| Accept         | Header       | Ya    | string  | type dari balikan application/json  |
| Authorization  | Header       | Ya    | string  | Token otorisasi untuk mengakses API.     |
| package_id     | Body         | Ya    | integer  | id dari package yang dipilih   |
| user_id        | Body         | Ya    | integer | id dari user yang melakuakan transaksi |
| destination_id | Body         | Ya    | integer | id dari destinasi yang di sediakan|
| transaction_date| Body        | Ya    | date  | Hari dari transaksi berlangsung|
| total_amount   | Body         | Ya    | double | total biaya semua transaksi|
| payment_status | Body         | Ya    | enum  | status pembayaran terdiri dari:pending,completed,cancelled|
| payment_method | Body         | Ya    | string  | isi dengan method pembayatan|
| participant_count| Body       | Ya    | int  | jumlah orang yang ikut, pastikan tidak melibihi jumlah package|


**Respons**
- Kode Status 201: OK. Transaksi Berhasil.
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.

**Contoh Penggunaa**
```yaml
POST /api/transaction/add
body:
  {
    "package_id": 7,	
    "user_id":1,	
    "destination_id":5,	
    "transaction_date":"2022-01-01",	
    "total_amount":13,	
    "payment_status":"pending",	
    "payment_method":"Transfer Bank",	
    "participant_count": 15
  }
```
**Contoh Respons**:

```json
{
  "message": "Transaksi Berhasil"
}
```


### Lihat Transaksi User Login

**Deskripsi**: Untuk mendapatkan semua transaksi dari user yang sedang login <br>
**URL**: `api/transaction/user-transaction` <br>
**Metode**: GET

```http
GET /api/transaction/user-transaction
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| Accept         | Header       | Ya    | string  | type dari balikan application/json  |
| Authorization  | Header       | Ya    | string  | Token otorisasi untuk mengakses API.     |


**Respons**
- Kode Status 200: OK
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.

**Contoh Penggunaa**
```yaml
GET /api/transaction/user-transaction
Headers:
Accept: application/json
Authorization: Bearer 11|RgOF6JXB5kx72Jp3DeUN7KpNfa4CPhDnGYP9LQJB
```
**Contoh Respons**:

```json
[
  {
    "id": 1,
    "package_id": 7,
    "user_id": 3,
    "destination_id": 5,
    "transaction_date": "2023-06-29",
    "total_amount": "50000000",
    "payment_status": "Panding",
    "payment_method": "Transfer Bank",
    "participant_count": 3,
    "created_at": "2023-06-27T17:52:02.000000Z",
    "updated_at": "2023-06-27T17:52:02.000000Z"
  },
]
```

## Destination
### Get Destination

**Deskripsi**: Menampilkan semua destinasi<br>
**URL**: `/api/destination` <br>
**Metode**: GET

```http
GET /api/destination
```

**Respons**
- Kode Status 200: OK
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.
**Contoh Penggunaa**
```yaml
GET /api/destination
```
**Contoh Respons**:

```json
{
  "data": [
    {
      "id": 5,
      "name": "Pulau Maldives",
      "description": "<p>Nikmati keindahan Pulau Maldives yang memukau dengan pasir putih, air laut yang jernih, dan vila-vila mewah menghadap lautan. Rasakan romansa yang memikat dengan pemandangan matahari terbenam yang spektakuler dan pengalaman menyelam bersama pasangan Anda</p>",
      "image": "http://healing-app.test/storage/destinations/June2023/EhFWUKIh0UsOCQdhTyjL.jpg",
      "location_id": 30,
      "rating": 4.9,
      "accommodation": [
        {
          "id": 8,
          "name": "Hotel",
          "description": "Penginapan yang nyaman di sekitaran pantai maldive",
          "destination_id": 5,
          "created_at": "2023-06-30T07:35:33.000000Z",
          "updated_at": "2023-06-30T07:35:33.000000Z"
        }
      ],
      "package": [
        {
          "id": 7,
          "name": "Paket Liburan Romantis",
          "description": "<p>Nikmati momen romantis bersama pasangan Anda dengan paket liburan ini. Dengan pemandangan yang indah dan akomodasi mewah, paket ini akan menciptakan kenangan tak terlupakan.</p>",
          "price": "5000000",
          "created_at": "2023-06-24T05:10:29.000000Z",
          "updated_at": "2023-06-30T03:25:44.000000Z",
          "image": "packages\\June2023\\DlbeHqw4Z8lzx7Q10UMr.jpg",
          "start_date": "2023-06-26",
          "end_date": "2023-06-30",
          "max_capacity": 2,
          "days": 5,
          "pivot": {
            "destination_id": 5,
            "package_id": 7
          }
        }
      ],
      "location": {
        "id": 30,
        "name": "Maldives",
        "country_id": 5,
        "city": "Maldives"
      }
    },
   
  ]
}
```

### Get Detail Destination

**Deskripsi**: Menampilkan semua destinasi<br>
**URL**: `/api/destination/5` <br>
**Metode**: GET

```http
GET /api/destination/5
```

**Respons**
- Kode Status 200: OK
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.
**Contoh Penggunaa**
```yaml
GET /api/destination/5
```
**Contoh Respons**:

```json
{
  "data": 
    {
      "id": 5,
      "name": "Pulau Maldives",
      "description": "<p>Nikmati keindahan Pulau Maldives yang memukau dengan pasir putih, air laut yang jernih, dan vila-vila mewah menghadap lautan. Rasakan romansa yang memikat dengan pemandangan matahari terbenam yang spektakuler dan pengalaman menyelam bersama pasangan Anda</p>",
      "image": "http://healing-app.test/storage/destinations/June2023/EhFWUKIh0UsOCQdhTyjL.jpg",
      "location_id": 30,
      "rating": 4.9,
      "accommodation": [
        {
          "id": 8,
          "name": "Hotel",
          "description": "Penginapan yang nyaman di sekitaran pantai maldive",
          "destination_id": 5,
          "created_at": "2023-06-30T07:35:33.000000Z",
          "updated_at": "2023-06-30T07:35:33.000000Z"
        }
      ],
      "package": [
        {
          "id": 7,
          "name": "Paket Liburan Romantis",
          "description": "<p>Nikmati momen romantis bersama pasangan Anda dengan paket liburan ini. Dengan pemandangan yang indah dan akomodasi mewah, paket ini akan menciptakan kenangan tak terlupakan.</p>",
          "price": "5000000",
          "created_at": "2023-06-24T05:10:29.000000Z",
          "updated_at": "2023-06-30T03:25:44.000000Z",
          "image": "packages\\June2023\\DlbeHqw4Z8lzx7Q10UMr.jpg",
          "start_date": "2023-06-26",
          "end_date": "2023-06-30",
          "max_capacity": 2,
          "days": 5,
          "pivot": {
            "destination_id": 5,
            "package_id": 7
          }
        }
      ],
      "location": {
        "id": 30,
        "name": "Maldives",
        "country_id": 5,
        "city": "Maldives"
      }
    },

}
```

