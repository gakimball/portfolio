<? include 'includes/header.php'; ?>

<div class="case-study-header">
  <h2>
    Ball State Recreation
    <span>The design process</span>
  </h2>
</div>

<div class="case-study-body">
  <img src="img/work/recreation/01.jpg" alt="Screen shot of the rec app's login screen." class="thumb">

  <p>Ball State University's recreation centers keep a running log of when people enter and leave its various facilities. This data is aggregated into an app which students can use to see how crowded, say, the basketball courts are, or the workout room. The department I work for, Emerging Technologies, developed these native apps for iOS, Android, and Windows Phone. We also built a new admin interface to back these apps, used by employees to track student's card swipes in and out of areas, and by staff to manage employee accounts, view traffic data, and manage the areas in the system. As the junior designer on the team, the bulk of my work was writing the markup and styles for the project, and ocasionally giving input on the design.</p>

  <p>This project was a valuable learning experience for me; looking back, there were many things I could have done better, but that's just a natural part of the leaning process. This was my first time working with programmers on a big project, my first time trying to make a sense of a front-end framework (Foundation 3), and my first time using Sass in a production environment.</p>

  <h3>The implementation</h3>

  <p>I wasn't around for most of the mockup phase of the design process, so when I stepped in, the visual design was most of the way there, and we were ready to move on to implementing the design.</p>

  <p>We started by building out the various parts of the site as static pages. Amusingly, we used Dropbox so we could edit CSS at the same time, which somehow worked about 95% of the time. We were compiling our Sass and JavaScript with <a href="http://incident57.com/codekit/">CodeKit</a>. I don't use CodeKit as much as I did then (over a year ago) since I've gained more familiarity with the command line. CodeKit is not necessarily as robust as more established build systems like Grunt (or my new favorite, the up-and-comer Gulp). At the time, however, having a GUI tool to manage assets was useful, since the other designer I worked with didn't have much experience in the command line.</p>

  <figcaption>
    <img src="img/work/recreation/03.jpg" alt="" class="thumb">
    <figcaption>The app's core feature is tracking the crowds in the rec center's various facilities.</figcaption>
  </figcaption>

  <p>This project was mostly just a series of forms, which in theory shouldn't be too difficult. However, writing markup was initially problematic for these reasons:</p>

  <ul>
      <li>The design had small details like embossed borders, requiring the positioning of some elements to be fine-tuned.</li>
      <li>Every page section and form section was collapsable up to its title, which meant every container needed two inner containers (one for the title and one for the content), which bloated the markup.</li>
      <li>Some forms would create and destroy new input elements, and this stretching of the design occasionally created visual bugs.</li>
  </ul>

  <p>I did the best I could, even working late one night to refactor all of my markup to streamline it. In the end we scrapped some of the visual complexity of the design, and realized that collapsable everything isn't useful, but the markup stayed in place because it was now late in the project, so refactoring backwards to more lean markup wasn't worth the time investment. So, unfortunately for the developers, they had to work with my oddly specific class names, like <code>.form-subsection-inner</code> and so on.</p>

  <p>Looking back, with a better understanding of the tools I was using, this project could have been a breeze. The majority of the pages are just forms, but some of our design decisions made the project take much longer. For example, the developers on the project set out to build an end-all-be-all solution for setting opening hours. Instead of just setting an open and close time for each day of the week, we designed a system flexible enough to handle any possible use case for anyone ever, even if your rec center was open all week and only closed for one hour a week. This took quite a while to implement, as we had to build an interface that allowed for the easy creation and deletion of "time ranges" which you used to build a weekly schedule for a location.</p>

  <figure>
    <img src="img/work/recreation/02.jpg" alt="" class="thumb">
    <figcaption>The opening hours UI.</figcaption>
  </figure>

  <p>This project was also my first chance to really develop my responsive design chops. Thanks to Foundation most of the pages scaled down to an acceptable layout (once again, the app is mostly just forms, and most form controls scale pretty easily). Many page elements still required various fine-tuning for mobile, however. This project also would have perhaps benefitted from a mobile-first design process. This makes even more sense as the main device this app would be used on was the iPad.</p>

  <figure>
    <img src="img/work/recreation/04.jpg" alt="" class="thumb">
    <figcaption>Some of the mobile layouts.</figcaption>
  </figure>

  <p>The entire project consumed an entire semester for me, although the project continued at least a month or two after the school year ended. (I found myself checking out the repository from clear across the country to help with some pressing JavaScript issues.) In the end, this was a fun and valuable, if sometimes time-consuming and stressful project. It taught me a lot about working with other designers, engineers, MVC apps, complex data and interactions, Sass, frameworks, and responsive design.</p>
</div>

<? include 'includes/footer.php'; ?>