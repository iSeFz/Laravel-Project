<?php

uses(\Illuminate\Foundation\Testing\TestCase::class);

test('Parse image name from image full name', function () {
    $userController = new \App\Http\Controllers\UserController();
    $imageFullName = 'image.png';
    expect($userController->getNameFromImageName($imageFullName))->toBe('image');
});

test('Parse image extension from image full name', function () {
    $userController = new \App\Http\Controllers\UserController();
    $imageFullName = 'image.png';
    expect($userController->getExtensionFromImageName($imageFullName))->toBe('.png');
});

test('Check image not exists before', function () {
    $userController = new \App\Http\Controllers\UserController();
    $imageFullName = 'image.png';
    expect($userController->checkImageExists($imageFullName))->toBe(false);
});

test('Check same image with incremented letter', function () {
    $userController = new \App\Http\Controllers\UserController();
    $imageFullName = 'image.png';
    $expectedImageFullName = 'imagf.png';
    expect($userController->incrementImageNameIfExists($imageFullName))->toBe($expectedImageFullName);
});

