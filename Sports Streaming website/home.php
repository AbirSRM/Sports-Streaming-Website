<!-- home.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Select Your Sport</title>
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

    .sport-image {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 10px;
    }

    .option-label {
      font-size: 1.1rem;
    }
  </style>
</head>
<body>
  <h1>Select the Sport you want to see</h1>

  <div class="grid-container">
    <div class="card" onclick="location.href='competitions.php?sport=football'">
      <img src="images/football.png" alt="Football" class="sport-image">
      <div class="option-label">Football</div>
    </div>

    <div class="card" onclick="location.href='competitions.php?sport=cricket'">
      <img src="images/cricket.png" alt="Cricket" class="sport-image">
      <div class="option-label">Cricket</div>
    </div>

    <div class="card" onclick="location.href='competitions.php?sport=basketball'">
      <img src="images/basketball.png" alt="Basketball" class="sport-image">
      <div class="option-label">Basketball</div>
    </div>

    <div class="card" onclick="location.href='competitions.php?sport=tennis'">
      <img src="images/tennis.png" alt="Tennis" class="sport-image">
      <div class="option-label">Tennis</div>
    </div>

    <div class="card" onclick="location.href='competitions.php?sport=formula1'">
      <img src="images/formula1.png" alt="Formula 1" class="sport-image">
      <div class="option-label">Formula 1</div>
    </div>

    <div class="card" onclick="location.href='competitions.php?sport=badminton'">
      <img src="images/badminton.png" alt="Badminton" class="sport-image">
      <div class="option-label">Badminton</div>
    </div>
  </div>
</body>
</html>
