<?php
return [
    'icons_path' => storage_path() . env('ICONS_FILE_PATH', '/app/public/icons/'),
    'profiles_path' => storage_path() . env('PROFILES_FILE_PATH', '/app/public/pfpics/'),
    'tweet_media_path' => storage_path() . env('TWEET_MEDIA_FILE_PATH', '/app/public/pfpics/'),
];