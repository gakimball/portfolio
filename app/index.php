<? include 'includes/header.php'; ?>

<div class="homepage-hero">
  <div class="homepage-hero-inner">
    <div class="homepage-hero-content">
      <p class="tagline">
        Design,<br>
        pizza,<br>
        and cats
      </p>
      <p class="tagline-after">are all I think about.</p>

      <a href="" class="button" data-resume-open>Resume</a>
      <a href="#about" class="button">About me</a>
    </div>
    <div class="homepage-hero-pictures">
      <div class="sketch-container">
        <img src="img/icons/design-sketch.png" class="sketch-1" alt="">
        <img src="img/icons/pizza-sketch.png" class="sketch-2" alt="">
        <img src="img/icons/cat-sketch.png" class="sketch-3" alt="">
      </div>
    </div>
  </div>
</div>

<section class="main" role="main">
  
  <section class="portfolio">
    
    <h2>Portfolio</h2>
    <p class="subtitle">My work is people-oriented, content-focused, and responsively-minded.</p>

    <section class="portfolio-item">
      <div class="portfolio-item-thumb">
        <img src="img/work/tote.jpg">
      </div>
      <div class="portfolio-item-content">
        <h3>Teaching on the Edge</h3>
        <p class="subtitle">web</p>

        <p>I designed and built a site for "Teaching on the Edge", a National Science Foundation grant given to Ball State University and Taylor University about teaching the science behind high-altitude ballooning in college and middle school classrooms. Of particular note in this project is an interactive flight sim I built to display GPS and weather data from balloon launches.</p>

        <a href="http://ilearn.bsu.edu/tote/" class="button">Visit site &rarr;</a>
        <a href="http://ilearn.bsu.edu/tote/flights/spring2011.php" class="button" target="_blank">View flight sim &rarr;</a>
      </div>
    </section>

    <section class="portfolio-item">
      <div class="portfolio-item-thumb">
        <img src="img/work/playground.jpg">
      </div>
      <div class="portfolio-item-content">
        <h3>ZURB Playground</h3>
        <p class="subtitle">web</p>

        <p>I interned at product design firm ZURB this summer, where my main project was redesigning Playground, one of ZURB’s most popular properties which is host to various design resources and technical experiments.</p>

        <a href="playground.php" class="button">Read case study &rarr;</a>
        <a href="http://zurb.com/playground" class="button" target="_blank">Visit site &rarr;</a>
      </div>
    </section>

    <section class="portfolio-item">
      <div class="portfolio-item-thumb">
        <img src="img/work/rms.jpg">
      </div>
      <div class="portfolio-item-content">
        <h3>Responsive Modular Scale</h3>
        <p class="subtitle">open source</p>

        <p>I developed a responsive adaption of the Sass team's <a href="https://github.com/Team-Sass/modular-scale" target="_blank">modular scale</a> extension for Compass. This gem allows you to easily define font sizes on a modular scale, while also having your type respond to changes in screen size.</p>

        <a href="http://gakimball.github.io/responsive-modular-scale/" class="button">View demo &rarr;</a>
        <a href="https://github.com/gakimball/responsive-modular-scale" class="button" target="_blank">View GitHub repo &rarr;</a>
      </div>
    </section>

    <section class="portfolio-item">
      <div class="portfolio-item-thumb">
        <img src="img/work/polymath.jpg">
      </div>
      <div class="portfolio-item-content">
        <h3>Polymath</h3>
        <p class="subtitle">web + logo</p>

        <p>Polymath is a group of musicians, filmmakers, and writers based mostly in Muncie and Bloomington, Indiana, releasing their works online for free. I designed the logo and the website, and I wrote and maintain the server-side codebase as well.</p>

        <a href="polymath.php" class="button" target="_blank">Read case study &rarr;</a>
        <a href="http://polymatharts.com" class="button" target="_blank">Visit site &rarr;</a>
      </div>
    </section>

    <section class="portfolio-item">
      <div class="portfolio-item-thumb">
        <img src="img/work/bsurec.jpg">
      </div>
      <div class="portfolio-item-content">
        <h3>Ball State Recreation</h3>
        <p class="subtitle">web</p>

        <p>I wrote the markup and stylesheets for an admin interface for Ball State University’s rec center employees and staff. I also provided some input on the layout and visual design.  A well-done responsive design was a key goal for this project.</p>

        <a href="recreation.php" class="button">Read case study &rarr;</a>
     </div>
    </section>

    <section class="portfolio-item">
      <p class="inception">I also wrote about my process for designing this portfolio site. <a href="portfolio.php">Read all about it.</a></p>
    </section>

  </section>

  <section class="about" id="about">
    <h2>About me</h2>

    <div class="about-photo">
      <img src="http://placehold.it/100x100" alt="Portrait of me.">
    </div>

    <div class="about-bio">
      <p>My name is <i>Geoff Kimball</i>, and I'm a soon-to-be-graduating senior at Ball State University in Muncie, IN. At my current job at BSU's Emerging Technologies department, I contribute to the design and development of responsive websites, desktop and mobile web apps, and native apps. Designing or coding, I just want to make awesome things for people. I'm interested in the ways we incorporate technology into our lives, and my ambition is to work on products and services that affect millions of people.</p>

      <p><a href="#" data-resume-open>Here's my resume again.</a> <em>And hey, I'm looking for a full-time position!</em></p>

      <a href="mailto:gakimball@bsu.edu" class="about-email-link ss-mail">
        <span>email me</span>
        gakimball@bsu.edu
      </a>
    </div>
  </section>

</section>

<div class="resume-modal" id="modal" data-resume-modal>
  <div class="resume-modal-inner">
    <h2>Resume</h2>
    <div class="buttons">
      <a class="button">Download</a>
      <a class="button" data-resume-close>Close</a>
    </div>
    <a href="img/resume.jpg">
      <img class="resume" src="img/resume.jpg" alt="Geoff Kimball's resume">
    </a>
  </div>
</div>

<? include 'includes/footer.php'; ?>