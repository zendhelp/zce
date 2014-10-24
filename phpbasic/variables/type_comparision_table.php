<?php require_once '../includes/header.php'; ?>

<?php
$arrExpressionText = array('$x = ""',
                        '$x = null',
                        'var $x',
                        '$x is undefined',
                        '$x = array()',
                        '$x = false',
                        '$x = true',
                        '$x = 1',
                        '$x = 42',
                        '$x = 0',
                        '$x = -1',
                        '$x = "1"',
                        '$x = "0"',
                        '$x = "-1"',
                        '$x = "php"',
                        '$x = "true"',
                        '$x = "false"'
                 );

$x;
$arrExpression = array('', null, $x, $y, array(), false, true, 1, 42, 0, -1, '1', '0', '-1', 'php', 'true', 'false');


$arrComparisionText = array('TRUE', 'FALSE', 1, 0, -1, '1', '0', '-1', 'NULL', 'array()', 'php', '""');
$arrComparision = array(TRUE, FALSE, 1, 0, -1, '1', '0', '-1', NULL, array(), 'php', '');

?>

<table class="doctable table">
    <h1 class="refname">PHP Data Type</h1>
    <thead>
        <tr>
            <th>Expression</th>
            <th>gettype()</th>
            <th>empty()</th>
            <th>is_null()</th>
            <th>isset()</th>
            <th>boolean</th>
        </tr>
    </thead>

    <tbody class="tbody">
        <?php
        $countExp = 0;
        foreach($arrExpression as $exp) :
        ?>
        <tr>
            <td><?php echo $arrExpressionText[$countExp] ;?></td>
            <td><?php echo gettype($exp); ?></td>
            <td><?php echo empty($exp) == 1 ? 'TRUE' : 'FALSE'; ?></td>
            <td><?php echo is_null($exp) == 1 ? 'TRUE' : 'FALSE'; ?></td>
            <td><?php echo isset($exp) == 1 ? 'TRUE' : 'FALSE'; ?></td>
            <td><?php echo (bool)$exp == 1 ? 'TRUE' : 'FALSE'; ?></td>
        </tr>
        <?php $countExp ++; endforeach; ?>
    </tbody>

</table>

<table class="doctable table">
    <h1 class="refname">Loose Comparision with ==</h1>
    <thead>
    <tr>
        <th class="title"></th>
        <?php
        foreach($arrComparisionText as $com) {
            echo "<th>$com</th>";
        }
        ?>
    </tr>
    </thead>

    <tbody class="tbody">
    <?php
    $countCom = 0;
    foreach($arrComparision as $com) {
        echo '<tr>';
        echo '<td><strong>' . $arrComparisionText[$countCom] . '</strong></td>';
        $countCom ++;
        foreach($arrComparision as $comp) {
            echo '<td>';
            echo $com == $comp ? 'TRUE' : 'FALSE';
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
    </tbody>

</table>

<table class="doctable table">
    <h1 class="refname">Strict Comparision with ===</h1>
    <thead>
    <tr>
        <th class="title"></th>
        <?php
        foreach($arrComparisionText as $com) {
            echo "<th>$com</th>";
        }
        ?>
    </tr>
    </thead>

    <tbody class="tbody">
    <?php
    $countCom = 0;
    foreach($arrComparision as $com) {
        echo '<tr>';
        echo '<td><strong>' . $arrComparisionText[$countCom] . '</strong></td>';
        $countCom ++;
        foreach($arrComparision as $comp) {
            echo '<td>';
            echo $com === $comp ? 'TRUE' : 'FALSE';
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
    </tbody>

</table>



<?php require_once '../includes/footer.php'; ?>