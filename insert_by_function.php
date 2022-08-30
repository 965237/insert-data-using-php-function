<?php
function connection()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $daname = "project";

    $GLOBALS['$conn'] = mysqli_connect($host, $user, $password, $daname);
    if ($GLOBALS['$conn']) {
        echo "connection successfully";
    }
    else {
        echo "connection failed";
    }
}

function sum()
{
    connection();
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];

        $sql = "INSERT INTO new (name) VALUES('$name')";
        $query = mysqli_query($GLOBALS['$conn'], $sql);
        if ($query) {
            echo "data insert into data base";
        }
        else {
            echo "data not insert into data base";
        }
    }
}

?>

<html>

<body>
    <form action="" method="POST">

        NAME : <input type="text" name="name">
        <a href="<?php sum(); ?>"><input type="submit" name="submit"></a>

    </form>
</body>

</html>