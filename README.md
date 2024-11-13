<h1 align="center">Muse.</h1>

<h3>Используемые технологии</h3>
<p>PHP 8.3.11 (cli)</p>
<p>Laravel Framework 11.29.0</p>
<h3>Инструкция по установке </h3>
<p>1. Клонировать git репозиторий.</p>

```
git clone https://github.com/BaZ0n/Muse.git
```

<p>1.1. Если папка Muse не входит в текущий каталог, прописать <p>

```
cd Muse
```
    
<p>2. Установить composer </p>

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

<p>3. Установить папку vendor командой </p>

```
composer install
```

<p>4. Скопировать файл .env.example в .env </p>

```
cp .env.example .env
```

<p>5. Провести миграцию бд </p>

```
php artisan migrate
```

<p>6. Сгенерировать ключ </p>

```
php artisan key:generate
```

<p>7. Создать папки командой </p>

```
mkdir public\images\post
mkdir public\images\avatar\avatarUser
```
<p>Примечание:</p>
<p> Все команды вводятся в терминал Visual studio, в каталоге ...\Muse\</p>
