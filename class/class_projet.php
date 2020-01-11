<?php  
Class Projet{
    
    private $dbh;
    
    public function __construct(){ 
        $this->dbh = new Database();
    }

    public function insertion_projet($options=array()){
        $default=array(
              "titre"=>"",
              "description"=>"",
              "montant"=>"",
              "fichier"=>"",
              "ville"=>"",
              "nom_organisation"=>"", 
              "email_organisation"=>"",
              "user_id"=>"",
              "id"=>"" ); 

        $options = array_merge($default, $options);
        extract($options);
           	try
    		{ 
           $sqlfichier='';
           if($fichier!='') $sqlfichier="fichier='$fichier',";
			     $insert=$this->dbh->exec("insert into projets set  
                  titre='$titre',
                  description='$description',
                  montant='$montant', 
                  ville='$ville',
                  $sqlfichier
                  nom_organisation='$nom_organisation',
                  email_organisation='$email_organisation',
                  user_id='$user_id'");  
       }
    		catch(PDOException $e)
    		{
    			echo 'PDO ' . $method . ' Error: ' . $e->getMessage();

          var_dump($e->getMessage());
    		}
    		return intval($insert); 
   }
    
    public function modification_projet($options=array()){
      $default=array(
                  "titre"=>"",
                  "description"=>"",
                  "montant"=>"",
                  "fichier"=>"",
                  "ville"=>"",
                  "email_organisation"=>"",
                  "nom_organisation"=>"", 
                  "user_id"=>"",
                  "id"=>"" ); 
        $options = array_merge($default, $options);
        extract($options);
           	try
    		{  
          $sqlfichier='';
          if($fichier!='') $sqlfichier="fichier='$fichier',";
    			  $pers_update=$this->dbh->exec("update projets set 
                  titre='$titre',
                  description='$description',
                  montant='$montant',
                  $sqlfichier
                  email_organisation='$email_organisation',
                  nom_organisation='$nom_organisation',
                  user_id='$user_id' where id='$id'");  
            }
    		catch(PDOException $e)
    		{
    			echo 'PDO ' . $method . ' Error: ' . $e->getMessage();
    		}
		return intval($pers_update); 
   }
    
   
   public function lastId(){
      return $this->dbh->exec("SELECT MAX(id) FROM projets");
   }  



  public function liste($id_user,$etat='1'){   
    if($id_user==0){
      return  $this->dbh->query("select * from projets where visible='$etat'"); 
    }else{
      return  $this->dbh->query("select * from projets where  user_id='$id_user' and visible='$etat'"); 
    }
   }

/*
    public function liste($etat='1'){   
      return  $this->dbh->query("select * from projets where  visible='$etat'"); 
   }
 */
    public function this_projet($id){
        $tab=$this->dbh->query("select * from projets where id='$id'");
        return $tab->fetch();
    }

     public function supprimer($id,$etat='0'){
      return $this->dbh->exec("update projets set visible='$etat'  where id='$id'");
    } 

     
}
$classprojet= new Projet();
?>