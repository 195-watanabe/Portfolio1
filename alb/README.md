# albaconnect_wp

本田さんのブランチ
```
feature/honda
```
橋元さんのブランチ
```
feature/hashimoto
```
足立さんのブランチ
```
feature/adachi
```
渡辺さんのブランチ
```
feature/watanabe
```
<h1>使い方<br></h1>
各々

```
git checkout （自分のブランチ）
git pull origin develop
```
を実行していただきます。<br>
ex.

```
git checkout feature/ichikawa
```

その後作業をし、区切りのいいところで

```
git add .
git commit -m "（進捗をここに簡単に記載してください）"
git push
```
その後、git hub のページでdevelopブランチにプルリクエストを作ってください！<br>

<h1>プルリクエストの作り方<br></h1>
git push までした後に、githubページにアクセスするとこのような表示が出るので、こちらの
```
compare & Pull request
```
を選択します。
<img width="1229" alt="スクリーンショット 2021-10-24 12 53 17" src="https://user-images.githubusercontent.com/79300603/138579996-39175f2b-9b88-4fcb-945d-e2d8586a0efd.png">

その後、各部分に記述を入れてもらいます！
```
base→develop
compare→各々のブランチ
write→やった部分の記述
```
最後にcreate pull requestを押してください！
<img width="1219" alt="スクリーンショット 2021-10-24 12 53 28" src="https://user-images.githubusercontent.com/79300603/138580028-ab1f4ba9-810e-4e49-9783-c30176b4ddea.png">


また、他の方の進捗を受け取る際には
```
git pull origin develop
```
を行ってください！(自分がコードを書いた後だと消える可能性大なので、add/commitをした後にやってください)
コンフリクト(同じファイルを操作することで起きる競合)は出た際に解消方法を共有します！
