<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fontawesome cdn  -->
    <script
      src="https://kit.fontawesome.com/3477ae541c.js"
      crossorigin="anonymous"
    ></script>
    <!-- swipper cdn  -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <!-- bootstrap cdn -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css" />
    <title>Stephans-Astrology</title>
  </head>
  <body>
    <!-- header  -->
    <header class="header">
      <a href="#home" class="logo">Stephans-Astrology</a>
      <nav class="navbar">
        <a href="#home">Home</a>
        <!-- <a href="#about">about</a> -->
        <a href="#services">Services</a>
        <a href="#astro">Astrology</a>
        <a href="#contact">Contact</a>
      </nav>
      <i class="fa-solid fa-bars"></i>
    </header>
    <!-- home  -->
    <div class="home" id="home">
      <div class="swiper home-slide">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="image">
              <img src="./img/hero/hero2.jpg" alt="image" />
            </div>
            <div class="content">
              <h3>
                We help people find their purpose and gain a true understanding
                of their gifts and talents
              </h3>
              <p>
                Let us help you take your life to the next level through
                astrology and understanding the key facets of a natal chart and how the universe
                effects our daily lives
              </p>
              <a href="#services" class="btn">Learn more</a>
            </div>
          </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
      </div>
    </div>
    <!-- about  -->
    <!-- <section class="about" id="about">
        <div class="heading">
            <h2>About</h2>
            <div></div>
        </div>
        <div class="box">
            <div class="image">
                <img src="" alt="image">
            </div>
            <div class="content">
                <h3></h3>
                <p></p>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </section> -->
    <!-- services  -->
    <section class="services" id="services">
      <div class="heading">
        <h2>Services</h2>
        <div></div>
      </div>
      <div class="row">
        <div class="box" id="zodiac">
          <i><img src="./img/services/services-1.png" alt="" /></i>
          <h3>Zodiac signs</h3>
          <p>
            Description of the energy each zodiac sign exudes. Readings are more
            detailed and personalized.
          </p>
        </div>
        <div class="box" id="planets">
          <i><img src="./img/services/services-2.png" alt="" /></i>
          <h3>Planets</h3>
          <p>Description of the effect the 10 major planets have on you.</p>
        </div>
        <div class="box" id="houses">
          <i><img src="./img/services/services-3.png" alt="" /></i>
          <h3>Astrological houses</h3>
          <p>
            Description of the 12 houses, a fundemental piece of a chart that
            represents different areas of life where the energies of the planets
            and zodiac signs operate.
          </p>
        </div>
        <div class="box" id="aspects">
          <div class="content">
            <i><img src="./img/services/services-4.png" alt="" /></i>
            <h3>Aspects</h3>
          </div>
          <p>
            Angles planets make on a chart relative to each other based on the
            degree, house, and sign the planets are in. A description of each
            major aspect.
          </p>
        </div>
        <div class="box" id="readings">
          <div class="content">
            <i><img src="./img/services/services-5.png" alt="" /></i>
            <h3>Natal chart readings</h3>
          </div>
          <p>
            Interested in elevating your life through self discovery and understanding how to get the universe to
            work in your favor? Let us help you with a natal reading.
          </p>
        </div>
        <div class="box" id="consultations">
          <div class="content">
            <i><img src="./img/services/services-6.png" alt="" /></i>
            <h3>Consultations</h3>
          </div>
          <p>
            Looking for one on one wisdom on how to improve your life? Let us help you with a consultation.
          </p>
        </div>
      </div>
    </section>
    <!-- astrology  -->
    <div class="astro astro1" id="astro">
      <div class="heading">
        <h2>Zodiac signs</h2>
        <div></div>
      </div>
      <div class="row">
        <div class="swiper astro-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <div class="content">
                <h3>Aries</h3>
                <p>
                  Aries is a cardinal fire sign. These passionate and motivated
                  individuals like to initiate new ways of seeing and feeling
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/aries.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Taurus</h3>
                <p>
                  Taurus is a fixed earth sign. These individuals are fixated on
                  their own practicality and way of thinking
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/taurus.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Gemini</h3>
                <p>
                  Gemini is a mutable air sign. These individuals are adaptable
                  in their own and others way of thinking and communicating
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/gemini.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Cancer</h3>
                <p>
                  Cancer is a cardinal water sign. These caring homebodies like
                  to initiate new ways of feeling and dealing with emotion
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/cancer.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Leo</h3>
                <p>
                  Leo is a fixed fire sign. THese fun and entertaining
                  individuals are fixated on their own way of seeing and
                  feeling
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/leo.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Virgo</h3>
                <p>
                  Virgo is a mutable earth sign. These individuals are adaptable
                  in their own and others way of thinking and being practical
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/virgo.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Libra</h3>
                <p>
                  Libra is a cardinal air sign. These balanced and relatable
                  individuals like to initiate new ways of thinking and
                  communicating
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/libra.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Scorpio</h3>
                <p>
                  Scorpio is a fixed water sign. These individuals are fixated
                  on their own way of feeling and dealing with emotion
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/scorpio.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Sagittarius</h3>
                <p>
                  Sagittarius is a mutable fire sign. These individuals are
                  adaptable in their own and others way of seeing and feeling
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/sag.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Capricorn</h3>
                <p>
                  Capricorn is a cardinal earth sign. These driven and
                  disciplined individuals like to initiate new ways of thinking
                  and being practical
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/capricorn.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Aquarius</h3>
                <p>
                  Aquarius is a Fixed air sign. Rebellious and unique, these
                  individuals are fixated on their own way of thinking and
                  communicating
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/aquarius.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Pisces</h3>
                <p>
                  Pisces is a mutable water sign. These individuals are
                  adaptable in their own and others way of feeling and dealing
                  with emotion
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/pisces.jpeg" alt="image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="astro astro2" id="astro">
      <div class="heading">
        <h2>Planets</h2>
        <div></div>
      </div>
      <div class="row">
        <div class="swiper astro-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <div class="content">
                <h3>Sun</h3>
                <p>
                  How you take action, how you see things, how you get attention
                  and what you pay attention to
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/sun.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Moon</h3>
                <p>
                  How you feel and deal with emotions, your inner world/soul,
                  how you react and respond to situations
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/moon-img.webp" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Mercury</h3>
                <p>How you think and communicate</p>
              </div>
              <div class="image">
                <img src="./img/astro/mercury.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Venus</h3>
                <p>How you love and relate</p>
              </div>
              <div class="image">
                <img src="./img/astro/venus-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Mars</h3>
                <p>How you go about your passions, motivations, and desires</p>
              </div>
              <div class="image">
                <img src="./img/astro/mars.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Jupiter</h3>
                <p>
                  How you go about expanding, experiencing, and gaining wisdom
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/jupiter.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Saturn</h3>
                <p>
                  How you build structure and discipline and how you go about
                  achieving your goals
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/saturn.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Uranus</h3>
                <p>
                  How you go about innovation and bringing change and uniqueness
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/uranus.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Neptune</h3>
                <p>Your imagination, dreams, and illusions</p>
              </div>
              <div class="image">
                <img src="./img/astro/neptune.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Pluto</h3>
                <p>How you go about transformation and rebirth</p>
              </div>
              <div class="image">
                <img src="./img/astro/pluto.jpeg" alt="image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="astro astro3" id="astro">
      <div class="heading">
        <h2>Houses</h2>
        <div></div>
      </div>
      <div class="row">
        <div class="swiper astro-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <div class="content">
                <h3>First</h3>
                <p>
                  Your personality, personal issues, personal affairs, personal
                  insecurities, everything personal in your life
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Second</h3>
                <p>
                  Your values, people places and things you value, finances,
                  possessions, resources, talents
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Third</h3>
                <p>
                  Surroundings, neighborhood, community, your way of thinking
                  and communicating
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Fourth</h3>
                <p>privacy, security, home/family, emotional foundation</p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Fifth</h3>
                <p>
                  how you express yourself creatively, things that you entertain
                  and are entertained by, how you have fun and enjoy yourself
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Sixth</h3>
                <p>
                  Work, health, routines, your systems and habits, how you serve
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Seventh</h3>
                <p>
                  One on one relationships, partnerships on all levels, how you
                  relate to people places and things
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Eighth</h3>
                <p>
                  Secrets, rebirth and transformation, joint resources, power
                  and control, mysticism
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Ninth</h3>
                <p>
                  Higher education, wisdom, travel, philosophy, views and
                  beliefs on the world, religion and spirituality
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Tenth</h3>
                <p>
                  Status, what you're known for, how you're seen, business,
                  career, how you build structure, goals, achievements
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Eleventh</h3>
                <p>
                  Community, social groups, friends, technology,
                  humanitarianism, how you operate within the public
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Twelfth</h3>
                <p>
                  subconscious, dreams, illusions, imagination, things you like
                  to do when alone
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/house-img.jpeg" alt="image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="astro astro4" id="astro">
      <div class="heading">
        <h2>Aspects</h2>
        <div></div>
      </div>
      <div class="row">
        <div class="swiper astro-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <div class="content">
                <h3>Conjuctions</h3>
                <p>
                  Planets that are 10 degrees apart within the same sign
                  amplifying the energy of both planets
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/conjuction.png" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Trines</h3>
                <p>
                  Planets that are 120 degrees apart. This aspect allows for the
                  gift of creating opportunity utilizing the energies of the
                  trined planets
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/trine.png" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Sextiles</h3>
                <p>
                  Planets that are 60 degrees apart. This aspect makes it easier
                  to spot opportunities but requires more effort than a trine
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/sextile.png" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Squares</h3>
                <p>
                  Planets that are 90 degrees apart. This aspect creates
                  learning opportunities/challenges
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/squares.png" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Oppositions</h3>
                <p>
                  Planets that are 180 degrees apart. The energy of the
                  associated planets are at odds creating intensity and
                  polarity
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/oppositions.png" alt="image" />
              </div>
            </div>
            <div class="swiper-slide box">
              <div class="content">
                <h3>Inconjuctions</h3>
                <p>
                  Planets that are 150 degrees apart. This aspect creates
                  misunderstanding between the associated planets
                </p>
              </div>
              <div class="image">
                <img src="./img/astro/inconjuctions-img.png" alt="image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- contact  -->
    <section class="contact" id="contact">
      <div class="heading">
        <h2>Contact</h2>
        <div></div>
      </div>
      <div class="box">
        <div class="content">
          <a href="mailto:stephandevelops@gmail.com" target="_blank"
            ><i class="fa-solid fa-envelope"></i
          ></a>
          <div>
            <a
              href="mailto:stephandevelops@gmail.com"
              target="_blank"
              class="text-none"
              >Email: stephandevelops@gmail.com</a
            >
          </div>
        </div>
      </div>
      <div class="align-book">
        <a href="checkout.php" class="btn btn-info"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;Book a reading</a>
      </div>
    </section>

    <!-- footer  -->
    <footer class="footer">
      <div class="content">
        <h3>Stephans-astrology</h3>
        <p>&copy; All rights reserved</p>
      </div>
      <div class="link">
        <h3>Links</h3>
        <a href="#home">Home</a>
        <!-- <a href="#about">about</a> -->
        <a href="#services">Services</a>
        <a href="#astro">Astrology</a>
        <a href="#contact">Contact</a>
      </div>
      <div class="our-servis">
        <h3>Services</h3>
        <a href="#zodiac">Zodiac signs</a>
        <a href="#planets">Planets</a>
        <a href="#houses">Astrological Houses</a>
        <a href="#aspects">Aspects</a>
        <a href="#readings">Natal chart readings</a>
        <a href="#consultations">Consultations</a>
      </div>
    </footer>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./script/script.js"></script>
  </body>
</html>
