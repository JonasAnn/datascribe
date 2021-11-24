<?php
    if(isset($_POST['sign-up'])){
        $email = $_POST['email'];
        $firstname = $_POST['first-name'];
        $middlename = $_POST['middle-name'];
        $lastname = $_POST['last-name'];
        $residence = $_POST['residence'];
        $experience = $_POST['experience'];
        $dob = $_POST['date'];

        $to = "armstrongdeedie@gmail.com";
        $subject = "New Transcriber Registration";

        $message = "
        <html>
          <head>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <title>New Transcriber Registration</title>
            <style>
        @media only screen and (max-width: 620px) {
          table.body h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
          }

          table.body p,
        table.body ul,
        table.body ol,
        table.body td,
        table.body span,
        table.body a {
            font-size: 16px !important;
          }

          table.body .wrapper,
        table.body .article {
            padding: 10px !important;
          }

          table.body .content {
            padding: 0 !important;
          }

          table.body .container {
            padding: 0 !important;
            width: 100% !important;
          }

          table.body .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
          }

          table.body .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
          }
        }
        @media all {
          .ExternalClass {
            width: 100%;
          }

          .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
          }

          .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
          }

          #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
          }

          .btn-primary table td:hover {
            background-color: #34495e !important;
          }

          .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
          }
        }
        </style>
          </head>
          <body class='' style='background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;'>
            <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='body' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;' width='100%' bgcolor='#f6f6f6'>
              <tr>
                <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;' valign='top'>&nbsp;</td>
                <td class='container' style='font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;' width='580' valign='top'>
                  <div class='content' style='box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;'>

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role='presentation' class='main' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;' width='100%'>

                      <!-- START MAIN CONTENT AREA -->
                      <tr>
                        <td class='wrapper' style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;' valign='top'>
                          <table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;' width='100%'>
                            <tr>
                              <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;' valign='top'>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>Hi there,</p>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>A new user wishes to sign up as a transcriber, below is a breakdown of their personal details: </p>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>Name - ".$firstname." ".$middlename." ".$lastname."</p>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>Email - ".$email."</p>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>Date of Birth - ".$dob."</p>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>Transcribing or Data Entry Experience - ".$experience."</p>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>State of Residence - ".$residence."</p>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->
                  </div>
                </td>
              </tr>
            </table>
          </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <armstrongdeedie@gmail.com>' . "\r\n";

        $mailsend = mail($to,$subject,$message,$headers);
        if ($mailsend){
            header('Location: thank.html');
        }else{
            echo '
                <script language="javascript">
                alert("Error signing up, please try filling the form again!")
                </script>
            ';
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Group 29.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>DataScribe</title>
</head>
<body>
    <main class="main">

        <!-- left bar  -->
        <section class="left_bar">
            <div class="left_bar-box">
            <!-- logo block -->
            <div class="logo">
                <img src="./img/DataScribe.svg" alt="Logo" class="logo_img">
            </div>

            <!-- left bar text block -->
            <div class="left_bar-text">
                <div class="text_block">
                    <h2 class="left_bar-header">
                        Consistent Jobs In:
                    </h2>
                    <p class="left_bar-text">Transcription</p>
                    <p class="left_bar-text">Data Entry</p>
                </div>

                <div class="text_block">
                    <h2 class="left_bar-header">
                        Get Paid Often!
                    </h2>
                    <p class="left_bar-text">Get Paid Weekly.</p>
                    <p class="left_bar-text">$20-$25 per hour</p>
                </div>
            </div>
        </div>

            <!-- left bar arty image -->
            <div class="left_bar-art">
                <img src="./img/design.png" alt="just arty design">
            </div>
        </section>

        <!-- form section -->
        <section class="form_box">
            <div class="form_text">
                <h2 class="form_header">Begin Earning From Home</h2>
                <p class="form_paragraph">No Experience Required! If needed, training comes after selection.</p>
            </div>
            <form method="post">
                <label for="email">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </label>
                <label for="first-name">
                    <input type="text" name="first-name" id="first-name" placeholder="First Name" required>
                </label>
                <label for="middle-name">
                    <input type="text" name="middle-name" id="middle-name" placeholder="Middle Name" required>
                </label>
                <label for="last-name">
                    <input type="text" name="last-name" id="last-name" placeholder="Last Name" required>
                </label>

                <label for="residence"> </label>
                    <select name="residence" id="residence">
                        	<option value="Alabama">Alabama (AL)</option>
							<option value="Alaska">Alaska (AK)</option>
							<option value="Arizona">Arizona (AZ)</option>
							<option value="Arkansas">Arkansas (AR)</option>
							<option value="California">California (CA)</option>
							<option value="Colorado">Colorado (CO)</option>
							<option value="Connecticut">Connecticut (CT)</option>
							<option value="Delaware">Delaware (DE)</option>
							<option value="District Of Columbia">District Of Columbia (DC)</option>
							<option value="Florida">Florida (FL)</option>
							<option value="Georgia">Georgia (GA)</option>
							<option value="Hawaii">Hawaii (HI)</option>
							<option value="Idaho">Idaho (ID)</option>
							<option value="Illinois">Illinois (IL)</option>
							<option value="Indiana">Indiana (IN)</option>
							<option value="Iowa">Iowa (IA)</option>
							<option value="Kansas">Kansas (KS)</option>
							<option value="Kentucky">Kentucky (KY)</option>
							<option value="Louisiana">Louisiana (LA)</option>
							<option value="Maine">Maine (ME)</option>
							<option value="Maryland">Maryland (MD)</option>
							<option value="Massachusetts">Massachusetts (MA)</option>
							<option value="Michigan">Michigan (MI)</option>
							<option value="Minnesota">Minnesota (MN)</option>
							<option value="Mississippi">Mississippi (MS)</option>
							<option value="Missouri">Missouri (MO)</option>
							<option value="Montana">Montana (MT)</option>
							<option value="Nebraska">Nebraska (NE)</option>
							<option value="Nevada">Nevada (NV)</option>
							<option value="New Hampshire">New Hampshire (NH)</option>
							<option value="New Jersey">New Jersey (NJ)</option>
							<option value="New Mexico">New Mexico (NM)</option>
							<option value="New York">New York (NY)</option>
							<option value="North Carolina">North Carolina (NC)</option>
							<option value="North Dakota">North Dakota (ND)</option>
							<option value="Ohio">Ohio (OH)</option>
							<option value="Oklahoma">Oklahoma (OK)</option>
							<option value="Oregon">Oregon (OR)</option>
							<option value="Pennsylvania">Pennsylvania (PA)</option>
							<option value="Rhode Island">Rhode Island (RI)</option>
							<option value="South Carolina">South Carolina (SC)</option>
							<option value="South Dakota">South Dakota (SD)</option>
							<option value="Tennessee">Tennessee (TN)</option>
							<option value="Texas">Texas (TX)</option>
							<option value="Utah">Utah (UT)</option>
							<option value="Vermont">Vermont</option>
							<option value="Virginia">Virginia</option>
							<option value="Washington">Washington</option>
							<option value="West Virginia">West Virginia</option>
							<option value="Wisconsin">Wisconsin</option>
							<option value="Wyoming">Wyoming</option>
							<option value="American Samoa">American Samoa (AS)</option>
							<option value="Guam">Guam (GU)</option>
							<option value="Northern Mariana Islands">Northern Mariana Islands (MP)</option>
							<option value="Puerto Rico">Puerto Rico (PR)</option>
							<option value="United States Minor Outlying Islands">United States Minor Outlying Islands (UM)</option>
							<option value="Virgin Islands">Virgin Islands (VI)</option>
                    </select>

                <div class="radio_option">
                    <p> Do you have an Experiece in 
                        Transcribing or Data Entry?</p>
                      <input type="radio" id="yes" name="experience" value="yes">
                      <label id="no-block" for="yes">Yes</label>
                      <input type="radio" id="no" name="experience" value="no">
                      <label id="no-block" for="no">No</label>
                </div>

                <div class="date">
                    <p>Date of Birth:</p>
                        <input type="date" name="date" id="date">
                </div>

                <button type="submit" name="sign-up" class="btn">Sign Up</button>
            </form>
        </section>
    </main>
</body>
</html>