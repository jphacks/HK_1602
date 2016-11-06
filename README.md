# Wordrop
## 製品概要
### Magazine Tech

### 背景（製品開発のきっかけ、課題等）
私たちが日々、雑誌や小説を読んでる時、気になる「word」が数多く現れます。例えば、雑誌に掲載されているお店の名前が気になったときに、雑誌には必要最低限の情報しか書かれていないことがよくあります。もっと、そのお店の事を知りたい！と思ったときや、他にどんな商品があるのか気になったりすることがあるかと思います。そのような時に、直感的に必要な情報を抜き出し、後から見るためにまとめて貯蔵することが可能なデバイスがあるならば、より生活がスマートになるのではないかと考えました。

### 製品説明（具体的な製品の説明）
####1.ユーザの興味分野の登録、ユーザが読んでいる雑誌に興味のある項目や、キーワードを見つけた時に、指につけてある小型のデバイスで気になる「word」をなぞる。
####2.なぞった文章を画像として保存、その画像から文字のみを抜き出す。それを形態素解析し、その中から固有表現を抽出する。抽出された単語をブラウザ上に貯蔵する。
####3.貯蔵したデータを解析し、ユーザの最近のトレンドに合わせて、適したデータをブラウザ上に表示する。

### 特長
##1. 特長1
ユーザーは気になる「word」を「なぞる」といった簡単な動作だけを行う。
##2. 特長2
インターネットの特徴である膨大な情報の中からユーザーは自分の欲しい情報を手に入れることが出来る。
##3. 特長3
後から見た時に、自分がどのような事やものに興味があるのかがデータから把握することができる。

### 解決出来ること
雑誌を読んでいる時に、手を止めることなく読み進めることができ、またブラウザ上でそのワードに適した情報を自動で表示してくれるので無駄な時間を使わずにより厚みのある情報をユーザは手にすることが出来る。

### 今後の展望
Wordropをユーザー以外にも雑誌会社にもメリットのあるコンテンツにしたいと考えている。

### 注力したこと（こだわり等）
*Raspberry Piを利用して、デバイスの制御をおこなった点
*ブラウザ画面上の単語の配置の仕方

## 開発技術
### 活用した外部技術
#### API・データ
* 形態素解析API
* 固有表現抽出API

#### フレームワーク・ライブラリ・モジュール
* MySQL
* PHPmyAdomin

#### デバイス
* Raspberry Pi
* Macbook Air
* Webカメラ（iBUFFALO）

### 独自技術
#### 期間中に開発した独自機能・技術
* 独自で開発したものの内容をこちらに記載してください
* 特に力を入れた部分をファイルリンク、またはcommit_idを記載してください（任意）

#### 研究内容（任意）
* もし、製品に研究内容を用いた場合は、研究内容の詳細及び具体的な活用法について、こちらに記載をしてください。
