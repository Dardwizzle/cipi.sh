<?php 
header('Content-type: application/x-sh'); 
header('Content-Disposition: inline; filename="go.sh"');
echo file_get_contents('https://raw.githubusercontent.com/andreapollastri/cipi/master/setup/go.sh');