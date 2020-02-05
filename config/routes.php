<?php
Function getPage(){

    $lesPages['accueil']="accueilControleur";
    $lesPages['connect']= "connectControleur";
    $lesPages['sign_in']= "sign_inControleur";

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 'accueil';
    
    }
    if(isset($lesPages[$page])){

        $contenu = $lesPages[$page];
    
    }
    else
    {
        $contenu = $lesPages['accueil'];
    
    }

    return $contenu;
}
?>