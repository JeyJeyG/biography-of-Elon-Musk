<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elon Musk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#edu">Education</a></li>
            <li><a href="#services">Companies</a></li>
            <li><a href="#contact">Contact</a></li>



        </ul>
    </nav>
    <section id="home">
        <div class="main">
            <h1 class="heading">Who is <br>ELON MUSK</h1>
            <button class="btn">
                Mars
            </button>

        </div>
        
    </section>
    <session id="about">
        <div id="pic">
            <h1 class="headings">About Musk</h1>
            <video controls width="420" height="340" autoplay>
                <source src="elonmusk.mp4" type="video/mp4">

            </video>
            <div id="intro">
                <h2>Elon Musk</h2>
                <p>
                    South African born Elon Musk is the renowned entrepreneur
                     and innovator behind PayPal, SpaceX, Tesla, and SolarCity.

Musk wants to save our planet, he wants to
 send citizens into space, to form a colony
  on Mars, he wants to make money while doing
   these things and he wants us all to know about it.

The personal tale of Musk’s life comes

with all the trappings one associates
 with a great, drama filled story. He was
  a freakishly bright kid who was bullied
   brutally at school and abused by his father. 
   In the midst of these rough conditions and 
   the violence of apartheid South Africa,
    Musk still thrived academically and attended
     the University of Pennsylvania, where he paid
      his own way through school by turning his
       house into a club and throwing massive parties.

He started a pair of huge dot com successes, including PayPal, which eBay acquired for $1.5 billion in 2002. Musk was forced out as CEO and so began his lost years in which he decided to go it alone and baffled friends by investing his fortune in rockets and electric cars. Meanwhile Musk’s marriage disintegrated as his technological obsessions took over his life …

Elon Musk is the Steve Jobs of the present and the future and for the past twelve months, he has been shadowed by tech reporter, Ashlee Vance. Elon Musk: How the Billionaire CEO of Spacex and Tesla is Shaping our Future is an important, exciting and intelligent account of the real life Iron Man.
                </p>
            </div>
        </div>
        <?php
        echo date('d/M/Y');
        
         ?>
    </session>
    <session id="edu">
        <h1 class="headings">
            Education
        </h1>
        <div class="gallery">
            <img src="img3.jpg" alt="">
            <img src="img4.jpeg" alt="">
            <img src="img5.jpeg" alt="">
            <img src="img6.jpg" alt="">
            <img src="img7.jpg" alt="">
            <img src="img1.jpg" alt="">

        </div>
    </session>
    <session id="services">
       <h1 class="headings">Companies</h1>
       <div class="row">
           <div class="box">
            <img src="te.png" alt="">
               <h1 class="headings"></h1>
               <p>
                Tesla was founded in 2003 by a group of 
                engineers who wanted to prove that people 
                didn’t need to compromise to drive electric 
                – that electric vehicles can be better, quicker 
                and more fun to drive than gasoline cars. Today, 
                Tesla builds not only all-electric vehicles but 
                also infinitely scalable clean energy generation 
                and storage products. Tesla believes the faster 
                the world stops relying on fossil fuels and moves 
                towards a zero-emission future, the better.
               </p>
           </div>
           <div class="box">
            <img src="sp.jpg" alt="">
            <h1 class="headings"></h1>
            <p>
                SpaceX, in full Space Exploration
                 Technologies Corporation, American
                  aerospace company founded in 2002
                   that helped usher in the era of
                    commercial spaceflight. It was
                     the first private company to
                      successfully launch and 
                      return a spacecraft from
                      Earth orbit and the first
                      to launch a crewed spacecraf
                      t and dock it with the 
                      International Space Station 
                      (ISS). Headquarters are in 
                      Hawthorne, California.
            </p>
        </div>
        <div class="box">
            <img src="bo.png" alt="">
            <h1 class="headings"></h1>
            <p>
                The Boring Company is an infrastructure
                 and tunnel construction company that
                  aims to dig tunnels efficiently to
                   facilitate an underground transportation
                   network. The company was founded by
                    Elon Musk in late 2016.
            </p>
        </div>
       </div>
    </session>
    <session id="contact">
        <h1 class="headings">CONTACT</h1>
        <form action="connect.php" method = "post">
            <input type="text" name="name" id="input" placeholder="Emter your name">
            <input type="email" name="email" class="input" placeholder="Enter your email">
            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Enter your message"></textarea>
            <button type= "submit" name = "submit"  class= "btn1"> Send Mail</button>

        </form>
        
    </session>

</body>
</html>