<?php
    $string = "Ci sarà un giorno in cui il coraggio degli uomini cederà, in cui abbandoneremo gli amici e spezzeremo ogni legame di fratellanza, ma non è questo il giorno! Ci sarà l’ora dei lupi e degli scudi frantumati quando l’era degli uomini arriverà al crollo, ma non è questo il giorno! Quest’oggi combattiamo. Per tutto ciò che ritenete caro su questa bella Terra, vi invito a resistere! Uomini dell’ovest!";
    $len = strlen ($string);
    $userString = $_GET["censor"];
    $tocensor = "***";
    
    $string = str_replace($userString,$tocensor,$string);
?>

<p>(<?php echo $len?>)</p>
<p><?php echo $string?></p>