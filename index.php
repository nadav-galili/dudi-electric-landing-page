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
                <div class="col-md-4 col-sm-12">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-electricity-100.png" alt="">
                    </div>
                    <p class="text-center">הקמת מערכות ותשתיות חשמל למבנים ובתי עסק</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-conflict-100.png" alt="">
                    </div>
                    <p class="text-center">איתור ותיקון קצרים ותקלות חשמל</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-powerline-100.png" alt="">
                    </div>
                    <p class="text-center">שדרוג והחלפת לוחות חשמל - הגדלת כוח לתלת פאזי</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-water-heater-100.png" alt="">
                    </div>
                    <p class="text-center">תיקון קצרים בדודי חשמל והחלפת גופי חימום / חממים מהירים</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-outlet-switch-100.png" alt="">
                    </div>
                    <p class="text-center">הוספת נקודות חשמל ותקשורת</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-connected-100.png" alt="">
                    </div>
                    <p class="text-center">אחריות מובטחת על כל עבודה</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="icon-container">
                        <img src="./assetes/icons/icons8-transmission-tower-100.png" alt="">
                    </div>
                    <p class="text-center">הכנה והעברת ביקורת של חברת חשמל ע"י חשמלאי מוסמך מומחה</p>
                </div>
                <div class="col-md-4 col-sm-12">
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
        <section id="contact_form">
            <form action="submit.php" method="post">
                <label for="name">שם:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="phone">טלפון:</label>
                <input type="tel" id="phone" name="phone" required><br>

                <label for="job_description">:</label>
                <textarea id="job_description" name="job_description" rows="4" required></textarea><br>

                <input type="submit" value="Submit">
            </form>
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