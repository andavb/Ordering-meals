<?php
	
	$submit = $_POST['submit'];

	if(isset($submit)){
		//Ustvarimo povezavo na druzben_prehrana
        $con=mysqli_connect("localhost","root","","asDomzale");
        //Dodamo podporo za slovenske znake
        mysqli_query($con, "SET NAMES UTF8");
        //Preverimo če povezava deluje
        if(mysqli_connect_errno())
        {
            echo "Ne moremo se povezati z MySQL: " . mysqli_connect_error();
            mysqli_close($con);
            exit;
        }
        
        @$uname = $_POST['IDuporabnika'];

        @$result = mysqli_query($con,"SELECT * FROM uporabniki WHERE ID_uporabnika = '1234'");

        $num_rows = $result->num_rows;

        if ($num_rows == 0) 
        {
            echo '<script>';
            echo 'alert("Napačen ID");';
            echo 'location.href="../../prijavno_okno.php"';
            echo '</script>';
        }
        else
        {
	        while($row = mysqli_fetch_array($result))
	        {
	            $tip = $row['tip'];
	                
	            if($row['ID_uporabnika'] == $uname)
	            {
	                setcookie('uporabnik', $uname, time()+60*60*7);
	                
	                if($tip == '1')
	                {
	                    session_start();
	                    $_SESSION['ID_uporabnika'] = $uname;
	                    header("Location: ../../index.php");
	                }
	                else if($tip == '2')
	                {
	                    session_start();
	                    $_SESSION['ID_uporabnika'] = $uname;
	                    header("Location: ../../index.php");
	                }
	            }
	            else
	            {

	                echo '<script>';
            		echo 'alert("Napačen ID");';
            		echo 'location.href="../../prijavno_okno.php"';
            		echo '</script>';

	                $pass = "ms";

	                $hashedPass = password_hash("ms", PASSWORD_DEFAULT);

	                echo password_verify($pass, $hashedPass);
	            }
	        }
        }
	}
	else{
		header("location: ../../prijavno_okno.php");
		die();
    }
    die();
?>