42-001.php
<?php
    $name = inset ($_GET['name']) ? $_GET['name'] : '';
    
    if (! mb_check _encording($name, 'Shift_JIS')) {
    die ('文字のエンコーディングが不正');
    }
    
    $name = mb_convert_encording($name, 'UTF-8', 'Shift_JIS');
    ?>
    <body>
    名前は<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>
    </body>
