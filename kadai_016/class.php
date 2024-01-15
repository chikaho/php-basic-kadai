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
                 public function __construct(string $name, int $price) {
                  $this->name = $name;
                  $this->price = $price;
              }

              // メソッドを定義する
              public function set_price(int $price) {
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price;
            }
         }
         

         // インスタンス化する
         $food = new Food('potato', 250);
         print_r($food);

         $price = new Food();

         // メソッドにアクセスして実行する
         $food->set_price(250);
         $food->show_price();
 
         

         
        
         ?>
     </p>
 </body>
 
 </html>
