<? include 'includes/header.php'; ?>

<div class="case-study-header">
  <h2>
    My Portfolio
    <span>The design process</span>
  </h2>
</div>

<div class="case-study-body">
  <img src="img/work/portfolio/02.jpg" alt="Screenshot of screenshot of screenshot of screenshot of screenshot of this page." class="thumb">

  <p>I find designing a portfolio to be an interesting challenge. I can label myself in plenty of ways, but ultimately I'm a <em>web designer</em>. And I find setting myself apart as a <em>web designer</em> to be a monumental task. We're eveywhere! How do I make myself look different? I can't fall into <a href="http://theworstportfolioever.com/">this</a> trap.</p>

  <p>Ultimately I feel split between two goals. On the one hand I'd rather have the simplest portfolio possible and put my work at the forefront. Reduce friction to viewing the content, because that's the focus. On the other hand, people also like to show off in their portfolios to try and demonstrate their skills. But if you go too far in that direction you're just obstructing the content. I've seen a number of nice-looking single-page sites that use controlled scrolling or keyboard navigation, and yeah, they look nice, but they're a pain to use, and if you're trying to get a job, why risk people not knowing how to use your site?</p>

  <p>I tried to land somewhere in the middle, but ultimately I landed a little closer to "minimal" than "show-offy". That being said I'm pretty happy with the result. I learned the basics of some new tools and found a few ways to improve my process.</p>

  <h3>The Process</h3>

  <p>As always my process started with sketching. Although this is my fifth portfolio site to see the light of day, I've gone through many iterations, or rather many false starts. When I was still numbering the folders I got up to "portfolio15" in my server folder. Unlike projects that come and go, my portfolio is always around, so I tend to always be thinking about it here and there. I've done plenty of sketching in various notebooks throughout the year, which landed me on a general layout I liked. The challenge then became the visual design.</p>

  <p>So let's go back to that quandry of wanting to be unique. At some point I went for broke and just decided to try being <em>weird</em> instead. One day at work while I was waiting for a meeting to start, I opened up Photoshop and made this:</p>

  <img src="img/work/portfolio/01.jpg" alt="Screenshot of a portfolio mockup in Photoshop." class="thumb">

  <p>This concept was immediately appealing to me. Hero units are all well and good, but why not try doing away with the whole "I hand-craft beautiful interactive experiences" talk? I can talk about my status as a designer without the usual flowery language. (Just ignore the sub-headline <em>right underneath</em> the hero unit which half-undermines my point.)</p>

  <p>So I went from there, fleshing out the visual style. Where it made sense I decided to use really thick fonts; I like the way chunky type looks. I also strayed away from the typical flat, rounded rectangle buttons common in flat design in lieu of something more non-standard. It's nothing earth-shattering, just me trying to be vaguely different where I can.</p>

  <p>The hero unit took me a while to figure out. I liked the tagline, but I needed a visual component to go with it. I sketched a few ideas, and tried building a small number of them, but it took me a while to land on something I liked. Eventually I landed on actually showing sketches of the three concepts; this appealed to me because I like to draw, and I've been sketching website designs for close to a decade, which has made it a fundamental component of my process.</p>

  <h3>Sweating the details</h3>

  <p>Because the scope of the site is small, it's a good opportunity to develop my workflow and learn new tricks. The big thing I wanted to try with this design was a modular scale for the typography. The site is fairly type-heavy as is, so it seemed sensible to follow some rules. (My former process was just eyeballing em values.) I've grown increasingly frustrated working with web typography, especially in a responsive context, so it was about time to find a process.</p>

  <p>When using a modular scale, your choices for font sizes are limited to a set number of values, determined by a base font size and an interval. By multiplying up and dividing down from this base value, you create a series of harmonious values to use as a scale. To fill in your scale you can add a second set of numbers using a second base value and the same interval. However, I'm not always a great explainer, so you can read more about this concept from the fine folks at <a href="http://alistapart.com/article/more-meaningful-typography">A List Apart</a>.</p>

  <p>I created a scale on <a href="http://modularscale.com/scale/?px1=16&px2=100&ra1=1.5&ra2=0">modularscale.com</a> to use in Photoshop. Thankfully it was very easy to transfer the scale to the development environment. The Sass team maintains a library called <code>modular-scale</code> which allows you to define and use a modular scale as a function. The <code>ms()</code> function allows you to use multiple values and even multiple ratios to create a scale. Basic usage looks like this:</p>

<pre><code class="code-block">// $n is the position (font size) you want from your scale
h1 {
  font-size: ms($n, 16px 100px, fifth());
}</code></pre>

  <p>To streamline this I initially wrote a basic wrapper that always used the same scale, to avoid having to define the scale every time:</p>

<pre><code class="code-block">@function mod($n) {
  @return ms($n, 16px 100px, fourth());
}

h1 {
  font-size: mod(6);
}
</code></pre>

  <p><code>$n</code> will pull a value out of a scale that looks like this:</p>

<pre><code class="code-block">1: 16.0
2: 19.7
3: 24.0
4: 29.6
5: 36.0
6: 44.4
7: 54.0
8: 81.0
9: 100.0
</code></pre>

  <p>This is a good solution, but I also knew I wanted to try and tackle the problem of responsive typography for realsies. So I took the modular scale concept a step further.</p>

  <h3>Responsive typography</h3>

  <p>Responsive typography has always been somewhat frustrating. Although some frameworks try to do it for you, I still often find myself adjusting values by hand for various screen sizes. Now that I was on the modular type kick, I had an idea. On smaller screens, the 16px works well as a base, but the bigger sizes become too big. So on smaller screens I use the same base values for the scale, but a smaller interval (a fourth instead of a fifth). This compresses the scale, keeping the type proportional while also preventing it from becoming too big.</p>

  <p>Here's the mixin I wrote:</p>

<pre><code class="code-block">@mixin mod($n) {
  font-size: ms($n, 16px 100px, fourth());

  // min-width: 768 * 1.6em
  @include at-breakpoint($medium) {
    font-size: ms($n, 16px 100px, fifth());
  }
}

h1 {
  @include mod(6);
}</code></pre>

  <p>If I wanted I could use two breakpoints and have three scales, but for now it's working really well. The type scales well to mobile devices, and the site looks pretty good without any hand-adjustment. That being said, I'll probably add to the function by allowing you to override the value of $n between the two sides of the breakpoint. There are a few spots where I would like to move one step down on the smaller scale on a smaller device, because the type is still just a hair too big.</p>

  <h3>New technology</h3>

  <p>Every new project is an opportunity to learn something new or improve my workflow.</p>

  <p>I'm a fan of front-end frameworks, but I can certainly acknowledge that your tools should suit the project. With that in mind, I had a suspicion I would want to use a smaller framework that didn't require as much configuration. When it comes to small projects, I tend to only want the grid and typography of a framework anyway; the more complex UI elements (dropdowns, form controls) I don't need, and the less complex elements (buttons) I can build myself.</p>

  <p>This seemed like a good opportunity to learn a new framework and expand my literacy in that space. For the most part I've only used <a href="http://foundation.zurb.com">Foundation</a> and <a href="http://neat.bourbon.io">Bourbon Neat</a> on projects. I think these are both great tools, but they both have things that annoy me. So I looked into other frameworks I had heard of but never used. <a href="http://www.getskeleton.com/">Skeleton</a>? Oh, it's CSS-only. Not into that. <a href="http://semantic.gs/">Semantic.gs</a>? Not really a fully-featured grid from what I can tell.</p>

  <p>Eventually I landed on <a href="http://susy.oddbird.net/">Susy</a>, which from what I can tell is probably the most versatile and also most complex grid framework out there. It supports all of the fun stuff I want in a grid system, like offsets, source ordering, and centering. Like most frameworks you can define breakpoints to change how your grid columns look at different screen sizes, but Susy also allows you to change the properties of the grid itself at those breakpoints. For example, you can have a 4-column grid by default, a 12-column grid above 768px, and a 17-column grid above 961px. Why would you do that? Beats me, but you can! You can also define new grid styles within other columns, with their own separate column count. It's crazy! I had no use for these advanced features but I'm glad they exist.</p>

  <p>Since this is just a basic mostly-static site, I'm just using PHP for the server-side. However, I knew I wanted to tap into a few external libraries, so I went about looking for a PHP package manager. I have no idea what the space looks like, or what "standards" exist, but I ended up using <a href="http://getcomposer.org">Compsoer</a>, which happened to have the two packages I needed.</p>

  <p>The source code of this site is available on <a href="http://github.com/gakimball/portfolio">GitHub</a> if you're interested in seeing how I write markup and styling, or the kinds of tools I use. I somehow ended up with at least three sets of dependencies for my development environment, but I suppose that's fine because I'm the only person who will ever do serious work on it anyway. The site makes several API calls, and I have those keys hidden away in an environment file. This is a trick <a href="https://www.heroku.com/">Heroku</a> uses for its apps: sensitive information is tucked away in a file not checked into version control, and loaded into the environment at runtime. Someone made a library to do this in PHP called <a href="https://github.com/vlucas/phpdotenv">phpdotenv</a>, which I make use of.</p>

</div>

<? include 'includes/footer.php'; ?>