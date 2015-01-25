<?php include('get_news.php'); ?>
<ul style="margin-top:50px; margin-bottom:-32px; margin-right:140px; height:30px;">
    <li style="float:right; list-style:none; background:#e70000; color:white; height:30px; padding:5.5px; font-weight:bold;">شريط الأخبار</li>
        <li style="float:right; list-style:none; color:white; width: 900px; background:grey; height:30px; padding:5.3px;">
            <marquee class="style19" style="" direction="right">
                <?php
                    if(!empty($results)) {
                        for($i=0; $i<count($results) ; $i++){
                             foreach($results[$i] as $r) {	 
                                echo strip_tags($r->post_content); 
                                echo '&nbsp; | &nbsp;';
                            }
                        }    
                    }
                ?>
            </marquee>
         </li>
    </ul>
