<? include 'includes/header.php'; ?>

<div class="case-study-header">
  <h2>
    Playground
    <span>The design process</span>
  </h2>
</div>

<div class="case-study-body">
  <img src="img/work/playground/01.jpg" alt="Screenshot of ZURB Playground's home page." class="thumb">

  <p><em>Design is a collaborative and multidisciplinary process. Although much of the design and front-end code is my work, I was following ZURB's internal design language, and I had the help and guidence of the company's incredibly talented design, engineering, and content teams.</em></p>

  <p>Playground is one of ZURB's most popular properties. The site hosts many tech demos and resources for web designers. The site's early content from 2009 and 2010 leveraged the emerging capabilities of CSS3, including transitions, animations, and shadows. These days the site is home to many JavaScript plugins, downloadable resources, and other tech demos. Playground is one of ZURB's oldest properties, and it was also the oldest to go without a redesign. My main project this summer as a design intern was to rebuild the Playground.</p>

  <p>To do this I followed ZURB's standard design process, which begins with an ideation phase done entirely with sketching. Design sketching is a key component of ZURB's process; it's so important that sketching is built into their visual brand. I was used to sketching my ideas before building them, but ZURB takes design sketching to the next level, having made their own styles of sketch sheets which use three different colored markers for sketches.</p>

  <p>We established a few main goals for the redesign: bring the site up to modern standards, categorize all of the existing content, and make it easier to add new content. With the existing Rails app that ran Playground, every page on the site had custom markup and styles applied to it. This makes Playground unique from other ZURB properties; every page has its own custom layout and aesthetic.</p>

  <p>This became the monumental challenge with this project: here are 39 various project pages which span 4 years of changing design languages. On top of that, none of them are responsive (a key tenet of ZURB's design) and the site runs on an old grid system that predates even the first Foundation (Foundation is now on version 5).</p>

  <p>We knew we were going to build a CMS to manage new pages, but what to do about the old ones? Eventually we just decided to go for broke: <em>redo all of them</em>. I spent a few weeks transferring all of the content and styles from the old pages, and putting them into new pages with cleaner markup and more modern styles where I could. I tried to fit the pages into ZURB's newer aesthetic, using their typeface choices and colors, while still maintaining the identitiy of the individual pages.</p>

  <p>For some pages this was a big challenge. One of the most interesting pages to try and make mobile friendly was <a href="">Shadow Experiments</a>, which includes a number of complex animated elements. It didn't transfer flawlessly, but at least you can read about the fun of CSS shadow effects on your phone.</p>

  <p>It was a lot of work, but it was also an interesting challenge. I feel very strongly about the importance of the responsive web, so trying to adapt old content to new standards was actually pretty fun.</p>
</div>

<? include 'includes/footer.php'; ?>