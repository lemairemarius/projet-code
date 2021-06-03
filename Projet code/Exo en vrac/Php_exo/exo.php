
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php

//exo : ecriture html à l'aide de php

echo "hello world ! "."<br>"." My name is Marius";

$hello = "Hello wolrd!";

echo "<h1>$hello</h1>";
//exo : Récupération de l'adresse ip et serveur du client


echo "l'adresse IP du visiteur est :" . $_SERVER["REMOTE_ADDR"] . "<br>";
echo "l'adresse IP du serveur est : " . $_SERVER["SERVER_ADR"] . "<br>";


// Exo boucles faciles

// for ($a = 1; $a<=150; $a = $a + 2){
//     echo $a ;
// }

// for ($a = 1; $a <= 500;  $a++){
//     echo "je dois faire des sauvegardes réguliéres de mes fichiers ";
// }


//exo : table de multiplication avec tableau

function table($nbr, $nbr2)
{
$table = '<table border="1">';
    for ($a=0; $a <= $nbr; $a++) {
$table .= '<tr>';

    for ($b=0; $b <= $nbr2 ; $b++) {
$table .= '<td>'.$a*$b.'</td>';
}

$table .= '</tr>';
}
$table .= '</table>';
    return $table;
}
echo table(12, 12);

// exo array
// Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.
// Utilisez le nom des mois comme clés de votre tableau associatif.
// Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.
// Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.

$years = array(
    "janvier" => 31,
    "février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Aout" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" =>30,
    "Décembre" => 31

);

    echo "<table border= '1'>";
        echo "<tr>";
            echo "<th>mois</th>";
            echo "<th>nbr_jour</th>";
        echo"</tr>";

        arsort($years);
            foreach ($years as $keys => $values){
                echo "<tr>";
                echo "<td>" . $keys . "</td>";
                echo "<td>" . $values . "</td>";
                echo "</tr>";
       }
    echo "</table>"

    
    ?>

<!-- mm exercice mais plus propre -->

    <table border='1'>
        <tr>
            <th>mois</th>
            <th>nb_jour</th>
        </tr>

        <?php foreach ($years as $key => $value) : ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach ?>

    </table>

 <!-- A partir du tableau ci-dessous: -->

<!-- Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
Consultez la documentation PHP sur le tri des tableaux
Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
Affichez le nombre de pays dans le tableau.
Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau. -->

<?php
    $capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);


?>

<table border='1'>
    <tr>
        <th>capitale</th>
        <th>pays</th>
    </tr>
    <?php ksort($capitales); ?>
    <?php foreach ($capitales as $key => $value) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value?></td>
        </tr>
        <?php endforeach ?>
</table> 

<table border='1'>
    <tr>
        <th>pays</th>
        <th>capitales</th>
    </tr>
    <?php asort($capitales); ?>
    <?php foreach ($capitales as $key => $value) : ?>
        <tr>
            <td><?= $value ?></td>
            <td><?= $key?></td>
        </tr>
        <?php endforeach ?>
        <td>Total :</td>
        <td><?php echo count($capitales)?></td>
</table>
    

<!-- A partir du tableau ci-dessous:
Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements
Affichez la liste des régions suivie du nombre de départements -->


<?php
    $capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);


$capitales4 = $capitales;

// Sélectionner les capitales commançant par la lettre B dans mon Array


$result = array();

foreach ($capitales4 as $capitals => $country){
    if (strrchr($capitals,"B")){
        $result[$country] = $capitals;
    }
}
asort($result);
?>

<!-- Afficher l'array -->


<table border='1'>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>

        <?php foreach ($result as $key => $value) : ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach ?>

    </table>
    <br>


<?php
    $departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);


?>

<table border='1'>
    <tr>
        <th>Region</th>
        <th>Departements</th>
    </tr>
    
        <?php ksort($departements);
        foreach($departements as $region => $value){
            foreach($departements[$region] as $dept){
                echo "<tr>";
                    echo "<td>" . $region . "</td>";
                    echo "<td>" . $dept . "</td>";
                echo "</tr>";
    }
} ?>
</table>
<br>

<table border='1'>
    <tr>
        <th>Region</th>
        <th>Departements</th>
    </tr>
<?php
  foreach($departements as $region => $value){
    echo "<tr>";
    echo "<td>" . $region . "</td>";
    echo "<td>" . count($value) . "</td>";
echo "</tr>";
  }
?>
</table>


<br>
<!-- Exo Fonctions allez voir dans mes fonctions !-->


<?php
require('mesFonctions.php');

//  Exo Ecrivez une fonction qui permette de générer un lien.

lien("https://www.reddit.com/","Reddit Hug");

echo "<br>";

// Ecrivez une fonction qui calcul la somme des valeurs d'un tableau

 $arr = array(4, 3, 8, 2);
  $resultat = somme($arr);

 echo "<br>";

// Créer une fonction qui vérifie le niveau de complexité d'un mot de passe

$result = code("Team017@");
var_dump($result);
echo "<br>";
?>

<?php
// exo dates et heures 

// Que s'est-il passé le 1000200000

echo "le " .date('d/m/Y',1000200000) . ' à '.date('H:i:s',1000200000);
echo " le premier avion se crash dans les tours jumelles";
echo "<br>";

// Trouvez le numéro de semaine de la date suivante : 14/07/2019. 


$date_test = "2019-07-14";
$good_format=strtotime ($date_test);
echo "En date du 14 juillet 2019, le numéro de semaine est le ".date('W',$good_format);
echo "<br>";

// Combien reste-t-il de jours avant la fin de votre formation.

$date1 = new DateTime("2021-06-01");
$date2 = new DateTime("2022-01-14");
$diff = $date2->diff($date1)->format("%a");
echo "Il reste : ".$diff." jours avant la fin de la formation";
echo "<br>";

// Comment déterminer si une année est bissextile ?

echo bissextile('2020')." si égal à 1 = bissextile; si egal à 0 = année normale";
echo "<br>";

// Affichez l'heure courante sous cette forme : 11h25.

date_default_timezone_set("Europe/Paris");
echo date("H\hi");
echo"<br>";

// Ajoutez 1 mois à la date courante.
 
echo "La date avec un mois de plus : " .date('d-m-Y',strtotime('+1month'));
echo "<br>";

// Montrez que la date du 32/17/2019 est erronée.

$date1 = '2019-17-32';
$date = verifDate($date1);
var_dump($date);


//exo Manipulation sur les fichiers

// Lecture d'un fichier
// Téléchargez ce fichier, il contient une liste de sites indispensables à la compréhension du monde moderne.
// Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.
// Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau.

echo "<br>";
$file = "modern.txt";
liFichier($file);
?>
<br>

<!-- Récupération d'un fichier distant
Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits.
Cette liste est disponible à cette adresse http://bienvu.net/misc/customers.csv.
Il s'agit d'un fichier CSV où chaque ligne représente un nouvel utilisateur. Les différents champs sont Surname, Firstname, Email, Phone, City, State, ils sont séparés par une virgule ,.
Utilisez la fonction file() pour récupérer le contenu de ce fichier.
Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()
Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau. -->


<table border=1>
  <tr>
    <th>Surname</th>
    <th>Firstname</th>
    <th>Email</th>
    <th>Phone</th>
    <th>City</th>
    <th>State</th>
  </tr>
<?php $ressources = "customers.csv"; 
    $open = file($ressources);
    foreach($open as $oneByOne) : 
         $informations = explode( ',' , $oneByOne); ?>
        <tr>
            <td><?=$informations[0];?></td>
            <td><?=$informations[1];?></td>
            <td><?=$informations[2];?></td>
            <td><?=$informations[3];?></td>
            <td><?=$informations[4];?></td>
            <td><?=$informations[5];?></td>
        </tr>
    <?php endforeach ?>
</table>

<table class="table">
        <thead>
            <tr>
                <th scope="col">Surname</th>
                <th scope="col">Firstname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">city</th>
                <th scope="col">State</th>
            </tr>
        </thead>
<?php $ressources = "customers.csv"; 
    $open = file($ressources);
    foreach($open as $oneByOne) : 
         $informations = explode( ',' , $oneByOne); ?>
    <tbody>
        <tr>
            <?php for ($j=0; $j<=5; $j++) : ?>  
                <?= "<td>".$informations[$j] ."</td>";?>
    <?php endfor ?>
    <?php endforeach ?>
        </tr>
    </tbody>
</table>


    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>