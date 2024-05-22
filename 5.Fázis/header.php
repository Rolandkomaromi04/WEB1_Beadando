<?php
require_once('includes/config.php');
require_once('functions.php');

function generateMenuLink($key, $menuData) {
    // Általános linkképző függvény
    if ($menuData['menun'][0] == 1 && $menuData['menun'][1] == 1) {
        return isset($menuData['url']) ? $menuData['url'] : "index.php?oldal={$menuData['fajl']}";
    } else {
        return "#"; // Vagy más alapértelmezett URL, ha a menüpont nem érhető el
    }
}
?>

<nav>
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mx-auto">
      <?php foreach ($menu as $key => $keres) {
          $menuLink = generateMenuLink($key, $keres);
          if ($menuLink != "#") { // Csak akkor generáljuk a menüpontot, ha a link nem "#" (nem érhető el)
      ?>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo $menuLink; ?>">
                  <?php echo $keres['szoveg']; ?>
              </a>
          </li>
      <?php
          }
      } ?>
          <?php if (is_logged_in()) { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" 
                href="logicals/logout.php">
               <s> Kilépés</s>
              </a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" 
                href="index.php?oldal=belepes">
                Bejelentkezés
              </a>
            </li>
          <?php } ?>
      </ul>
    </div>
  </div>
</nav>