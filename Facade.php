<?php 

use PHPMailer\PHPMailer\PHPMailer;

require_once "Email/PHPMailer/PHPMailer.php";
require_once "Email/PHPMailer/SMTP.php";
require_once "Email/PHPMailer/Exception.php";

class Facade {
    
public  $isSMTP;
public  $SMTPOptions;
public  $Host;
public  $SMTPAuth;
public  $Username;
public  $Password;
public  $Port;
public  $SMTPSecure;
public  $setFrom;
public  $addAddress;
public  $Subject;
public  $Body;
public  $send;
public  $ErrorInfo;
    
public $PHP;
    

public function AdminEmail($A,$B,$C,$D,$E,$F,$G,$H,$I,$J,$K,$L) {
    
        $PHP = new PHPMailer();
    
        $this->isSMTP = $PHP->isSMTP();
    
        $this->SMTPOptions = $PHP->SMTPOptions = $A;
    
        $this->Host = $PHP->Host = $B;
    
        $this->SMTPAuth = $PHP->SMTPAuth = $C;
    
        $this->Username = $PHP->Username = $D;
    
        $this->Password = $PHP->Password = $E;
    
        $this->Port = $PHP->Port = $F;
    
        $this->SMTPSecure = $PHP->SMTPSecure = $G;
    
        $this->isHTML = $PHP->isHTML($H);
    
        $this->setFrom = $PHP->setFrom($I,$J);
    
        $this->addAddress = $PHP->addAddress($I);
    
        $this->Subject = $PHP->Subject = $K;
    
        $this->Body = $PHP->Body = $L;
    
        $this->send = $PHP->send();
    
        $this->ErrorInfo = $PHP->ErrorInfo;
    
    }

public function ClientEmail($A,$B,$C,$D,$E,$F,$G,$H,$I,$J,$M,$K,$L) {
    
        $PHP = new PHPMailer();
    
        $this->isSMTP = $PHP->isSMTP();
    
        $this->SMTPOptions = $PHP->SMTPOptions = $A;
    
        $this->Host = $PHP->Host = $B;
    
        $this->SMTPAuth = $PHP->SMTPAuth = $C;
    
        $this->Username = $PHP->Username = $D;
    
        $this->Password = $PHP->Password = $E;
    
        $this->Port = $PHP->Port = $F;
    
        $this->SMTPSecure = $PHP->SMTPSecure = $G;
    
        $this->isHTML = $PHP->isHTML($H);
    
        $this->setFrom = $PHP->setFrom($I,$J);
    
        $this->addAddress = $PHP->addAddress($M);
    
        $this->Subject = $PHP->Subject = $K;
    
        $this->Body = $PHP->Body = $L;
    
        $this->send = $PHP->send();
    
        $this->ErrorInfo = $PHP->ErrorInfo;
}
}
?>