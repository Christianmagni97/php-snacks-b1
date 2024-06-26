<?php
$Text = "La Confraternita d'Acciaio è un'organizzazione militare, che affonda le proprie radici nell'esercito Americano, in particolare nella comunità scientifica militare esistente prima della Grande Guerra. I membri della Confraternita sono essenzialmente i discendenti di quegli ufficiali, soldati e scienziati; e fatta eccezione per i pochi membri esterni, la Confraternita è quanto di più vicino alla vecchia incontaminata umanità possa essere trovato al di fuori dei Vault e dell'Enclave. Il suo fondatore fu Roger Maxson, alto ufficiale dell'esercito.Nel loro simbolo, gli ingranaggi rappresentano le tecnologie dell'ordine e i suoi scriba; la spada raffigura la forza militare dei loro paladini; le ali sono la speranza che la tecnologia acquisita può dare all'umanità e rappresentano l'anziano. Il cerchio è l'unione fraterna dei membri.";
$aCapo = explode(".", $Text);
foreach($aCapo as $riga){
    echo $riga . "." .  '<br>';
};