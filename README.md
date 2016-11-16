# Wordrop
## 製品概要
### Magazine Tech

### 背景（製品開発のきっかけ、課題等）
<<<<<<< HEAD
私たち[future body]のテーマは「情報の貯蔵」の援助のためのデバイスの作成です。雑誌や小説を読んでる時、気になるワードが数多く現れます。例えば雑誌に掲載されているお店の名前が気になっても、雑誌には必要最低限の情報しかありません。もっとそのお店の事を知りたいと思ったとき、他の商品を見たくなった時、直観的に必要な情報を抜き出したり、後から見るためにまとめて貯蔵することができたらもっと生活がスマートになるのではないかということからこのWordropが生まれました。
### 製品説明（具体的な製品の説明）
1.ユーザの興味分野の登録、ユーザが読んでいる雑誌に興味のある項目やキーワードを見つけた時に、指につけてある小型のデバイスで気になるワードをなぞる。
2.なぞった文章を形態素解析を用いて単語をブラウザ上に貯蔵する。
3.貯蔵したデータを解析しユーザに適したデータをブラウザ上に表示する。
### 特長
####1. 特長1
気になるワードをなぞるとう簡単な動作を行うだけでインターネットの特徴である、膨大な情報の中からユーザーは自分の欲しい情報を手に入れることが出来る。
####2. 特長2
あああ
####3. 特長3
あああ

### 解決出来ること
雑誌を読んでいた時に手を止めることなく読み進めることができ、またブラウザ上でそのワードに適した情報を自動で表示してくれるので無駄な時間を使わずにより厚みのある情報をユーザは手にすることが出来る。

### 今後の展望
Wordropをでーザー以外にも雑誌会社にもメリットのあるコンテンツにしたい
### 注力したこと（こだわり等）
* ああああ
* ああああ
=======
みなさんはこんな経験をしたことがありませんか？
本や雑誌を読んでいるときに、気になるワードが出てきたが、後々調べようと思ったまま調べるのを忘れてしまっていたという経験です。このような問題を解決すべく、直感的に気になる情報を抜き出し、後から見るためにまとめて貯蔵しておくことが可能なデバイスがあるならば、自然な読書を邪魔することなく、好きな時に好きなだけ調べることが可能なのではと考えました。

### 製品説明（具体的な製品の説明）
1.指につけてあるデバイスで気になる文字の付近をなぞる。
2.なぞった部分を画像として保存、その画像から文字情報のみを抜き出す。それを形態素解析し、その中から固有表現を抽出する。抽出された文字を解析し、データベースへ保存する。
3.データベース上に表示された文字の大きさと色にはそれぞれ意味を持っている。先程の、文字解析でそれらを行っている。自分がなぞったワードに対して、もし他ユーザーも同じワードをなぞっていた場合、今までの他のユーザー達がなぞった回数の頻度により、重要性の高低を判断し、文字の大きさを変更して表示されるようにしている。また、なぞったワードに対し、元々用意してある、「人」、「場所」、「人工物」、「それ以外」かの要素に当てはめ、当てはまった要素の色に変更して表示されるようにしている。
4.表示されている文字をクリックすると、その文字に関する情報をWikipediaAPIを利用して、知ることができる。また、文字の要素が「場所」だった場合は、Wikipedia情報の下に、googleマップを付けている。
5.一度調べたワードはアーカイブのようにリスト化される。

### 特長
####1. 特長1
ユーザーは気になるワードを「なぞる」といった簡単な動作だけを行います。
####2. 特長2
後々調べようと思ったまま調べるのを忘れてしまっていることがなくなります。
####3. 特長3
データベースにワードを貯蔵しているので、好きな時に好きなだけ調べられます。

### 解決出来ること
本や雑誌を読んでいるときに、気になるワードが出てきたが、後々調べようと思ったまま調べるのを忘れてしまっていたという経験を完全に無くすことが可能になります。

### 今後の展望
電子書籍が流行している中、雑誌が好きな人の支援につながっていき、また雑誌を作る側の方たちにもより良い影響を及ぼすことを望んでいます。

### 注力したこと（こだわり等）
* 画像から文字の認識を行ったこと
* ブラウザ画面上の単語の配置の仕方
>>>>>>> e693afc100c3693b5f64c9573da90eeb796e63a9

## 開発技術
### 活用した外部技術
#### API・データ
<<<<<<< HEAD
* gooAPI（形態素解析）
* gooAPI（固有表現抽出）

#### フレームワーク・ライブラリ・モジュール
* PHP
* あああ

#### デバイス
* Raspberry Pi
* ああああ
=======
* goo　形態素解析API
* goo　固有表現抽出API
* wikipedia API
* Google Maps API
* Google Cloud Cision API

#### フレームワーク・ライブラリ・モジュール
* MySQL
* PHPmyAdomin

#### デバイス
* Raspberry Pi
* Macbook Air
* Webカメラ（iBUFFALO）
>>>>>>> e693afc100c3693b5f64c9573da90eeb796e63a9

### 独自技術
#### 期間中に開発した独自機能・技術
* 独自で開発したものの内容をこちらに記載してください
* 特に力を入れた部分をファイルリンク、またはcommit_idを記載してください（任意）

#### 研究内容（任意）
* もし、製品に研究内容を用いた場合は、研究内容の詳細及び具体的な活用法について、こちらに記載をしてください。
<<<<<<< HEAD
* あああああ
=======
>>>>>>> e693afc100c3693b5f64c9573da90eeb796e63a9
