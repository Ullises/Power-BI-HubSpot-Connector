<?php
set_time_limit(300);
ini_set('max_execution_time','300');
ini_set('default_socket_timeout','300');

// ... existing code ...

function get_records() {
    // ... existing cURL setup ...
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
    curl_setopt($ch, CURLOPT_TIMEOUT, 300);
    // ... existing code ...
}