<?php  
Class Donateurs{
    
    private $dbh;
    
    public function __construct(){ 
        $this->dbh = new Database();
    }

    public function insertion_adherant($options=array()){
        $default=array(
              "adherant_id"=>"",
              "montant_don"=>"",
              "projet_id"=>"",
              "id"=>"" ); 

        $options = array_merge($default, $options);
        extract($options);
           	try
    		{ 
			  $insert=$this->dbh->exec("insert into donateurs set  
                  adherant_id='$adherant_id',
                  montant_don='$montant_don',
                  projet_id='$projet_id'"); 
       }
		catch(PDOException $e)
		{
			echo 'PDO ' . $method . ' Error: ' . $e->getMessage();
		}
		return intval($insert); 
   }
    
    public function modification_adherant($options=array()){
      $default=array(
              "adherant_id"=>"",
              "montant_don"=>"",
              "projet_id"=>"",
              "id"=>"" ); 
        $options = array_merge($default, $options);
        extract($options);
           	try
    		{  
    			  $pers_update=$this->dbh->exec("update donateurs set 
                  adherant_id='$adherant_id',
                  montant_don='$montant_don',
                  projet_id='$projet_id' where id='$id'"); 
            }
    		catch(PDOException $e)
    		{
    			echo 'PDO ' . $method . ' Error: ' . $e->getMessage();
    		}
		return intval($pers_update); 
   }
     
    public function liste(){   
      return  $this->dbh->query("select * from donateurs"); 
   }

   public function Login($email,$password){
        return $this->dbh->query("select * from donateurs where email='$email' and password ='$password'"); 
    }
    
   public function update_etre_connecte($id,$etat='n'){
      return $this->dbh->exec("update donateurs set 	etat_connecte='$etat'  where id='$id'");
   } 

    public function this_adherant($id){
        $tab=$this->dbh->query("select * from donateurs where id='$id'");
        return $tab->fetch();
    }
     
}
$classdonateurs= new Donateurs();
?>