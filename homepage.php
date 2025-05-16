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
--color-gray-dark: #adacb5;}
.footer {
    background-color: var(--color-white);
    color: var(--color-dark);
    padding: 40px 20px;
    text-align: center;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1100px;
    margin: auto;
    padding-bottom: 20px;
}

.footer-logo h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #00c9a7;
}

.footer-logo p {
    font-size: 14px;
    opacity: 0.7;
}
.footer-social,
.footer-contact {
    flex: 1;
    min-width: 200px;
    margin: 10px 0;
}
.footer-social h3,
.footer-contact h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: var(--color-primary);
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 10px;
}

.social-icons a {
    color:var(--color-dark);
    font-size: 20px;
    transition: 0.3s;
}

.social-icons a:hover {
    color: var(--color-primary);
}

.footer-contact p {
    font-size: 14px;
    opacity: 0.7;
    margin: 5px 0;
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-top: 15px;
    font-size: 14px;
    opacity: 0.7;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        text-align: center;
    }

    .social-icons {
        justify-content: center;
    }
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
</span></button>
            </div>
        </div>
    </nav>
    <main>
        <aside>
            <button id="close-btn"><span class="material-symbols-outlined">
                    close
                </span></button>
            <div class="sidebar">
                <a href="homepage.php" class="active">
                    <i class='bx bxs-home'></i>
                    <h4>Home</h4>
                </a>
                <a href="transaction.php">
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
            <div class="header">
                <h3>Overview</h3>
            </div>
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
                    <div class="bottom">
                        <?php echo $_SESSION['user_name']; ?>
                    </div>
                </div>
                <div class="card2">
                    <div class="top">
                        <div class="left"><a href="loadwallet.php"><span class="material-symbols-outlined">
                                    account_balance_wallet
                                </span>
                                Load Money
                            </a>
                        </div>
                        <div class="right">
                            <a href="#"> <i class='bx bxs-wallet-alt'></i>
                                Send Money</a>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="header">Utility Payments</div><br>
            <div class="utility-container" 
                style="background:var(--color-white);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                 width: 100%;
                max-width: 100%;
                 margin: 0 auto;">
                <div class="utility-grid">
                    <div class="utility-item">
                        <a href="topup.php"><span class="material-symbols-outlined">
                                smartphone
                            </span>
                            <p>Topup</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#"><span class="material-symbols-outlined">
                                home_iot_device
                            </span>
                            <p>Electricity</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#"><span class="material-symbols-outlined">
                                water_ec
                            </span>
                            <p>Khanepani</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#"><span class="material-symbols-outlined">
                                router
                            </span>
                            <p>Internet</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                airplane_ticket
                            </span>
                            <p>Airlines</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                tv_displays
                            </span>
                            <p>TV </p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                credit_card
                            </span>
                            <p>Credit Card</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                home_health
                            </span>
                            <p>Insurance</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="fee.php">
                            <span class="material-symbols-outlined">
                                school
                            </span>
                            <p>School Fee</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                savings
                            </span>
                            <p>Finance</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                payments
                            </span>
                            <p>EMI</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                hotel
                            </span>
                            <p>Hotel</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                redeem
                            </span>
                            <p>Recharge</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                movie
                            </span>
                            <p>Movies</p>
                        </a>
                    </div>
                    <div class="utility-item">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                bus_railway
                            </span>
                            <p>Bus Ticket</p>
                        </a>
                    </div>
                </div>
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