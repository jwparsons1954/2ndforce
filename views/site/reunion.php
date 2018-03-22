<?php

/* @var $this yii\web\View */
/*    <code><?= __FILE__ ?></code> */
use yii\helpers\Html;



?>
<style>
	.navbar{
background-color: #336600 !important;
} 
</style>
<div class="site-reunion">
   <br><br><h3 class="text-center">Welcome <?= Yii::$app->user->identity->firstName; ?> <?= Yii::$app->user->identity->lastName; ?></h3>
<br><br>
    <h1><?= Html::encode($this->title) ?></h1>
<center><h1><?php

$january = new DateTime('2018-05-16');
$february = new DateTime('now');
$interval = $february->diff($january);

// %a will output the total number of days.
echo $interval->format('%a days ');

// While %d will only output the number of days not already covered by the
// month.
// echo $interval->format('('.'%m month, %d days'.')');

?>
Until the 2018 Reunion</h1></center>
 <p><center>
 <p></p>
 <h3>
 Warning Order #1<br><br>
2d Force Recon Marines & Guests<br>
7th Annual Reunion<br>
16-19 May 2018<br><br>
Concept of ops<br><br>
16th Wed. 0900-1400 Fishing Charter (10 pax min, 50 max) Cost TBD<br>
16th Wed. 1000-1300 Camp Lejeune bus tour<br>
17th Thur. 0800-1300 Paint Ball, Shoot @ Sportsman’s Lodge, J-ville NC<br>
17th Thur. 1300 6th Classon Annual Golf Classic, @Northshore<br>
18th Fri. 0900-1300 2d Force Recon Company/Bn visit and picnic with Marines hosted by us. Cost TBD.<br>
2nd FRA company meeting TBD<br>
19th Sat. 0900-1000 first on the beach 5K, Surf City<br>
19th Sat. 1300 Reunion Picnic and Memoriam @FOB CAPERS.<br>
<br>
Coordinating Instructions<br>
<br>
RSVP for each event requested NLT 1 March 2018 RSVP at:<br>  <a href="https://goo.gl/forms/5XZFga1HPCW1fH4j2">2nd Force Reconnaissance Association Reunion: 15-19 May 2018</a><br>
Fishing, contact Phil Smith 540-498-0733 jarhead73@yahoo.com<br>
Base Tour POC is TBD<br>
Golf,5k, call Alan Classon at (239) 980-3486 classon.sgt@gmail.com<br>
Shooting, contact Jim Harrison reconjim@hotmail.com<br>
Co/BnVisit/picnic, contact Dick Ashton, germanpanzer7@yahoo.com<br>
or John Holmes 9999marine@earthlink.net<br>
<br>
Block of Rooms available for any/all@ Hampton Inn, Sneads Ferry, NC.<br> Contact Tom Farnan 281-435-4440.  tom.Farnan@comcast.net<br>

(80’s) contact Scott Nyman (910) 938-2529 snyman@ec.rr.com<br>
<br>
<h1>Don't miss link—up!</h1>
</h3></p>
