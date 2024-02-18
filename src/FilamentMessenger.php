<?php

namespace MarJose123\FilamentMessenger;

class FilamentMessenger
{
    protected function getAllowedFilesExtensions(): array
    {
        return config('messenger.attachments.allowed_files');
    }

    protected function getAllowedImagesExtensions(): array
    {
        return config('messenger.attachments.allowed_images');
    }
}
