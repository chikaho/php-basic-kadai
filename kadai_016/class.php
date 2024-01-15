<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
  <p>
         <?php
        class Food {
          // プロパティ定義
          private $name;
          private $price;
        
          // コンストラクタ定義
          public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          }
        
          // priceプロパティの値を出力するメソッド
          public function show_price() {
            echo $this->price;
          }
        }
        
        // インスタンス化する
        $food = new Food('name', 250);
 
        // インスタンス$userの各プロパティの値を出力する
        print_r($food);
        
        // インスタンス化する
        $price = new Food();
 
        // メソッドにアクセスして実行する
        $price->set_name(250);
        $price->show_name();
       

         
        class Animal {
          // プロパティ定義
          private $name;
          private $height;
          private $weight; 
        
          // コンストラクタ定義
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
        
          // heightプロパティの値を出力するメソッド
          public function show_height() {
            echo $this->height;
          }
        }
        
?>
     
 </p>
 </body>
 
 </html>