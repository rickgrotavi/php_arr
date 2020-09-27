<?php
$f_json = 'C:/_Work/open_server/OSPanel/domains/testphp/json.json';
$json = file_get_contents("$f_json");
$obj = json_decode($json,true);
echo tree($obj);
function tree($obj, $tab = '', $result = '')
{
    foreach ($obj as $key => $value) {
        if (is_array($value)) {
            $result .= tree($value, $tab . str_repeat('&nbsp;', 5));
        } else {
            if($key == "title"){
                     if($obj[isFolder] == true){
                     $result .= "+ {$tab} $value<br>";}
                     else{
                     $result .= "- {$tab} $value<br>";}
                }
            }
    }
    return $result;
}
?>