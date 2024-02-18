<?php

return [
    /*
   |-------------------------------------
   | The disk on which to store added
   | files and derived images by default.
   |-------------------------------------
   */
    'storage_disk_name' => env('MESSENGER_STORAGE_DISK', 'public'),
    /*
   |-------------------------------------
   | Attachments
   |-------------------------------------
   */
    'attachments' => [
        'folder' => 'attachments',
        'allowed_images' => ['png', 'jpg', 'jpeg', 'gif'],
        'allowed_files' => ['zip', 'rar', 'txt'],
        'max_upload_size' => env('MESSENGER_MESSAGE_MAX_FILE_SIZE', 150), // MB
    ],

];
