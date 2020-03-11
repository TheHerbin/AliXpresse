<?php
class Utilisateur{
    private $db;
    private $insert;
	public function __construct($db){
        $this->db=$db;
        $this->insert =$db->prepare("insert into utilisateur(email,mdp,nom,prenom,idrole)
values(:email,:mdp,:nom,:prenom,:idrole)");
    }
    public function insert($email,$mdp,$nom,$prenom,$idrole){
        $r=true;
        $this->insert->execute(array(':email'=>$email,':mdp'=>$mdp,':nom'=>$nom,':prenom'=>$prenom,':idrole'=>$idrole));
    
    if($this->insert->errorCode()!=0){
        print_r($this->insert->errorInfo());
    $r=false;
    }
    return $r;
    }
}
?>