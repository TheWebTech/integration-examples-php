<?php

use Helpers\HubspotClientHelper;

include_once '../../Helpers/HubspotClientHelper.php';

$hubSpot = Helpers\HubspotClientHelper::createFactory();

if (isset($_POST['name'])) {
    $propertyFields = $_POST;
    // https://developers.hubspot.com/docs/methods/contacts/v2/create_contacts_property
    $response = $hubSpot->contactProperties()->create($propertyFields);

    if (HubspotClientHelper::isResponseSuccessful($response)) {
        $name = $response->data->name;
        header('Location: /properties/show.php?name='.$name);
        exit();
    }

    $property = (object)$propertyFields;
    $errorResponse = $response;
} else {
    $property = (object)[
        'type' => 'string',
    ];
}

include '../../views/properties/show.php';
