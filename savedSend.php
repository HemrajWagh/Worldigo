          <?php
          session_start();
          $name = $tym = $message = $email = $phone  = $project = $source = $project_name = $pid =  "";
          $err = [];
          // header('Content-Type: application/json');
          // date_default_timezone_set("Asia/Kolkata");
          // var_dump($_POST);


          // var_dump($_POST);
          // $password = "7LSZNNNouF6eulOP";

          $servername = "localhost";
          $username = "Kp_Dastak";
          $password = "aF2sDrSpvDs97flw";

          try {
            $conn = new PDO("mysql:host=$servername;dbname=kp_dastak_db", $username, $password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }

          if(isset($_COOKIE['__gtm_campaign_url'])){

                    $utm_sourceUrl =$_COOKIE['__gtm_campaign_url'];    
                  }

                  // parse_url() function to parse the URL
                  // and return an associative array which
                  // contains its various components

                  $utmUrl=parse_url($utm_sourceUrl);
                  // var_dump(parse_url($utmUrl));

                  // parse_str() function to parse the
                  // string passed via URL
                  parse_str($utmUrl['query'], $params);
                  // echo ' Hi '.$params['utm_campaign'].' your emailID is '.$params['utm_medium'];

                  $utmSource=$params['utm_source'];
                  $utmCampaign=$params['utm_campaign'];
                  $utmMedium=$params['utm_medium'];

                  if(is_null($utmSource)){
                    $utmSource='Organic';
                  };
                  if (is_null($utmMedium)) {
                    $utmMedium='';
                  };
                  if (is_null($utmCampaign)) {
                    $utmCampaign='';
                  };

                  $siteUrl='https://www.kumardastak.com';

                  if(is_null($utm_sourceUrl)){
                    $utm_Url=$siteUrl;
                  }
                  else{
                    $utm_Url=$utm_sourceUrl;
                  };



          if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = $_POST['name'];
          }else{
            $err['name'] = "Name is Required";
          }


          $phone = $email = "";
          $err = [];

          // Check if both email and phone are empty
          if (empty($_POST['mobile']) && empty($_POST['email'])) {
              $err['phone'] = "Either mobile number or email is required.";
          } else {
              // Validate phone if provided
              if (!empty($_POST['mobile'])) {
                  if (validate_phone_number($_POST['mobile']) === true) {
                      $phone = $_POST['mobile'];
                  } else {
                      $err['phone'] = "Invalid mobile number.";
                  }
              }

              // Validate email if provided
              if (!empty($_POST['email'])) {
                  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                      $email = $_POST['email'];
                  } else {
                      $err['email'] = "Invalid email format.";
                  }
              }
          }

          
      //     if (validate_phone_number($_POST['mobile']) == true) {
      //      if(isset($_POST['mobile']) && !empty($_POST['mobile'])){
      //       $phone = $_POST['mobile'];
      //     }else{
      //      $err['phone'] = "Mobile number is Required";
      //    }
      //  } else {
      //   $err['phone'] = "Invalid Mobile number";
      // }

      // if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      //   $err['email'] = "Invalid email format";
      // }else if(isset($_POST['email']) && !empty($_POST['email'])){
      //   $email = $_POST['email'];
      // }else{
      //   $err['email'] = "Email is Required";
      // }

      // either email or phone is required


      if(isset($_POST['message']) && !empty($_POST['message'])){
        $message = $_POST['message'];
      }else{
        $err['message'] = "Message is Required";
      }

      if (isset($_POST['pid']) && $_POST['pid'] !== '') {
          $pid = $_POST['pid'];
      } else {
          $pid = null; // Optional, or you can skip this line if not needed
      }



      

      if (isset($_POST['source'])) {
        $source=$_POST['source'];
      }
        // $source = "KP_WebSite";
        $source = "Dastak";

      if (isset($_POST['KpSidebarForm'])) {
        $PopUp=$_POST['KpSidebarForm'];
      }

      
      $projects = array(
        "527663903571816625"=>"Panache",
        "527663903571816624"=>"Parc Residences",
        "527663903571816623" =>"Pinnacle" ,
        "527663903571816622" =>"Kumar Prakruti" ,
        "527663903571816620"  =>"Prithvi" , 
        "560338377402839217"  =>"Palm Spring Tower",
        "527663903571816481" => "Princetown Tower",
        "527663903571816278" => "Princetown Royal",
        "527664231125816158" => "Primus",
        "527664231125816101" => "Parasmani",
        "527664231125816273" => "Prospera",
        "540797986297839761" => "Prajwal",
        "529050893144816332" => "Siddhachal",
      );

      $project = $projects[$pid];

      if(isset($_POST['project_name']) && !empty($_POST['project_name'])){
        $projectName = $_POST['project_name'];
      }else{
        // $err['project_name'] = "Project Name is Required";
        $projectName = null; 
      }

      if ($pid) {
          $project = $projects[$pid];
      } else {
          $project = $projectName;
      }
      
      // if ($pid) {
      //   $project = $projects[$pid];
      // }
      // else{
      //   $project = $_POST['project_name'];
      // }

        // var_dump($project);
      
        // var_dump($_POST);
        // var_dump($_POST['csrf_token']);
        // var_dump($_SESSION['csrf_token']);
        // var_dump($err);
      if(count($err) == 0){
        // var_dump($err);die(); 
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die("CSRF token mismatch - potential CSRF attack blocked.");
        }


        if (!isset($_POST['form_submission_id']) || $_POST['form_submission_id'] !== $_SESSION['form_submission_id']) {
            echo json_encode([
                "status" => "error",
                "message" => "Duplicate or invalid form submission."
            ]);
            exit;
        }

        // var_dump($_POST);
        // var_dump($err);
        
        
        // $project = "Dastak";
        // echo "<pre>";
        // print_r($projects[$pid]);
        // echo "<pre>";
        $honeypot=$_REQUEST['firstname'];
        if(empty($honeypot )){
        // if(true){
          
          // if ($conn->query($sql) === TRUE) {
          //   echo "New record created successfully";
          // } else {
          //   echo "Error: " . $sql . "<br>" . $conn->error;
          // }
          
          
          $query = "INSERT INTO leads SET name=:name, email=:email, mobile_no=:phone, message=:message, project_name=:project, source=:source, utm_source=:utmSource, utm_medium=:utmMedium, utm_campaign=:utmCampaign";

          // if ($conn->query($query) === TRUE) {
          //   echo "New record created successfully";
          // } else {
          //   echo "Error: " . $query . "<br>" . $conn->error;
          // }

          // var_dump($_POST);die();
// 
          $stmt = $conn->prepare($query);
          $name = htmlspecialchars(strip_tags($name));
          $email = htmlspecialchars(strip_tags($email));
          $phone = htmlspecialchars(strip_tags($phone));
          $message = htmlspecialchars(strip_tags($message));
          $tym = htmlspecialchars(strip_tags($tym));
          $source = htmlspecialchars(strip_tags($source));
          $utmSource = htmlspecialchars(strip_tags($utmSource));
          $utmMedium = htmlspecialchars(strip_tags($utmMedium));
          $utmCampaign = htmlspecialchars(strip_tags($utmCampaign));

        // 
          $stmt->bindParam(":name", $name);
          $stmt->bindParam(":email", $email);
          $stmt->bindParam(":phone", $phone);
          $stmt->bindParam(":message", $message);
          $stmt->bindParam(":project", $project);
          $stmt->bindParam(":source", $source);
          $stmt->bindParam(":utmSource", $utmSource);
          $stmt->bindParam(":utmMedium", $utmMedium);
          $stmt->bindParam(":utmCampaign", $utmCampaign);

          // print $query;
          // if(true){
          if($stmt->execute()){
            // var_dump($post);
            $PopUp='';

            $post = array (
              'Name'=> $name,
              'Email'=>$email,
              'Phone'=>$phone,
              'Remarks'=>$message,
              'Project'=>$project,
              'LandingPage'=>$utm_Url,
              'Referral'=>$source,
              'Utm_Source'=>$utmSource,
              'Utm_Medium'=>$utmMedium,
              'Utm_Campaign'=>$utmCampaign
            );
            $qString=http_build_query($post);
            //     echo "<pre>";
            //     print_r($qString);
            //     echo "<pre>";

                // var_dump($qString);
            $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL,"https://quadraleads.in/QleadsKW/EnquiryModule/Common/EnquiryToExternalSource");
            curl_setopt($ch, CURLOPT_URL,"https://quadra.kumarworld.co.in/Qleads/EnquiryModule/Common/EnquiryToExternalSource");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HEADER,true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER);
            $resp = trim(curl_exec($ch));
            
            
                // $resp = curl_exec($ch);
            $json = json_decode($resp);

            if ($e = curl_error($ch)) {
              echo $e;
            }
            else{
              $decoded = json_decode($resp);
            // echo "<pre>";
            // print_r($post);
            // echo "<pre>";
                    // print_r($resp);
                    // echo "<pre>";
                    // print_r($decoded);
                    // echo "<pre>";
                    // var_dump($decoded);
              $encoded = json_encode($decoded,true);
                    // var_dump  ($encoded);

                    // foreach ($decoded as $key => $value) {
                    // echo $key .':'.$value.'<br>';
                    //     }
            }
            curl_close ($ch);
            // ----------------------Qudra Integreation End-------------

            //email

            $to = "richard.mudaliar@megapolis.co.in" ;
            // $to = "hemraj.wagh@kumarworld.com" ;

            $subject = "Kumar Properties Enquiry - " .$project; 

            $body  .= '<html><body>';
            $body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';    
            $body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$name. "</td></tr>";
            $body .= "<tr><td><strong>Email:</strong> </td><td>" . $email. "</td></tr>";
            $body .= "<tr><td><strong>Phone:</strong> </td><td>" .  $phone. "</td></tr>";
            $body .= "<tr><td><strong>Project:</strong> </td><td>"  .$project. "</td></tr>";
            $body .= "<tr><td><strong>Remarks:</strong> </td><td>"  .$message. "</td></tr>";
            $body .= "<tr><td><strong>Source:</strong> </td><td>"  .$source. "</td></tr>";
            $body .= "<tr><td><strong>UTM Source:</strong> </td><td> ".$utmSource."</td></tr>";
            $body .= "<tr><td><strong>Campaign Medium:</strong> </td><td> ".$utmMedium."</td></tr>";
            $body .= "<tr><td><strong>Campaign Name:</strong> </td><td> ".$utmCampaign."</td></tr>";
            $body .= "</table>";
            $body .= "</body></html>";

            $headers = "From: www.kumardastak.com \r\n";
                                      //$headers .='X-Mailer: PHP/' . phpversion();
                                           //$headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $send = mail($to, $subject, $body, $headers);
              // unset($_SESSION['csrf_token']);
            unset($_SESSION['csrf_token']);
            unset($_SESSION['form_submission_id']);
              session_destroy();
            // header('Location: thank-you.php');
              echo json_encode(["status" => "success"]);
              exit;
            // header('Location: thank-you.php');

          } 
               // -----------End if($stmt) ---------
          else{
            // return false;
            if (!empty($err)) {
                echo json_encode([
                    "status" => "error",
                    "errors" => $err
                ]);
                exit;
            }

          }

        } 

      }else{
        $_SESSION['errors'] = $err;
        $_SESSION['postval'] = $_POST;
        // echo "<pre>";
        // print_r($err);
        // echo "<pre>";
        // var_dump($err);die();
        header('Location: index.php');
      }


            // --------------End if(honypot)----------
      function validate_phone_number($phone)
      {    
       if (strlen($phone) <= 10) {
        return true;
      } else {
       return false;
     }
   }



   if(isset($_COOKIE['__gtm_campaign_url'])){
    unset($_COOKIE['__gtm_campaign_url']);    
  }
            // function validate_email($email)
            // {    
            //    if (strlen($email) <= 30) {
            //       return true;
            //    } else {
            //      return false;
            //    }
            // }

  ?>                                
  <!-- <?php 
  ?> -->

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Processing....</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
  <section class="w-100 section-1 h-100 ">
    <div class="container ">
      <div class="row h-100 ">
        <img src="images/loading.gif" alt="Processing..." style="display: flex;justify-content: center;align-items: center; margin:10px auto; width:100%; max-width: 870px;">
      </div>
    </div>
  </section>

</body>
</html> -->