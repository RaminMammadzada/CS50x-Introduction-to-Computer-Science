<?php

    // require ?symbol=...
    if (empty($_GET["symbol"]))
    {
        trigger_error("Missing symbol", E_USER_ERROR);
    }

    // headers for proxy servers
    $headers = [
        "Accept" => "*/*",
        "Connection" => "Keep-Alive",
        "User-Agent" => sprintf("curl/%s", curl_version()["version"])
    ];

    // open connection to Yahoo
    $context = stream_context_create([
        "http" => [
        "header" => implode(array_map(function($value, $key) { return sprintf("%s: %s\r\n", $key, $value); }, $headers, array_keys($headers))),
        "method" => "GET"
        ]
    ]);
    $handle = fopen("http://download.finance.yahoo.com/d/quotes.csv?f=snl1&s={$_GET["symbol"]}", "r", false, $context);
    if ($handle === false)
    {
        trigger_error("Could not connect to Yahoo!", E_USER_ERROR);
    }

    // download first line of CSV file
    $data = fgetcsv($handle);
    if ($data === false || count($data) == 1)
    {
        trigger_error("Missing data", E_USER_ERROR);
    }

    // close connection to Yahoo
    fclose($handle);

    // ensure symbol was found
    if ($data[2] === "0.00")
    {
        trigger_error("Missing price", E_USER_ERROR);
    }

    // prepare stock as an associative array
    $stock = [
        "symbol" => $data[0],
        "name" => $data[1],
        "price" => floatval($data[2])
    ];

    // output stock as JSON
    header("Content-Type: application/json");
    print(json_encode($stock));

?>
