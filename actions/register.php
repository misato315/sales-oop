<?php

include "../classes/User.php";

#Userクラスのインスタンス（オブジェクト）を作成
$user = new User;
//new Userとすることで、Userクラスのコンストラクタ（__constructメソッド）が呼ばれ、オブジェクトがメモリ上に生成される
//$userを使って、Userクラス内で定義されているメソッドやプロパティにアクセスできるようになる

#storeメソッドの呼び出し
$user -> store($_POST);
//Userクラスのインスタンス$userに対して、storeメソッドを呼び出し
//引数としてフォームから送信されたデータ（$_POST）を受け取る

?>