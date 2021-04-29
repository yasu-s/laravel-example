# laravel-example

## 概要

- laravel練習用

## 開発環境について

- [Visual Studio Code](https://code.visualstudio.com/) 
  - [Remote-Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)
- [Docker Desktop](https://www.docker.com/products/docker-desktop)

## 環境構築

### envファイルをコピー

```bash
cp .env.example .env
```

### Remote Containers起動

VSCodeの[Remote Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)をインストールして、Remote Containersを通常通り起動してください。

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

## 動作確認

### サーバー起動

```bash
php artisan serve
```

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
