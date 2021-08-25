## 開発メモ

# artisan関連
- モデル作成  
`php artisan make:model -m 'モデル名'`  
-m はマイグレーションファイル(database/migrations/~)を同時作成.

- マイグレーション実行  
`php artisan migrate`

- コントローラ作成  
`php artisan make:controller 'コントローラ名' --resource --model='モデル名'`  
app/Http/Controllersへ作成される.  
--resource はCRUDに必要なメソッドを用意してくれる.(例：create, store, show, edit, updateなど)  
--model=モデル名は使用するモデルインスタンスを指定.

- ルーティング  
`Route::resource('ルーティングURL', 'コントローラー名');`  
リソースルートの登録  
`php artisan route:list`  
ルート定義の確認  
リソースコントローラとは...あるデータのCRUD処理を簡潔にできる機能。  
※cloud9にてCSSなど読込処理が必要`if(env('APP_ENV')==='local')~`

- ビューの作成  
`return view('ブレード名')`
指定するブレード名はresources/views/posts/index.blade.php  ==>> index.php  
{{ csrf_field() }}  
クロスサイトスクリプティング対策




