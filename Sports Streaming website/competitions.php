<?php
$sport = $_GET['sport'] ?? 'football';

$competitions = [
  'football' => [
    ['name' => 'Premier League', 'logo' => 'images/premier_league.png'],
    ['name' => 'La Liga', 'logo' => 'images/laliga.png'],
    ['name' => 'Serie A', 'logo' => 'images/serie_a.png'],
    ['name' => 'Bundesliga', 'logo' => 'images/bundesliga.png']
  ],
  'cricket' => [
    ['name' => 'IPL', 'logo' => 'images/ipl.png'],
    ['name' => 'Big Bash League', 'logo' => 'images/bbl.png'],
    ['name' => 'Pakistani Super League', 'logo' => 'images/psl.png'],
    ['name' => 'T20 World Cup', 'logo' => 'images/t20_wc.png']
  ],
  'basketball' => [
    ['name' => 'National Basketball Association', 'logo' => 'images/nba.png'],
    ['name' => 'EuroLeague', 'logo' => 'images/euroleague.png']
  ],
  'tennis' => [
    ['name' => 'Wimbledon', 'logo' => 'images/wimbledon.png'],
    ['name' => 'US Open', 'logo' => 'images/usopen.png']
  ],
  'formula1' => [
    ['name' => 'F1 World Championship', 'logo' => 'images/f1.png']
  ],
  'badminton' => [
    ['name' => 'All England Open', 'logo' => 'images/all_england.png']
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Select Competition</title>
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
      color: var(--text-light);
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      justify-items: center;
    }

    .card {
      background-color: #2E8B57;
      border-radius: 20px;
      padding: 20px;
      width: 180px;
      height: 200px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      text-align: center;
      color: white;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card:nth-child(3n+1) {
      background-color: #2E8B57;
    }
    .card:nth-child(3n+2) {
      background-color: #E50914;
    }
    .card:nth-child(3n+3) {
      background-color: #1F8A8C;
    }

    .competition-logo {
      width: 100px;
      height: 100px;
      object-fit: contain;
      border-radius: 12px;
      margin-bottom: 10px;
      background-color: white;
    }

    .option-label {
      font-size: 1.1rem;
    }
  </style>
</head>
<body>
  <h1>Select Competition for <?php echo ucfirst($sport); ?></h1>
  <div class="grid-container">
    <?php foreach ($competitions[$sport] as $comp): ?>
      <div class="card" onclick="location.href='matches.php?sport=<?php echo $sport; ?>&competition=<?php echo urlencode($comp['name']); ?>'">
        <img src="<?php echo $comp['logo']; ?>" class="competition-logo" alt="<?php echo $comp['name']; ?>">
        <div class="option-label"><?php echo $comp['name']; ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
