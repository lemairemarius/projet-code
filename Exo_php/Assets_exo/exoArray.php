<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 1 : Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.<br>
                    Utilisez le nom des mois comme clés de votre tableau associatif.<br>
                    Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois
                    et le nombre de jours du mois.<br>
                    Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le
                    résultat.</p>
                <p class="mt-3">Le code : </p>
                &lt;?php $years = array(
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
                );?&gt;

                <div>
                    &lt;table border='1'&gt;
                    &lt;tr&gt;
                    &lt;th&gt;mois&lt;/th&gt;
                    &lt;th&gt;nb_jour&lt;/th&gt;
                    &lt;/tr&gt;

                    &lt;?php foreach ($years as $key =&gt; $value) : ?&gt;
                    &lt;tr&gt;
                    &lt;td&gt;&lt;?= $key ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?= $value ?&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;?php endforeach ?&gt;

                    &lt;/table&gt;
                </div>
                <?php 
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
);?>
                <h1 class="mt-3">Résultat :</h1>
                <table border='1'>
                    <tr>
                        <th>mois</th>
                        <th>nb_jour</th>
                    </tr>
                    <!-- <?php arsort($years);?> on peut enlever le arsort() pour voir ce qui etait demander précédemment dans l'exo -->
                    <?php foreach ($years as $key => $value) : ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                    <?php endforeach ?>

                </table>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p>Exercices 2 : A partir du tableau ci-dessous:
                    Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.<br>
                    Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.<br>
                    Affichez le nombre de pays dans le tableau.<br>
                    Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu
                    du tableau.</p>
                <p class="mt-3">Le code :</p>
                <div>
                    &lt;?php$capitales = array(
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
                    );?&gt;
                </div>
                <div>
                    <p class="mt-3">Premier tableau :</p>
                    &lt;table border='1'&gt;
                    &lt;tr&gt;
                    &lt;th&gt;capitale&lt;/th&gt;
                    &lt;th&gt;pays&lt;/th&gt;
                    &lt;/tr&gt;
                    &lt;?php ksort($capitales); ?&gt;
                    &lt;?php foreach ($capitales as $key =&gt; $value) : ?&gt;
                    &lt;tr&gt;
                    &lt;td&gt;&lt;?= $key ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?= $value?&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;?php endforeach ?&gt;
                    &lt;/table&gt;
                </div>
                <div>
                    <p class="mt-3">Deuxiéme tableau :</p>
                    &lt;table border='1'&gt;
                    &lt;tr&gt;
                    &lt;th&gt;pays&lt;/th&gt;
                    &lt;th&gt;capitales&lt;/th&gt;
                    &lt;/tr&gt;
                    &lt;?php asort($capitales); ?&gt;
                    &lt;?php foreach ($capitales as $key =&gt; $value) : ?&gt;
                    &lt;tr&gt;
                    &lt;td&gt;&lt;?= $value ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?= $key?&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;?php endforeach ?&gt;
                    &lt;td&gt;Total :&lt;/td&gt;
                    &lt;td&gt;&lt;?php echo count($capitales)?&gt;&lt;/td&gt;
                    &lt;/table&gt;
                </div>
                <div>
                    <p class="mt-3">Troisiéme tableau : </p>

                    &lt;php?$capitales4 = $capitales;
                    $result = array();

                    foreach ($capitales4 as $capitals => $country){
                    if (strrchr($capitals,"B")){
                    $result[$country] = $capitals;
                    }
                    }
                    asort($result);
                    ?&gt;

                    &lt;table border='1'&gt;
                    &lt;tr&gt;
                    &lt;th&gt;Pays&lt;/th&gt;
                    &lt;th&gt;Capitales&lt;/th&gt;
                    &lt;/tr&gt;

                    &lt;?php foreach ($result as $key =&gt; $value) : ?&gt;
                    &lt;tr&gt;
                    &lt;td&gt;&lt;?= $key ?&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;?= $value ?&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;?php endforeach ?&gt;

                    &lt;/table&gt;

                </div>

                <?php $capitales = array(
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
                    );?>

                <h1>Résultats : </h1>
                <div class="row">

                    <button class="btn btn-primary ml-3" type="button" data-toggle="collapse" data-target="#collapse0"
                        aria-expanded="false" aria-controls="collapse0">
                        tableau 1
                    </button>
                    </p>
                    <div class="collapse" id="collapse0">
                        <div class="card card-body">
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
                        </div>
                    </div>

                    <br>
                    <button class="btn btn-primary ml-3" type="button" data-toggle="collapse" data-target="#collapse1"
                        aria-expanded="false" aria-controls="collapse1">
                        tableau 2
                    </button>
                    </p>
                    <div class="collapse" id="collapse1">
                        <div class="card card-body">
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
                        </div>
                    </div>

                    <button class="btn btn-primary ml-3" type="button" data-toggle="collapse" data-target="#collapse2"
                        aria-expanded="false" aria-controls="collapse2">
                        tableau 3
                    </button>
                    </p>
                    <div class="collapse" id="collapse2">
                        <div class="card card-body">
                            <?php $capitales4 = $capitales;

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
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p>Exercices 3 : Affichez la liste des régions (par ordre alphabétique) suivie du nom des
                    départements<br>
                    Affichez la liste des régions suivie du nombre de départements
                </p>
                <p class="mt-3">Le code :</p>
                &lt;?php
                $departements = array(
                "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
                "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
                "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse",
                "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
                "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
                );?&gt;
                <h1>Résultats : </h1>

                <?php
    $departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
?>
                <div class="row">
                    <button class="btn btn-primary ml-3" type="button" data-toggle="collapse" data-target="#collapse3"
                        aria-expanded="false" aria-controls="collapse3">
                        tableau 1
                    </button>
                    </p>
                    <div class="collapse" id="collapse3">
                        <div class="card card-body">
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
                        </div>
                    </div>
                    <button class="btn btn-primary ml-4" type="button" data-toggle="collapse" data-target="#collapse4"
                        aria-expanded="false" aria-controls="collapse4">
                        tableau 2
                    </button>
                    </p>
                    <div class="collapse" id="collapse4">
                        <div class="card card-body">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="background-color : orange !important">
                <h2>Retour page des exercices</h2>
                <a role="button" class="btn btn-primary btn-lg btn-block mt-5" href="../index.php">Retour</a>
            </div>
        </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>