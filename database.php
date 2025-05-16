<?php
session_start();
include "connect.php";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    #get form data
    $fullname = isset($_POST["name"]) ? mysqli_real_escape_string($connection, $_POST["name"]) : '';
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($connection, $_POST["email"]) : '';
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($connection, $_POST["password"]) : '';
    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($connection, $_POST["phone"]) : '';

    #check email and phone number
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $check_phone = "SELECT * FROM users WHERE phone='$phone'";
    $result1 = $connection->query($check_email);
    $result2 = $connection->query($check_phone);

    if ($result1->num_rows > 0) {
        echo "<script>alert('Email already exists');</script>";
    } elseif ($result2->num_rows > 0) {
        echo "<script>alert('Phone number already exists');</script>";
    } else {
        #hashing the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (Name, email, password, Phone) VALUES ('$fullname', '$email', '$hashed_password', '$phone')";
        if ($connection->query($sql) === TRUE) {
            header("location: login.php");
        } else {
            echo "Error: " . $connection->error;
        }
    }
} 


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = isset($_POST['email']) ? mysqli_real_escape_string($connection, $_POST['email']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($connection, $_POST['password']) : '';
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        #verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['Id'];
            $_SESSION['user_name'] = $user['Name'];
            $_SESSION['user_balance'] = $user['Balance'];
            header("location: homepage.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or Password');</script>";
            header("location: login.php");
        }
    } else {
        echo "<script>alert('Invalid email or Password');</script>";
        header("location: login.php");
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['amount'])) {
    $amount = (float)$_POST['amount'];
    $user_id = $_SESSION['user_id'] ?? 0;

    if ($user_id && $amount > 0) {
        $stmt = $connection->prepare("SELECT Balance FROM users WHERE Id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        if ($user && $user['Balance'] >= $amount) {
            $new_balance = $user['Balance'] - $amount;
            
            $stmt = $connection->prepare("UPDATE users SET Balance = ? WHERE Id = ?");
            $stmt->bind_param("di", $new_balance, $user_id);
            if ($stmt->execute()) {
                $_SESSION['user_balance'] = $new_balance;
                echo "<script>alert('Payment of $amount successful! Remaining balance: $new_balance'); window.location.href='homepage.php';</script>";
            } else {
                echo "<script>alert('Error updating balance!');</script>";
            }
        } else {
            echo "<script>alert('Insufficient balance!');</script>";
        }
    } else {
        echo "<script>alert('Invalid amount!');</script>";
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['amount_load'])) {
    $amount = (float)$_POST['amount_load'];
    $user_id = $_SESSION['user_id'] ?? 0;

    if ($user_id && $amount > 0) {
        $stmt = $connection->prepare("SELECT Balance FROM users WHERE Id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            $new_balance = $user['Balance'] + $amount;
            
            $stmt = $connection->prepare("UPDATE users SET Balance = ? WHERE Id = ?");
            $stmt->bind_param("di", $new_balance, $user_id);
            if ($stmt->execute()) {
                $_SESSION['user_balance'] = $new_balance;
                echo "<script>alert('Balance successfully added! New balance: $new_balance'); window.location.href='homepage.php';</script>";
            } else {
                echo "<script>alert('Error updating balance!');</script>";
            }
        } else {
            echo "<script>alert('User not found!');</script>";
        }
    } else {
        echo "<script>alert('Invalid amount!');</script>";
    }
} else {
    echo "<p>Your Balance: $" . number_format($_SESSION['user_balance'] ?? 0, 2) . "</p>";
}

?>