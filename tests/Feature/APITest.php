<?php

test('API returned correct actors', function () {
    $birthdate = '1980-01-01'; // Replace this with the actual birthdate
    $response = $this->get('/check-actors?birthdate=' . urlencode($birthdate));
    
    $jsonResponse = $response->json();
    $expectedResponse = array(
        0 => "Jessica Gunning",
        1 => "Angourie Rice",
        2 => "Cameron Cowperthwaite",
        3 => "Colin Morgan",
        4 => "Morris Chestnut"
    );
    
    // Print the response to the console
    // error_log(print_r($jsonResponse, true));

    $response->assertStatus(200);
    $this->assertEquals($expectedResponse, $jsonResponse);
});
