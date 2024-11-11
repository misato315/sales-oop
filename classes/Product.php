<?php

require_once "Database.php";

///プロダクトに関するクラス///
class Product extends Database{

    #新しいプロダクトをデータベースに保存するメソッド
    public function storeProduct($request){

    //ユーザーがフォームで入力した情報を$request配列から取得し変数に格納
        $product_name = $request['product_name'];
        $price        = $request['price'];
        $quantity     = $request['quantity'];

    //SQL INSERTクエリを作成し、ユーザー情報を usersテーブルに追加
        $sql = "INSERT INTO products(`product_name`,`price`,`quantity`)
                VALUES('$product_name','$price','$quantity')";
    
    if($this->conn->query($sql)){
        header('location:../views/dashboard.php');
        exit;
    }else{
        die('Error creating the product:'.$this->conn->error);
    }
    }

    #すべてのプロダクト情報を取得するメソッド
    public function getAllProducts(){

        //テーブルから全てのカラムを取得し、文字列として$sqlに格納
        $sql = "SELECT * FROM products";
        //上記のSQLクエリを実行し結果を$resultに格納
        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retrieving all products:'.$this->conn->error);
        }
    }
    
    #特定のプロダクト情報を取得するメソッド
    public function getProduct($id){

        $sql = "SELECT * FROM products WHERE id = $id";
        
        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving the product:'.$this->conn->error);
        }
    }

    #プロダクト情報を更新するメソッド
    public function updateProduct($request){
        session_start();

        $id = $_SESSION['id'];
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE products SET product_name='$product_name', price='$price', quantity='$quantity' WHERE id = $id";

        if($this->conn->query($sql)){
            $_SESSION['product_name'] = $product_name;
            $_SESSION['price']        = $price;
            $_SESSION['quantity']     = $quantity;

            header('location:../views/dashboard.php');
            exit;
        }else{
            die('Error updating the product:'.$this->conn->error);
        }
    }

    #プロダクト情報を削除するメソッド
    public function deleteProduct(){
        session_start();
        $id = $_SESSION['id'];

        $sql = "DELETE FROM products WHERE id = $id";

        if($this->conn->query($sql)){
            header('location:../views/dashboard.php');
            exit;
        }else{
            die('Error deleting the product:'.$this->$conn->error);
    }
}
}

?>