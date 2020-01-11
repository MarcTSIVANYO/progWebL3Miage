<?php  
Class Adherant{
    
    private $dbh;
    
    public function __construct(){ 
        $this->dbh = new Database();
    }

    public function insertion_adherant($options=array()){
        $default=array(
              "nom"=>"",
              "prenoms"=>"",
              "adresse"=>"",
              "email"=>"",
              "codepostal"=>"",
              "date_naissance"=>"", 
              "telephone"=>"", 
              "ville"=>"", 
              "password"=>"",
              "role"=>"",
              "id"=>"" ); 

        $options = array_merge($default, $options);
        extract($options);
           	try
    		{ 
			  $insert=$this->dbh->exec("insert into adherant set  
                  nom='$nom',
                  prenoms='$prenoms',
                  adresse='$adresse',
                  codepostal='$codepostal',
                  date_naissance='$date_naissance',
                  ville='$ville',
                  telephone='$telephone',
                  password='$password',
                  role='$role',
                  email='$email'"); 
       }
		catch(PDOException $e)
		{
			echo 'PDO ' . $method . ' Error: ' . $e->getMessage();
		}
		return intval($insert); 
   }
    
    public function modification_adherant($options=array()){
      $default=array(
              "civilite"=>"",
              "nom"=>"",
              "prenoms"=>"",
              "adresse"=>"",
              "email"=>"",
              "codepostal"=>"",
              "date_naissance"=>"", 
              "telephone"=>"", 
              "ville"=>"", 
              "password"=>"",
              "role"=>"",
              "id"=>"" ); 
        $options = array_merge($default, $options);
        extract($options);
           	try
    		{  
    			  $pers_update=$this->dbh->exec("update adherant set 
                  civilite='$civilite',
                  nom='$nom',
                  prenoms='$prenoms',
                  adresse='$adresse',
                  codepostal='$codepostal',
                  date_naissance='$date_naissance',
                  ville='$ville',
                  telephone='$telephone',
                  password='$password',
                  role='$role',
                  email='$email' where id='$id'"); 
            }
    		catch(PDOException $e)
    		{
    			echo 'PDO ' . $method . ' Error: ' . $e->getMessage();
    		}
		return intval($pers_update); 
   }
    
   
   public function lastId(){
      return $this->dbh->exec("SELECT MAX(id) FROM adherant");
   }  

    public function liste(){   
      return  $this->dbh->query("select * from adherant"); 
   }

   public function Login($email,$password){
        return $this->dbh->query("select * from adherant where email='$email' and password ='$password'"); 
    }
    
   public function update_etre_connecte($id,$etat='n'){
      return $this->dbh->exec("update adherant set 	etat_connecte='$etat'  where id='$id'");
   } 

    public function this_adherant($id){
        $tab=$this->dbh->query("select * from adherant where id='$id'");
        return $tab->fetch();
    }
     
}
$classadherant= new Adherant();
?>