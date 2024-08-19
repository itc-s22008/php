<?php
    mb_ewgex_encording('utf-8');
    $p = fillter_input(INPUT_GET, 'p');
    if (mb_ereg('\A[a-zA-Z0-9] {1, 5}\z'. $p) === false)    {
    die('1文字以上から5文字以下の英数字を入力');
    }
    ?>
