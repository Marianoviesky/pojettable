<?php 
  $a = "Roman";
  $ess = "'".''.$a.''."'";
  $a1 = "Thriller";
  $ess1 = "'".''.$a1.''."'";

  $a2 = "Policier";
  $ess2 = "'".''.$a2.''."'";

 echo '<button class="filtrer" onclick="All(Tous)">Tous</button><button class="filtrer Roman" onclick="filtrer('.$ess.')">Roman</button><button class="filtrer Thriller" onclick="filtrer('.$ess1.')">Thriller</button><button class="filtrer Policier" onclick="filtrer('.$ess2.')">Policier</button><button class="filtrer" onclick="filtrer(Histoire)">Histoire</button><button class="filtrer" onclick="filtrer(SF)">SF</button><button class="filtrer" onclick="filtrer(Fantasy)">Fantasy</button>';
?>