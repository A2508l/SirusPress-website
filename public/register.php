<?php
   
    // Database connection
    include('./conn.php');

   
    
    // Error & success messages
    global $success_msg, $email_exist, $_NameErr, $_emailErr, $_mobileErr, $_passwordErr;
    global $NameEmptyErr, $emailEmptyErr, $mobileEmptyErr, $passwordEmptyErr;
    
    // Set empty form vars for validation mapping
    $_name = $_email = $_mobilenumber = $_password = "";
    if(isset($_POST["signup"])) {
        $name     = $_POST["name"];
        $email         = $_POST["email"];
        $mobilenumber  = $_POST["mobilenumber"];
        $password      = $_POST["password"];
        
        // check if email already exist
        $email_check_query = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}' ");
        $rowCount = mysqli_num_rows($email_check_query);

        // PHP validation
        // Verify if form values are not empty
        if(!empty($name) && !empty($email) && !empty($mobilenumber) && !empty($password)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {
                // clean the form data before sending to database
                $_name = mysqli_real_escape_string($connection, $name);
                $_email = mysqli_real_escape_string($connection, $email);
                $_mobile_number = mysqli_real_escape_string($connection, $mobilenumber);
                $_password = mysqli_real_escape_string($connection, $password);

                // perform validation
                if(!preg_match("/^[a-zA-Z ]*$/", $_name)) {
                    $_NameErr = '<div class="alert alert-danger">
                            Only letters and white space allowed.
                        </div>';
                        
                }
                if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                    $_emailErr = '<div class="alert alert-danger">
                            Email format is invalid.
                        </div>';
                        
                }
                if(!preg_match("/^[0-9]{10}+$/", $_mobile_number)) {
                    $_mobileErr = '<div class="alert alert-danger">
                            Only 10-digit mobile numbers allowed.
                        </div>';
                        
                }
                if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $_password)) {
                    $_passwordErr = '<div class="alert alert-danger">
                             Password should be between 6 to 20 charcters long, contains atleast one special chacter, lowercase, uppercase and a digit.
                        </div>';
                        
                }
                
                // Store the data in db
                

                if((preg_match("/^[a-zA-Z ]*$/", $_name)) && (filter_var($_email, FILTER_VALIDATE_EMAIL)) && (preg_match("/^[0-9]{10}+$/", $_mobile_number)) && (preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $_password))){
                    
                    // Password hash
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);

                    // Query
                    $sql = "insert into users (name,email,ph_num,password) VALUES ('{$name}', '{$email}', '{$mobilenumber}', '{$password_hash}')";
                    
                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . mysqli_error($connection));
                    } 
                   }
            }
        }
    
        else{
                    if(empty($name)){
                        $NameEmptyErr = '<div class="alert alert-danger" style="padding:0.1rem;" >
                            First name can not be blank.
                        </div>';
                    }
                    if(empty($email)){
                        $emailEmptyErr = '<div class="alert alert-danger" style="padding:0.1rem;">
                            Email can not be blank.
                        </div>';
                    }
                    if(empty($mobilenumber)){
                        $mobileEmptyErr = '<div class="alert alert-danger" style="padding:0.1rem;">
                            Mobile number can not be blank.
                        </div>';
                    }
                    if(empty($password)){
                        $passwordEmptyErr = '<div class="alert alert-danger" style="padding:0.1rem;">
                            Password can not be blank.
                        </div>';
                    }
                }
            }
                                    
    
