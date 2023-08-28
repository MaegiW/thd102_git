<?php


$characters = array_merge(range('a', 'z'), range(0, 9));
$password = '';

for ($i = 0; $i < 10; $i++) {
    $randomIndex = array_rand($characters);
    $password .= $characters[$randomIndex];
}

echo "隨機密碼1: " . $password;



// $password 是一個空字串，最初還沒有任何內容。

// .= 是 PHP 中的字串串接運算符，用於將右邊的內容附加到左邊的變數中。

// $characters[$randomIndex] 是從 $characters 陣列中取得隨機索引 $randomIndex 所對應的元素。

// 每次迴圈運行時，$randomIndex 會透過 array_rand($characters) 函式取得 $characters 陣列中的一個隨機索引。
//然後，將 $characters 陣列中對應隨機索引的元素附加到 $password 字串中。這個過程會持續進行 10 次迴圈，最終得到 10 個隨機字元所構成的密碼。

// 總結來說，這行程式碼的目的是將 10 個隨機選取的字元逐一附加到 $password 字串中，以建立一個隨機生成的密碼。




echo "<br>";



// 定義包含英文(a~z)和數字(0~9)的陣列
$number_and_eng = array_merge(range('a', 'z'), range(0, 9));

// 初始化密碼字串
$password = '';

// 隨機產生10碼亂數密碼
for ($i = 0; $i < 10; $i++) {
    $randomIndex = rand(0, count($number_and_eng) - 1);
    $password .= $number_and_eng[$randomIndex];
}

echo "隨機密碼2: " . $password;




echo "<br>";


// 定義包含英文(a~z)和數字(0~9)的陣列
$characters = array_merge(range('a', 'z'), range(0, 9));

// 初始化密碼字串
$password = '';

// 隨機產生10碼亂數密碼
for ($i = 0; $i < 10; $i++) {
    $randomIndex = rand(0, count($characters) - 1);
    $password = $password . $characters[$randomIndex];
}

echo "隨機密碼3: " . $password;






echo "<br>";


$characters = array_merge(range('a', 'z'), range(0, 9));
$password = array();

foreach (range(1, 10) as $i) {
    $randomIndex = array_rand($characters);
    array_push($password, $characters[$randomIndex]);
}

shuffle($password);

$randomPassword = '';
foreach ($password as $char) {
    $randomPassword .= $char;
}

echo "隨機密碼4: " . $randomPassword;

// 在這個改寫後的程式碼中，我們避免了使用 implode() 函式。而是使用第二個 foreach 迴圈來遍歷 $password 陣列，將每個字元 $char 連接到 $randomPassword 字串上。

// 這樣你就可以得到一個隨機的 10 碼密碼，而且不使用 implode() 函式。程式碼的功能與之前的版本相同，只是達到結果的方法不同。















 ?>   
