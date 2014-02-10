<? include 'includes/header.php'; ?>

<div class="case-study-header">
  <h2>
    Polymath
    <span>The design process</span>
  </h2>
</div>

<div class="case-study-body">
  <img src="img/work/polymath/01.jpg" class="thumb" alt="Screenshot of Polymath's about page.">

  <p><i>Design is a collaborative, multidisciplinary effort. Although most of this design and all of the code is all me, I had input from my cohorts at work, collaborators on the Polymath project, and a handful of programmers who know their way around the web development world in ways I don't.</i></p>

  <p>Polymath is a project I started with some of my friends last year. We started with an unusual premise: create a music site (more or less a label) where albums are released one track at a time, once a week. On top of that, rope in multiple artists and have them release on a schedule: one every Monday, one every Wednesday, and so on. I built a basic site with little planning in about 4 weeks, using the Django framework, and having never written a line of Python. But it worked out, and I went on to design a second version of the site, and then a third, which was launched in November 2013.</p>

  <h3>The Site</h3>

  <h4>Designing for content</h4>

  <p>Perhaps the most challenging thing about this project is that it's been a constantly moving target. We've never been quite sure what it is, other than perhaps an online label. We've tried to expand into other mediums, like video and writing, bringing new people onto the project, but not everything we've done has been successful. So as the needs (and sometimes realities) of the content have changed, I've changed my thinking on the design end to adapt.</p>

  <figure>
    <img src="img/work/polymath/02.jpg" alt="Screenshot showing a list of albums with their tracks." class="thumb">
    <figcaption>The release list for an artist.</figcaption>
  </figure>

  <p>For example, originally the site very much emphasized tracks, because of our track-every-week release model. Actual albums didn't have a representation on the site, except on an artist's page. This third design of the site coincided with a new "season" of content for us (some new records and a film series). At this point we also decided that the track-a-week model wasn't working, and it would be better to put out whole albums like normal people. So I changed the site to adapt, pushing the concept of tracks to the foreground and emphasizing whole releases instead. Polymath has always been a fuzzy project with very loosely-defined goals, which has made designing for it a challenge, but I've always tried to do my best.</p>

  <h4>Sketching and prototyping</h4>

  <p>The layouts of Polymath's various views are relatively simple, but that doesn't stop me from doing a healthy amount of sketching. Writing feels much more liberating compared to even typing, so all of my ideation took place in notebooks. That includes model structure and relationship, view structure, layouts, user flow, and UI patterns and components.</p>

  <p>I began early planning for the site around June 2013; at the time I thought the new site would be launching by August. Eventually we pushed that back because people weren't ready with their various music projects, all the way to November! This allowed me to sit back and focus on other things for a while, but by the end of the summer most of my ideas were in place, and I had a basic prototype working.</p>

  <h4>Visual design</h4>

  <p>Polymath's visual design used to be dark, because I like dark websites, but with this new design we went white. With that in mind I decided that the core visual design would be as unobtrusive as possible, existing as a blank canvas for the content to sit on. This works because the scope of the project has expanded in a few different ways, so focusing on the content and its presentation is more important to me than establishing a visual identity for the site. The mediums and the content give the site its identity. For example, the site doesn't have a primary color; instead, each medium has its own color, which dominates that section, being used for buttons, links, and so on.</p>

  <figure>
    <img src="img/work/polymath/03.jpg" alt="Screenshot of an album page on Polymath" class="thumb">
    <figcaption>An album's page.</figcaption>
  </figure>

  <p>Consistent layout is also important to me, as the site houses a number of different mediums. The older designs suffered from a lack of consistency with regards to font sizes, layout, and interface elements. By defining a set of core patterns and UI elements, layout consistency comes easy, and building the pages comes easy as well, because I have less CSS and HTML to work with.</p>

  <p>I hit a few walls with the visual design, mainly with regards to imagery and where to use it. I pushed back and forth with some of my friends on the project on how to present the content. Some wanted the sort of vibrant, full-bleed imagery that's popular on the web. I spent a while in Photoshop trying to build layouts that accomodated concepts like this, but it just wasn't working for me for a few reasons. Ignoring the problem of actually finding/making good, scalable imagery, the big thing is that it's just hard to set type, and sometimes interface elements, over a large image with potentially inconsistent lightness and color. You could darken the image, but that's just pushing it to the background, at which point you have to question your design choice. Is this large, full-bleed image actual content, or just decoration?</p>

  <p>A handful of pages do incorporate full-bleed imagery, such as the artist page, shown below, which details a band or project and lists its albums. However, the imagery is implemented in a way that is scalable, is easy to work with, and enhances the content rather than obstructing or distracting from it.</p>

  <figure>
    <img src="img/work/polymath/11.jpg" class="thumb" alt="Screenshot of an artist's page on Polymath.">
    <figcaption>An artist page.</figcaption>
  </figure>

  <h4>Implementation</h4>

  <p>I continued to use Django for this new site, as it's the one MVC framework I know well. I decided to start entirely from scratch, however, to try and do more things right with my process the first time. I researched various best practices related to Django (and web apps in general), such as directory structure, writing template tags to create reusable code, and optimizing database queries. I used Amazon's S3 to store static assets and user-uploaded media. Because the core of the site involves streaming music, S3's pricing model was appealing. Also, because the site is so small, I can use the free tiers of services like Heroku, S3, and New Relic without any problems. On the front-end my tools of choice were more or less the same: Sass with Compass and Foundation 4, and jQuery. After the site launched I also converted the type to a modular scale, using my responsive modular scale gem.</p>

  <h4>The Audio Player</h4>

  <p>One of the site's core features, there since the beginning, is the audio player fixed at the bottom of the page, which follows you around the site. Building a responsive audio player is a tricky challenge, from a design and technical perspective. Building an entire <em>site</em> full of clickable links that seamlessly load music into that player is an even trickier challenge.</p>

  <figure>
    <img src="img/work/polymath/04.jpg" alt="Screenshot of Polymath's audio player" class="thumb">
    <figcaption>The audio player with its playlist open.</figcaption>
  </figure>

  <p>I chose to build something from scratch so I would have a complete understanding of how it worked. However, I also suspected that there was no plugin out there that would meet my needs. Some day I'd like to develop the plugin further and open source it, but first I would have to make it (potentially) compatible with any API.</p>

  <h3>The Logo</h3>

  <p>I designed Polymath's logo, which debuted with this third version of the site; prior to that the project had no logo.</p>

  <p>I didn't feel like a wordmark would suit the project well, so I wanted to create a symbol unique enough that people recognize it, and hopefully simple enough that it would scale well and work in different colors. When I started coming up with ideas this past summer, I was really fixated on the concept of symbolism. I wanted the logo to have a meaning you could pick apart and explain. Many of my first tries were based around this concept.</p>

  <p>Many of the early concepts revolved around circles, such as the one you see below. This specific design utilizes three different sized circles which all overlap. The smallest circles represent the people who contribute to Polymath; the middle circles represent the four mediums (music, video, writing, audio); and the large center circle represents the project itself, which binds the mediums and the people together.</p>

  <figure>
    <img src="img/work/polymath/06.jpg" alt="A logo which uses multiple colored interlocking circles" class="thumb">
    <figcaption>The interlocking circle logo.</figcaption>
  </figure>

  <p>At the time I was really into this concept, but my execution left a lot to be desired. The colors I used were dull and get really muddled when they mix together. Additionally, you could probably only display this logo in its full-color version; you can't make it grayscale or single-color.</p>

  <!-- <figure>
    <img src="img/work/polymath/07.jpg" alt="Various logo sketches which utilize circles" class="thumb">
    <figcaption>Let's call this "meandering".</figcaption>
  </figure> -->

  <p>After fooling around unsuccesfully with more circle logos, my next "breakthrough" was what I called the "gem logo". The site has always used heart symbols here and there; the very first code I wrote for the site was building a share modal (haha, share buttons) which used a heart symbol with the phrase "share the love". I was also really into this logo for a while, especially paired with Futura or Europa, but I couldn't get anyone else on board.</p>

  <figure>
    <img src="img/work/polymath/08.jpg" alt="Various logo sketches using an angular, heart-shaped gem" class="thumb">
    <figcaption>The gem logo and its variations.</figcaption>
  </figure>

  <p>But we continued working with the heart motif. A friend of mine on the project sent me a design which incorporated the initials "PM" into a heart shape. I was intrigued by this idea and tried making something similar. At this point I had gotten over my symbolism fetish, and just wanted something simple and unique.</p>

  <figure>
    <img src="img/work/polymath/09.jpg" alt="A heart-shaped logo with a red letter P overlapping the heart" class="thumb">
    <figcaption>The final logo design.</figcaption>
  </figure>

  <p>Eventually I landed on the idea of the "P heart", which just builds the letter P into the logo. I really liked this idea because it incorporates a very simple element of the site (the name) into the heart motif, and we're all about sharing the love of art. The simplicity of this symbol appealed to me, and my friends were into it as well, so I worked on fine-tuning the concept. Other variations used different colors, or filled in the P or the heart versus keeping it hollow. In the end we chose the hollow logo because it fits well with the "light" design of the site; a solid, filled-in logo just felt to heavy placed over the site I had designed.</p>

  <p>Logo design isn't my strong suit, but it was a fun project to take on, and I'm very pleased with the end result.</p>
</div>

<? include 'includes/footer.php'; ?>