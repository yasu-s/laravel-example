# laravel-example

## 概要

- laravel練習用

## コマンド

### DB起動

```bash
docker-compose up -d
```

VSCodeのDev Containerを使用する場合は、このコマンドは不要です。


### パッケージインストール

```bash
composer install
```

### DBマイグレーション

```bash
php artisan migrate
```

### DB初期データ登録

```bash
php artisan db:seed
```

### サーバー起動

```bash
php artisan serve
```

## 参考URL

- https://readouble.com/laravel/8.x/ja/sanctum.html

