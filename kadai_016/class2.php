<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する
             private $name;
             private $price;

          // コンストラクタを定義する
          public function __costruct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          }   
        }
          // インスタンス化する
          $food = new Food('name', 250);

          // インスタンス$foodの各プロパティの値を出力する
          print_r($food);
         
         // メソッドを定義する
         public function set_name(string $price) {
          $this->price = $price;
         }
         public function show_name() {
          echo $this->price . '<br>';
         }
        
         //インスタンス化する
         $price = new Food();

         // メソッドにアクセスして実行する
         $price->set_name(250);
         $price->show_name();
 
      
         ?>
     </p>
 </body>
 
 </html>
