<?php

function getTrack() {
  $params = array(
    'method'     => 'user.getrecenttracks',
    'nowplaying' => 'true',
    'limit'      => '1',
    'user'       => 'gakon5',
    'api_key'    => getenv('LASTFM_API_KEY'),
    'format'     => 'json'
  );
  $query = 'http://ws.audioscrobbler.com/2.0/?' . http_build_query($params);

  $request = curl_init($query);
  curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($request, CURLOPT_CONNECTTIMEOUT_MS, 1000);

  $response = curl_exec($request);
  if ($response !== false) {
    $data = json_decode($response, true);
    $track = $data['recenttracks']['track'][0] ?: $data['recenttracks']['track'];

    return array(
      'title'  => $track['name'],
      'artist' => $track['artist']['#text'],
      'album'  => $track['album']['#text']
    );
  }
  else {
    return array(
      'title'  => 'Hat Trick',
      'artist' => 'Empress Of',
      'album'  => 'Systems'
    );
  }
}

?>