<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Open+Sans:400,700" rel="stylesheet">
    <title>Profile</title>

    <style>
    
        html {
        box-sizing: border-box;
        }
        *, *:before, *:after {
        box-sizing: inherit;
        }

        body{
            font-family: 'Open Sans', sans-serif;
            margin: 0;
        }

        h1, h2 {
            font-family: 'Caveat', cursive;
            font-weight: 400;
        }

        h1 {
            font-size: 80px;
        }

        h2 {
            font-size: 40px;
            margin-top: 0;
        }

        a {
            color: #ef233c;
        }

        a:hover {
            text-decoration: none;
        }

        .content-wrap {
            max-width: 950px;
            margin: 0 auto;
            padding: 50px;
            overflow: auto;
            color :white;
        }

        .content-wrap2 {
            max-width: 950px;
            margin: 0 auto;
            padding: 50px;
            overflow: auto;
            color :white;
        }

        .col-narrow {
            width: 30%;
            float: left;
            min-height: 175px;
        }

        .col-wide {
            width: 70%;
            float: left;
            padding-left: 20px;
            min-height: 175px;
        }

        /*Header and Footer
        ------------------------*/

        header, footer {
            background-color: black;
            color: white;
            margin: 0 auto;
            width: 100%;
        }

        /*Header*/

        .profile-img {
            border-radius: 100%;
        }

        header h1, header h2, header p{
            color: white;
            margin: 0;
        }

        /*Footer*/

        footer {
            text-align: center;
            background-color :black;
        }

        .contact-info a {
            padding: 10px;
            display: inline-block;
        }

        /*Work Experience
        ------------------------*/

        .work {
            background-color: #edf2f4;
        }

        /*Education
        ------------------------*/

        .education {
            background-color: #d91900;
            color: red;
        }

    </style>

</head>
<body>

        <!-- // Intro -->
    <header>
        <div class="content-wrap2">
        <?php
        $image_properties = array(
            'src'   => 'images/sam.jpg',
            'alt'   => 'samuelmarcell portrait',
            'class' => 'col-narrow profile-img',
            'width' => '200',
            'height'=> '200',
            'rel'   => 'lightbox',
         );
    
          echo img($image_properties);
        ?>
        <div class="col-wide">
                <h1>Samuel Marcellinus</h1>
                <h2>Data Scientist</h2>
                <p>
          I am a student of Sepuluh Nopember Institute of Technology, I am majoring in Infomation Sciences and Technology with a focus in development. I enjoy working with data and love to analyze it. I love writing Python Programs and enjoy learning new technologies. 
        </p>
            </div>
        </div>
    </header>

        <!-- // Education -->
        <section class="education">
            <div class="content-wrap">
            <h2>Education</h2>

            <!-- School details: copy this whole block to add more schools. -->
            <!--PSU-->
            <h3>Sepuluh Nopember Institute of Technology</h3>
            <ul>
              <li><p>Major: Information Sciences and Technology</p></li>
              <li><p> Aug 2017 - June 2021 </p></li>
            </ul>
            <!--MHS-->
            <h3>PENABUR 7 Christian Senior High School</h3> 
            <ul>
              <li><p>Aug 2014 - Jun 2017</p></li>
            </ul>
            
            <!-- Add as many paragraphs as you need. -->
            <!-- End of school details. -->
            </div>
        </section>
    </main>
    
    <!-- // Footer & contact info -->
    <footer>
        <div class="content-wrap2">
        <h2>Let's Keep in Touch!</h2>
        
        <!-- Social media and contact links. Add or remove any networks. -->
        <div class="contact-info">
            <a href="https://twitter.com/samuelmarcell_" target="_blank"> <img src="https://pluspng.com/img-png/twitter-logo-vector-png--512.png" width="50" height="50" href="#"></a>
            <a href="https://linkedin.com/in/samuelmarcell" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/popular-social-media-flat/48/Popular_Social_Media-22-512.png" height="50" width="50"></a>
            <a href="https://github.com/samuelmarcell21/" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/github-512.png" height="50" width="50"></a>
        </div>

        </div>
    </footer>
    
</body>
</html>