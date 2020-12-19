# README

# 概要

**タスクを付箋のように管理できるサービスです。**

![TaskApp](https://user-images.githubusercontent.com/49751604/102682805-9bc12080-420f-11eb-8f18-975067792530.png)

![task](https://user-images.githubusercontent.com/49751604/102683107-eba0e700-4211-11eb-926e-734597eac87a.gif)

[https://task-app.shimanamisan.com/](https://task-app.shimanamisan.com/)

-   ログイン ID：test01@example.com
-   パスワード：password

## 制作背景

タスク管理の Web サービスは多種多様なものが存在していますが、新しいサービスを使用する際はその機能に慣れるまである程度の時間を有すると感じており、それが思っていた以上にストレスでした。個人向けで、もっとシンプルなタスク管理サービスが存在していても良いのではと思ったのが制作のきっかけです。

更に、学習途中だったフロント、バックエンドのフレームワークの CRUD 処理の良いアウトプットにもなりました。

## 機能一覧

### ユーザー登録関連

-   ユーザー登録、ログイン、ログアウト
-   マイページ機能、プロフィール編集、退会機能（論理削除）
-   画像アップロード機能
-   メールアドレス変更通知
-   パスワードリマインダー
-   簡単ログイン機能（ゲストユーザーでログイン）

### TwitterAPI 関連

-   アカウントの登録、ログイン

### タスク登録機能全般

-   ドラッグ＆ドロップでタスクの移動
-   タスクカテゴリーフォルダの登録、編集、削除
-   タスクカードの登録、編集、削除
-   タスクリストの登録、編集、削除

## 使用技術

### 開発全般

-   Vagrant +CentOS8 の LAMP 環境、composer、npm、webpack、babel

### フロントエンド

-   Vue.js （2.6.12）
-   Vuex（3.5.1）
-   Vuedraggable（2.24.3）
-   VueRouter（3.4.9）
-   axios （0.19.2）
-   HTML / CSS / Sass
-   FLOCSS

### バックエンド

-   PHP（7.4.12）
-   Laravel（5.8）

### インフラ

-   LiteSpeed Web Server
-   MySQL（5.6.23）

### その他ツール

-   GitHub Actions（レンタルサーバへ自動デプロイ）
-   Visual Studio Code
-   draw.io
-   Adobe XD

## ER 図

![task-app](https://user-images.githubusercontent.com/49751604/97084714-f006b480-1653-11eb-82b9-7be41d70dbc7.png)
