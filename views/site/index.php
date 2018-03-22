<?php// @var $this yii\web\View;?>
<style>
	.navbar{
background-color: #336600 !important;
} 
</style>
<div class="site-index">    
<div class="body-content">    
   <?php if(Yii::$app->user->isGuest){ ?>
   <br><h3 class="text-center" style="margin-top: 30px !important;">Welcome Guest</h3>
   <?php }else{ ?>
   <br><br><h3 class="text-center">Welcome <?= Yii::$app->user->identity->firstName; ?> <?= Yii::$app->user->identity->lastName; ?></h3>
   <?php } ?>
  <div class="row">          
  <div class="col-sm-2">	
		<br><br><br><br><br><br><br><br><br><br><br><br><center>           
     <h3>Legends</h3>                <p>				
<a href="https://en.wikipedia.org/wiki/Wesley_L._Fox" target="_blank">Wesley Fox</a>	
<br><a href="https://2nd-force-recon.com/capers/"target="_blank">James Capers Jr.</a>
<br>Thomas Leonard				
</p></center>            
</div>            
<div class="col-sm-8">                
<h2></h2>                
<p></p>            
</div>           
 <div class="col-sm-2">			
<br><br><br><br><br><br><br><br><br><br><br><br><center>                
<h3>Pictures</h3>				<p>				
<a href="../web/images/2ndforce/">Old Recon Pics</a> 				
<br><a href="../web/images/2ndforce2016reunion/">2016 Reunion</a>				
<br><a href="../web/images/2ndforce2017reunion/">2017 Reunion</a>              
  </p></center>            </div>        </div>    </div></div>