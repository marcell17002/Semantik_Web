# Certiv

## About Certiv
Certiv merupakan sebuah website yang bertujuan untuk menghadapai tantangan mea 2025 yang dimana tantangan dunia kerja tidak hanya masyarakat indonesia saja namun sudah mencapai asia tenggara. Untuk itu website ini hadir untuk mewadahi para pemilik lembaga sertifikasi dan generasi muda khususnya fresh graduate untuk sama-sama memiliki kesempatan mendapatkan sertifikasi. tentunya Semantik Web akan dimuat didalam Certiv untuk memudahkan anda mencari sertifikasi, skill atau keahlian lainnya untuk menunjang Indonesia Cerdas yang lebih baik!

Find The Best Certification to Boost-Up your carreer.

## Our Progress
- [x] Build Apache Jena Fuseki Server.
- [x] Desain Mockup for Website.
- [x] User Interface with User Experience.
- [x] Dataset (user.ttl).
- [x] Query Select all data for certification page.
- [x] Connected user Query for Search certification and related to. 

## Our Dataset Schema
![alt text](https://github.com/marcell17002/Semantik_Web/blob/master/data/schema.png?raw=true "Dataset Schema") 

## Installation
### Apache Jena Fuseki
1. Download Apache Jena Fuseki in https://jena.apache.org/download/
2. Install to your directory.
3. run fuseki-server.bat
4. Go to your browser, input http://127.0.0.1:3030/

### Upload Dataset
1. Go to http://127.0.0.1:3030/ after Apache Fuseki jena started
2. klik manage dataset, and make a new one. 
3. Enter Dataset name = certiv
4. Choose Dataset type = Persistent
5. Create dataset
6. Upload data from dataset folder, select files user

```bash
Semantik_Web/data/data.ttl
```
7. Wait until upload data success


## How To Start
1. Clone git ini
2. Jalankan command "composer install" di dalam folder ini
3. Buat file .env dengan meng-copy .env.example atau jalankan "cp .env.example .env"
4. Jalankan command "php artisan key:generate"
5. Buat database baru untuk diisi
6. Edit line DB_DATABASE dengan nama database yang akan digunakan tanpa membuat table didalamnya
7. Migrate database dengan menjalankan "php artisan migrate"
8. Run the server
```bash
php artisan serve
```
9. Go to your favorite web browser, type  http://127.0.0.1:8000
10. Good to go 

## How To Use
### Search user data 
1. After run the server ,  type  http://127.0.0.1:8000
2. You can see our certiv 
3. Also, you can find about certification by search name, category , price, periode in search bar
4. Moreover, you can find what others have been done at "network" menu's , just type the name and you will see what others did

## About us 
- Marcell Antonius 140810170034
- Rafi Chandra     140810170037


