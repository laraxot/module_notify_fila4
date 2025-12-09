<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Models\NotificationLog;

/**
 * @extends Factory<NotificationLog>
 */
class NotificationLogFactory extends Factory
{
    protected $model = NotificationLog::class;

    public function definition(): array
    {
        /** @var NotificationLogStatusEnum $status */
        $status = $this->faker->randomElement(NotificationLogStatusEnum::cases());

        return [
            'notifiable_type' => 'App\\Models\\User',
            'notifiable_id' => $this->faker->numberBetween(1, 1000),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'channels' => ['mail'],
            'data' => [
                'tracking_id' => $this->faker->uuid(),
            ],
            'sent_at' => Carbon::now()->subMinutes($this->faker->numberBetween(1, 120)),
            'status' => $status->value,
            'error' => null,
        ];
    }
}
