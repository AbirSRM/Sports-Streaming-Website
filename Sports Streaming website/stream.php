<?php
session_start();
$match = $_GET['match'];
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1 style="color: var(--netflix-red)">🔴 LIVE</h1>
    <div class="stream-container">
      <video controls autoplay>
        <source src="stream-source.mp4" type="video/mp4">
      </video>
      <h2><?= htmlspecialchars($match) ?></h2>
    </div>
  </div>
</body>
</html>
