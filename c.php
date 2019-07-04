<?php
// Model
function processData(){
    $data['title'] = 'CY Big Cmopany';
    $data['who'] = 'Brad';
    return $data;
}

// call View
function loadView($viewFile, $data){
    $query = http_build_query(array("data" => $data));
    echo file_get_contents(
        "http://localhost/myphp/php1/views/{$viewFile}.php?{$query}");
}

$data = processData();
loadView('view2', $data);
