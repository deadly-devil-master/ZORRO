<?php                                                
   include 'db.php';
   $userid=$_POST['email'];
   $pswd=$_POST['pass'];

    $sql= "SELECT *FROM register where email like '$userid' and pass like '$pswd'";

    $res=mysql_query($sql) or die(mysql_error());
    
    $num=  mysql_num_rows($res); 
    
    
    
   if($num>0)  
{
    $row= mysql_fetch_array($res); 
    
    $uid=$row['id'];
    
            
     if($row['email']==$userid) 
       {
         @session_start();
        
        $_SESSION['email']=$userid;
		
		 $_SESSION['uid']=$uid; // for next page
       
               
        header('Location: dashboard.php');
       }

       else
       {
        header('Location: index.php');
       }
	   
}

else{
	
	
 
  echo "<script>window.alert('Wrong Credentials');</script>";

  echo "<script>window.location='index.php';</script>";
 
	
	
}
    

?>