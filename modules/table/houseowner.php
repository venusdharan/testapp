<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../theme/content.php';
include_once '../theme/infobox.php';
include_once '../theme/rowmaker.php';
include_once '../core/GetListner.php';
$home = new content("Search house owner","Welcome user");
$table = '


<br>
      <table cellpadding="0" cellspacing="0" border="0" class="dataTable table " id="example">
<tfoot><th></th></tfoot>
      </table>
      <br>
  '
        
        
        ;
$get = new GetListner();
$panel_array = array();
array_push($panel_array, $get->get_post_value("data"));
array_push($panel_array, $table);

$row = createrows($panel_array, 1, "col-lg-12");
echo  $home->getContent($row) ;
