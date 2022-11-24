<?php
  require_once "utils.php";
  require_once "utilsContatti.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Contatti</title>
  </head>
  <body>
    <?= $header ?>

    <main>
      <div class="main_content">
        <form action="#" method="post">
          <div class="form-control">
            <input type="text" name="nome" placeholder="Scrivi qui il tuo nome" required />
          </div>
          <div class="form-control">
            <input type="email" name="email" placeholder="Inserisci qui la tua email" required />
          </div>
          <div class="form-control">
            <select name="motivo" required>
              <option value="">------</option>
              <option value="giocare">Voglio giocare</option>
              <option value="allenare">Voglio allenare</option>
              <option value="sponsor">Faccio da sponsor</option>
              <option value="shop">Voglio comprare</option>
            </select>
          </div>
          <div class="form-control">
            <textarea name="mex" required></textarea>
          </div>
          <div class="form-control">
            <input type="submit" value="Invio" />
          </div>
        </form>
      </div>
    </main>

    <?= $footerContatti ?>
</html>