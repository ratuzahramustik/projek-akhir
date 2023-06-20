<?php
require 'controller.php';
$connect = mysqli_connect("localhost", "root", "", "ratubase");
$data = query("SELECT * FROM contac");

if(isset($_POST["submit"])){

    if( tambah($_POST) > 0){
        echo "<script>alert('Data berhasil disimpan.');window.location='index.php';</script>";
    }
    else{
         echo "<script>alert('Data gagal disimpan.');window.location='index.php';</script>";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="">
      <h3>BURGER <br> PRINCE</h3>
    </div>

    <div class="navigation">
      <ul>
        <li><a href="">About</a></li>
        <li><a href="">Pricing</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">All Block</a></li>
      </ul>

      <div class="icon">
        <ul>
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-pinterest"></i></li>
          <li><i class="fab fa-linkedin"></i></li>
        </ul>
      </div>
    </div>
  </header>

  <div class="banner">
    <div class="contentText">
      <h5>Express food to raise your mood</h5>
      <h2>Mexican Burger</h2>
      <h4>$14.99</h4>
    </div>
  </div>

  <!-- <div class="reservation">
        <div class="resv1">
            <div class="images">
                <img src="chief-1.jpg" alt="">
            </div>
        </div>
        <div class="resv2">
            <div class="chiefProfile">
                <h2>Jack Winsly</h2>
                <h5>Head Chief</h5>
                <p class="teks1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quis magnam aliquid, velit minus molestias commodi id placeat quidem facilis quia obcaecati doloribus odit recusandae ut sint. Vero, blanditiis cum.
                </p>
                <p class="teks2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quis magnam aliquid, velit minus molestias commodi id placeat quidem facilis quia obcaecati doloribus odit recusandae ut sint. Vero, blanditiis cum.
                </p>
                <img src="hand.png" alt="">
            </div>
        </div>
        <div class="resv3">
            <form action="">
                <h3>Take a Reservation</h3>
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Phone">
                <input type="text" placeholder="Date Time">
                <textarea name="" id="" placeholder="Message"></textarea>
            </form>
            <button>Order Now</button>
        </div>
    </div> -->
  <br>
  <table border="1">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Nomor Telepon</th>
        <th>Waktu</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $file) { ?>
        <tr>
          <td><?= $file["name"] ?></td>
          <td><?= $file["email"] ?></td>
          <td><?= $file["phone"] ?></td>
          <td><?= $file["date"]  ?></td>
          <td><?= $file["message"]  ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <br>

  <div class="discount">
    <div class="contentDiscount">
      <h5>Best Offer</h5>
      <h2>Double Snack Menu</h2>
      <ul class="price">
        <li>$29.00</li>
        <li>$60.00</li>
      </ul>
      <p>Enjoy this amazing offer, which includes our <br>Standard Taco and Mexican Sauce</p>
      <button>Order Online</button>
    </div>
  </div>

  <div class="menu">
    <div class="menuTitle">
      <h5>Our product</h5>
      <h3>Our Menu</h3>
    </div>

    <div class="category">
      <ul>
        <li><a href="">All</a></li>
        <li><a href="">Burgers</a></li>
        <li><a href="">Drinks</a></li>
        <li><a href="">Snacks</a></li>
      </ul>
    </div>

    <div class="foodMenu">
      <div class="card">
        <img src="menu1.jpg" alt="">

        <div class="text">
          <h3>Local Recipes</h3>
          <p>Smashburger mencari rasa & bahan unik untuk membuat burger lokal kami.</p>
          <h4>$29.00</h4>
        </div>
      </div>
      <div class="card">
        <img src="menu2.jpg" alt="">

        <div class="text">
          <h3>Classic Smash</h3>
          <p>Smashburger mencari rasa & bahan unik untuk membuat burger lokal kami.</p>
          <h4>$19.00</h4>
        </div>
      </div>
      <div class="card">
        <img src="menu3.jpg" alt="">

        <div class="text">
          <h3>Bacon Avocado Club</h3>
          <p>Smashburger mencari rasa & bahan unik untuk membuat burger lokal kami.</p>
          <h4>$20.00</h4>
        </div>
      </div>
      <div class="card">
        <img src="menu4.jpg" alt="">

        <div class="text">
          <h3>BBQ Bacon & Cheddar</h3>
          <p>Smashburger mencari rasa & bahan unik untuk membuat burger lokal kami.</p>
          <h4>$29.00</h4>
        </div>
      </div>
      <div class="card">
        <img src="menu5.jpg" alt="">

        <div class="text">
          <h3>Juice</h3>
          <p>Smashburger mencari yang segar dan unik untuk juice kami.</p>
          <h4>$29.00</h4>
        </div>
      </div>
      <div class="card">
        <img src="menu6.jpg" alt="">

        <div class="text">
          <h3>Beer</h3>
          <p>Smashburger mencari rasa & bahan unik untuk minuman beer kami.</p>
          <h4>$19.00</h4>
        </div>
      </div>
      <div class="card">
        <img src="menu7.jpg" alt="">

        <div class="text">
          <h3>Smashfries</h3>
          <p>Smashburger mencari rasa & bahan unik untuk membuat burger lokal kami.</p>
          <h4>$29.00</h4>
        </div>
      </div>
      <div class="card">
        <img src="menu8.jpg" alt="">

        <div class="text">
          <h3>Fried Pickles</h3>
          <p>Smashburger mencari rasa & bahan unik untuk membuat makanan lokal kami.</p>
          <h4>$29.00</h4>
        </div>
      </div>
    </div>
  </div>

  <div class="testimonials">
    <div class="testimonialsTitle">
      <h5>Testimonials</h5>
      <h3>What Clients Say?</h3>
    </div>

    <div class="testimonialsContent">
      <div class="card">
        <img src="user1.jpg" alt="">

        <div class="teks">
          <p>Saya sangat suka dengan Smashburger ini karena rasa Burgernya yang unik dibandingkan dengan Burger lainnya, dan juga rasa beer dan minuman yang sangat special.</p>
          <h3>Serlyn anatasya</h3>
        </div>
      </div>
      <div class="card">
        <img src="user2.jpg" alt="">

        <div class="teks">
          <p>Saya sangat suka dengan Smashburger ini karena rasa Burgernya yang unik dibandingkan dengan Burger lainnya, dan juga rasa beer dan minuman yang sangat special..</p>
          <h3>Ratesya ananda</h3>
        </div>
      </div>
      <div class="card">
        <img src="user3.jpg" alt="">

        <div class="teks">
          <p>Saya sangat suka dengan Smashburger ini karena rasa Burgernya yang unik dibandingkan dengan Burger lainnya, dan juga rasa beer dan minuman yang sangat special.</p>
          <h3>Ananda joe</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="sponsored">
        <img src="sponsored1.png" alt="">
        <img src="sponsored2.png" alt="">
        <img src="sponsored3.png" alt="">
        <img src="sponsored4.png" alt="">
        <img src="sponsored5.png" alt="">
        <img src="sponsored6.png" alt=""> -->
  <!-- </div> -->

  <div class="team">
    <div class="teamTitle">
      <h5>Our Team</h5>
      <h3>Meet Our Team</h3>
    </div>

    <div class="teamContent">
      <div class="card">
        <img src="team1.jpg" alt="">

        <h3>Edward Robinson</h3>
        <h4>Founder</h4>
        <ul class="socials">
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-pinterest"></i></li>
          <li><i class="fab fa-linkedin"></i></li>
        </ul>
      </div>
      <div class="card">
        <img src="team2.jpg" alt="">

        <h3>Ann Smith</h3>
        <h4>Founder</h4>
        <ul class="socials">
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-pinterest"></i></li>
          <li><i class="fab fa-linkedin"></i></li>
        </ul>
      </div>
      <div class="card">
        <img src="team3.jpg" alt="">

        <h3>John Doe</h3>
        <h4>Founder</h4>
        <ul class="socials">
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-pinterest"></i></li>
          <li><i class="fab fa-linkedin"></i></li>
        </ul>
      </div>
      <div class="card">
        <img src="team4.jpg" alt="">

        <h3>Amanda Petters</h3>
        <h4>Founder</h4>
        <ul class="socials">
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-pinterest"></i></li>
          <li><i class="fab fa-linkedin"></i></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="open">
    <div class="open1">
      <h3>Free Shipping</h3>
      <p>Free Shipping on all order</p>
      <p>Call : <span>0822-1144-7800</span></p>
    </div>
    <div class="open2">
      <h3>Opening Hours</h3>
      <p>Monday - Sunday</p>
      <p>09:00am - 07:00pm</p>
    </div>
  </div>

  <div class="contact">
    <div class="contactTitle">
      <h5>Get In Touch</h5>
      <h3>Contact Us</h3>
    </div>

    <div class="contactContent">
      <div class="forms">
        <form action="" method="post">
          <input type="text" name="name" placeholder="name">
          <input type="text" name="email" placeholder="email">
          <input type="text" name="phone" placeholder="phone">
          <input type="text" name="date" placeholder="Date Time">
          <textarea name="message" id="" placeholder="Message"></textarea>
         <button type="submit" name="submit">Order Now</button>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <div class="logo">
      <img src="logo.png" alt="">
      <h3>BURGER <br> PRINCE</h3>
    </div>

    <div class="social">
      <ul>
        <li><a href="https://www.instagram.com/haechaenratu/?hl=id" class="fab fa-facebook"></i></li></a>
        <li><a href="https://www.instagram.com/haechaenratu/?hl=id" class="fab fa-twitter"></i></li></a>
        <li><a href="https://www.instagram.com/haechaenratu/?hl=id" class="fab fa-pinterest"></i></li></a>
        <li><a href="https://www.instagram.com/haechaenratu/?hl=id" class="fab fa-linkedin"></i></li></a>
      </ul>
    </div>


  </footer>
</body>

</html>