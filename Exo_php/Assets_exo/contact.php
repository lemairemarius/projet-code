<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <!--Permet d'indiquer comment le navigateur doit afficher la page sur les différents supports-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--référencement naturel de ma page, elle doit etre clair et précise-->
    <meta name="Contact" content="Contact jarditou">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact</title>

</head>

<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <p> Exercices 1 :Reprenez le formulaire que vous avez réalisé dans la séance précédente (JavaScript).
        Dans ce formulaire, vous devez modifier l'attribut action de la balise form pour indiquer l'adresse d'un script PHP.<br>
        Puis créer un script PHP permettant d'afficher l'ensemble des valeurs transmises.</p>
    <p class="mt-3">Le code : </p>
    &lt;?php echo "Bonjour ".$_REQUEST['firstname']. " " . $_REQUEST['name'] . " votre date d'anniversaire est le ". $_REQUEST['user_birth_date'] ;?&gt;
</div>

<body style="background-color: rgb(239, 240, 247);">

    <!--seul container de la page (fluid)-->
    <div class=" container-fluid">
        <!--Balise sémantiques organise et controle son code(header)-->
        <header>
            <h1 class="mt-3" style="color: rgb(20, 17, 17);">Evaluation formulaire</h1>
        </header>
        <!--début du formulaire de contact-->
        <section>
            <!--Balise sémantiques organise et controle son code(section)-->
            <br>
            <p>* Ces zones sont obligatoires</p><br>
            <h1>Vos coordonn&eacute;es</h1>

            <!--debut du formulaire-->

            <form class="row g-3" method="POST" action="exo_monscript.php">

                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Nom* :</label>
                    <input type="text" class="form-control shadow-lg" name="firstname" id="firstname"
                        placeholder="Veuillez saisir votre nom" required>
                    <p id="error"></p>
                </div>

                <div class="col-md-12">
                    <label for="validationDefault02" class="form-label">Pr&eacute;nom* :</label>
                    <input type="text" class="form-control shadow-lg" name="name" id="name"
                        placeholder="Veuillez saisir votre pr&eacute;nom" required>
                    <p id="error1"></p>
                </div>

                <br>


                <br>
                <br>

                <div class="col-md-12">
                    <label for="user_birth_date" class="my-2">Date de naissance* :</label>
                    <input type="date" class="form-control shadow-lg" name="user_birth_date" id="user_birth_date"
                        required>
                </div>

                <br>


                <!--Formulaire partie 2-->

                <br>


                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">J'accepte le traitement informatique de ce
                            formulaire</label>
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-secondary shadow-lg" type="submit" id="submit">Envoyer</button>
                    <button class="btn btn-secondary shadow-lg" type="reset" id="reset">Annuler</button>
                </div>

            </form>
        </section>

        <br>

        
        <br>
    </div>
    <!--liens bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="contact.js"></script>
</body>

</html>