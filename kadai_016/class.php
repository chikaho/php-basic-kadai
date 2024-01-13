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
          public function __construct(string $name, string $price) {
            $this->name = $name;
            $this->price = $price;
          }
          
        }

        // インスタンス化する
        $food = new Food('potato', 250);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
?>

    <br>
   
      <?php
      // クラスを定義する
      class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;
        

        // コンストラクタを定義する
        public function __construct(string $name,  int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

      // インスタンス化する
      $animal = new Animal('dog', 60, 5000);

      // インスタンス$animalの各プロパティの値を出力する
      print_r($animal);
      ?>
<br>
      <?php
       // クラスを定義する
       class Foods {
        // プロパティを定義する
         public $price;

         // メソッドを定義する
         public function set_name(string $price) {
             $this->price = $price;
         }
         public function show_name() {
             echo $this->price . '<br>';
         }
    }

     // インスタンス化する
     $price = new Foods();

     // メソッドにアクセスして実行する
     $price->set_name(250);
     $price->show_name();

  
    ?>
     
      <?php
       // クラスを定義する
       class Animals {
        // プロパティを定義する
         public $height;

         // メソッドを定義する
         public function set_name(string $height) {
             $this->height = $height;
         }
         public function show_name() {
             echo $this->height . '<br>';
         }
    }

     // インスタンス化する
     $height = new Animals();

     // メソッドにアクセスして実行する
     $height->set_name(60);
     $height->show_name();

  
    ?>
 </p>
 </body>
 
 </html>