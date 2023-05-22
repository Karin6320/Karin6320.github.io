<?php
$to = "uwuodp@karinlopatovska.studenthosting.sk";
$from = $_POST ['email'];
$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$subject = "odosielatel:" . "\r\n" . $first_name . "\r\n" . $last_name . "\r\n" . "(".$from.")";
$message = $_POST ['message'];

if (isset($_POST['submit'])) {

    $header_array = [
        "Content-type: text/html; charset=UTF-8",
        "from:" .$from
    ];

    $headers = implode ("\r\n", $header_array);
    if (mail($to, $subject, $message, $headers)){
        echo "podarilo sa";
    } else {
        echo "nepodarilo sa";
    }
    header ('Location: index.php');

}

?>