<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
// A simple example of a closure

function getGreetingFunction() {

    $timeOfDay = "morning";

    return ( function( $name ) use ( &$timeOfDay ) {
        $timeOfDay = ucfirst( $timeOfDay );
        return ( "Good $timeOfDay, $name!" );
    } );
};

$greetingFunction = getGreetingFunction();
echo $greetingFunction( "Fred" ); // Displays "Good Morning, Fred!"



$people = array(
    array( "name" => "Fred", "age" => 39 ),
    array( "name" => "Sally", "age" => 23 ),
    array( "name" => "Mary", "age" => 46 )
);

function getSortFunction( $sortKey ) {
    return function( $personA, $personB ) use ( $sortKey ) {
        return ( $personA[$sortKey] < $personB[$sortKey] ) ? -1 : 1;
    };
}

echo "Sorted by name:<br><br>";
usort( $people, getSortFunction( "name" ) );
print_r( $people );
echo "<br>";

echo "Sorted by age:<br><br>";
usort( $people, getSortFunction( "age" ) );
print_r( $people );
echo "<br>";
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

