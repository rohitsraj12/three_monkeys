<?php
if(isset($_POST['submit'])){
    $submit = $_POST['submit'];
        // message from
        $name       = $_POST['name'];
        $phone      = $_POST['phone'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];

    if($submit == "contact_form"){ 
    
        $to = "webdesigner@gopalanenterprises.com";
        $to1 = "dmretail@gopalanenterprises.com";
        // $to2 = "gm.3monkeys@gmail.com";
        $subject = "Enquiry form Three Monkeys";
        $message = "<p>Contact form Enquiry</p></br>";
        $message .= "<p> name: <strong>". $name ."</strong></p></br>";
        $message .= "<p> phone number: <strong>". $phone ."</strong></p></br>";
        $message .= "<p> email: <strong>". $email ."</strong></p></br>";
        $message .= "<p> Message: <strong>". $message ."</strong></p></br>";
        $message .= "<p>Thank you,</p>";
        
        $headers = "From:" . $name . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-type: text/html\r\n";
    
        mail($to, $subject, $message, $headers);
        mail($to1, $subject, $message, $headers);
        // mail($to2, $subject, $message, $headers);
    
        // header("location:thank-you");

        echo "sucess";
    } else if($submit == "reservation") {
        $event      = $_POST['event'];
        $date       = $_POST['date'];
        $guest      = $_POST['guest'];

        $to = "webdesigner@gopalanenterprises.com";
        $to1 = "dmretail@gopalanenterprises.com";
        // $to2 = "gm.3monkeys@gmail.com";

        $subject = "Enquiry form Three Monkeys";
        $message = "<p>Contact form Enquiry</p></br>";
        $message .= "<p> name: <strong>". $name ."</strong></p></br>";
        $message .= "<p> phone number: <strong>". $phone ."</strong></p></br>";
        $message .= "<p> email: <strong>". $email ."</strong></p></br>";
        $message .= "<p> Event Name: <strong>". $event ."</strong></p></br>";
        $message .= "<p> Event date: <strong>". $date ."</strong></p></br>";
        $message .= "<p> Number_of_guest: <strong>". $guest ."</strong></p></br>";
        $message .= "<p> Message: <strong>". $message ."</strong></p></br>";
        $message .= "<p>Thank you,</p>";
        
        $headers = "From:" . $name . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-type: text/html\r\n";
        
        mail($to, $subject, $message, $headers);
        mail($to1, $subject, $message, $headers);
        // mail($to2, $subject, $message, $headers);
    
        // header("location:thank-you");
        echo "Success.!";
    
    }

   
}
?>