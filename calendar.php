
<?php



$client = new Google_Client();
$client->setAuthConfig('path/to/credentials.json');
$client->addScope(Google_Service_Calendar::CALENDAR);
$client->setRedirectUri('http://googleapis.github.io/google-api-php-client/');

// Generate an authorization URL
if (!isset($_GET['code'])) {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
    exit;
} else {
    // Authenticate with the code
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
}
$service = new Google_Service_Calendar($client);

$event = new Google_Service_Calendar_Event(array(
    'summary' => 'Hotel Reservation',
    'location' => 'Hotel Address',
    'description' => 'Reservation details here...',
    'start' => array(
        'dateTime' => '2024-11-16T09:00:00-07:00', // Reservation start date & time
        'timeZone' => 'America/Los_Angeles',
    ),
    'end' => array(
        'dateTime' => '2024-11-17T17:00:00-07:00', // Reservation end date & time
        'timeZone' => 'America/Los_Angeles',
    ),
));

$calendarId = 'primary';
$event = $service->events->insert($calendarId, $event);
echo 'Reservation added: %s\n', $event->htmlLink;

$service = new Google_Service_Calendar($client);

$event = new Google_Service_Calendar_Event(array(
    'summary' => 'Hotel Reservation',
    'location' => 'Hotel Address',
    'description' => 'Reservation details here...',
    'start' => array(
        'dateTime' => '2024-11-16T09:00:00-07:00', // Reservation start date & time
        'timeZone' => 'America/Los_Angeles',
    ),
    'end' => array(
        'dateTime' => '2024-11-17T17:00:00-07:00', // Reservation end date & time
        'timeZone' => 'America/Los_Angeles',
    ),
));

$calendarId = 'primary';
$event = $service->events->insert($calendarId, $event);
echo 'Reservation added: %s\n', $event->htmlLink;
