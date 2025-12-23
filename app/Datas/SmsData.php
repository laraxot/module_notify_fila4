<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

class SmsData
{
    public string $from;
    public string $recipient;
    public string $body;

    /**
     * Create a new SmsData instance.
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->from = \Modules\Xot\Actions\Cast\SafeStringCastAction::cast($data['from'] ?? '');
        $this->recipient = \Modules\Xot\Actions\Cast\SafeStringCastAction::cast($data['recipient'] ?? '');
        $this->body = \Modules\Xot\Actions\Cast\SafeStringCastAction::cast($data['body'] ?? '');
    }

    /**
     * Named constructor for convenience.
     *
     * @param array<string, mixed> $data
     * @return static
     */
    public static function from(array $data): static
    {
        return new static($data);
    }
}