# sandbox
サンドボックス

## laravel

### Set up

.envを作成

``` bash
cp laravel/.env.example laravel/.env
```

composer install

``` bash
docker-compose run laravel composer install --no-scripts
```

アプリケーションキー作成

``` bash
docker-compose run laravel php artisan key:generate
```

コンテナ起動

``` bash
docker-compose up -d
```

DBセットアップ

``` bash
docker-compose exec laravel bash
php artisan migrate
php artisan db:seed
```

## DB

### 接続

``` bash
docker-compose exec db bash
mysql -uroot -pthisissandbox
```

### SQL実行

``` sql
use sandbox;

select * from users
select * from profiles;
select * from messages;
```