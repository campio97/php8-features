<?php

declare(strict_types=1);

enum Status: string
{
    case Draft = 'draft';
    case Published = 'published';
    case Archivied = 'archivied';
}

function getStatusMessage(Status $status): string
{
    return match ($status) {
        Status::Draft => 'The status is draft.',
        Status::Published => 'The status is published.',
        Status::Archivied => 'The status is archivied.',
    };
}

echo getStatusMessage(Status::Published);
