<?php
$exam1 = 0;
$exam2 = 0;
$exam3 = 0;
$average = "";
$status = "";
$grade = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["exam1"])) {
        $exam1 = test_input($_POST["exam1"]);
    }
    if (!empty($_POST["exam2"])) {
        $exam2 = test_input($_POST["exam2"]);
    }
    if (!empty($_POST["exam3"])) {
        $exam3 = test_input($_POST["exam3"]);
    }
}

$average = ($exam1 + $exam2 + $exam3) / 3;
$average = round($average,2);

if($average >= 70){
    $status = "Passing";
}
else {
    $status = "Failing";
}

if($average >= 90){
    $grade = "A";
}
else if($average >= 80){
    $grade = "B";
}
else if($average >= 70){
    $grade = "C";
}
else if($average >= 60){
    $grade = "D";
}
else{
    $grade = "F";
}

?>

<html>
<head>
    <title> PHP Grade Calculator </title>
</head>
<body>

    <h2> PHP Grade Calculator </h2>
    Trevor Herring <p></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        Exam 1: <input type="text" name="exam1" value="<?php echo $exam1;?>"> <p></p>
        Exam 2: <input type="text" name="exam2" value="<?php echo $exam2;?>"> <p></p>
        Exam 3: <input type="text" name="exam3" value="<?php echo $exam3;?>"> <p></p>

        <input type="submit" value="Calculate Answer"><p></p>
        Average: <input type="text" name="average" value="<?php echo $average;?>"><p></p>
        Status: <input type="text" name="status" value="<?php echo $status;?>"><p></p>
        Grade: <input type="text" name="grade" value="<?php echo $grade;?>"><p></p>

    </form>

</body>
</html>

