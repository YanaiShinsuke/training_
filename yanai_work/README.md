# Webサーバー構築手順まとめ

## 1. githubのtraining_リポジトリをローカルにcloneする
```HTTPS
git clone https://github.com/YanaiShinsuke/training_.git
```

```SSH
git@github.com:YanaiShinsuke/training_.git
```
容量が重ければ、Yanai_workフォルダのみダウンロードする。

## 2. インスタンスのユーザ配下にファイルを転送する（必要な人のみ）

```Mac上
# cloneしたフォルダに移動
cd $ダウンロードした場所/training_

# インスタンスのユーザ配下にwebデータを送る
# /home/yanai/のyanaiは各々のユーザ名
scp -r web training:/home/yanai/
```

※ 本来はインスタンス先のユーザを`ユーザ名@ipアドレス:/~`で指定するが、セキュリティの関係上このように記述している。この部分は各自変更してほしい。

## 3. インスタンスにsshで接続。
```Mac上
ssh training
```

## 4. Docker-composeコマンドを使用して、コンテナを作成する。
```インスタンス上
docker-compose up -d --build
```

初めて実行する場合は下記コマンドを実行
```
./init-mysql.sh
```

## 5. ローカルにあるMacのwebブラウザから、先ほど作成したウェブサーバに接続
URL入力欄に、下記を入力
```webブラウザ
ipアドレス:20088
```

ipアドレスにはインスタンスのグローバルIPアドレスが必要。もしわからなければ、インスタンス上で下記を実行して、出力された結果を入力
```インスタンス上
curl inet-ip.info
```

	
