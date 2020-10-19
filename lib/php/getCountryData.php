<?php 

 

    $countries = json_decode(file_get_contents('../countries_large.geo.json'),true);

 

    ini_set('memory_limit', '64M');

 

    $countriesParsed = [];

 

    foreach ($countries['features'] AS $country) {

        

        $temp = [];

        $temp['code']=$country['properties']['ISO_A3'];

        $temp['name']=$country['properties']['ADMIN'];

        

        array_push($countriesParsed, $temp);

 

    }

 

    usort($countriesParsed, function ($item1, $item2) {

 

        return $item1['name'] <=> $item2['name'];

 

    });

 

    $output['status']['code'] = "200";

    $output['status']['name'] = "ok";

    $output['status']['description'] = "success";

 

    $output['data'] = $countriesParsed;

 

    header('Content-Type: application/json; charset=UTF-8');

 

    echo json_encode($output);

 

?>




