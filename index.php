<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Media Web - Galeri, Musik, Video</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Galeri Media Keren</h1>
  </header>

  <section class="galeri">
    <h2>Galeri Foto</h2>
    <div class="foto-container">
      <?php
        $images = glob("galeri/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        foreach ($images as $img) {
          echo "<img src='$img' alt='foto'>";
        }
      ?>
    </div>
  </section>

  <section class="musik">
    <h2>Playlist Musik</h2>
    <?php
      $musik = glob("musik/*.mp3");
      foreach ($musik as $lagu) {
        echo "<p>".basename($lagu)."</p>";
        echo "<audio controls src='$lagu'></audio><br>";
      }
    ?>
  </section>

  <section class="video">
    <h2>Video</h2>
    <?php
      $video = glob("video/*.mp4");
      foreach ($video as $vid) {
        echo "<video width='320' controls><source src='$vid' type='video/mp4'></video><br>";
      }
    ?>
  </section>

  <footer>
    <p>&copy; 2025 - Galeri Media MU Style</p>
  </footer>
</body>
</html>
