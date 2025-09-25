<?php
class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceを出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力するメソッド
    public function show_height() {
        echo $this->height . "<br>";
    }
}

// ===== Step2: インスタンス作成 =====
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

// インスタンスの出力
print_r($food);
echo "<br>";
print_r($animal);
echo "<br>";

// ===== Step3: メソッドの実行 =====
$food->show_price();
$animal->show_height();
?>