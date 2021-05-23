<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Codux | Services & Web Solutions</title>
    <?php include('links.php') ?>

    <style>
    .card:hover {
        box-shadow: 0px 0px 17px 4px #000;
        -webkit-transition: 0.7s;
        -moz-transition: 0.7s;
        -o-transition: 0.7s;
        transition: 0.7s;
    }
    .link {
        text-align: right;
        border: 1px solid #CCC;
        border-top-left-radius: 15px;
        width: auto;
        position: absolute;
        top: 46%;
        left: 76%;
    }
    .link:hover {
        background: orangered;
        border: 1px solid orangered;
        border-top-left-radius: 15px;
    }
    .fa-map-marker-alt:before {
        font-size: 21px;
        border-radius: 50%;
        border: 1px solid #f96015;
        padding: 5px;
        background-color: #f96015;
        color: white;
        padding-left: 8px;
        padding-right: 8px;
        }
    .fa-envelope:before {
        font-size: 21px;
        border-radius: 50%;
        border: 1px solid #f96015;
        padding: 5px;
        background-color: #f96015;
        color: white;
        padding-left: 6px;
        padding-right: 6px;
    }
    .fa-phone-alt:before {
        font-size: 21px;
        border-radius: 50%;
        border: 1px solid #f96015;
        padding: 5px;
        background-color: #f96015;
        color: white;
        padding-left: 6px;
        padding-right: 6px;
    }
    </style>

</head>
<body>
<?php include('navbar.php') ?>
<div style="background:url(pics/541.jpg) center center no-repeat;background-size: cover;">
<div style="background:rgb(43 56 134 / 70%);position:relative;top:0px;width:100%;">
<br><bR><bR><br><br>
    <div class="container">
    <div class="row">
            <div class="col-lg">
<h2 style="font-weight: bold;font-size: 45px;color:white;padding: 15px">Get in Touch Us And We'll Help Your Business<span style="color: #f96015;">.</span></h2>
<h6 style="padding:15px;color:white;font-size: 18px;font-weight: 400;">Please, contact us if you have any IT service issues, problems or requests. Find out how to get in touch!</h6>
<h3 style="padding:15px;color:white;font-weight:bold;font-size: 35px;">Egypt</h3>
<div style="padding:15px;color:white;"><i class="fas fa-map-marker-alt" style="margin-right: 20px;display:inline-block"></i> <p style="display: inline-block;font-size: 17.5px;font-weight: 700;">Moharram Bey, Alexandria, Egypt</p></div>
<div style="padding:15px;color:white;"><i class="fas fa-envelope" style="margin-right: 20px;display:inline-block"></i> <p style="display: inline-block;font-size: 17.5px;font-weight: 700;">support@codux.me</p></div>
<div style="padding:15px;color:white;"><i class="fas fa-phone-alt" style="margin-right: 20px;display:inline-block"></i> <p style="display: inline-block;font-size: 17.5px;font-weight: 700;">(+20)1010142554</p></div>
            </div>
        <div class="col-lg">
        <div class="form-contact" style="background: white;text-align:center;border-radius:5px;border:1px solid white;width: 90%;margin-left: auto;margin-right: auto;"><br><br>
<h3 style="text-align: center;font-weight:bold;font-size: 35px;padding: 5px;">Book an Appointment</h3><br><br>
    <div class="container" style="max-width:100%">
<form method="post">
<input type="text" name="name-contacter" placeholder="Your name" style="height: 50px;background: rgba(207,220,249,.3);width:100%;padding: 8px;border-radius: 5px;border: 1px solid #CCC;outline: none;margin-bottom: 15px;"><br>
<input type="email" name="email-contacter" placeholder="Your email" style="height: 50px;background: rgba(207,220,249,.3);width:100%;padding: 8px;border-radius: 5px;border: 1px solid #CCC;outline: none;margin-bottom: 15px;"><br>
<select name="subject-contacter" style="height: 50px;background: rgba(207,220,249,.3);width:100%;padding: 8px;border-radius: 5px;border: 1px solid #CCC;outline: none;margin-bottom: 15px;"><br>
    <option value="">--Subject--</option>
    <option>Problem</option>
    <option>Ticket</option>
    <option>Website Development Package</option>
    <option>Graphic Design Package</option>
    <option>E-Marketing Package</option>
    <option>Penetration Testing</option>
    <option>UI/UX Design & Dev</option>
    <option>Other</option>
</select>
<textarea name="message-contacter" placeholder="Your message" style="height: 50px;background: rgba(207,220,249,.3);width:100%;padding: 8px;display:block;width:100%;margin-bottom: 15px;border-radius: 5px;min-height:130px;padding:0.3em" maxlength="10000"></textarea>
<button name="send-contact" class="btn btn-outline-success" style="padding-left: 10%;padding-right: 10%;font-weight: bold;padding-top: 2%;padding-bottom: 2%;font-size: 18px;">Book an Appointment</button>
    
<?php
    
if(isset($_POST['send-contact'])) {
    filter_var($_POST['send-contact'], FILTER_SANITIZE_NUMBER_INT);
    $name_contacter = $_POST['name-contacter'];
    $email_contacter = $_POST['email-contacter'];
    $subject_contacter = $_POST['subject-contacter'];
    $message_contacter = $_POST['message-contacter'];

    if ($name_contacter !== "" && $email_contacter !== "" && $subject_contacter !== "" && $message_contacter !== "") {  
        
        
        require('sendgrid-php/vendor/autoload.php');  

        $api_key = "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";
        $email = new \SendGrid\Mail\Mail();

        $email->setFrom("support@codux.me", "Codux Inc.");
        $email->setSubject($subject_contacter);
        $email->addTo($email_contacter, $name_contacter);
        $email->addContent("text/plain", $message_contacter);
        
        $sendgrid = new \SendGrid($api_key);
        
        if($sendgrid->send($email)){
            echo '<div class="alert alert-success">Your message was sent successfully</div>';
        } else {
            echo "<div class='alert alert-danger' role='alert'>We apologize! We are unable to receive your request</div>";
        }

    } else {
        echo "<div class='alert alert-danger' role='alert'>Please fill in all required fields</div>";
    }
}
?>

</form>
    <br>
    </div>
    <br>
</div>
        </div>
        </div>
    </div>
<br><br><bR><br>
</div>
</div>
</body>
<?php include('scripts.php') ?>
</html>
