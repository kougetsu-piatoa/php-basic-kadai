<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_005</title>
</head>

<body>
   <p>
       <?php
       $scoer01 = 80;
       $scoer02 = 60;
       $scoer03 = 55;
       $scoer04 = 40;
       $scoer05 = 100;
       $scoer06 = 25;
       $scoer07 = 80;
       $scoer08 = 95;
       $scoer09 = 30;
       $scoer10 = 60;
      
       $total_score = $scoer01+$scoer02+$scoer03+$scoer04+$scoer05+$scoer06+$scoer07+$scoer08+$scoer09+$scoer10;

       $average_score = $total_score / 10;

       echo $average_score;
       ?>
   </p>
</body>

</html>