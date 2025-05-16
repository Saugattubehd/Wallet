<html>

<head>
    <meta charset="utf-8">
    <title>Neo Wallet :Login/Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.css"
        integrity="sha512-GmZYQ9SKTnOea030Tbiat0Y+jhnYLIpsGAe6QTnToi8hI2nNbVMETHeK4wm4MuYMQdrc38x+sX77+kVD01eNsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .hidden {
            display: none;
        }

        .fade-in {
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .input-container {
    position: relative;
}

.input-container i {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #000;
}
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
:root {
  --color-white: #ffff;
  --color-light: #f5f5f5;
  --color-gray-light: #86848c;
  --color-gray-dark: #56555e;
  --color-dark: #000000;
  --color-side: #484849;
  --color-primary: rgb(71, 7, 234);
  --color-success: Irgb(34, 202, 75);
  --color-danger: rgb(255, 67, 54);
  --color-warning: rgb(234, 181, 7);
  --color-purple: rgb(160, 99, 245);
  --color-primary-light: Orgba(71, 7, 234, 0.2);
  --color-success-light: rgba(34, 202, 75, 0.2);
  --color-danger-light: rgba(255, 67, 54, 0.2);
  --color-purple-light: O rgba(160, 99, 245, 0.2);
  --card-padding: 1.6rem;
  --padding-1: 1rem;
  -padding-2: 8px;
  --card-border-radius: 1.6rem;
  --border-radius-1: 1rem;
  --border-radius-2: 6px;
}
    </style>
</head>

<body>
    <script src="script.js"></script>
    <div class="login">
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                <h1><a href="#" rel="dofollow"> Neo Wallet</a></h1>
            </div>
            <div class="formbg" id="form-container" style="border-radius: 50px;">
                <div class="formbg-inner padding-horizontal--48">
                    <span class="padding-bottom--15" id="form-title">Sign in to your account</span>
                    <form id="login-form" action="database.php" method="POST" class="fade-in">
                        <div class="field padding-bottom--24">
                            <label for="email">Email</label>
                            <div class="input-container">
                                <input type="email" name="email" required>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-container">
                                <input type="password" name="password" required>
                                <i class="fas fa-lock" aria-hidden="true"></i>
                            </div>
                            <div class="reset-pass">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </div>
                        <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                            <label for="checkbox">
                                <input type="checkbox" name="checkbox"> Stay signed in for a week
                            </label>
                        </div>
                        <div class="field padding-bottom--24">
                            <input type="submit" name="login" class="btn" value="Login">
                        </div>
                        <div class="field">
                            <a class="ssolink" href="#" id="switch-to-register">Sign Up Instead?</a>
                        </div>
                    </form>

                    <form id="register-form" action="database.php" method="POST" class="hidden fade-in">
                        <div class="field padding-bottom--24">
                            <label for="name">Full Name</label>
                            <div class="input-container">
                                <input type="text" name="name" required>
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="phone">Phone Number</label>
                            <div class="input-container">
                                <input type="number" name="phone" required>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="email">Email</label>
                            <div class="input-container">
                                <input type="email" name="email" required>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-container">
                                <input type="password" name="password" required>
                                <i class="fas fa-lock" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <input type="submit" name="register" value="Sign Up" class="btn">
                        </div>
                        <div class="field">
                            <a class="ssolink" href="#" id="switch-to-login">Already have an account? Login</a>
                        </div>
                    </form>
                </div>
            </div><br><br>
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
        document.getElementById('switch-to-register').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('login-form').classList.add('hidden');
            document.getElementById('register-form').classList.remove('hidden');
            document.getElementById('form-title').textContent = 'Register your account';
        });

        document.getElementById('switch-to-login').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('register-form').classList.add('hidden');
            document.getElementById('login-form').classList.remove('hidden');
            document.getElementById('form-title').textContent = 'Sign in to your account';
        });
    </script>
</body>

</html>