<?php //include_once("../../header.php"); ?>

<!--<div class="row mt-4">-->
<!--    <div class="col-sm-2 bg-primary">-->
<!--        Snehal-->
<!--    </div>-->
<!--    <div class="col-sm-8 bg-secondary">-->
<!--        Kalariya-->
<!--    </div>-->
<!--    <div class="col-sm-2 bg-primary">-->
<!--        Snehal-->
<!--    </div>-->
<!--</div>-->

<!---->
<!--    <div style="background: #818182; padding: 2px 0px 2px 50px;color: white; width: 240px; float: left;">-->
<!--        welcome to rajkot - 1-->
<!--    </div>-->
<!--    <div style="position:relative;">-->
<!--        <div style="background: #1e7e34; padding: 2px 0px 2px 50px;color: white; width: 240px; float: left; position: absolute; left: 10px;">-->
<!--            welcome to rajkot - 2-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div style="background: #818182; color: white; width: 240px; float: left;">-->
<!--        welcome to rajkot - 3-->
<!--    </div>    -->
<!---->

<?php
//$a = 'How are you?';
//var_dump(strpos($a, 'are'));

$pattern = "/^[A-z0-9.]+[@]{1}+[A-z]+([.]{1}+[A-z]{2,3}){1,2}$/";
$input = "bhalodia_sandip@gmail.com";
if(preg_match($pattern, $input)){
    echo "match";
}
else{
    echo "Not match";
}

//if (strpos($a, 'are') !== false) {
//echo 'true';
//}