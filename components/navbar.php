<nav>
  <i class="bi bi-list" id="menu-boutton"></i>

  <ul style="left:-100%">
    <li><a href="/blog">Accueil</a></li>
    <li>
      <a
        href="<?= isset($_SESSION) && isset($_SESSION['id']) ? "/PHPcours/blog/profil.php": "/PHPcours/blog/login.php"?>">
        <?= isset($_SESSION) && isset($_SESSION['id']) ? "Profil": "Se Connecter"?>
      </a>
    </li>

    <?= 
            isset($_SESSION) && isset($_SESSION['id']) ? 
            "<li><a href='/PHPcours/blog/routes/logout.php'> Se doconnecter </a></li>": ""
        ?>
  </ul>


</nav>