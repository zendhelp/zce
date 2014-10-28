<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

echo "\n";
/* example 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>