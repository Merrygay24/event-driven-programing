<?php



$registration = array(
    'ID' => "'" . $_POST['inp_ID'] . "'",
    'FName' => "'" . $_POST['inp_FName'] . "'",
    'LName' => "'" . $_POST['inp_LName'] . "'",
    'MName' => "'" . $_POST['inp_MName'] . "'",
    'Gmail' => "'" . $_POST['inp_Gmail'] . "'",
    'Address' => "'" . $_POST['inp_Address'] . "'",
    'Contact_Num' => "'" . $_POST['inp_Contact_Num'] . "'",
    'Gender' => "'" . $_POST['inp_Gender'] . "'",
);
save($registration);
function save($data)
{

    include('../config/database.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO register ($attributes) VALUES ($values)";


     if ($conn->query($query) === TRUE) {
        header("location: /event-driven-programing/index.php?success");
    } else {
        header("location: /event-driven-programing/registration.php?invalid");
     }

    $conn->close(); 

}