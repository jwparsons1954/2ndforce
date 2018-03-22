<?php
            $images = glob('yii2recall\web\images\2ndforce/*.{jpg, jpeg, png, gif}', GLOB_BRACE);
            $flag=1;
            foreach ($images as $image){
            echo '<div class="item' .($flag?' active':''). '">';
            echo '<img src="'.$image.'" alt=""></div>';
            $flag=0;
            }
         ?>