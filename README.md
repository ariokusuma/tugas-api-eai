

# Tugas UTS EAI

Tugas ini dibuat untuk memenuhi Tugas Ujian Tengah Semester (UTS) dari mata kuliah [EAI](https://lms.telkomuniversity.ac.id/course/view.php?id=32905)


## About Me
Saya Ario Kusuma Purboyo  dengan NIM 1202204123 dari Kelas SI4408. Mahasiswa S1 Sistem Informasi Telkom University

## About the Project
Project ini merupakan project Endpoint API yang memiliki 7 Endpoint. API yang dibahas tentang Tiket Konser, dan detail Event Konser. Project ini dibangun menggunakan framework [Laravel](https://laravel.com)

## Endpoint List

*Endpoint Tiket*

| No  | Ticket Endpoint            | Method | Deskripsi                                         |
| --- | -------------------------- | ------ | ------------------------------------------------- |
| 1   | `tiketing/`                | `GET`  | Menampilkan Seluruh Data API                      |
| 2   | `tiketing/{id}`            | `GET`  | Menampilkan Data Tiket berdasarkan id tertentu    |
| 3   | `tiketing/add`             | `POST` | Menambahkan data Tiket                            |
| 4   | `tiketing/update/{id}`     | `PUT`  | Mengubah data Tiket                               |
| 5   | `events/`                  | `GET`  | Menampilkan Seluruh Data API                      |
| 6   | `event/show/{id}`          | `GET`  | Menampilkan Data Event berdasarkan id tertentu    |
| 7   | `event/add/`               | `POST` | Menambahkan data Event                            |



# Installation
## Prerequisite
*(Using MacOS? You can install it using [Homebrew](https://brew.sh/) )*
- PHP >= 8
- [Composer](https://getcomposer.org/) 
- [XAMPP](https://www.apachefriends.org/download.html) or [Sequel Pro](http://sequelpro.com/)


## Serve the Application
*Run the following commands on your terminal, git bash, or PowerShell*

- Clone this Project
```bash
git clone https://github.com/SI-RPL-2023/SI4408_B_FOOD-RESCUE.git
```

- Modify the .env file <br>
*Configure the .env file according to Your local Database System*
```bash
DB_PORT= <your_mysql_port>
DB_DATABASE= <your_database_name>
```

- Install Composer
```bash
composer install
```

- Generate Key
```bash
php artisan key:generate
```

- Migrate Database
```bash
php artisan migrate
```

- Run the laravel server
```bash
php artisan serve
```


Thank You

