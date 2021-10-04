<?php

    $servername = "fdb22.awardspace.net" ;
	$username = "3499757_dandovueltas";
	$password = "anea5Z4n1^(*-244";
	$dbName = "3499757_dandovueltas";

    $funct = $_GET["F"];


    //login
    if($funct==0)
    {
        $loginUser = $_POST["loginUser"];
	    $loginPass = $_POST["loginPass"];
	    $realpassword = False;

	
	    //Make Conection
	    $conn = new mysqli($servername, $username, $password, $dbName);
	
	    //Check connection
	    if(!$conn )
	    {
		die("Connection Failed.". mysqli_connect_error());
		
	    }
	
	    $sql = "SELECT `ID`, `Username`, `Password`,`Konocoins` FROM Accounts WHERE Username  = '" . $loginUser . "'" ;
	
	    $result = $conn ->query($sql);
	
	    if(mysqli_num_rows($result) > 0)
	    {
		while($row  = $result->fetch_assoc())
		{
			if($row['Password'] == $loginPass)
			{
				$realpassword = true;
                                echo $row['ID'] . '&' . $loginUser . '&' . $row['Konocoins'] . '&';
				
			}
			
                        
		}
		
		if($realpassword == true)
		{
		    
		}
		else
		{
		    echo "Contraseña incorrecta ";
                    
		    
		}
	    }
	    else
	    {
		echo "No result: " . $loginUser . " " . $loginPass;
		
	    }
    
    }

    //register

    /*else if($funct == 1)
    {
        $registerUser = $_POST["registerUser"];
	$registerPass = $_POST["registerPass"];
	$ocupatedname = False;
	//Make Conection
	$conn = new mysqli($servername, $username, $password, $dbName);
	
	//Check connection
	if(!$conn )
	{
		die("Connection Failed.". mysqli_connect_error());
		
	}
	
	$sql = "SELECT Username FROM Accounts" ;
	
	
	$result = $conn ->query($sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row  = $result->fetch_assoc())
		{
			if($row["Username"] == $registerUser)
			{
				
				$ocupatedname = true;
				
			}
			else
			{
				
				
			}
			
		}
		
		if($ocupatedname == false)
		{
			
			//echo "el nombre ". $registerUser. " está disponible"."<br>";
			$sql2 = "INSERT INTO `Accounts`(`Username`, `Password`) VALUES ('". $registerUser ."','".$registerPass ."')";
			
			if ($conn->query($sql2) === TRUE) 
			{
				echo "usuario ". $registerUser ." registrado"; 
			} 
			else 
			{
				echo "Error: " . $sql2 . "<br>" . $conn->error;
			}

			
		}
		else
		{
			
			echo "el nombre ". $registerUser . " ya está en uso"."<br>";
		}
	
	}
	else
	{
		echo "Unknow error";
		
	}

    }
    else if($funct == 2)
    {

        $User = $_POST["User"];
	


	
	//Make Conection
	$conn = new mysqli($servername, $username, $password, $dbName);
	
	//Check connection
	if(!$conn )
	{
		die("Connection Failed.". mysqli_connect_error());
		
	}
	
	$sql = "SELECT `Konocoins` FROM Accounts WHERE Username  = '" . $User . "'" ;
	
	$result = $conn ->query($sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row  = $result->fetch_assoc())
		{
			
                        echo $row["Konocoins"];
			
                        
		}
		
		if($realpassword == true)
		{
		    
		}
		else
		{

                    
		    
		}
	}
	else
	{
		echo "No result: " . $loginUser . " " . $loginPass;
		
	}
    }
    else if($funct == 4)
    {
        $User = $_POST["User"];
        $Konocoins = $_POST["Konocoins"];
    
        //Make Conection
        $conn = new mysqli($servername, $username, $password, $dbName);
        
        //Check connection
        if(!$conn )
        {
            die("Connection Failed.". mysqli_connect_error());
            
        }
        
        $sql = "SELECT ID FROM Accounts" ;
        
        
        $result = $conn ->query($sql);
        
        if(mysqli_num_rows($result) > 0)
        {
            while($row  = $result->fetch_assoc())
            {
                if($row["ID"] == $User)
                {
                    
                                    $sql2 = "UPDATE `Accounts` SET `Konocoins`=" . $Konocoins . " WHERE `ID` = '". $User . "'";
                
                                    if ($conn->query($sql2) === TRUE) 
                                    {
                                            echo "Proceso Realizado"; 
                                    } 
                                    else 
                                    {
                                            echo "Error: " . $sql2 . "<br>" . $conn->error;
                                    }
                                            
                }
                            else
                            {
                                    echo "User no detected:". $User . "<br>";
                            }
                            
                
            
        
                    }
            }
        else
        {
            echo "Unknow error";
            
        }

    }*/
    else
    {
        echo "B-A-N-A-N-A";

    }

?>