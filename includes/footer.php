  <section class="external-links">
    <h2>Links</h2>
    
    <section class="external-links-item">
      <? // $tweet = getTweet(); ?>
      <h3><i class="ss-icon">Twitter</i></h3>
      <p class="explanation">Last Tweet Tweet'd</p>
      <p><strong><?=$tweet['date'] ?>:</strong> <?=$tweet['text'] ?></p>
      <p class="link"><a href="http://twitter.com/geoffkimball" target="_blank">Twitter: @geoffkimball</a></p>
    </section>

    <section class="external-links-item">
      <? // $track = getTrack(); ?>
      <h3><i class="ss-icon">Lastfm</i></h3>
      <p class="explanation">Last song listened to</p>
      <p>
        <strong>"<?=$track['title'] ?>"</strong><br>
        Artist: <?=$track['artist'] ?><br>
        Album: <i><?=$track['album'] ?></i>
      </p>
      <p class="link"><a href="http://last.fm/user/gakon5" target="_blank">Last.fm: gakon5</a></p>
    </section>

    <section class="external-links-item">
      <? // $commit = getCommit(); ?>
      <h3><i class="ss-icon">Octocat</i></h3>
      <p class="explanation">Last commit to this site</p>
      <p><strong><?=$commit['sha'] ?>:</strong> <?=$commit['message'] ?></p>
      <p class="link"><a href="http://github.com/gakimball" target="_blank">Github: gakimball</a></p>
    </section>

  </section>

  <footer class="footer">
    <p>Etcetera etcetera Geoff Kimball.</p>
    <p>Web fonts: <a href="http://store1.adobe.com/cfusion/store/html/index.cfm?event=displayFontPackage&code=1959">Source Sans Pro</a> by Adobe, <a href="https://symbolset.com/icons/social-regular">Social Regular</a> by Symbolset</p>
    <p></p>
  </footer>

  <script>
    (function(){
      var linkBoxes = document.querySelectorAll('.external-links-item');
      var tallest = 0;
      // Find the highest box
      for (var i = 0; i < linkBoxes.length; i++) {
        if (linkBoxes[i].clientHeight > tallest) {
          tallest = linkBoxes[i].clientHeight;
        }
      }
      // Set every box to that height
      for (var i = 0; i < linkBoxes.length; i++) {
        linkBoxes[i].style.height = tallest;
      }
    })();
  </script>

</body>

</html>