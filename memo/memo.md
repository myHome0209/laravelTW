##開発メモ

#artisan関連
* モデル作成
'php artisan make:model -m 'モデル名''
-m はマイグレーションファイル(database/migrations/~)を同時作成.

* マイグレーション実行
'php artisan migrate'

* コントローラ作成
'php artisan make:controller 'コントローラ名' --resource --model='モデル名''
app/Http/Controllersへ作成される.
--resource はCRUDに必要なメソッドを用意してくれる.(例：create, store, show, edit, updateなど)





