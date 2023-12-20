<?php require_once 'pdoConnect.php';

class customer {
    private $bdd;
    public function __construct(){
        $this->bdd=myBDD::connexion();
    }

    public function getCustomer(){
        return $this->bdd->query("SELECT * FROM customer")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCustomerbyEmail($email){
        return $this->bdd->query("SELECT * FROM customer WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }

    public function setCustomer($nom,$prenom,$tel,$email,$mdp){
        $setCustomer=$this->bdd->prepare("INSERT INTO customer(nom, prenom, tel, email, mdp) VALUES (:nom, :prenom, :tel, :email, :mdp)");
        $parametres = [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':tel' => $tel,
            ':email' => $email,
            ':mdp' => $mdp
        ];
        try {
            return $setCustomer->execute($parametres);
        } catch (PDOException $e) {
            die("Error executing query: " . $e->getMessage());
        }
        }

    
        public function deleteCustomerByEmail($parametres){
            $deleteCustomer = $this->bdd->prepare("DELETE FROM customer WHERE email=:email");
            try{
                if (is_array($parametres)) {
                    $deleteCustomer->execute($parametres);
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                return false;
            }
        }
}
