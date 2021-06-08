<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php require('mesFonctions.php');?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 1 : Ecrivez une fonction qui permette de générer un lien.<br>
                    La fonction doit prendre deux paramètres, le lien et le titre</p>
                <p>Le code : </p>
                &lt;?php
                function lien($liens, $titre)
                {
                echo "&lt;a href=".$liens." target='_blank' &gt;".$titre."&lt;/a&gt;";
                }?&gt;

                <h1 class="mt-3">Résultat : </h1>

                <?php lien("https://www.reddit.com/","Reddit Hug");?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <p> Exercices 2 : Ecrivez une fonction qui calcul la somme des valeurs d'un tableau<br>
                        La fonction doit prendre un paramètre de type tableau</p>
                    <p>Le code : </p>
                    &lt;?php
                    function somme($tab){
                    echo "Le résultat est de :". " " .array_sum($tab);
                    $arr = array(4, 3, 8, 2)
                    }
                    ?&gt;
                    <h1 class="mt-3">Résultat :</h1>
                    <?php $arr = array(4, 3, 8, 2);
                        $resultat = somme($arr);?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p> Exercices 3 : Créer une fonction qui vérifie le niveau de complexité d'un mot de passe <br>
                            Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur
                            booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :
                            <br>
                            Faire au moins 8 caractères de long <br>
                            Avoir au moins 1 chiffre <br>
                            Avoir au moins une majuscule et une minuscule
                        </p>
                        <p>Le code : </p>
                        &lt;?php function code($mdp){
                        if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/", $mdp))
                        {
                        return true;
                        }else
                        return false;
                        $result = code("Team017@");?&gt;
                        <h1>Résultats : </h1>
                        <?php $result = code("Team017@");
                        var_dump($result); ?>
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