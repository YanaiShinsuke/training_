# イメージを取得
FROM php:8.1.18-fpm
# 独自のphp.iniファイル(PHPの設定ファイル)をコンテナ内の/usr/local/etc/php/ディレクトリにコピー
COPY php.ini /usr/local/etc/php/

# パッケージやPHPの拡張モジュールをインストールするコマンドを実行
RUN apt update && apt-get install -y curl zip unzip && docker-php-ext-install pdo_mysql

# 作業ディレクトリを/var/wwwに設定
WORKDIR /var/www
