<!DOCTYPE html>
<html>

<head>
    <title>Join To Member</title>
    <link rel="stylesheet" href="script.js">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" async defer> </script>
    <link rel="stylesheet" href="login3.css">
</head>

<body>
    <?php $namaErr = $emailErr = $pswdErr = $repswdErr = "";
        $nama = $email = $pswd = $repswd = $uppercase = $lowercase = $number = $special = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
                $namaErr = "Nama harus ada";
            } else {
                $nama = test_input($_POST["username"]);

                if (!preg_match("/^[a-zA-Z-']*$/", $nama)) {
                    $namaErr = "hanya huruf dan spasi dibolehkan";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "email harus ada";
            } else {
                $email = test_input($_POST["email"]);

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "format email salah";
                }
            }

            if (empty($_POST["password"])) {
                $pswd = "password harus ada";
            } else {
                $pswd = test_input($_POST["password"]);
                $uppercase = preg_match('@[A-Z]@', $pswd);
                $lowercase = preg_match('@[1-z]@', $pswd);
                $number = preg_match('@[0-9]@', $pswd);
                $special = preg_match('@[^\w]@', $pswd);
                if (!$uppercase || !$lowercase || !$number || !$special || strlen($pswd) < 8) {
                    $repswdErr = "password harus >=8 digit dan minimal 1 huruf besar ,1 angka, 1 karakter special (@,$,%,dll)";
                }
            }

            if (empty($_POST["repassword"])) {
                $repswd = "ulang kembali password anda";
            } else {
                $repswd = test_input($_POST["repassword"]);
                if ($repswd != $pswd) {
                    $repswdErr = "password anda berbeda";
                }
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?><a href="index.html" style="font-size: 30px;">Back</a>
    <div id="login-box">
        <div class="box-satu">
            <h1>Daftar</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="text" name="username" placeholder="Nama Lengkap">*<br>
                <span>
                    <?php echo $namaErr; ?>
                </span><br>
                <input type="text" name="email" placeholder="Email">*<br>
                <span>
                    <?php echo $emailErr; ?>
                </span><br>
                <input type="password" name="password" placeholder="Password">*<br>
                <input type="password" name="repassword" placeholder="Re Password">*<br>
                <span>
                    <?php echo $pswdErr; ?>
                </span><br>
                <span>
                    <?php echo $repswdErr; ?>
                </span><br>
                <button type="submit" onclick="">LOGIN</button>
                <button type="button" onclick="
    if(document.getElementById('validation') .style.display=='none') {
        document.getElementById('validation') .style.display=''
        document.getElementById('login-box') .style.display='none'
        }">lihat akun</button>
            </form>
        </div>
        <div class="box-dua"><span class="signin">Masuk Menggunakan<br />Sosial Media </span><button
                class="social facebook">Login For Facebook</button><button class="social instagram">Login For
                Instagram</button><button class="social google">Login For Google</button>
        </div>
    </div>
    <div class="or">Atau</div>
    <div id="validation" style="display: none;">
    <?php
$servername =  "localhost";
$user ="root";
$password ="";
$dbn ="Vermillion_Store_Pemalang";
$conn = new mysqli($servername , $user, $password,$dbn);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO masuk (Username, email,Pswd)
 VALUES ('$nama','$email','$pswd')";
$result = $conn->query($sql);
if ($result === TRUE) {
    echo "data berhasil ditambahkan";
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$sqli = "SELECT Username, email,Pswd FROM masuk WHERE Username='$nama'";
$resultlogin = $conn->query($sqli);

  if ($resultlogin->num_rows > 0) {
    // output data of each row
    while($row = $resultlogin->fetch_assoc()) {
      echo "username: " . $row["Username"]. " - Name: "."<br>";
      echo "berhasil login";
    }
  } else {
    echo "0 results";
  }
?>
        <center> <?php echo "<h2>Hallo ", $nama, "</h2>";
        echo "<h2>data anda sudah diinputkan: </h2>";
        
        echo "nama  =", $nama, "<br>";
        echo "email =", $email, "<br>";
        echo "password =", $pswd, "<br>";
        ?>
        </center>
    </div>
</body>
</html>