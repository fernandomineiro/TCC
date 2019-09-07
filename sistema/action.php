<?php
    include('conn.php');
    $data = json_decode(file_get_contents("php://input"));
    if (count($data) > 0) {
        $firstname = mysqli_real_escape_string($conn, $data->firstname);
        $lastname = mysqli_real_escape_string($conn, $data->lastname);
        $btn_name = $data->btnName;
        if ($btn_name == "Save") {
            $conn->query("insert into members (firstname, lastname) values ('$firstname', '$lastname')");
        }
        if ($btn_name == "Update") {
            $memberid = $data->memberid;
            $conn->query("update members set firstname='$firstname', lastname='$lastname' where id='$memberid'");
        }
    }
?>