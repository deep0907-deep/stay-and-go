<?php include 'header.php'; ?>



<!-- BODY-LOGIN -->
<section class="body-page page-v1">
    <div class="container">
        <div class="content">
            <h2 class="sky-h3">LOGIN ACCOUNT</h2>
            <h5 class="p-v1">Enter Your Details</h5>
            <form action="log.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" username="username" value="" placeholder="User Name">
                </div>
                <div class="form-group">
                    <input id="password-field" type="password" class="form-control" name="password"
                        placeholder="Password">
                    <span class="fa fa-fw fa-eye field-icon toggle-password " data-toggle="#password-field"></span>
                </div>
                <button type="submit" class="btn btn-default">LOGIN</button>
            </form>
            <!-- <?php
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //     include 'db_conn.php';
            //     $username = $_POST["username"];
            //     $pass= $_POST["pass"];

            //     if (!empty($username) && !empty($pass)) {
            //         $sql = "INSERT INTO `login` (`username`, `pass`) VALUES ('$username', '$pass')";
            //         $result = mysqli_query($conn, $sql);

            //         if ($result) {
            //             header("Location: /index.php");
            //             exit(); // Ensure the script stops executing after redirection
            //         } else {
            //             echo "Error: " . mysqli_error($conn);
            //         }
            //     } else {
            //         echo "Username and password cannot be empty.";
            //     }
            // }
            // ?> -->
            <p>I don’t have an account &nbsp;- &nbsp; Forgot Password</p>
        </div>
    </div>
</section>
<!-- END/BODY-LOGIN-->


<?php include 'footer.php'; ?>