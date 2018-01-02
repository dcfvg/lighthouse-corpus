<?php

  // foreach ($site->index()->filterby('intendedtemplate','dream') as $page) {

  //   dump($page->retranscripteur());

  //   $newRap = $page->retranscripteur();
  //   $newRap = strtolower($newRap);
  //   $newRap = str_replace('lancelot hamelin', 'lancelot', $newRap);

  //   $page->update(array(
  //     'retranscripteur' => $newRap
  //   ));
  // }
  snippet('razor');

  $json = ['code' => 200, 'message' => '', 'fileurl' => ''];
  $params = params();

  if(isset($params['diruri'])){
    error_reporting(E_ALL & ~E_NOTICE & ~ E_WARNING);

    $uriParts = explode("__DS__", $params['diruri']);
    $page = $site->index()->filterby('intendedtemplate','dreams')->children()->findByURI(end($uriParts));

    $text = $page->recit().' '.$page->situation();
    $text = utf8_encode ($text);
    // dump($page);
    TextRazorSettings::setApiKey(c::get('TextRazorApiKey'));

    $textrazor = new TextRazor();
    $textrazor->addExtractor('entities');
    $response = $textrazor->analyze($text);

    $result = '';

    if (isset($response['response']['entities'])) {
      foreach ($response['response']['entities'] as $e) {


        // print_r();
        $result .= '
-
  entityid: '.$e['entityId'].'
  matchedtext: '.$e['matchedText'].'
  wikilink: '.$e['wikiLink'].'
  startingpos: "'.$e['startingPos'].'"
  endingpos: "'.$e['endingPos'].'"
  freebasetypes: '.implode(", ",$e['freebaseTypes']).'
  ';
        print(PHP_EOL);
      }


    $page->update(array(
          'entities' => $result,
        ));

    $entitiesCount = count($response['response']['entities']);
    $json['message'] = $entitiesCount.' found, reload !';

    }

  }

  // echo $result;

  if( !$site->user() ||
    !boolval(param('panel')) || // added by plugin automatically
    !r::ajax()
  ) {
    die(response::json($json, 400));
  }

  die(response::json($json, 200));

?>
