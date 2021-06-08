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
    <?php require('mesFonctions.php');?>
    <div class="ontainer-fluid">
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 1 : Trouvez le numéro de semaine de la date suivante : 14/07/2019. </p>
                <p class="mt-3">Le code : </p>
                &lt;?php $date_test = "2019-07-14";
                $good_format=strtotime ($date_test);
                echo "En date du 14 juillet 2019, le numéro de semaine est le ".date('W',$good_format); ?&gt;

                <h1>Résultat : </h1>
                <?php $date_test = "2019-07-14";
                        $good_format=strtotime ($date_test);
                        echo "En date du 14 juillet 2019, le numéro de semaine est le ".date('W',$good_format);?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 2 : Combien reste-t-il de jours avant la fin de votre formation. </p>
                <p class="mt-3">Le code : </p>
                &lt;?php $date1 = new DateTime("2021-06-01");
                $date2 = new DateTime("2022-01-14");
                $diff = $date2->diff($date1)->format("%a");
                echo "Il reste : ".$diff." jours avant la fin de la formation";?&gt;

                <h1>Résultat</h1>

                <?php $date1 = new DateTime("2021-06-07");
                $date2 = new DateTime("2022-01-14");
                $diff = $date2->diff($date1)->format("%a");
                echo "Il reste : ".$diff." jours avant la fin de la formation";?>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 3 : Comment déterminer si une année est bissextile ? </p>
                <p class="mt-3">Le code : </p>
                &lt;?php function bissextile($annee)
                {
                return date("m-d",strtotime("$annee-2-29")) == "02-29";
                }
                echo bissextile('2020')." si égal à 1 = bissextile; si egal à 0 = année normale";?&gt;
                <h1>Résultat : </h1>
                <?php echo bissextile('2020')." si égal à 1 = bissextile; si egal à 0 = année normale";?>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 4 : Montrez que la date du 32/17/2019 est erronée. </p>
                <p class="mt-3">Le code : </p>
                &lt;?php function verifDate($date){
                if(preg_match("/^(((((1[26]|2[048])00)|[12]\d([2468][048]|[13579][26]|0[48]))-((((0[13578]|1[02])-(0[1-9]|[12]\d|3[01]))|((0[469]|11)-(0[1-9]|[12]\d|30)))|(02-(0[1-9]|[12]\d))))|((([12]\d([02468][1235679]|[13579][01345789]))|((1[1345789]|2[1235679])00))-((((0[13578]|1[02])-(0[1-9]|[12]\d|3[01]))|((0[469]|11)-(0[1-9]|[12]\d|30)))|(02-(0[1-9]|1\d|2[0-8])))))$/",$date))
                {
                return true;
                }else
                return false;
                }
                ?
                $date1 = '2019-17-32';
                $date = verifDate($date1);
                var_dump($date);&gt;
                <h1>Résultat : </h1>
                <?php $date1 = '2019-17-32';
                    $date = verifDate($date1);
                    var_dump($date);?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 5 : Affichez l'heure courante sous cette forme : 11h25. </p>
                <p class="mt-3">Le code : </p>
                &lt;date_default_timezone_set("Europe/Paris");
                echo date("H\hi");&gt;
                <h1>Résultat : </h1>
                <?php date_default_timezone_set("Europe/Paris");
                echo date("H\hi");?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 6 : Ajoutez 1 mois à la date courante. </p>
                <p class="mt-3">Le code : </p>
                &lt;?php echo "La date avec un mois de plus : " .date('d-m-Y',strtotime('+1month'));?&gt;
                <h1>Résultat : </h1>
                <?php echo "La date avec un mois de plus : " .date('d-m-Y',strtotime('+1month'));?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <p> Exercices 7 : Que s'est-il passé le 1000200000 </p>
                <p class="mt-3">Le code : </p>
                &lt;?php echo "le " .date('d/m/Y',1000200000) . ' à '.date('H:i:s',1000200000);
                echo " le premier avion se crash dans les tours jumelles";?&gt;
                <h1>Résultat : </h1>
                <?php echo "le " .date('d/m/Y',1000200000) . ' à '.date('H:i:s',1000200000);
                        echo " le premier avion se crash dans les tours jumelles";?>

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