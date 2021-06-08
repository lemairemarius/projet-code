<?php
function lien($liens, $titre)
{
    echo "<a href=".$liens." target='_blank'>".$titre."</a>";
}
?>

<?php 
function somme($tab){
    echo "Le résultat est de :". " " .array_sum($tab);
}
?>

<?php
function code($mdp){
    if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/", $mdp))
    {
        return true;
    }else 
        return false;
    
}
?>

<?php function bissextile($annee)
{
    return date("m-d",strtotime("$annee-2-29")) == "02-29";
}
?>

<?php function verifDate($date){
    if(preg_match("/^(((((1[26]|2[048])00)|[12]\d([2468][048]|[13579][26]|0[48]))-((((0[13578]|1[02])-(0[1-9]|[12]\d|3[01]))|((0[469]|11)-(0[1-9]|[12]\d|30)))|(02-(0[1-9]|[12]\d))))|((([12]\d([02468][1235679]|[13579][01345789]))|((1[1345789]|2[1235679])00))-((((0[13578]|1[02])-(0[1-9]|[12]\d|3[01]))|((0[469]|11)-(0[1-9]|[12]\d|30)))|(02-(0[1-9]|1\d|2[0-8])))))$/",$date))
    {
        return true;
    }else 
        return false;
}
?>

<?php function liFichier(){
    echo "<table border=1>
         <tr>
             <th>link</th>
         </tr>";
        $arrayFile = file("modern.txt");
        $count = 0;
        foreach($arrayFile as $link){ 
            $count++;
            echo '<tr>
             <br>
                 <td><a href='."$link". 'target=_blank>liens '."$count".'</a></td>
             </tr>';
    }
    echo "</table>";
}
?>
