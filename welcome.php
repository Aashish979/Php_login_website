<?php
session_start();

// If not logged in, redirect to login
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

$username = htmlspecialchars($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #667eea, #764ba2);
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .welcome-box {
      background: #fff;
      padding: 60px 40px;
      border-radius: 20px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }

    h1 {
      font-size: 32px;
      color: #333;
      margin-bottom: 20px;
      animation: slideIn 0.8s ease-in-out;
    }

    p {
      font-size: 18px;
      color: #666;
      margin-bottom: 30px;
      animation: fadeIn 1.5s ease-in-out;
    }

    .logout-btn {
      padding: 12px 25px;
      background: #ff4b5c;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease;
      animation: popIn 1s ease-in-out;
    }

    .logout-btn:hover {
      background: #e8434a;
    }

    /* Animations */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      from {
        transform: translateX(-100px);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      0% {opacity: 0;}
      100% {opacity: 1;}
    }

    @keyframes popIn {
      0% {
        transform: scale(0.8);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }
  </style>
</head>
<body>

<div class="welcome-box">
  <h1>Welcome, <?php echo $username; ?>!</h1>
  <p>You have successfully logged in.</p>
  <form action="logout.php" method="post">
    <button class="logout-btn" type="submit">Logout</button>
  </form>
</div>

</body>
</html>
