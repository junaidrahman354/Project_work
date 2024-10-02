<?php 
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PassVeryFast</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    

    
    
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-12">
            <center>
                <h1>PassVeryFast</h1>
            </center>
        </div>
        <div class="col-lg-4 col-md-4 col-0" style="margin-left: 0px;"></div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <?php include 'error.php'; ?>
<?php 
if(isset($_GET['code']))
{
    $code = $_GET['code'];
?>

            <form method="POST">
                <div class="form-group">
                    <label style="color: black;">Password</label>
                    <input type="password" name="password" class="form-control" required="" placeholder="Enter your new passowrd">
                </div>
                <div class="form-group">
                    <label style="color: black;">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" required="" placeholder="Enter Confirm password">
                </div>
                <center><button type="submit" name="update" class="btn btn-dark btn-lg mt-3">Update</button></center>
            </form>

<?php }else{ ?>
            <form method="POST">
                <div class="form-group">
                    <label style="color: black;">Email</label>
                    <input type="email" name="email" class="form-control" required="" placeholder="Enter your email for reset password">
                </div>
                <center><button type="submit" name="email_btn" class="btn btn-dark btn-lg mt-3">Submit</button></center>
            </form>
<?php } ?>
        </div>
        <div class="col-lg-4 col-md-4 col-0"></div>
    </div>
    
<?php 
    if(isset($_POST['update'])){
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if($confirm_password != $password){
            $_SESSION['error'] = error('danger', 'Password does not match!');
            header("location:password_reset.php?code=".$code);
        }else{
            $update = "update user_registration set password = '$confirm_password' where email_code = '$code'";
            $run = mysqli_query($con, $update);
            if($run){
                $_SESSION['error'] = error('success', 'Password update successfully.');
                header("location:login.php");
            }
        }
    }
?>
    
<?php 
    $email = $_POST['email'];
    $select = "select * from user_registration where email = '$email'";
    $res = mysqli_query($con, $select);
    $data = mysqli_fetch_array($res);
    $code = $data['email_code'];
    
    if($data['email'] != $email){
        $_SESSION['error'] = error('danger', 'Invalid Email!');
        header('location:password_reset.php');
    }else if($data['email'] == $email){
 
$mail->From = "info@passveryfast.co.uk";
$mail->FromName = "PassVeryFast";


//To address and name
$mail->addAddress($email, $full_name);
//$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("info@passveryfast.co.uk", "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Welcome";
$mail->Body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
    <head>
    <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta content="width=device-width" name="viewport"/>
    <!--[if !mso]><!-->
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&display=swap" rel="stylesheet">
    <!--<![endif]-->
    <title></title>
    <!--[if !mso]><!-->
    <!--<![endif]-->
    <style type="text/css">
        p{font-size: 19px}
            body {
                margin: 0;
                padding: 0;
                background: white;
            }

            table,
            td,
            tr {
                vertical-align: top;
                border-collapse: collapse;
                
            }

            * {
                line-height: inherit;

            }

            a[x-apple-data-detectors=true] {
                color: inherit !important;
                text-decoration: none !important;
            }
        </style>
    <style id="media-query" type="text/css">
           
            #outer
{
    width:100%;
}
.inner
{
    display: inline-block;
}
h4 {
    margin-block-start: 0.20em!important;
}
h3 {
        
    font-size: 1.17em;
    margin-block-start: 0.20em!important;
    font-weight: bold;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: "\00bb";
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
} 
        </style>
    </head>
    <body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: white;">
    <!--[if IE]><div class="ie-browser"><![endif]-->
    <table bgcolor="white" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: white; width: 100%;" valign="top" width="100%">
    <tbody>
    <tr style="vertical-align: top;" valign="top">
    <td style="word-break: break-word; vertical-align: top;" valign="top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:white"><![endif]-->
    <div style="background-color:white;">
    <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: white;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:white; ">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:white;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:white"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:white;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
    <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px; ">
    <div style="width:100% !important;">
    <!--[if (!mso)&(!IE)]><!-->
    <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px; ">
    <!--<![endif]-->
    <div align="center" class="img-container center autowidth" style="padding-right: 25px;padding-left: 25px;">
    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 25px;padding-left: 25px;" align="center"><![endif]-->
    <div style="font-size:1px;line-height:25px"> </div>
    <div style="font-size:1px;line-height:25px"> </div>
    <!--[if mso]></td></tr></table><![endif]-->
    </div>
    <!--[if (!mso)&(!IE)]><!-->
    </div>
    <!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div style="background-color:white;">
    <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #052d85;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#060818;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:white;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#052d85"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#052d85;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
    <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
    <div style="width:100% !important;">
    <!--[if (!mso)&(!IE)]><!-->
    <div style="border-top:2px solid black; border-left:2px solid black; border-bottom:2px solid Black; border-right:2px solid Black; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px; height: 270px; background: white; padding: auto; text-align: center;  " class="top_header">


    <!--<![endif]-->
    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top: 30px; padding-bottom: 20px; font-family: Arial, sans-serif"><![endif]-->
    
    <img src="'.$logo.'" style="
   height: 200px;
    position:relative;
    top: calc(10%);" />


      
    
    <!--[if (!mso)&(!IE)]><!-->
    </div>

    <!--<![endif]-->
    </div>

    </div>

    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>

    </div>

    </div>

    <br>
    <div style="Margin:0 auto;min-width:320px;max-width:600px;word-wrap:break-word;word-break:break-word;">
    <div style="background-color:white;">
    <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: ;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:white;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#052d85"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#052d85;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
    <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
    <div style="width:100% !important; text-align: center;">
    <!--[if (!mso)&(!IE)]><!-->


    <span style="width: 100%;">
      <h3>
      Reset Password
      </h3>
      <P>Reset Password By click on the button below</P>
    </span>

    <!--<![endif]-->
    </div>

    </div>


    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>

    </div>

    </div>
</div>





    


<br>
    <div style="background-color:white;">
    <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;     ">
  
    <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
    <div style="width:100% !important;">
    <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:15px; padding-right: 0px; padding-left: 0px; ">
   
   
    <div style="color:white;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.5;padding-top:10px;padding-right:30px;padding-bottom:0px;padding-left:30px;">
    <div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.5; color: white; mso-line-height-alt: 18px; ">
   

   <p style="font-size: 16px; color: black; line-height: 1.5; text-align: center; mso-line-height-alt: 24px; margin: 0;">

    
<a href="'.$web_link.'instructor/password_reset.php?code='.$code.'" class="button" style="vertical-align:middle; color: #fff;">Reset</a>
   </p>
   
    
    </div>
    </div>
    </div>
    <!--[if mso]></td></tr></table><![endif]-->
    <div align="center" class="button-container" style="padding-top:25px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 25px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:39pt; width:183.75pt; v-text-anchor:middle;" arcsize="8%" stroke="false" fillcolor="#052d85"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:14px"><![endif]-->
    
    <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
    </div>
    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top: 20px; padding-bottom: 30px; font-family: Arial, sans-serif"><![endif]-->
    <div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:20px;padding-right:20px;padding-bottom:30px;padding-left:20px;">

    </div>
    <!--[if mso]></td></tr></table><![endif]-->
    <!--[if (!mso)&(!IE)]><!-->
    </div>
    <!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>
    <div style="background-color:transparent;">
    <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
    <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
    <div style="width:100% !important;">
    <!--[if (!mso)&(!IE)]><!-->
    <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
    <!--<![endif]-->
    <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
    <tbody>
    <tr style="vertical-align: top;" valign="top">
    <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" valign="top" width="100%">
    <tbody>
    <tr style="vertical-align: top;" valign="top">
    <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (!mso)&(!IE)]><!-->
    </div>
    <!--<![endif]-->
    </div>
    </div>
    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
    </div>
    </div>
    </div>



    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
    </tr>
    </tbody>
    </table>
    <!--[if (IE)]></div><![endif]-->
    </body>
    </html>';
$mail->AltBody = "This is the plain text version of the email content";

$mail->send();

$_SESSION['error'] = error('success', 'Password Reset Email send successfully.');
header("location:login.php");
        
    }
?>
</div>    
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>