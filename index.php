<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به سامانه</title>
    <!-- لود فونت وزیر -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <main>
        <div class="login-box-container">

            <div class="form-header">
                <div class="iau-logo-container">
                    <img class="iau-logo" src="./images/graduation.webp" alt="لوگوی دانشگاه">
                </div>
                <p class="form-header-p">ورود به سامانه</p>
            </div>

            <form class="login-form" action="index.php" method="post" novalidate>
                <div class="input-group">
                    <label for="username">نام کاربری</label>
                    <input type="text" name="username" id="username"
                           required maxlength="15" pattern="\d{5,15}"
                           inputmode="numeric" placeholder="کد کاربری"
                           autocomplete="username">
                </div>

                <div class="input-group">
                    <label for="password">رمز عبور</label>
                    <input type="password" name="password" id="password"
                           required minlength="8" maxlength="15"
                           inputmode="numeric" placeholder="کد ملی"
                           autocomplete="current-password">
                </div>

                <div class="submit-input-c">
                    <button type="submit" name="login-submit">ورود</button>
                </div>
            </form>

        </div>
    </main>
</body>
</html>

<?php
// منطق PHP بعداً اضافه می‌شود
?>