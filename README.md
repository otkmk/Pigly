#pigly

Dockerビルド

1.https://github.com/otkmk/form.git
 2.docker-compose up -d -build

Laravel環境構築

 1.docker-compose exec php bash
 2.composer install
 3.evn.exampleファイルから.envを作成し、環境変数を変更
 4.php artisan key:
 5.php artisan migrate
6.php artisan db:

使用技術
 ・php 8.0
 ・Laravel 8.75
 ・MySQL  8.0.26