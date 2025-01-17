<?php

declare(strict_types=1);

namespace Ddeboer\Imap;

interface ImapResourceInterface
{
    /**
     * Get IMAP resource stream.
     */
    public function getStream();

    /**
     * Clear last mailbox used cache.
     */
    public function clearLastMailboxUsedCache(): void;
}
