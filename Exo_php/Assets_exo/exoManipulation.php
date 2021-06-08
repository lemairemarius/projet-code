<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php require('mesFonctions.php'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p>Téléchargez ce fichier, il contient une liste de sites indispensables à la compréhension du monde
                    moderne. <br>
                    Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens
                    hypertextes. <br>
                    Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous
                    forme de tableau.</p>
                <p class="mt-3">Le code : </p>
                &lt;?php function liFichier(){
                echo "&lt;table border=1&gt;
                &lt;tr&gt;
                &lt;th&gt;link&lt;/th&gt;
                &lt;/tr&gt;";
                $arrayFile = file("modern.txt");
                $count = 0;
                foreach($arrayFile as $link){
                $count++;
                echo '&lt;tr&gt;
                &lt;br&gt;
                &lt;td&gt;&lt;a href='."$link". ' target=_blank&gt;liens '."$count".'&lt;/a&gt;&lt;/td&gt;
                &lt;/tr&gt;';
                }
                echo "
                &lt;/table&gt;";
                }
                ?&gt;
                <br>

                &lt;?php $file = "modern.txt";
                liFichier($file);
                ?&gt;
                <h1>Résultat : </h1>
                <button class="btn btn-primary ml-3" type="button" data-toggle="collapse" data-target="#collapse0"
                    aria-expanded="false" aria-controls="collapse0">
                    tableau
                </button>
                <div class="collapse" id="collapse0">
                    <div class="card card-body">
                        <?php
                $file = "modern.txt";
                liFichier($file);
                ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 2 : Récupération d'un fichier distant <br>
                    Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits.<br>
                    Cette liste est disponible à cette adresse http://bienvu.net/misc/customers.csv.<br>
                    Il s'agit d'un fichier CSV où chaque ligne représente un nouvel utilisateur. Les différents
                    champs<br>
                    sont Surname, Firstname, Email, Phone, City, State, ils sont séparés par une virgule ,.<br>
                    Utilisez la fonction file() pour récupérer le contenu de ce fichier.<br>
                    Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()<br>
                    Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de
                    nommer les colonnes du tableau. </p>
                <p class="mt-3">Le code : </p>
                &lt;table class="table"&gt;
                &lt;thead&gt;
                &lt;tr&gt;
                &lt;th scope="col"&gt;Surname&lt;/th&gt;
                &lt;th scope="col"&gt;Firstname&lt;/th&gt;
                &lt;th scope="col"&gt;Email&lt;/th&gt;
                &lt;th scope="col"&gt;Phone&lt;/th&gt;
                &lt;th scope="col"&gt;city&lt;/th&gt;
                &lt;th scope="col"&gt;State&lt;/th&gt;
                &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;?php $ressources = "customers.csv";
                $open = file($ressources);
                foreach($open as $oneByOne) :
                $informations = explode( ',' , $oneByOne); ?&gt;
                &lt;tbody&gt;
                &lt;tr&gt;
                &lt;?php for ($j=0; $j&lt;=5; $j++) : ?&gt;
                &lt;?= "&lt;td&gt;".$informations[$j] ."&lt;/td&gt;";?&gt;
                &lt;?php endfor ?&gt;
                &lt;?php endforeach ?&gt;
                &lt;/tr&gt;
                &lt;/tbody&gt;
                &lt;/table&gt;
                <h1>Résultat : </h1>
                <button class="btn btn-primary ml-3" type="button" data-toggle="collapse" data-target="#collapse1"
                    aria-expanded="false" aria-controls="collapse1">
                    tableau
                </button>
                <div class="collapse" id="collapse1">
                    <div class="card card-body">
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