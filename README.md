<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Basis URL

Base url tergantung dengan setting pada komputer teman teman, disini karna masih menggunakan local maka base url yang saya gunakan sebagai berikut:
```
http://127.0.0.1:8000
```

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
GET /api/auth/me
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
GET /api/active-package

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

**Deskripsi**: Untuk mendapatkan package yang masih aktif, filter ini berdasarkan data yang sudah di mulai dan belum berakhir

**URL**: `api/active-package`

**Metode**: GET

```http
GET /api/active-package
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| start_date     | Header       | Ya    | string  | Tanggal mulai data yang diinginkan.      |
| max_capacity   | Header       | Ya    | integer | Kapasitas maksimum data yang diinginkan. |
| location_id    | Header       | Ya    | string  | ID lokasi data yang diinginkan.          |

**Respons**
- Kode Status 200: OK. Data berhasil ditemukan.
<!-- - Kode Status 401: Unauthorized. Token otorisasi tidak valid. -->
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.

**Contoh Penggunaa**
```yaml
GET /api/active-package
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


### Add Transaction

**Deskripsi**: Untuk melakukan transaksi pastikan semua data yang di minta diisi dengan benar
**URL**: `api/transaction/add`
**Metode**: POST

```http
POST /api/transaction/add
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| Accept         | Header       | Ya    | string  | type dari balikan application/json  |
| Authorization  | Header       | Ya    | string  | Token otorisasi untuk mengakses API.     |
| package_id     | Body         | Ya    | integer  | id dari package yang dipilih   |
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

### Lihat Transacti User Login

**Deskripsi**: Untuk mendapatkan semua transaksi dari user yang sedang login
**URL**: `api/transaction/user-transaction`
**Metode**: POST

```http
POST /api/transaction/user-transaction
```
**Parameter**

| Nama           | Inisialisasi | Wajib | Tipe    | Deskripsi                                |
| -------------- | ------------ | ----- | ------- | ---------------------------------------- |
| Accept         | Header       | Ya    | string  | type dari balikan application/json  |
| Authorization  | Header       | Ya    | string  | Token otorisasi untuk mengakses API.     |


**Respons**
- Kode Status 201: OK. Transaksi Berhasil.
- Kode Status 500: Server Error. Terjadi kesalahan saat memproses permintaan.

**Contoh Penggunaa**
```yaml
POST /api/transaction/user-transaction
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

