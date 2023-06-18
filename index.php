<?php include "header.php"; ?>

    <div class="main">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <?php include "login.php"; ?>
            <form id="Login" method="post" class="login-input">
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="e-mail adress">
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="password">
                </div>
                <button type="submit" class="btn" name="action">Login</button>
            </form>
            <?php include "sign-up.php"; ?>
            <form id="Register" method="post" class="login-input">
                <div class="input-group">
                    <input type="text" name="fullname" id="username" placeholder="username">
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="e-mail adress">
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="password">
                </div>
                <button type="submit" class="btn" name="action">Register</button>
            </form>

            <div class="icon-group">
                <i class="fa-brands fa-whatsapp fa-bounce" style="color: #1fe523;"></i>
                <i class="fa-brands fa-instagram fa-flip" style="color: #c71a1a;"></i>
                <i class="fa-brands fa-twitter fa-shake" style="color: #4d87ea;"></i>
                <i class="fa-brands fa-facebook fa-beat" style="color: #0e49af;"></i>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>