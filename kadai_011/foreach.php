<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>kadai_011</title>
</head>
<body>
  <p>
    <?php
     $food_date = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

       //  配列$food_dateのインデックスと値を1つずつ順番に出力する
        foreach ($food_date as $index => $value) {
            echo "{$index}：{$value}<br>";
        }
    ?>  
  </p>
  
</body>
</html>