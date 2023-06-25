<?php
include_once 'config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

// Check if the registration form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    // Create the user
    if ($user->createUser($name, $email, $password)) {
        // Registration successful, redirect to a success page or the login page
        header("Location: login.php");
        exit;
    } else {
        // Registration failed, handle the error (e.g., display an error message)
        $error = "Registration failed. Please try again.";
    }
}

include('inc/header.php');
?>
<title>Discussion Forum - Signup</title>
<!-- Add the necessary CSS and JavaScript files -->
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.min.js"></script>
<script src="js/general.js"></script>

<div class="container">
    <?php include('menus.php'); ?>
    <h2>Signup</h2>

    <!-- Display the registration form -->
    <form method="post" id="signupForm">
        <div class="form-group">
            <label for="userName">Full Name <span class="text-danger">*</span></label>
            <input type="text" name="userName" id="userName" autocomplete="off" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="userEmail">Email <span class="text-danger">*</span></label>
            <input type="email" name="userEmail" id="userEmail" autocomplete="off" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="userPassword">Password <span class="text-danger">*</span></label>
            <input type="password" name="userPassword" id="userPassword" autocomplete="off" class="form-control" required>
        </div>

        <input type="submit" name="signup" class="btn btn-primary" value="Signup">
    </form>
</div>

<?php include('inc/footer.php'); ?>
