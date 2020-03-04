<?php
Function accueilControleur($twig){
    echo $twig->render('index.html.twig',array());
}
Function connectControleur($twig){
    echo $twig->render('connect.html.twig',array());
}
Function sign_inControleur($twig){
    var_dump($_POST);
    echo $twig->render('sign_in.html.twig',array());
}

?>