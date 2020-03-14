<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


?>
<?php

function validName($name){

    return !empty($name); //return true if is not empty

}

function validMethod($method){

    $options = array("html", "text");
    return in_array($method, $options);
}
function validEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
function validURL($url){
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        return true;
    } else {
        return false;
    }
}
function validSelect($meet){
    if($meet=="none"){
        return false;
    }
    else{
        return true;
    }
}
function validService($service){
    return $service == "none"
        || $service == "meetUp"
        || $service == "jobFair" || $service == "No"
        || $service == "Other" ;
}
?>
