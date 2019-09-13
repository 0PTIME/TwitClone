<?php
return [
    'icons_path' => storage_path() . env('ICONS_FILE_PATH', '/app/public/icons/'),
    'profiles_path' => storage_path() . env('PROFILES_FILE_PATH', '/app/public/pfpics/'),

    'test_name' => env('TEST_USERNAME'),
    'test_email' => env('TEST_EMAIL'),
    'test_description' => env('TEST_DESCRIPTION'),
    'test_display_name' => env('TEST_DISPLAY_NAME'),
    'test_password' => env('TEST_PASSWORD'),
];