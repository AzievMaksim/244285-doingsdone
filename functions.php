
<?php


function includePathEndArray($first, $array) {
    ob_start();
    
    foreach ($array as $key => $val): {
   $val['task'] == htmlspecialchars($val['task']);
   $val['Date'] == htmlspecialchars($val['Date']);
   $val['project'] == htmlspecialchars($val['project']);
   $val['status'] == htmlspecialchars($val['status']);
        
} endforeach;
    
    if(isset($first))
     
    {
        include $first; 
    }
    
    else {

    return NULL;
        
    } 
    
    $dataCurrentFunction = ob_get_flush();
    
    return $dataCurrentFunction;
    
} 

?>