# WhatsApp OnyxBerry
Package ini untuk mengintegrasikan Laravel dengan OnyxBerry dalam mengirim pesan ke WhatsApp Klien.

## Install Package
```sh
composer require atozpw/whatsapp
```

## Integrasi Ke Laravel
1. Tambahkan service provider ke config/app.php
    ```php
    'providers' => [
    	....
    	
    	Atozpw\Whatsapp\ApiServiceProvider::class,
    ]
    ```

2. Tambahkan juga alias ke config/app.php
    ```php
    'aliases' => [
    	....
    	
    	'Whatsapp' => Atozpw\Whatsapp\ApiFacade::class,
    ]
    ```
    
## Publish Config Package Laravel
Jalankan command artisan berikut ```php artisan vendor:publish``` untuk publish secara otomatis, atau menggunakan cara manual seperti berikut ini:

1. Buat file **whatsapp.php** di folder **config** secara manual
2. Tambahkan kode berikut ini:
    ```php
    <?php
    return [
        'onyxberry_id' => env('ONIXBERRY_ID', ''),
        'onyxberry_key' => env('ONIXBERRY_KEY', ''),
    ];
    ```

## Setting Environment 
Tambahkan kode berikut di file .env untuk konfigurasi ID dan Key dari OnyxBerry
```
ONIXBERRY_ID=isi_dengan_id_dari_onyxberry
ONIXBERRY_KEY=isi_dengan_key_dari_onyxberry
```

Kunjungi [OnyxBerry](https://onyxberry.com/)
