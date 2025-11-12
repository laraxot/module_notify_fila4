<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Exception;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification as NotificationFacade;
use Modules\User\Models\User;

/**
 * Notification Service
 *
 * Centralized notification management with multiple channels
 */
class NotificationService
{
    /**
     * Send notification to user
     */
    public function send(User $user, Notification $notification): void
    {
        try {
            $user->notify($notification);

            Log::info('Notification sent', [
                'user_id' => $user->id,
                'notification' => get_class($notification),
            ]);
        } catch (Exception $e) {
            Log::error('Notification failed', [
                'user_id' => $user->id,
                'notification' => get_class($notification),
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Send notification to multiple users
     *
     * @param  Collection<User>|array<User>  $users
     */
    public function sendToMany(iterable $users, Notification $notification): void
    {
        try {
            NotificationFacade::send($users, $notification);

            Log::info('Bulk notification sent', [
                'users_count' => is_countable($users) ? count($users) : 'unknown',
                'notification' => get_class($notification),
            ]);
        } catch (Exception $e) {
            Log::error('Bulk notification failed', [
                'notification' => get_class($notification),
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Send notification to users with specific role
     */
    public function sendToRole(string $role, Notification $notification): void
    {
        $users = User::role($role)->get();
        $this->sendToMany($users, $notification);
    }

    /**
     * Send notification to all admins
     */
    public function sendToAdmins(Notification $notification): void
    {
        $this->sendToRole('admin', $notification);
    }

    /**
     * Send notification to all operators
     */
    public function sendToOperators(Notification $notification): void
    {
        $this->sendToRole('operator', $notification);
    }

    /**
     * Get user's unread notifications
     *
     * @return DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification>
     */
    public function getUnread(User $user): DatabaseNotificationCollection
    {
        $notifications = $user->unreadNotifications()->get();
        if (!$notifications instanceof DatabaseNotificationCollection) {
            return new DatabaseNotificationCollection();
        }

        return $notifications;
    }

    /**
     * Get user's unread count
     */
    public function getUnreadCount(User $user): int
    {
        return $user->unreadNotifications()->count();
    }

    /**
     * Mark notification as read
     */
    public function markAsRead(User $user, string $notificationId): bool
    {
        $notification = $user->notifications()->find($notificationId);

        if ($notification) {
            $notification->markAsRead();

            return true;
        }

        return false;
    }

    /**
     * Mark all notifications as read
     */
    public function markAllAsRead(User $user): void
    {
        $user->unreadNotifications()->update(['read_at' => now()]);

        Log::info('All notifications marked as read', [
            'user_id' => $user->id,
        ]);
    }

    /**
     * Delete notification
     */
    public function delete(User $user, string $notificationId): bool
    {
        $notification = $user->notifications()->find($notificationId);

        if ($notification) {
            $notification->delete();

            return true;
        }

        return false;
    }

    /**
     * Delete all notifications
     */
    public function deleteAll(User $user): void
    {
        $user->notifications()->delete();

        Log::info('All notifications deleted', [
            'user_id' => $user->id,
        ]);
    }

    /**
     * Get notification preferences for user
     */
    public function getPreferences(User $user): array
    {
        $preferences = $user->notification_preferences ?? null;
        if (is_array($preferences)) {
            return $preferences;
        }
        
        return [
            'email' => true,
            'database' => true,
            'sms' => false,
            'push' => false,
        ];
    }

    /**
     * Update notification preferences
     */
    public function updatePreferences(User $user, array $preferences): void
    {
        $user->update([
            'notification_preferences' => $preferences,
        ]);

        Log::info('Notification preferences updated', [
            'user_id' => $user->id,
            'preferences' => $preferences,
        ]);
    }

    /**
     * Check if user has preference enabled for channel
     */
    public function hasChannelEnabled(User $user, string $channel): bool
    {
        $preferences = $this->getPreferences($user);

        $value = $preferences[$channel] ?? false;
        return is_bool($value) ? $value : false;
    }
}
