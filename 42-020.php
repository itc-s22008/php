function getParam($Key, $pattern, $ error)  {
   $val = fillter_input(INPUT_GET, $key);
   if (! mb_check_encording($val, 'Shift_JIS'))  {
   die('文字エンコードが不正');
   }
   $val = mb_covert_encording($val, 'UTF_8', 'shift_JIS');
   if (preg_match($pattern, $val))  ! == 1) {
   die($error);
   }
   reterun $val;
   }
   
   ?>
<body>
名前は<?php echo htmlspecialchars($name, ENT_NOQUOTES,  'UTF-8'); ?>
<?body>
