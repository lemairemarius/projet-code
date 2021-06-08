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

    <div class="ontainer-fluid">
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 1 : Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre
                    croissant : 1 3 5 7... </p>
                <p class="mt-3">Le code : </p>
                &lt;?php for ($a = 1; $a<=150; $a=$a + 2){ echo $a ; } ?&gt; <h1>R&eacute;sultats :</h1>
                    <div class="accordion" id="accordion0">
                        <div id="headingO">
                            <h2 class="mt-2">
                                <button class="btn btn-link p-0" type="button" data-toggle="collapse"
                                    data-target="#collapse0" aria-expanded="false">
                                    Voir le résultat (à vos risques et périls..)
                                </button>
                            </h2>
                        </div>

                        <div id="collapse0" class="collapse" aria-labelledby="headingO" data-parent="#accordion0">
                            <div class="card-body">
                                <p class="text-black-50">
                                    <?php for ($a = 1; $a<=150; $a = $a + 2){
                                        echo "$a <br> ";
                                    } ?>
                            </div>
                        </div>
                    </div>


            </div>
        </div>

        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 2 : Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes
                    régulières de mes fichiers </p>
                &lt;?php for ($a = 1; $a <= 500; $a++){ echo "je dois faire des sauvegardes réguliéres de mes fichiers "
                    ; }?&gt; <h1>R&eacute;sultats :</h1>
                    <div class="accordion" id="accordion1">
                        <div id="headingOne">
                            <h2 class="mt-2">
                                <button class="btn btn-link p-0" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false">
                                    Voir le résultat (à vos risques et périls..)
                                </button>
                            </h2>
                        </div>

                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
                            <div class="card-body">
                                <p class="text-black-50">
                                    <?php for ($a = 1; $a <= 500;  $a++){
                        echo "$a - je dois faire des sauvegardes réguliéres de mes fichiers <br>"; 
                    }?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 3 : Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par
                    {1,...,12} dans un tableau HTML, le résultat doit être le suivant :</p>
                &lt;?php function table($nbr, $nbr2)
                {
                $table = '&lt;table border="1"&gt;';
                for ($a=0; $a <= $nbr; $a++) { $table .='&lt;tr&gt;' ; for ($b=0; $b <=$nbr2 ; $b++) { $table
                    .='&lt;td>' .$a*$b.'&lt;/td&gt;'; } $table .='&lt;/tr&gt;' ; } $table .='&lt;/table&gt;' ; return
                    $table; } echo table(12, 12); ?&gt; <h1>Résultats :</h1>

                    <?php function table($nbr, $nbr2)
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
                ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="background-color : orange !important">
                <h2>Retour page des exercices</h2>
                <a role="button" class="btn btn-primary btn-lg btn-block mt-5" href="../index.php">Retour</a>
            </div>
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