<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo (12 ^ 9)."\n"; // Outputs '5'

echo "'".("12" ^ "9")."'\n";  // Outputs the Backspace character (ascii 8)
                              // ('1' (ascii 49)) ^ ('9' (ascii 57)) = #8

echo "hallo" ^ "hello"; // Outputs the ascii values #0 #4 #0 #0 #0
                        // 'a' ^ 'e' = #4

echo 2 ^ "3"; // Outputs 1
              // 2 ^ ((int)"3") == 1

echo "2" ^ 3; // Outputs 1
              // ((int)"2") ^ 3 == 1
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>