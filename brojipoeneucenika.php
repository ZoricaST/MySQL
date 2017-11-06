<?php
include('conglasanje.php');/*konekcija sa bazom*/
$upit="SELECT redni,lozinka,glasamzabroj,vremeglasanja FROM glasanje ORDER BY `glasanje`.`redni` ASC ";
$upit_pokretanje=mysql_query($upit);$glasaca=0;$nijeglasalo=133;

if($upit_pokretanje=mysql_query($upit))
{$poeni[1]=$poeni[2]=$poeni[3]=0;$i=0;
while ($upit_vrsta=mysql_fetch_assoc($upit_pokretanje)){$i++;$red[$i]=$upit_vrsta['redni'];$lozi[$i]=$upit_vrsta['lozinka'];
	$gzb=$upit_vrsta['glasamzabroj'];$gzbr[$i]=$upit_vrsta['glasamzabroj'];$vreme[$i]=$upit_vrsta['vremeglasanja'];
	switch ($gzb) {
     case "0":
	 
         break;
     case "1":
	 {$poeni[1]++;$glasaca++;}
         break;
	 case "2":
	 {$poeni[2]++;$glasaca++;}
         break;
     case "3":
	 {$poeni[3]++;$glasaca++;}
         break;
     default:
         echo "nešto nije u redu!";}
}

}?>