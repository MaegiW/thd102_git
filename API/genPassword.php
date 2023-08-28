<?php
// 定義包含英文小寫字母和數字的陣列
$characters = array_merge(range('a', 'z'), range(0, 9));

// 初始化亂數密碼字串
$password = '';

// 使用迴圈控制10碼顯示長度
for ($i = 0; $i < 10; $i++) {
    // 隨機獲取陣列索引
    $randomIndex = array_rand($characters);
    
    // 將隨機獲取的字元加入到亂數密碼字串中
    $password .= $characters[$randomIndex];
}

// 顯示最終的10碼亂數密碼
echo $password;
?>
