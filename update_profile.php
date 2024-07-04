<?php
session_start();
error_reporting(0);
include("connection/connect.php");


$u_id = $_SESSION["u_id"];

if (isset($_POST["submit"])) {
    $firstname = mysqli_real_escape_string($db, trim($_POST["firstname"]));
    $lastname = mysqli_real_escape_string($db, trim($_POST["lastname"]));
    $username = mysqli_real_escape_string($db, trim($_POST["username"]));
    $email = mysqli_real_escape_string($db, trim($_POST["email"]));
    $phone = mysqli_real_escape_string($db, trim($_POST["phone"]));
    $address = mysqli_real_escape_string($db, trim($_POST["address"]));
    $password = mysqli_real_escape_string($db, trim($_POST["password"]));

    if (!empty($firstname) && !empty($lastname) && !empty($username) && !empty($email) && !empty($phone) && !empty($address)) {
        $query_check_email = "SELECT * FROM users WHERE email = '$email' AND u_id != $u_id";
        $result_check_email = mysqli_query($db, $query_check_email);

        if (mysqli_num_rows($result_check_email) == 0) {
            $query_update_profile = "UPDATE users SET first_name = '$firstname', last_name = '$lastname', username = '$username', email = '$email', phone = '$phone', address = '$address'";

            if (!empty($password)) {
                $password = md5($password);
                $query_update_profile .= ", password = '$password'";
            }

            $query_update_profile .= " WHERE u_id = $u_id";

            if (mysqli_query($db, $query_update_profile)) {
                $_SESSION["message"] = "Profile updated successfully!";
                header("Location: profile.php");
                exit;
            } else {
                echo "Error: " . mysqli_error($db);
            }
        } else {
            echo "<script>alert('Email already exists!');</script>";
        }
    } else {
        echo "<script>alert('All fields must be required!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head content here -->
</head>
<body>

<!-- body content here -->

<form action="" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username']; ?>">
    </div>
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $_SESSION['first_name']; ?>">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $_SESSION['last_name']; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_SESSION['phone']; ?>">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"><?php echo $_SESSION['address']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <small id="passwordHelp" class="form-text text-muted">Leave blank to keep the current password.</small>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update Profile</button>
    <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">Cancel</button>
</form>

<!-- body content here -->

</body>
</html>