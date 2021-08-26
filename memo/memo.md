## Laravel開発メモ

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
※リソースコントローラとは...あるデータのCRUD処理を簡潔にできる機能。  
※cloud9にてCSSなど読込処理が必要
`if(env('APP_ENV')==='local')~`  
<br>

## リソースコントローラにより処理されるアクション
| リクエスト | 	URI          | 	アクション | 
| ---------- | ------------- | ----------- | 
| GET        | /posts        | index       | 
| GET        | /posts/create | create      | 
| POST       | /posts        | store       | 
| GET        | /posts/1      | show        | 
| GET        | /posts/1/edit | edit        | 
| PUT/PATCH  | /posts/1      | update      | 
| DELETE     | /posts/1      | destroy     |
<br>
※指定したURIにより呼ばれるアクションメソッドが変わる。formのactionでURIを指定し、hiddenのvalueでリクエストを指定。 指定したアクションが呼ばれる。
<br><br>
- ビューの作成  
`return view('ブレード名')`  
指定するブレード名はresources/views/posts/index.blade.php  ==>> index.php  
`{{ csrf_field() }}  `  
クロスサイトスクリプティング対策

- モデルのデータ保存  
`$post = new Post();`
`$post->save();`

- モデルを主キーで取得  
`$post = 'model名'::findOrFail('modelの主キー');`  
指定モデルの主キーからモデルデータ取得できる  
`$model = App\モデル名::where('他カラム', 1)->firstOrFail();`  
主キー以外のカラム検索で取得  
※DB側でUNIQUE制約があるキーを指定した方が差異が生じにくい

- フラッシュデータ
セッションに一時保存して表示する場合に使用
`$req->session()->flash('message', '本登録が完了しました');`
bladeにて
`@if (Session::has('message'))`
`{{ Session::get('message') }}`
`@endif`

- モデルのデータ削除  
`モデル名->delete();`  

## bootstrap4
- レイアウトファイル宣言  
`@extends('layouts.レイアウト名')`  
パスresources/views/layouts/レイアウト名が読込まれる

- sectionについて  
bladeの  
`@section('埋め込みコード')`  
↓  
extend先の    
`@yield('埋め込みコード')`  
へ出力される  

- componentについて  
header.blade.phpを呼び出す  
`@component('component.header')`  
`@endcomponent`  
呼び出されるパスはresources/views/componentsのディレクトリ内   
footerも同様  





