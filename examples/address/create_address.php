<?php

$secretKey = 'YOUR SECRET KEY'; //the secret key will be provided by MundiPagg.
$basicAuthPassword = ''; //fill it with an empty string

$apiClient = new \MundiAPILib\MundiAPIClient(
    $secretKey,
    $basicAuthPassword
);

$customerController = $apiClient->getCustomers();

$customerId = "cus_ExAmPlExxxxxxxxx";

$request = new \MundiAPILib\Models\CreateAddressRequest();

$request = new \MundiAPILib\Models\CreateAddressRequest();
$request->line1 = "10880, Malibu Point, Malibu Central";
$request->line2 = "7º floor";
$request->zipCode = "90265";
$request->city = "Malibu";
$request->state = "CA";
$request->country = "US";
$request->metadata = new \MundiAPILib\Models\UpdateMetadataRequest();
$request->metadata->id = "my_address_id";

$result = $customerController->createAddress($customerId, $request);

return $result;
