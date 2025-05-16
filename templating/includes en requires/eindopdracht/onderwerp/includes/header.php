<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->

<header>
  <nav class="navbar">
    <img src="<?= $imagePath ?>" alt="Logo" class="nav-logo">
    
    <ul class="nav-menu">
      <li><a href="?page=attack_on_titan">Attack on Titan</a></li>
      <li><a href="?page=reiner">Reiner</a></li>
      <li><a href="?page=hange">Hange</a></li>
      <li><a href="?page=moblit">Moblit</a></li>
    </ul>
  </nav>
</header>
