<?php

function getCommit() {
  $query = 'https://api.github.com/repos/gakimball/portfolio/commits';

  $request = curl_init($query);
  curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($request, CURLOPT_CONNECTTIMEOUT_MS, 1000);
  curl_setopt($request, CURLOPT_HTTPHEADER, array('User-Agent: gakimball', 'Authorization: token '.getenv('GITHUB_API_KEY')));

  $response = curl_exec($request);
  if ($response !== false) {
    $data = json_decode($response, true);
    $commit = $data[0];

    return array(
      'sha'     => substr($commit['sha'], 0, 10),
      'message' => $commit['commit']['message']
    );
  }
  else {
    return array(
      'sha'     => 'a0da97cf72',
      'message' => 'Add screenshots of rec app, add/change/delete screenshots of Polymath'
    );
  }
}

?>