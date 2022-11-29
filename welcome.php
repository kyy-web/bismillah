<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" href="stylesheetP6.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="header-logo">Progate</div>
        <div class="header-list">
            <ul>
                <li>Library</li>
                <li>Exercise</li>
                <li>Media Social</li>
            </ul>
        </div>
    </div>
    <div class="text-center" style=" text-align: center;">
        <h1>Welcome!</h1>
        Username:
        <?php echo $_POST["nama"]; ?><br>
        Email:
        <?php echo $_POST["email"]; ?><br>
        Materi yang disuka:
        <?php echo $_POST["materi"] ?><br>
        Kritik dan Saran:
        <?php echo $_POST["kritik"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $materi = $_POST["materi"];
        $kritik = $_POST["kritik"];

        //Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        //Check connection
        if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        }

        $sql = "INSERT INTO myguests (nama, email , materi , kritik )
        VALUES ('$nama','$email','$materi','$kritik')";

        if ($conn->query($sql) === TRUE) {
            echo "<br>" . "New records created succesfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT nama,email,materi,kritik FROM myguests";
        ?>
    </div>
</body>

</html>