<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falco Plan | Connexion</title>
    <link rel="icon" href="../assets/svg/logo_l.svg" />
    <link rel="stylesheet" type="text/css" href="../styles/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="connexion">
    <header>
        <div class="top">
            <div class="content">
                <h1>Falco</h1>
                <h2>Plan !</h2>
            </div>
            <img class="logo" src="../assets/svg/logo_l.svg" alt="logo" />
        </div>
        <div class="bottom">
            <p>Créez un compte pour accéder à l'historique de vos plans.</p>
        </div>
    </header>
    <main>
        <form action="#" method="POST">
            <div class="input">
                <label for="username"><i class="fa-solid fa-user"></i></label>
                <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" autocomplete="off" />
            </div>
            <div class="input">
                <label for="mail"><i class="fa-solid fa-envelope"></i></label>
                <input type="email" name="mail" id="mail" placeholder="Entrez votre mail" autocomplete="off" />
            </div>
            <div class="input">
                <label for="password"><i class="fa-solid fa-lock"></i></label>
                <input type="password" name="password" id="password" placeholder="Créez votre mot de passe"  class="input-password" autocomplete="off"/>
                <i class="eye fa-solid fa-eye-slash"></i>
            </div>
            <div class="input">
                <label for="passwordCheck"><i class="fa-solid fa-lock"></i></label>
                <input type="password" name="passwordCheck" id="passwordCheck" placeholder="Confirmez votre mot de passe" class="input-password" autocomplete="off"/>
                <i class="eye fa-solid fa-eye-slash"></i>
            </div>
            <div>
                <div id="divCheckbox">
                    <input type="checkbox" name="mention" id="mention" />
                    <i class="fa-solid fa-check"></i>
                </div>
                <p>En vous inscrivant, vous acceptez nos <a href="#">conditions d'utilisation</a> et notre <a href="#">politique de confidentialité</a>.</p>
            </div>
            <div>
                <input type="submit" value="S'inscrire" />
            </div>
        </form>
    </main>
    <footer>
        <p>Déjà un compte ?</p>
        <p><a href="#">Cliquez-ici</a> pour vous connecter.</p>
    </footer>
    <script src="../scripts/js/connexion.js"></script>
</body>

</html>