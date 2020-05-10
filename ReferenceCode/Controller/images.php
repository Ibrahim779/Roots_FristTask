<?php 

     $images = array(
                     array('id' => 1,'name'=> 'banner-01.jpg'),
                     array('id' => 2,'name'=> 'banner-031.jpg'),
                     array('id' => 3,'name'=> 'banner-02.jpg')
                   );
        foreach ($images as $img) {  
            if ($img['id']==$_GET['id']) {
                $img_name =$img['name'];
            }
          }
        
  ?> 