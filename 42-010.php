<?php
    $p = fillter_input(INPUT_GET,  'p');
    if (preg_match('/\A[a-z0-9] {1, 5} \z/ui' , $p) !== 1)    {
       die('1文字以上から5文字以下の英数字を入力');
       }
?>
<body>
pは<?php echo htmlspecialchars($p ENT_QUOTES,  'UTF-8'); ?>
</body>
