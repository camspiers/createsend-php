<?php

require_once '../../csrest_lists.php';

$wrap = new CS_REST_Lists('List ID', 'Your API Key');

$result = $wrap->delete_custom_field('Custom field key');

echo "Result of DELETE /api/v3/lists/{ID}/{Key}\n<br />";
if($result->was_successful()) {
    echo "Deleted with code\n<br />".$result->http_status_code;
} else {
    echo 'Failed with code '.$result->http_status_code."\n<br /><pre>";
    var_dump($result->response);
    echo '</pre>';
}