<?php
include('connect_db2.php');


if(isset($_POST['user_phone']))
{
    $phone=$_POST['user_phone'];

    $checkdata=" SELECT phone FROM student WHERE phone='$phone' ";

    $query = mysqli_query($conn, $checkdata);
    $count = mysqli_num_rows($query);

    if($count>0)
    {
        echo "Numéro Existe Déja";
    }
    else
    {
        echo "OK";
    }
    exit();
}

if(isset($_POST['user_email']))
{
    $emailId=$_POST['user_email'];

    $checkdata=" SELECT email FROM student WHERE email='$emailId' ";

    $query=mysqli_query($conn, $checkdata);
    $row = mysqli_num_rows($query);
    if($row>0)
    {
     echo "Email Existe Déja";
    }
    else
    {
        echo "OK";
    }
    exit();
}

if(isset($_POST['user_pass2']))
{
    if($_POST['user_pass2'] != $_POST['user_pass'])
    {
     echo "Ne correspond pas";
    }
    else
    {
        echo "OK";
    }
    exit();
}

// If file upload form is submitted 
$status = $statusMsg = '';
if( isset($_POST['submit_form']) )
{

    $status = 'error';
    $path = 'images/'; // Repertoire de telechargement
    if(!empty($_FILES["file"]["name"])) { 
        // Obtention information sur le fichier 
        $fileName = basename($_FILES["file"]["name"]); 
        $ext = $_FILES['file']['tmp_name']; 
        
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); 

        // On peut télécharger la même image en utilisant la rand function
        $final_image = rand(1000,1000000).$fileName;
         
        // Autoriser certains formats d'images 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){

            $path = $path.($final_image); 

            if(move_uploaded_file($ext,$path)){

                $name = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['useremail']);
                $phone = htmlspecialchars($_POST['userphone']);
                $password = md5($_POST['userpass']);
                $sex = $_POST['sex'];

                          $checkdata =" SELECT email FROM student WHERE email= '$email' ";
                          
                          $query= mysqli_query($conn, $checkdata);
                          $row = mysqli_num_rows ($query);
                          if ($row>0)
                          {
                              echo "Email existe Déjà";
                              exit()
                          }
                // Insertion des données dans la base de données 
                $insert = mysqli_query($conn,"INSERT into student (name, phone, email, password,sex ,file_name, date_heure)
                VALUES ('$name','$phone','$email','$password','$sex','$path', NOW())"); 
                
                if($insert){ 
                    $status = 'success'; 
                    header('Location: sign.php');

                }else{ 
                    echo  'Echec du téléchargement, Veuillez reprendre.'; 
                }  
        }else{ 
            echo 'Désolé, seul les types JPG, JPEG, PNG, & GIF sont autorisés.'; 
        } 
     }else{ 
        echo  'selectionner une image à télécharger.'; 
     }
    }
            
    mysqli_close($conn);

}
