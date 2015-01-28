<?php
#function
function checkLicenceExists($sDomain)
{
    $rCurl = curl_init(sprintf('<--License Auth URL-->', $sDomain));
    curl_setopt($rCurl, CURLOPT_RETURNTRANSFER,    true);
    curl_exec($rCurl);
    $aInfo = curl_getinfo($rCurl);
    return $aInfo['http_code'] == 200;
}
#usage
if(checkLicenceExists(''))
{

#Content

}
else
{
echo "
    <center>
    <h2>Invalid Nexus License Key</h2>
    </center>
    ";
}
?>
