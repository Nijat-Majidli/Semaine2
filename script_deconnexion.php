<?php

    session_start();

    $_SESSION['login'] = "";
    $_SESSION['role'] = "";

    unset($_SESSION['login']);
    unset($_SESSION['role']);


    if (ini_get("session.use_cookies")) 
    {
        setcookie(session_name(), '', time()-1);
    }


    session_destroy();
    
    echo "<h4> Vous êtes déconnecté ! </h4>";
    
    header("refresh:2; url=acceuil.php");  // refresh:2 signifie que après 2 secondes l'utilisateur sera redirigé sur la page acceuil.php. 
    exit;
   


    // Lignes 5-6 : on affecte une valeur vide aux variables de session.
    // Lignes 8-9 : suppression des variables de session.
    // Lignes 12-15 : via la fonction setcookie(), on fait expirer en termes de date le cookie qui concerne le nom de la session. Ceci n’est valide que dans le cas où les sessions sont gérées par cookies (comportement par défaut de PHP), d’où la condition.
    // Ligne 18 : la fonction session_destroy() détruit le reste de la session.

?>