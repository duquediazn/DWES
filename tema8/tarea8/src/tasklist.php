<?php
require_once '../vendor/autoload.php';

$client = new Google\Client();
$client->setAuthConfig('../client_secret.json');
$client->setScopes(Google_Service_Tasks::TASKS_READONLY);
$client->setAccessType('offline');


$tokenPath = '../token.json';
if (file_exists($tokenPath)) {
    $accessToken = json_decode(file_get_contents($tokenPath), true);
    $client->setAccessToken($accessToken);

    if ($client->isAccessTokenExpired()) {
        $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
}

$service = new Google_Service_Tasks($client);
$taskLists = $service->tasklists->listTasklists();
$response = [];
foreach ($taskLists->getItems() as $taskList) {
    $response[] = ['id' => $taskList->getId(), 'title' => $taskList->getTitle()];
}
echo json_encode($response);
