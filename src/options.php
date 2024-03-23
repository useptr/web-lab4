<?php
$options = [
    'C++' => ['Qt', 'Wt', 'Boost'],
    'Java' => ['Spring', 'Hibernate', 'Struts'],
    'Swift' => ['Alamofire', 'Charts', 'Vapor'],
    'Go' => ['gin', 'beego', 'echo']
    ];
$response ="<option value=\"\"></option>\n";
if(isset($_GET['selected_option'])) {
    $selected = $_GET['selected_option'];
        foreach ($options[$selected] as $item) {
            $response .= "<option value=".$item.">".$item."</option>\n";
        }
}
echo $response;
?>