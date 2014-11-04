<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
// Assign an anonymous function to a variable
$makeGreeting = function( $name, $timeOfDay ) {
    return ( "Good $timeOfDay, $name!" );
};
// Call the anonymous function
echo $makeGreeting( "Fred", "morning" ) . "<br>";
echo $makeGreeting( "Mary", "afternoon" ) . "<br>";


// Store 3 anonymous functions in an array
$luckyDip = array(

    function() {
        echo "You got a bag of toffees!";
    },

    function() {
        echo "You got a toy car!";
    },

    function() {
        echo "You got some balloons!";
    }
);
// Call a random function
$choice = rand( 0, 2 );
$luckyDip[$choice]();


?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

