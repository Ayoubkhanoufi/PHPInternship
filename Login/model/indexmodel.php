<?php
@session_start();

include("../../Connexion/connexion.php");

class login_class {

    public $user;
    public $password;
    public $connexion;


public function check_login() {

try {

    $cn = new Connexion();

    $this->connexion = $cn->getConnexion(null);

    $result = $this->connexion->prepare("select * from responsablerh where login='$this->user' and mdp='$this->password'");

    $result->execute();
    
    //$id = $this->connexion->lastInseredId();

    $data = $result->fetchAll(PDO::FETCH_OBJ);

    if (!empty($data[0]->id)) {
                $_SESSION["ID"] = $data[0]->id;
		$_SESSION["NOM"] = $data[0]->nom ;
		$_SESSION["LOGIN"] = $data[0]->login ;
		$_SESSION["MDP"] = $data[0]->mdp ;
        return true;
    } else {

        return false;
    }

}catch(PDOException $ex) {

echo $ex->getMessage();
}



}

public function __construct($user) {
  if ($user) {
  $this->user = $user["username"];
  $this->password = $user["password"];
  }
}


public function logout() {
  session_unset();
  session_destroy();
  echo "<script>window.location='../../login/controller/indexcontoller.php'</script>";
}

}
?>