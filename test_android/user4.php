<?php
    
    include_once 'db-connectweb.php';
    
    class User{
        
        private $db;
        
        private $db_table = "jacusersd";
        
        public function __construct(){
            $this->db = new DbConnect();
        }
  
        public function createNewRegisterUser($username, $password, $email){
            
            
           $sql = "SELECT * FROM jacusersd where tramt='$username'";

			$result = $conn->query($sql);

			if ($result->num_rows >0) {
 
 
			while($row[] = $result->fetch_assoc()) 
			{
 
			$tem = $row;
 
			$json = json_encode($tem);
 
 
			}
			
			else {
					 $json['success'] = 1;
                     $json['message'] = "No Data details"; 
				}
           
            
            return $json;
            
        }
		
        
        
    }
    ?>