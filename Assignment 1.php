<?php
$number1 = 0;
$number2 = 0;
$result = 15;



?>

<h2> PHP Calculator </h2>
Trevor Herring <p></p>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Number 1: <input type="text" name="number1" value="15"> <p></p>
    Number 2: <input type="text" name="number2" value="15"> <p></p>

    <input type="submit" value="Calculate Answer"> <p></p>


</form>
