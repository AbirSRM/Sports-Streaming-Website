<?php
$sport = $_GET['sport'] ?? 'football';
$competition = $_GET['competition'] ?? '';

$matches = [
  'Premier League' => ['Arsenal vs Manchester City', 'Liverpool vs Chelsea'],
  'La Liga' => ['Real Madrid vs Barcelona', 'Atletico vs Sevilla'],
  'Serie A' => ['Juventus vs AC Milan', 'Napoli vs Roma'],
  'IPL' => ['RCB vs MI', 'CSK vs KKR'],
  'Big Bash League' => ['Sydney Sixers vs Melbourne Stars'],
  'T20 World Cup' => ['India vs Australia', 'England vs Pakistan'],
  'NBA' => ['Lakers vs Warriors', 'Celtics vs Heat'],
  'EuroLeague' => ['Real Madrid vs Fenerbahçe'],
  'Wimbledon' => ['Djokovic vs Alcaraz'],
  'US Open' => ['Medvedev vs Sinner'],
  'F1 World Championship' => ['Monaco GP', 'British GP'],
  'All England Open' => ['Axelsen vs Ginting', 'Yamaguchi vs Marin']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ongoing Matches</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background: linear-gradient(135deg, #000 25%, #111 25%, #111 50%, #000 50%, #000 75%, #111 75%, #111);
      background-size: 40px 40px;
      color: var(--text-light);
      font-family: Arial, sans-serif;
      padding: 40px;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
      justify-items: center;
    }

    .match-card {
      background-color: #1F8A8C;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.4);
      width: 200px;
      height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
      cursor: pointer;
      transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .match-card:hover {
      transform: scale(1.05);
      background-color: #E50914;
    }

    .empty-message {
      text-align: center;
      font-size: 1.2rem;
      margin-top: 50px;
      color: #ccc;
    }
  </style>
</head>
<body>
  <h1>Matches in <?php echo htmlspecialchars($competition); ?></h1>

  <?php if (!empty($matches[$competition])): ?>
    <div class="grid-container">
      <?php foreach ($matches[$competition] as $match): ?>
        <div class="match-card" onclick="location.href='stream.php?match=<?php echo urlencode($match); ?>'">
          <?php echo htmlspecialchars($match); ?>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p class="empty-message">No matches available for this competition.</p>
  <?php endif; ?>
</body>
</html>
