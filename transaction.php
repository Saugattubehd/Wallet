<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo Wallet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.css"
        integrity="sha512-GmZYQ9SKTnOea030Tbiat0Y+jhnYLIpsGAe6QTnToi8hI2nNbVMETHeK4wm4MuYMQdrc38x+sX77+kVD01eNsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="new.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style>
    .dark-theme {
        --color-white: #131316;
        --color-light: #23232a;
        --color-dark: #ddd;
        --color-gray-dark: #adacb5;
    }
    
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <div class="logotext">
                <img src="N_Logo-removebg-preview.png" class="logo"></img>
                <a href="homepage.php">
                    <h1 class="neo-wallet" style="font-size: 20px;
  font-weight: bold;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(45deg, #3397fa, #8A2BE2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;">Neo Wallet</h1>
                </a>
            </div>
            <div class="search-bar" style="left:19%;">
                <form class="search-bar1">
                    <input type="text" name="q" placeholder="Search...">
                    <button type="submit">
                        <span class="material-symbols-outlined">
                            search
                        </span>
                    </button>
                </form>
            </div>
            <div class="profile-area">
                <div class="darkmd-btn">
                    <span class="material-symbols-outlined active">light_mode
                    </span>
                    <span class="material-symbols-outlined">dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="profile-photo">
                        <img
                            src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"></img>
                    </div>
                    <?php echo $_SESSION['user_name']; ?>
                </div>
                <button id="menu-btn">
                    <<span class="material-symbols-outlined">
                        menu
                        </span>
                </button>
            </div>
        </div>
    </nav>
    <main>
        <aside>
            <button id="close-btn"><span class="material-symbols-outlined">
                    close
                </span></button>
            <div class="sidebar">
                <a href="homepage.php">
                    <i class='bx bxs-home'></i>
                    <h4>Home</h4>
                </a>
                <a href="transaction.php" class="active">
                    <i class='bx bxs-wallet'></i>
                    <h4>Transactions</h4>
                </a>
                <a href="#">
                    <i class='bx bx-support'></i>
                    <h4>Support</h4>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        widgets
                    </span>
                    <h4>More</h4>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        settings
                    </span>
                    <h4>Settings</h4>
                </a>
                <a href="logout.php"><i class='bx bxs-log-out'></i>
                    <h4>Logout</h4>
                </a>
            </div>
        </aside>
        <section class="middle">
            <div class="cards">
                <div class="card1">
                    <div class="top">
                        <div class="left">
                            Running Balance
                        </div>
                    </div>
                    <script src="index.js"></script>
                    <div class="middle">
                        NRP <span id="balance">XXXXX</span>
                        <button class="toggle-btn" onclick="toggleBalance()">
                            <i id="eyeIcon" class="fas fa-eye" style="color:var(--color-purple);"></i>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="header">Transaction</div>
            <div class="transactions">
            <p class="date">Sun, Feb 9</p>
            <div class="transaction">
                <div class="info">
                    <p>Fund Transferred to Ananta Neupane</p>
                </div>
                <p class="amount negative">- 650.00</p>
                <p class="balance-amount">Balance: <?php echo $_SESSION['user_balance']; ?></p>
            </div>
            <div class="transaction">
                <div class="info">
                    <p>Fund Transferred by Aryan Bhusal</p>
                </div>
                <p class="amount positive">+ 1500.00</p>
                <p class="balance-amount">Balance: <?php echo $_SESSION['user_balance']+650.00; echo ".00"; ?></p>
            </div>


        </section>
    </main>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
            <h1 class="neo-wallet" style="font-size: 20px;
  font-weight: bold;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(45deg, #3397fa, #8A2BE2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;">Neo Wallet</h1>
                </a>
                <p>Secure, Fast & Reliable Digital Payments</p>
            </div>
            <div class="footer-social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: support@neowallet.com</p>
                <p>Phone: +977 9867580294</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Neo Wallet. All Rights Reserved.</p>
        </div>
    </footer>
    <script>
    let isHidden = true;
    let actualBalance = '<?php echo $_SESSION['user_balance']; ?>';

    function toggleBalance() {
        let balanceSpan = document.getElementById('balance');
        let eyeIcon = document.getElementById('eyeIcon');

        if (isHidden) {
            balanceSpan.textContent = actualBalance;
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            balanceSpan.textContent = 'XXXXX';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }

        isHidden = !isHidden;
    }
    </script>
</body>

</html>