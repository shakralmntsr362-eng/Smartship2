
<?php
require_once __DIR__ . '/../config/auth.php';
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SmartShip - خدمات الشحن</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="topbar">
    <h1>SmartShip</h1>
    <a class="button" href="login.php">دخول الموظفين</a>
</header>

<main class="container">
    <section class="hero">
        <h2>مرحبًا بكم في SmartShip</h2>
        <p>نظام لإدارة خدمات التوصيل والشحن وتتبع حالة الشحنات.</p>
        <a class="button" href="shipments/index.php">تتبع شحنة</a>
        
    </section>
</main>
</body>
</html>