<?php
Function accueilControleur($twig){
    echo $twig->render('index.html.twig',array());
}
Function connectControleur($twig){
    echo $twig->render('connect.html.twig',array());
}
Function sign_inControleur($twig){
    echo $twig->render('sign_in.html.twig',array());
}
?>