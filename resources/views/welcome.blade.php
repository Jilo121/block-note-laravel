<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./css/app.css">
    </head>
    <body class="antialiased">
        <div class="header">
            <div class="logo">
                <img src="../image/Blocnote.png" alt="logo block-note" class="logo_icon">
                <h1>Bloc note</h1>
            </div>
            <div class="menu">
                <!-- <button class="menu-hamb btn" >MENU</button> -->
                <button class="connect btn">Se connecter</button>
                <button class="signup btn">S'enregistrer</button>
            </div>
        </div>
        <div class="container">
            <div class="left-cont">
                <h3>Welcome to</h3>
                <div class="logo">
                    <img src="../image/Blocnote.png" alt="logo block-note" class="logo_bn">
                    <h1 class="titre">BLOC NOTE</h1>
                </div>
                <p>Fait pour enregistrer tout votre note gardant votre compte secret</p>
            </div>
            <div class="form-cont">
                <div class="signin-form">
                    <form action="./action/signin.php" method="post" class="signinform form">
                    <div class="entete">
                            <h2>Se connecter</h2>
                        </div>
                        <label for="email-in">E-mail</label>
                        <input type="email" name="email-in" id="email-in" class="email-input input"/>
                        <label for="psw-in">Mot de passe</label>
                        <input type="password" name="psw-in" id="psw-in" class="psw-input input"/>
                        <button type="submit" class="btn-lg" name="signin">Se connecter</button>
                    </form>
                </div>
                <div class="signup-form">
                    <form action="./action/signup.php" method="post" class="signupform form">
                        <div class="entete">
                            <h2>S'inscrire </h2>
                        </div>
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" class="input"/>
                        <label for="lastname">Prenom</label>
                        <input type="text" name="lastname" id="lastname" class="input"/>
                        <label for="email-up">E-mail</label>
                        <input type="email" name="email-up" id="email-up" class="input"/>
                        <label for="psw-up">Mot de passe</label>
                        <input type="password" name="psw-up" id="psw-up" class="input"/>
                        <button type="submit" class="btn-lg" name="signup">S'enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="./js/app.js"></script>
    </body>
</html>
