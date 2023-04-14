

# Tugas UTS EAI

Tugas ini dibuat untuk memenuhi Tugas Ujian Tengah Semester (UTS) dari mata kuliah [EAI](https://lms.telkomuniversity.ac.id/course/view.php?id=32905)


## About Me
Saya Ario Kusuma Purboyo  dengan NIM 1202204123 dari Kelas SI4408. Mahasiswa S1 Sistem Informasi Telkom University

## About the Project
Project ini merupakan project Endpoint API yang memiliki 6 Endpoint. API yang dibahas tentang Tiket Konser dan Artis Konser.



# Installation
## Prerequisite
*(Using MacOS? You can install it using [Homebrew](https://brew.sh/) )*
- PHP >= 8
- [Composer](https://getcomposer.org/) 
- XAMPP or Sequel Pro


## Serve the Application
*Run the following commands on your terminal, git bash, or PowerShell*

- Clone this Project
```bash
git clone https://github.com/SI-RPL-2023/SI4408_B_FOOD-RESCUE.git
```

- Modify the .env file <br>
*Configure the .env file according to your local Database System*
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

- Link Storage
```bash
php artisan storage:link
```

- Install Tailwind Css and Flowbite using NPM:
```bash
npm install -D tailwindcss postcss autoprefixer flowbite
```

- Run the laravel server
```bash
php artisan serve
```

- Run the Flowbite Vite
```bash
npm run dev
```

Thank You

