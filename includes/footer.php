  <section class="external-links">
    <h2>Links</h2>
    
    <section class="external-links-item">
      <h3><i class="ss-icon">Twitter</i></h3>
      <p class="explanation">Last Tweet</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, temporibus, quibusdam sequi error nulla repellat suscipit!</p>
      <p class="link"><a href="http://twitter.com/geoffkimball">Twitter: @geoffkimball</a></p>
    </section>

    <section class="external-links-item">
      <? $track = getTrack(); ?>
      <h3><i class="ss-icon">Lastfm</i></h3>
      <p class="explanation">Last song listened to</p>
      <p>
        "<?=$track['title'] ?>"<br>
        Artist: <?=$track['artist'] ?><br>
        Album: <i><?=$track['album'] ?></i>
      </p>
      <p class="link"><a href="http://last.fm/user/gakon5">Last.fm: gakon5</a></p>
    </section>

    <section class="external-links-item">
      <? $commit = getCommit(); ?>
      <h3><i class="ss-icon">Octocat</i></h3>
      <p class="explanation">Last commit to this site</p>
      <p><?=$commit['sha'] ?>: <?=$commit['message'] ?></p>
      <p class="link"><a href="http://github.com/gakimball">Github: gakimball</a></p>
    </section>

  </section>

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