<?php
return [
    'icons_path' => resource_path() . env('ICONS_FILE_PATH', '/icons/'),
    'profiles_path' => storage_path() . env('PROFILES_FILE_PATH', '/app/public/pfpics/'),
    'tweet_media_path' => storage_path() . env('TWEET_MEDIA_FILE_PATH', '/app/public/pfpics/'),
];