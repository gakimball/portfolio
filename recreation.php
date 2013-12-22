<? include 'includes/header.php'; ?>

<div class="case-study-header">
  <h2>
    Ball State Recreation
    <span>The design process</span>
  </h2>
</div>

<div class="case-study-body">
  <img src="img/work/recreation/01.jpg" alt="Screen shot of the rec app's login screen." class="thumb">

  <p>Ball State University's recreation centers keep a running log of when people enter and leave its various facilities. This data is aggregated into an app which students can use to see how crowded, say, the basketball courts are, or the workout room. The department I work for, Emerging Technologies, developed these native apps for iOS, Android, and Windows Phone. We also built a new admin interface to back these apps, used by employees to track student's card swipes, and by staff to manage employee accounts, view traffic data, and manage which areas are in the system. As the junior designer on the team, the bulk of my work was writing the markup and styles for the project, and giving input on the design where I could.</p>

  <p>This project was a valuable learning experience for me, even though looking back there were many things I could have done better. This was my first time working with programmers on a big project, my first time trying to make a sense of a front-end framework (Foundation 3), and my first time using Sass in a production environment.</p>

  <h3>The implementation</h3>

  <p>We started by building out the various parts of the site as static pages. Amusingly, we used Dropbox so we could edit CSS at the same time, which somehow worked about 95% of the time. We were compiling our Sass and JavaScript with CodeKit. I don't use CodeKit as much as I used to since I've gained more familiarity with the command line. Although I haven't quite figured out Grunt, which you might call the command line version of CodeKit, I've stopped using CodeKit for projects. At the time however, it was a useful tool, especially since the other designer didn't have much experience in the command line, so having a GUI to compile assets was useful.</p>

  <p>This project is mostly just a series of forms, which in theory shouldn't be too difficult. However, writing markup was initially problematic for these reasons:</p>

  <ul>
      <li>The design had small details like embossed borders, requiring the positioning of each element to be fine-tuned.</li>
      <li>Every page section and form section was collapsable up to its title, which meant every container needed two inner containers (one for the title and one for the content), which bloated the markup.</li>
      <li>Some forms would create or destroy additional form elements, and this stretching of the design occasionally created visual bugs.</li>
  </ul>

  <p>I did the best I could, even working late one night to refactor all of my markup to streamline it. In the end we scrapped some of the visual complexity of the design, and realized that collapsable everything isn't useful, but the markup stayed in place because it was now late in the project. So, unfortunately for the developers, they had to work with my odd class names, like <code>.form-subsection-inner</code>.</p>

  <p>Looking back, if I had had a better understanding of the tools I was using, this project could have potentially been a breeze. The majority of the pages are just forms, but some of our design decisions made the project take much longer. For example, the developers on the project set out to build an end-all-be-all solution for setting opening hours. Instead of just setting an open and close time for each day of the week, we designed a system flexible enough to handle any possible use case for anyone ever, even if your rec center was open all week and only closed for one hour a week. This took quite a while to implement, as we had to build an interface that allowed for the easy creation and deletion of "time ranges" which you used to build a weekly schedule for a location.</p>
</div>

<? include 'includes/footer.php'; ?>