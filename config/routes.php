<?php
Function getPage($db){

    $lesPages['accueil']="accueilControleur";
    $lesPages['connect']= "connectControleur";
    $lesPages['sign_in']= "sign_inControleur";
    $lesPages['intervention']="interventionControleur";
    $lesPages['maintenance']= "maintenanceControleur";
    
    if($db!=NULL){

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
}else{
    return $lesPages['maintenance'];
}


}
?>