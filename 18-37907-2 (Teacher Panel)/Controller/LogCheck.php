<?php
	session_start();
	
	require_once('../Model/model.php');

	if(isset($_POST['submit'])){
        $username = $_POST['username'];
		$password = $_POST['password'];
        
       	

		if(empty($username) || empty($password)){
			header('location: ../View/Login.php?error=null_value');
		}else{
            
			$user = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($user);
			$ass = getByName($username);
			$abc = $ass['userType'];
			//echo $abc;

			if($status){
               
                
            
				$_SESSION['username'] = $username;
				$_SESSION['user_id'] = $ass['t_id'];
               
            
                if(empty('remember')){                 
                    
       
                
				if($abc =='teacher')
				{
				header('location: ../View/TeacherDashboard.php');
				}
				if($abc =='admin')
				{
				header('location: ../View/AdminDashboard.php');
				}
				if($abc =='student')
				{
				header('location: ../View/StudentDashboard.php');
				}
				else{
					echo "user is not available";
				}
                }
                else{
                    setcookie('username', $_POST['username'], time() + 50);
                    setcookie('password', $_POST['password'], time() + 50);
                    if($abc =='teacher')
				{
				header('location: ../View/TeacherDashboard.php');
				}
				if($abc =='admin')
				{
				header('location: ../View/AdminDashboard.php');
				}
				if($abc =='student')
				{
				header('location: ../View/StudentDashboard.php');
				}
				else{
					echo "user is not available";
				}
                }
			}
            else{
				//header('location: LogCheck.php');
				header('location: ../View/Login.php?error=invalid_user');
			}
		}
	}



?>