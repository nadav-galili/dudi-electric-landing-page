
<?php
function old($fn){
    return $_REQUEST[$fn] ? $_REQUEST[$fn]: '';
  }

    if(isset($_GET['status']) && $_GET['status'] == 'success'){
        echo 
            '<div class="alert alert-success d-flex align-items-center" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        <div>
            ההודעה נשלחה בהצלחה!
            נחזור אליך בהקדם
        </div>
</div>';
    }



       $errors = ['name' => '',
                  'phone'=>'',
                  'job_description'=>'',
                ];
            if(isset($_POST['submit'])){
                $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
                $name = trim($name);
                $phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_STRING);
                $phone = trim($phone);
                $job_description = filter_input(INPUT_POST,'job_description',FILTER_SANITIZE_STRING);
                $job_description = trim($job_description);
                $valid_form = true;
                if(!$name || mb_strlen($name) < 2){
                    $errors['name'] = '* שם חייב להכיל לפחות 2 תווים';
                    $valid_form = false;
                }
                if(!$phone || preg_match('/[^0-9]/',$phone)){
                    $errors['phone'] = '* מספר טלפון חייב להכיל ספרות בלבד';
                    $valid_form = false;
                }
                if(!$job_description || mb_strlen($job_description) < 2){
                    $errors['job_description'] = '* תיאור העבודה חייב להכיל לפחות 2 תווים ';
                    $valid_form = false;
                }

                
                if($valid_form){
                   
                // Set the mail server settings
                ini_set("SMTP", "email-smtp.il-central-1.amazonaws.com"); // Replace with your SES SMTP endpoint
                ini_set("smtp_port", "587"); // Port 587 for TLS
                ini_set("sendmail_from", "nadavg1000@gmail.com"); // Replace with your verified SES email

                // Additional headers
                $headers = "From: nadavg1000@gmail.com\r\n"; // Replace with your verified SES email
                $headers .= "Reply-To: nadavg1000@gmail.com\r\n"; // Replace with your verified SES email
                $headers .= "Return-Path: nadavg1000@gmail.com\r\n"; // Replace with your verified SES email

                // Recipient email address
                $to = "nadavg1000@gmail.com"; // Replace with the recipient's email address

                // Subject and message
                $subject = "Test Email";
                $message = "This is a test email sent from AWS SES via PHP's mail() function.";

                // Send the email
                if (mail($to, $subject, $message, $headers)) {
                    echo "Email sent successfully.";
                    header('Location: index.php?status=success');
                } else {
                    echo "Failed to send email.";
                    header('Location: index.php?status=failed');
                }
                

                    // $to = "nadavg@mobile-brain.net";
                    // $subject = "הודעה מאתר דודי סעדי";
                    // $message = "שם: $name \nטלפון: $phone \nתיאור העבודה: $job_description";
                    // $headers = 'From: sender@example.com' . "\r\n" .
                    // 'Reply-To: sender@example.com' . "\r\n" .
                    // 'X-Mailer: PHP/' . phpversion();
                    // mail($to,$subject,$message,$headers);
                }else{
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <div>
                        אנא תקן את השדות המסומנים באדום
                    </div>
                </div>';
                }
            }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>דודי סעדי - חשמלאי</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles-version6.css" />
    <link rel="icon" href="./assetes/images/dudi.jpg" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center">
        <a class="navbar-brand" href="#"> עבודות חשמל MS</a>
        <div class="iconImage me-3">
            <img src="./assetes/images/dudi.jpg" alt="company logo" />
        </div>
    </nav>
    <header class="hero mh-90">
        <div class="container text-center my-3">
            <h1 class="mb-1 mt-2">דודי סעדי</h1>
            <h2 class="mb-2 mt-2">חשמלאי מורשה</h2>
            <h3 class="my-5">
                .ביצוע כל עבודות החשמל לבית ולעסק
                <br />

                מספק שירות תיקונים אמין, מהיר ומקצועי
                לכל תקלות החשמל באזור חדרה והשרון
            </h3>


        </div>
    </header>
    <div class="d-flex flex-row sticky-buttons justify-content-between">

        <div class="w-100  ">
            <a href="https://wa.me/972543335316" class="btn whatsup btn-lg w-100 pt-3 ">
                <i class="fab fa-whatsapp"></i> ווטסאפ
            </a>
        </div>
        <div class="w-100">
            <a href="tel:0543335316" class="btn btn-primary btn-lg w-100 pt-3">
                <i class="fas fa-phone-alt"></i> חיוג מהיר
            </a>
        </div>

    </div>
    <main class="mt-5">
        <section id="icons-list">
            <div class="row">
                <div class="col-md-4 col-sm-12 ">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-electricity-100.png" alt="">
                    </div>
                    <p class="text-center">הקמת מערכות ותשתיות חשמל למבנים ובתי עסק</p>
                </div>
                <div class="col-md-4 col-sm-12 mt-3">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-conflict-100.png" alt="">
                    </div>
                    <p class="text-center">איתור ותיקון קצרים ותקלות חשמל</p>
                </div>
                <div class="col-md-4 col-sm-12 mt-3">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-powerline-100.png" alt="">
                    </div>
                    <p class="text-center">שדרוג והחלפת לוחות חשמל - הגדלת כוח לתלת פאזי</p>
                </div>
                <div class="col-md-4 col-sm-12 mt-3">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-water-heater-100.png" alt="">
                    </div>
                    <p class="text-center">תיקון קצרים בדודי חשמל והחלפת גופי חימום / חממים מהירים</p>
                </div>
                <div class="col-md-4 col-sm-12 mt-3">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-outlet-switch-100.png" alt="">
                    </div>
                    <p class="text-center">הוספת נקודות חשמל ותקשורת</p>
                </div>
                <div class="col-md-4 col-sm-12 mt-3">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-connected-100.png" alt="">
                    </div>
                    <p class="text-center">אחריות מובטחת על כל עבודה</p>
                </div>
                <div class="col-md-4 col-sm-12 mt-3">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-transmission-tower-100.png" alt="">
                    </div>
                    <p class="text-center">הכנה והעברת ביקורת של חברת חשמל ע"י חשמלאי מוסמך מומחה</p>
                </div>
                <div class="col-md-4 col-sm-12 mt-3">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-relay-home-automation-100.png" alt="">
                    </div>
                    <p class="text-center">התקנת והחלפת גופי תאורה, מאווררי תיקרה ותנורי אמבטיה</p>
                </div>

            </div>
        </section>

        <section id="notice" class="mt-3 container">
            <div class="danger-container d-flex flex-row justify-content-center">
                <h4 class="mb-0 me-2 align-self-center">!?הידעת</h4>
                <div class="danger-img-container">
                    <img src="./assetes/icons/icons8-light-on.gif" alt="danger-icon" />
                </div>
            </div>

            <p class="text-center">
                רוב השריפות שפורצות עקב תקלות בחשמל, יכולות להימנע אם נעזרים בשרות של חשמלאי מקצועי לבדיקה וטיפול
                מונע
            </p>
        </section>
        <section id="contact_form" class="mt-4">
        <div class="row">
            <div class="col-8 col-md-4  mx-auto contact_form"">
                <form action="" dir="rtl" method="POST" >
                   <div class="form-group my-3">
            <label for="name">שם:</label>
                      <input type="name" class="form-control" id="name"  name="name"   value="<?=old('name');?>">
                      <span class="text-danger"><?=$errors['name']?></span>
                 </div>
          <div class="form-group my-3">
            <label for="phone">טלפון:</label>
            <input type="phone" class="form-control" id="phone" name="phone"   value="<?=old('phone');?>">
            <span class="text-danger"><?=$errors['phone']?></span>
        
        </div>
          <div class="form-group my-3">
    <label for="job_description">תאור העבודה:</label>
    <textarea class="form-control" id="job_description" rows="5" name="job_description"  >
    <?=old('job_description');?>
    </textarea>
    <span class="text-danger"><?=$errors['job_description']?></span>
       
</div>
        <div class="d-flex justify-content-center my-3">
    <button type="submit" name="submit" class="btn text-white bg-black w-100">שלח</button>
  </div>
        </form>
            </div>
        </div>
        </section>
    </main>
    <footer>
        <p class="text-center fw-normal">אתר זה אינו מחוייב בנגישות*</p>
        <p class="text-center fw-normal">
            created by Nadav Galili 🧙🏼‍♂️ &copy <?= date('Y');?>
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"
        ></script> -->
    <script src="script.js"></script>
</body>

</html>