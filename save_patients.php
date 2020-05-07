<?php 


 if(!isset($_POST['save_Patient'])){

    die("Error no comming data");
 }

        $Name= $_POST['Name'];
        $Lastname = $_POST['Lastname'];
        $Document = $_POST['Document'];
        $Birthdate = $_POST['Birthdate'];
        $City_of_Residence = $_POST['City_of_Residence'];
        $Neighborhood = $_POST['Neighborhood'];
        $Cell_Phone_Number = $_POST['Cell_Phone_Number'];

  

    try{

        include_once('database\Connection.php');
        $sql= "INSERT INTO  patients(document, name, lastname,  birthdate, city_of_residence, neighborhood, cell_phone_number) VALUES ({$Document}, '{$Name}', '{$Lastname}',  '{$Birthdate}', '{$City_of_Residence}', '{$Neighborhood}', '{$Cell_Phone_Number}')";
        $result = $conn->query($sql);

        $_SESSION['message']     = 'Tus datos se han gaurdado con satisfacción';
        $_SESSION['message_type']= 'success';
      
        $_SESSION['message_typee']= 'danger';

      header("location: create_patients.php");
        
        }catch(Exception $ex){
        echo "DB connection error";
        }
?>