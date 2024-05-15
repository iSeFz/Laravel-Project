<?php

test('New username available', function () {
    $username = 'shawkyebrahim';
    $expectedResponse = array('valid' => true);

    $response = $this->get('/validate-username?name=' . urlencode($username));
    $jsonResponse = $response->json();

    expect($jsonResponse)->toBe($expectedResponse);
});
