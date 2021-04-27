# laravel-example

## 概要

- laravel練習用

## コマンド

### envファイルをコピー

```bash
cp .env-example .env
```

### DB起動

```bash
docker-compose up -d
```

VSCodeの[Remote Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)を使用する場合は、このコマンドは不要です。Remote Containersを通常通り起動してください。

### 初期設定

```bash
# パッケージインストール
composer install

# アプリケーションキー生成
php artisan key:generate

# DBマイグレーション
php artisan migrate

# DB初期データ登録
php artisan db:seed
```

### サーバー起動

```bash
php artisan serve
```

## 動作確認

### アクセストークン取得

```bash
curl --location --request POST 'localhost:8000/api/login' \
--form 'email="hoge@hoge.com"' \
--form 'password="password"'
```

### ログイン済みユーザーデータ取得

```bash
curl --location --request GET 'localhost:8000/api/user' \
--header 'Authorization: Bearer <取得したアクセストークン>
```

## 参考URL

- https://readouble.com/laravel/8.x/ja/sanctum.html

## メモ

動かない場合、以下の手順を試す。
- docker/mysql/dataフォルダ内のファイルを削除する。
- `Remote-Containers: Rebuild Container` を使用してコンテナをリビルドする。
