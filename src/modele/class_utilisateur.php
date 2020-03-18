<?php
class Utilisateur{
    private $db;
    private $insert;
	public function __construct($db){
        $this->db=$db;
        $this->insert =$db->prepare("insert into utilisateur(email,mdp,nom,prenom,idRole)
values(:email,:mdp,:nom,:prenom,:role)");
    }
    public function insert($email,$mdp,$nom,$prenom,$role){
        $r=true;
        $this->insert->execute(array(':email'=>$email,':mdp'=>$mdp,':nom'=>$nom,':prenom'=>$prenom,':role'=>$role));
    
    if($this->insert->errorCode()!=0){
        print_r($this->insert->errorInfo());
    $r=false;
    }
    return $r;
    }
}
?>