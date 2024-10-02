<?php 
	include 'header.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
			<center><h2>Add New User</h2></center>
			<?php include 'error.php'; ?>
			<form method="post">
				<div class="form-group">
					<label>Email </label>
					<input type="email" name="email" class="form-control" placeholder="Enter User Email" required="">
				</div>
				<div class="form-group mt-3">
					<label>First Name</label>
					<input type="text" name="first_name" class="form-control" placeholder="Enter User First Name " required="">
				</div>
				<div class="form-group mt-3">
					<label>Last Name</label>
					<input type="text" name="last_name" class="form-control" placeholder="Enter User Last Name" required="">
				</div>
				<div class="form-group mt-3">
					<label> Address</label>
					<input type="text" name="address" class="form-control" placeholder="Enter User Last Name" required="">
				</div>
				<div class="form-group mt-3">
					<label> City</label>
					<input type="text" name="city" class="form-control" placeholder="Enter User City" required="">
				</div>
				<div class="form-group mt-3">
					<label> Post Code</label>
					<input type="text" name="postcode" class="form-control" placeholder="Enter User Post Code" required="">
				</div>
				<div class="form-group mt-3">
					<label>Country</label>
					<input type="text" name="country" class="form-control" placeholder="Enter User Country" required="">
				</div>
				<div class="form-group mt-3">
					<label>Phone</label>
					<input type="number" name="phone" class="form-control" placeholder="Enter User Phone Number" required="">
				</div>
				<div class="form-group mt-3">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter User Password" required="">
				</div>
				<center><button type="submit" name="register_btn" class="btn btn-dark btn-lg mt-3">Submit</button></center>
			</form>
		</div>
<?php 
    if(isset($_POST['register_btn'])){
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $full_name = $first_name." ".$last_name;
        $error = 0;

        $email_code = random_int(00000000, 99999999);

        $select = "select * from user_registration where email = '$email'";
        $res = mysqli_query($con, $select);
        $data = mysqli_fetch_array($res);

        if($data['email'] == $email){
            $_SESSION['error'] = error('danger', 'Email already excited!');
            header("location:add_new_user.php");
        }else{
            $insert = "insert into user_registration(email, first_name, last_name, address, city, postcode, country, phone, password, email_code, email_status) value ('$email', '$first_name', '$last_name', '$address', '$city', '$postcode', '$country', '$phone', '$password', '$email_code', 'Pending')";
            $run = mysqli_query($con, $insert);
            if($run){
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
  font-size: 28px;
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
      Congratulations! Your account has been created successfully!
      </h3>
      <P>Verified Account By click on the button below</P>
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

    
<a href="'.$student_aprove_link.$email_code.'" class="button" style="vertical-align:middle; color: #fff;">Verify</a>
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
                $_SESSION['error'] = error('success', 'Account has been registered successfully. Now verify email before login.');
                header("location:add_new_user.php");
            }
        }
    }
?>  
		<div class="col-lg-3 col-md-3 col-0"></div>
	</div>		
</div>

<?php 
	include 'footer.php';
?>