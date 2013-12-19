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

      <a href="" class="button">Portfolio</a>
      <a href="" class="button" data-resume-open>Resume</a>
    </div>
    <div class="homepage-hero-pictures">
      <!-- <div class="icon-container">
        <img src="img/icons/design.svg" alt="Design" class="icon-1">
        <img src="img/icons/pizza.svg" alt="Pizza" class="icon-2">
        <img src="img/icons/cat.svg" alt="Cats" class="icon-3">
        <img src="img/icons/design.svg" alt="Design" class="icon-4">
      </div> -->
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
    <p class="subtitle">My work is people-focused, content-oriented, and responsively-minded.</p>

    <section class="portfolio-item">
      <div class="portfolio-item-thumb">
        <img src="img/work/polymath.jpg">
      </div>
      <div class="portfolio-item-content">
        <h3>Polymath</h3>
        <p class="subtitle">web + mobile + logo</p>

        <p>Polymath is a group of musicians, filmmakers, and writers based mostly in Muncie and Bloomington, Indiana, releasing their works online for free. I designed the logo and the website, and I wrote and maintain the server-side codebase as well.</p>

        <a href="polymath.php" class="button">Read case study &rarr;</a>
        <a href="http://polymatharts.com" class="button" target="_blank">Visit site &rarr;</a>
      </div>
    </section>

    <section class="portfolio-item">
      <div class="portfolio-item-thumb">
        <img src="img/work/playground.jpg">
      </div>
      <div class="portfolio-item-content">
        <h3>ZURB Playground</h3>
        <p class="subtitle">web + mobile</p>

        <p>I interned at product design firm ZURB this summer, where my main project was redesigning Playground, one of ZURB’s most popular properties which is host to various design resources and technical experiments.</p>

        <a href="playground.php" class="button">Read case study &rarr;</a>
        <a href="http://zurb.com/playground" class="button" target="_blank">Visit site &rarr;</a>
      </div>
    </section>

    <section class="portfolio-item">
      <div class="portfolio-item-thumb">
        <img src="img/work/bsurec.jpg">
      </div>
      <div class="portfolio-item-content">
        <h3>Ball State Recreation</h3>
        <p class="subtitle">web + mobile</p>

        <p>I wrote the markup and stylesheets for an admin interface for Ball State University’s rec center employees and staff. I also provided some input on the layout and visual design.  A well-done responsive design was a key goal for this project.</p>

        <a href="bsurec.php" class="button">Read case study &rarr;</a>
     </div>
    </section>

  </section>

  <section class="about">
    <h2>About me</h2>

    <div class="about-photo">
      <img src="http://placehold.it/100x100" alt="Portrait of me.">
    </div>

    <div class="about-bio">
      <p>My name is <i>Geoff Kimball</i>, and I'm a soon-to-be-graduating senior at Ball State University in Muncie, IN. At my current job at BSU's Emerging Technologies department, I contribute to the design and development of responsive websites, desktop and mobile web apps, and native apps. I'm interested in the ways people incorporate technology into their lives. My ambition is to work on products and services that affect millions of people.</p>

      <p>I'm a certified archmage in CSS; I believe pencil (or Sharpie) and paper are the best tools to start a design project with; I know the semantic difference between <code>&lt;i&gt;</code> and <code>&lt;em&gt;</code>, and what <code>vertical-align</code> is actually for; I appreciate flat design but I love a well-placed box shadow; I like Mario, but what I love most are cats.</p>

      <p><a data-resume-open>Here's my resume again.</a> <em>Hey, I'm looking for a full-time position!</em></p>

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