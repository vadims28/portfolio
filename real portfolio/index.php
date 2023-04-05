<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vadims Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href=".reset.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <!-- Header nav -->
            <div class="header-nav">
                <a href="#!" class="logo">Vadims</a>
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#!" class="nav-link">About me</a></li>
                        <li class="nav-item"><a href="#!" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#!" class="nav-link">Contact me</a></li>
                    </ul>
                </nav> 
            </div>

            <!--Header content-->
            <div class="header-row">
                <div class="header-content">
                    <h1 class="header-heading"> Hi, I am <br>
                        Vadims Ciunels</h1>
                    <p>Frontend Developer</p>

                    
                    
                </div>
                <div class="header-img">
                    <img src="./img/avatar.png" alt="">
                </div>
            </div>
        </div>
    </header>
            <!--About-->
    <section class="about">
        <div class="about-container">
            <div class="about-title">
                <p>About</p>
            </div>
            <div class="about-content">
                <h4>Im young and passionate guy from Latvia who's tryng to find his place in big world of Data, Desing and Music development.Im intrested in learning all kinds of new information and way to make peoples life more intresting and more comfortable. At the momement im tryng to find a full time/ freelance work specificly in Web development or other fields of modern media. Im commited create fully responsive web sites using HTML CSS and JavaScript. I have a good eye on design concepts and can make adjustments and changes in youre ideas or create them on my own in Photoshop.As intresting bonuss i can create some electronic jinngles and sounds for youre website, so it not only looks good but have some 
                intresting sound to it. </h4>
            </div>
        </div>
    </section>
            <!--Services-->
    <section class="services">
        <div class="container">
                    <div class="title_1">
                        <p>Services</p>
                    </div>
            <div class="services-row">
                <div class="services-card">
                    
                    <img class="service-card-image" src="./img/Sound design.png" alt="Sound design">
                    <h3 class="service-card-title">Sound Design</h3>

                    <p>I create intresting sounds and beats in FL Studio</p>
                </div>

                <div class="services-card">
                    <img class="service-card-image" src="./img/developer.png" alt="Developer">
                    <h3 class="service-card-title">Developer</h3>

                    <p>Im creating Web pages in different styles</p>
                </div>

                <div class="services-card">
                    <img class="service-card-image" src="./img/Design.png" alt="Art Design">
                    <h3 class="service-card-title"> Art Design</h3>

                    <p>Can help you with desing for youre next project</p>
                </div>
            </div>
        </div>
    </section>

            <!--Skills-->
    
    <section class="Skills">

        <div class="title_2">
            <p>My Skills</p>
        </div>
            <div class="skills-container">
                      
                        <div class="skills-card">
                            <div>
                                <h3 class="service-card-title">50%</h3>

                                <p>HTML</p>
                            </div>

                            <div>
                                <h3 class="service-card-title">40%</h3>

                                <p>CSS</p>
                            </div>

                            <div>
                                <h3 class="service-card-title"> 10%</h3>

                                <p>JAVASCRIPT</p>
                            </div>

                            <div>
                                <h3 class="service-card-title"> 2%</h3>

                                <p>PHP</p>
                            </div>
                        </div>
            </div>
    </section>

    

            <!--Contacts-->
    <section>
            <div class="contacts">
                <form class="form-container" >
                    <div class="headline"><span>Contact me</span></div>
                    <div class="form-line success"> 
                        <input type="text" class="form-input" value="Jane Doe" id="text12">
                        <label for="text12" class="top">Name</label>
                        <div class="check-label"></div>
                    </div>
                    <div class="form-line">
                        <input type="text" class="form-input" required>
                        <label>Your email *</label>
                        <div class="error-label">Field is required!</div>
                        <div class="check-label"></div>
                    </div>
                    <div class="form-line">
                        <input type="text" class="form-input">
                        <label>Subject</label>
                        <div class="check-label"></div>
                    </div>
                    <div class="form-line">
                        <textarea class="form-input" required></textarea>
                        <label>Message</label>
                        <div class="check-label"></div>
                        <div class="error-label">Field is required!</div>
                    </div>
            
                    <input type="button" class="form-button" value="Submit">
                </form>
            </div>
    </section>

    <script></script>
</body>
</html>