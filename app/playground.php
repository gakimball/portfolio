<? include 'includes/header.php'; ?>

<div class="case-study-header">
  <h2>
    ZURB Playground
    <span>The design process</span>
  </h2>
</div>

<div class="case-study-body">
  <figure class="thumb">
    <img src="img/work/playground/01.jpg" alt="Screenshot of ZURB Playground's home page.">
  </figure>

  <p><em>Design is a collaborative and multidisciplinary process. Although much of the design and front-end code is my work, I was following ZURB's internal design language, and I had the help and guidence of the company's incredibly talented design, engineering, and content teams.</em></p>

  <p>Playground is one of ZURB's most popular properties. The site hosts many tech demos and resources for web designers. The site's early content from 2009 and 2010 leveraged the emerging capabilities of CSS3, including transitions, animations, and shadows. These days the site is home to many JavaScript plugins, downloadable resources, and other tech demos. Playground is one of ZURB's oldest properties, and it was also the oldest to go without a redesign. My main project this summer as a design intern was to rebuild the Playground.</p>

  <p>To do this I followed ZURB's standard design process, which begins with an ideation phase done entirely with sketching. Design sketching is a key component of ZURB's process; it's so important that sketching is built into their visual brand. I was used to sketching my ideas before building them, but ZURB takes design sketching to the next level, having designed their own sketch sheets and visual language for drawing interfaces.</p>

  <p>We established a few main goals for the redesign: bring the site up to modern standards, categorize all of the existing content, and make it easier to add new content. With the existing Rails app that ran Playground, every page on the site had custom markup and styles applied to it. This makes Playground unique from other ZURB properties; every page has its own custom layout and aesthetic.</p>

  <p>This became the monumental challenge with this project: here are 39 various project pages which span 4 years of changing design languages. On top of that, none of them are responsive (a key tenet of ZURB's design today) and the site runs on an old grid system that predates even the first version of ZURB's Foundation framework (which is now on version 5).</p>

  <p>We knew we were going to build a CMS to manage new pages, but what to do about the old ones? Eventually we just decided to go for broke: <em>redo all of them</em>. I spent a few weeks transferring all of the content and styles from the old pages, and putting them into new pages with cleaner markup and more modern styles where I could. I tried to fit the pages into ZURB's newer aesthetic, using their typeface choices and colors, while still maintaining the identitiy of the individual pages.</p>

  <p>For some pages this was a big challenge. One of the most interesting pages to try and make mobile friendly was <a href="http://zurb.com/playground/css-boxshadow-experiments">Shadow Experiments</a>, which includes a number of complex animated elements. It didn't transfer flawlessly, but at least you can read about the fun of CSS shadow effects on your phone.</p>

  <p>It was a lot of work, but it was also an interesting challenge. I feel very strongly about the importance of the responsive web, so trying to adapt old content to new standards was actually pretty fun.</p>

  <h3>Wrangle</h3>

  <p>I also got the opportunity to contribute a piece of content to the Playground to coincide with its relaunch. It's an experimental jQuery plugin called <a href="http://zurb.com/playground/wrangle-jquery-plugin">Wrangle</a>.</p>

  <figure class="thumb">
    <img src="img/work/playground/02.jpg" alt="Screenshot of the Playground page for Wrangle">
    <figcaption>Project page for Wrangle, designed by me.</figcaption>
  </figure>

  <p>During a weekly design meeting at ZURB, we did an exercise wherein we tried to come up with unorthodox ways of organizing photos. One of the design leads had the idea to perform multiple selections by dragging your finger or mouse, as opposed to clicking or tapping items. Later that day I heard two of my co-workers musing that that idea would make for an interesting Playground piece. So that night I made a really basic prototype to show my co-workers, which implemented this draw-to-select idea. Work continued from there and a few weeks later we released it to the public as a tech demo.</p>

  <p>Making the plugin was a complex process, due in no small part to my desire to make it compatible with touch and mouse, and make it as cross-platform as possible. Juggling a dozen different touch and mouse events handled slightly differently on every platform is hard! I wrote about the process of making the plugin on its <a href="http://zurb.com/playground/wrangle-jquery-plugin">official page</a>.</p>

  <figure class="thumb">
    <img src="img/work/playground/03.jpg" alt="Screenshot of the Wrangle demo page">
    <figcaption>The Wrangle demo in action.</figcaption>
  </figure>

  <p>The plugin launched alongside a <a href="http://zurb.github.io/wrangle-demo/">demo</a> demonstrating its use "in the wild". The launch of this page reminded of an important principle every designer needs to keep in mind. To turn on the plugin in this demo you have to press a button first; this keeps the action of selecting from conflicting with, say, scrolling the device with your finger. The demo is a photo gallery with a bar of actions at the bottom of the page, including the start button. After it launched I got an email from my boss saying the demo wasn't working. What? I had tested it myself. Some of my co-workers also told me they had trouble making the demo work. The reason was, I hadn't instructed the user that the plugin was switched on and off by a button, and that button was at the bottom of the screen where people weren't seeing it. I quickly amended this by moving the action bar to the top of the page and changing the wording of the button from "select" to "start demo". It's always important to remember that nothing is as obvious as you may think it is. Someone's always going to miss this button here or that important bit of text there, and you have to keep that in mind.</p>
</div>

<? include 'includes/footer.php'; ?>