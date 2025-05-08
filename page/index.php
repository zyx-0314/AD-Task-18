<!DOCTYPE html>
<html>
<head>
<title>Your Gym Day</title>
<link rel="stylesheet" href="assets/css/example.css">
</head>
<body style="text-align: center; font-family: Arial;">
<h1>🏋️ Your Gym Routine</h1>

<?php
// random number between 1 and 3
$num = rand(1, 3);

// conditional show workout
if ($num == 1) {
echo "<p>Today is <strong>Chest Day</strong>! Do Bench Press, Machine press, and Chest cable curl NOW.</p>";
} elseif ($num == 2) {
echo "<p>Today is <strong>Leg Day</strong>! Do Squats, Hamstring curl, and Calf raises NOW.</p>";
} else {
echo "<p>Today is <strong>Rest Day</strong>! Just stretch and don't stress.</p>";
}

// only show reps if not rest day
if ($num != 3) {
echo "<h3>Sets:</h3>";
for ($i = 1; $i <= 4; $i++) {
echo "Set $i<br>";
}
}
?>

<br>
<a href="index.php">Generate Again</a><br>
<a href="/index.php">Back to Home</a>
</body>
</html>