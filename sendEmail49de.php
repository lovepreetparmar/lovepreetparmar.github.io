 <?php
         $to = "lplovepreetparmar@gmail.com";
         $subject = "Query From Lovepreet Parmar";
         
         $message = "<h1>".$_GET["name"]."</h1>";
         $message .= "<h3>".$_GET["Subject"]."</h3>";         
         $message .= "<b>".$_GET["email"]."</b>";
         $message .= "<p>".$_GET["message"]."</p>";

        
         $header = "From: lplovepreetparmar@gmail.com";
         $header .= "Cc: \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>