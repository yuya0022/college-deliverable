<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## アプリ名

「Buddiesの広場」

## アプリの概要

## 制作背景
本アプリケーションを制作しようと考えた理由は2つあります。  
1つは、櫻坂46のファンが交流する場を作りたいと思ったからです。  
もう1つは、櫻坂46の推し活をする中で、以下に挙げる2つ課題に遭遇し、それを解決したいと考えたからです。

**課題１：生写真のトレードが面倒**  
ファンの間では、5枚1セット(ランダム)で販売されている生写真をトレードして、自身の好きなメンバー写真を集めるということが、よく行われています。  
トレードは、イベント会場だけでなく、Twitter上でも行われています。  
しかし、Twitter上でのトレードでは、自身が要求・提供する写真と、相手が要求・提供する写真とがマッチするツイートを探すには、手当たり次第にツイートを探す他なく、かなり面倒だと感じました。  
これが1つ目の課題です。

**課題２：ライブ内容のネタバレ**  
前提として、ライブ時の情報を収集する際、多くのファンがTwitterを利用しています。  
さて、例えば2日間のライブが開催される場合、2日目のみに参加する人にとって、初日のライブが終了してから2日目のライブが始まるまでの間に、次のようなジレンマが生じます。

初日のライブ内容（例：セットリスト）は知りたくない。  
一方で、初日の会場の様子（例：グッズ販売の混雑状況）を知る為、会場で会える人を探す為、またライブ前にコールを確認する為にツイートを見たい。  
しかし、ツイートを見ようとすれば、高確率でネタバレ投稿が目に入ってしまう。

また、ライブ初日に参加した人も、こうした状況があるが故に、感想をツイートし辛い状況にあると思います。  
以上が2つ目の課題です。

## 機能一覧

### １．ユーザー新規登録・ログイン機能について
- **トップページ**  

- **新規登録ページ**  
ユーザーの人柄が少しでも他者に伝わるよう、プロフィールの項目を充実させました。  
 
- **ログインページ**  


### ２．ライブ・イベントに関する投稿機能について  
ナビゲーションの「ライブ・イベント」から下記の「ライブ・イベント一覧ページ」に移動できます。  

- **ライブ・イベント一覧ページ**  
各ライブ・イベントから下記の「投稿一覧ページ」に移動できます。  

- **投稿一覧ページ**  
各ライブ・イベント、各カテゴリー毎に投稿を一覧表示します。  
<ins>**このようにカテゴリー分けをすることで、制作背景で述べた「課題２：ライブ内容のネタバレ」が解決されます。**</ins>  
投稿作成ボタンから下記の「投稿作成ページ」に移動できます。  
各投稿から下記の「投稿詳細ページ」に移動できます。  

- **投稿作成ページ**  
例えば、イベント名：櫻坂46「全国アリーナツアー」、カテゴリー名：連番募集　の「投稿一覧ページ」にある投稿作成ボタンをクリックすると、そのイベント名・カテゴリー名に対応する投稿を作成できます。

- **投稿詳細ページ**  
自身の投稿である場合、下記の「投稿編集ページ」に移動できます。  
自身の投稿である場合、投稿を削除できます。  
投稿にコメントすることができます。　尚、自身のコメントは削除できます。  

- **投稿編集ページ**  

### ３．生写真トレード投稿について  
ナビゲーションの「生写真トレード」から下記の「トレード投稿一覧ページ」に移動できます。  

- **トレード投稿一覧ページ**  
条件検索をすることができます。   
<ins>**これにより、制作背景で述べた「課題１：生写真のトレードが面倒」が解決されます。**</ins>  
投稿作成ボタンから下記の「トレード投稿作成ページ」に移動できます。  
各投稿から下記の「トレード投稿詳細ページ」に移動できます。  

- **トレード投稿作成ページ**  

- **トレード投稿詳細ページ**  
自身の投稿である場合、下記の「トレード投稿編集ページ」に移動できます。  
自身の投稿である場合、投稿を削除できます。  
投稿にコメントすることができます。　尚、自身のコメントは削除できます。  

- **トレード投稿編集ページ**

### ４．プロフィールについて  
「投稿一覧ページ」や「投稿詳細ページ」などにある、投稿者のアイコンをクリックすると、下記の「自分のプロフィールページ」または「他人のプロフィールページ」に移動できます。  
ナビゲーションの「マイページ」から下記の「自分のプロフィールページ」に移動できます。

- **自分のプロフィールページ**  
編集ボタンから下記の「プロフィール編集ページ」に移動できます。  
投稿・コメント一覧ボタンから下記の「投稿・コメント一覧ページ」に移動できます。  

- **他人のプロフィールページ**  
チャットボタンから下記の「チャットページ」に移動できます。    
投稿・コメント一覧ボタンから下記の「投稿・コメント一覧ページ」に移動できます。  

- **プロフィール編集ページ**  
アカウントやプロフィールの編集ができます。  

- **投稿・コメント一覧ページ**  
特定のユーザーの投稿・コメントを見ることができます。

### ５．チャット機能について  
ナビゲーションの「チャット」から下記の「チャット一覧ページ」に移動できます。  

- **チャット一覧ページ**  
チャットルームは、最新のメッセージ順に表示しています。  
各チャットルームから下記の「チャットページ」に移動できます。  

- **チャットページ**  
個人チャットができます。  
チャット機能は、Pusherを用いて実装しています。  

## URL

## テストユーザー


## ER図

## 使用技術

### フロントエンド
- Blade(HTML)
- TailwindCSS, CSS
- JavaScript

### バックエンド
- Laravel

### データベース
- MariaDB(MySQL)

### 外部サービス
- Cloudinary
- Pusher