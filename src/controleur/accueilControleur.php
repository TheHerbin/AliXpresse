<?php
Function accueilControleur($twig){
    echo $twig->render('index.html.twig',array());
}
Function connectControleur($twig){
    echo $twig->render('connect.html.twig',array());
}
Function sign_inControleur($twig,$db){
  
    $form = array();
    if (isset($_POST['btInscrire'])){
        $inputEmail = $_POST['inputEmail'];
        $inputPassword = $_POST['inputPassword']; 
        $inputPassword2 =$_POST['inputPassword2']; 
        $nom = $_POST['nom'];
        $prenom =$_POST['prenom'];
        $role = $_POST['role'];
        $form['valide'] = true;
        if ($inputPassword!=$inputPassword2){
            $form['valide'] = false; 
            $form['message'] = 'Les mots de passe sont différents';
        }
        else{
            $utilisateur = new Utilisateur($db);
            $exec = $utilisateur->insert($inputEmail, password_hash($inputPassword, PASSWORD_DEFAULT), $nom, $prenom,$idrole);
            if (!$exec){
                $form['valide'] = false;  
                $form['message'] = 'Problème d\'insertion dans la table utilisateur ';  
            }
        }
        $form['email'] = $inputEmail;
        $form['role'] = $role;
    }
    echo $twig->render('sign_in.html.twig', array('form'=>$form));
}

Function interventionControleur($twig){
    $form = array();
    if (isset($_POST['btValider'])){
        $inputNom = $_POST['InputNom'];   
        $inputSujet = $_POST['InputSujet'];
        $inputMessage = $_POST['InputMessage'];


                      $form['valide'] = true;
                      $form['Nom'] = $inputNom; 
                      $form['Sujet'] = $inputSujet;  
                      $form['Message'] = $inputMessage;
                      
                            }
    echo $twig->render('intervention.html.twig',array('form'=>$form));
}

Function maintenanceControleur($twig){
    
    echo $twig->render('maintenance.html.twig',array('form'=>$form));
}

?>