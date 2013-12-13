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
      <a href="" class="button">Contact</a>
    </div>
    <div class="homepage-hero-pictures">
      <div class="pictures">
        <div class="image-1">
          <img src="http://placehold.it/100x100" alt="">
        </div>
        <div class="image-2">
          <img src="http://placehold.it/100x100" alt="">
        </div>
        <div class="image-3">
          <img src="http://placehold.it/100x100" alt="">
        </div>
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
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, ipsum, numquam, consectetur itaque eligendi maxime aliquam aut tempora accusamus doloremque eaque saepe! Minus, labore deleniti culpa laudantium voluptatum corrupti perspiciatis.</p>

      <p><em>Hey, I'm looking for a full-time position!</em></p>

      <a href="mailto:gakimball@bsu.edu" class="about-email-link ss-mail">
        <span>email me</span>
        gakimball@bsu.edu
      </a>
    </div>
  </section>

</section>

<script>
  function shuffle(array) {
    var currentIndex = array.length
    , temporaryValue
    , randomIndex
    ;
    while (0 !== currentIndex) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
    return array;
  }

  (function(){
    var words = ['affordance', 'accessibility', 'responsive design', 'content', 'visual design', 'user experience', 'crust', 'sauce', 'cheese', 'meats', 'vegetables', 'pepperoni', 'sausage', 'bacon', 'fur', 'ears', 'tail', 'paws'];
    wordList = shuffle(words);

    for (var i = 0; i < words.length; i++) {
      var elem = document.createElement('span');
      elem.text = wordList[i];
      console.log(elem);
    }
  })();
</script>

<? include 'includes/footer.php'; ?>