<?php
$login = "f";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // error_reporting(0);
    include 'te.php';
    $st = $_POST["st"];
    $pass = $_POST["pass"];
    $sql = "Select * from data where st='$st' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['st'] = $st;
        header("location:test.html");
    } else {
        $login = false;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Student login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url(img.jpg);
            width: 100vw;
            height: 100vh;
        }

        table {
            background-color: rgb(43, 23, 77);
            padding: 30px;
            border: 4mm ridge #770a0a;
            color: lightgrey;
            font-size: 55px;
        }

        table td {
            font-size: 25px;
            padding: 15px;
        }
    </style>
</head>

<body>
    <CENTER>
        <form action="studlog.php" method="post">
        <BR><BR><BR><BR><BR>
        <table>
            <th>
                STUDENT LOGIN
                <hr>
            </th>

            <tr>
                <td>
                    <b>USER_ID</b>
                    <input type="text" name="st">
                </td>
            </tr>

            <tr>
                <td>
                    <b>PASSWORD</b>
                    <input type="text" name="pass">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="button" value="LOGIN" onclick="location.href='adminupdate.html'">
                    <input type="button" value="EXIT" onclick="location.href='page1.html'">
            </tr>
        </table>
    </form>
    </CENTER>
</body>

</html>