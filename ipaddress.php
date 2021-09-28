<?php
$ip = '5.188.228.255';
$ipdat = json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));

// echo '<pre>';
// print_r($ipdat);die;

echo 'Country Name: ' . $ipdat->geoplugin_countryName .'<br>';
echo 'City Name: ' . $ipdat->geoplugin_city .'<br>';
echo 'Continent Name: ' . $ipdat->geoplugin_continentName .'<br>'; 
echo 'Latitude: ' . $ipdat->geoplugin_latitude .'<br>';
echo 'Longitude: ' . $ipdat->geoplugin_longitude .'<br>'; 
echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol .'<br>'; 
echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode.'<br>';
echo 'Timezone: ' . $ipdat->geoplugin_timezone;

?>
