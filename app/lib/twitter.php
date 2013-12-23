<?php

date_default_timezone_set('America/Indiana/Indianapolis');

function getTweet() {
  $connection = new TwitterOAuth(getenv('TWITTER_CONSUMER_KEY'), getenv('TWITTER_CONSUMER_SECRET'), getenv('TWITTER_OAUTH_TOKEN'), getenv('TWITTER_OAUTH_TOKEN_SECRET'));
  $connection->host = "https://api.twitter.com/1.1/";
  $params = array(
    'count' => '1',
    'exclude_replies' => 'true',
    'trim_user' => 'true',
    'include_rts' => 'false'
  );

  $response = $connection->get("statuses/user_timeline", $params);
  $tweet = $response[0];
  return array(
    'text' => $tweet->text,
    'date' => date('M j', strtotime($tweet->created_at))
  );
}

?>