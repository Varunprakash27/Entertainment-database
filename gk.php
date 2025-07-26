<?php
session_start();

// Initialize session variable if not set
if (!isset($_SESSION['tmp'])) {
    $_SESSION['tmp'] = 1;
} else {
    $_SESSION['tmp'] += 1;
}

$s1 = $_SESSION['tmp'];

// Load DB connection
require 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>General Knowledge Quiz</title>
    <link rel="stylesheet" href="quiz.css"/>
    <script src="https://kit.fontawesome.com/c1cb799ae1.js" crossorigin="anonymous"></script>
    <script>
        let timeLeft = 10;
        const countdown = setInterval(() => {
            document.getElementById("i1").innerText = "Time Ends in " + timeLeft;
            timeLeft--;
            if (timeLeft < 0) {
                clearInterval(countdown);
                window.location.href = "result.php"; // or auto-submit if needed
            }
        }, 1000);
    </script>
</head>
<body>
    <center>
        <h2><b>GENERAL_KNOWLEDGE</b></h2>
        <h3 id="i1">.</h3>

        <?php
        if ($s1 <= 1) {
            $_SESSION['quit'] = true;

            $q1 = "SELECT * FROM general_k WHERE sn=$s1";
            $q12 = mysqli_query($conn, $q1);

            if ($q13 = mysqli_fetch_assoc($q12)) {
                $a1 = $q13["question"];
                $a2 = $q13['c1'];
                $a3 = $q13['c2'];
                $a4 = $q13['c3'];
        ?>

        <form action="res.php" method="POST">
            <div class="c1">
                <p><?php echo $a1; ?></p>
            </div>

            <input type="radio" name="var" value="<?php echo $a2; ?>" id="op1" />
            <label class="x1" for="op1"><?php echo $a2; ?></label>
            <br>

            <input type="radio" name="var" value="<?php echo $a3; ?>" id="op2" />
            <label class="x2" for="op2"><?php echo $a3; ?></label>
            <br>

            <input type="radio" name="var" value="<?php echo $a4; ?>" id="op3" />
            <label class="x3" for="op3"><?php echo $a4; ?></label>
            <br>

            <input class="x4" type="submit" value="Submit" />
        </form>

        <?php
            } else {
                echo "<p>No more questions available.</p>";
                header("refresh:2; url=result.php");
            }
        } else {
            $_SESSION['quit'] = true;
            header("Location: result.php");
        }
        ?>

        <form action="main.php">
            <button id="i10"><i class="fa-solid fa-house"></i></button>
        </form>
    </center>
</body>
</html>
