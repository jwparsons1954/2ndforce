<?php

/* @var $this yii\web\View */
/*    <code><?= __FILE__ ?></code> */
use yii\helpers\Html;



?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<br><br><br>

    <p><h3>This is my list of things I need to do on the site</p>
	
ToDo list<br>
	<ul>
	<li>Pretty URL's</li>
	<li>add password peek</li>
	<li>remove breadcrumbs from all pages</li>
	<li>Password reset via email</li>
	<li>only users who are logged in should be able to access Members and Reunion pages</li>
	<li>Authenticated users can change their own details, but not others</li>
	<li>Only admins can change all users</li>
	<li>users cannot change/see active/admin status</li>
	<li>admins cannot change their own active/admin status</li>
	<li>Members list only allows current user to edit his own info</li>
	<li>the header bar needs to be modified,<br></li>
			<ul>
			<li>remove highlighting on hover (home,About etc should look like logout).</li>
			</ul>
	<li>site needs to look better on mobile devices</li>
	<li>center login and contact forms (possibly make into modals)</li>
	<li>change mode to production</li>
	</ul>
<br>

<br><br><br>


</div>

