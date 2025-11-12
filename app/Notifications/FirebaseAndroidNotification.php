<?php

declare(strict_types=1);

/**
 * @see https://iftikhar-ahmed.medium.com/send-push-notifications-in-laravel-using-firebase-on-your-android-device-f585621db900
 */

namespace Modules\Notify\Notifications;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Stringable;
use Kreait\Firebase\Messaging\AndroidConfig;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Message;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;
use Modules\Notify\Contracts\MobilePushNotification;
use Modules\Notify\Datas\FirebaseNotificationData;
use Modules\Notify\Notifications\Channels\FirebaseCloudMessagingChannel;

/**
 * Class for sending notifications via Firebase Cloud Messaging to Android devices.
 * Classe per inviare notifiche tramite Firebase Cloud Messaging ad Android.
 */
class FirebaseAndroidNotification extends Notification implements MobilePushNotification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @param  FirebaseNotificationData  $data  The Firebase notification data (I dati della notifica Firebase)
     */
<<<<<<< HEAD
    public function __construct(
        public FirebaseNotificationData $data,
    ) {}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        public FirebaseNotificationData $data,
    ) {}
=======
    public function __construct(public FirebaseNotificationData $data)
    {
    }
>>>>>>> a12f125f4a (.)
=======
    public function __construct(
        public FirebaseNotificationData $data,
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(public FirebaseNotificationData $data)
    {
    }
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
     * @param  object  $_notifiable  The entity to be notified (l'entità da notificare)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
     * @param object $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> f813254 (.)
     * @return array<int, class-string>
     */
    public function via(object $_notifiable): array
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * @param object $notifiable The entity to be notified
     * @return array<int, class-string>
     */
    public function via(object $notifiable): array
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * @param object $_notifiable The entity to be notified (l'entità da notificare)
     * @return array<int, class-string>
     */
    public function via(object $_notifiable): array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    {
        return [
            // 'firebase',
            FirebaseCloudMessagingChannel::class,
        ];
    }

    /**
     * Create the Firebase Cloud message for the notification.
     * Crea il messaggio Firebase Cloud per la notifica.
     *
     * @param  object  $notifiable  The entity to be notified
     */
    public function toFirebase(object $notifiable): CloudMessage
    {
        // Create a valid Android configuration (Creiamo una configurazione Android valida)
        $androidConfig = [
            'ttl' => '3600s',
            'priority' => 'high',
        ];
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Add notification only if data is in a valid format (Aggiungiamo la notifica solo se i dati sono in un formato valido)
        // Verify that $this->data->data is accessible (Verifichiamo che $this->data->data sia accessibile)
        $dataProperty = $this->data->data ?? null;
        if ($dataProperty !== null) {
            // Create a notification array conforming to AndroidConfig expectations (Creiamo un array di notifica conforme alle aspettative di AndroidConfig)
            $notification = [];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

            // Add only supported fields with correct types (Aggiungiamo solo i campi supportati con i tipi corretti)
            $allowedKeys = ['title', 'body', 'icon', 'color', 'sound', 'click_action'];

            foreach ($allowedKeys as $key) {
                if (isset($dataProperty[$key]) && is_string($dataProperty[$key]) && $dataProperty[$key] !== '') {
                    $notification[$key] = $dataProperty[$key];
                }
            }

<<<<<<< HEAD
=======
=======
            
=======

>>>>>>> b93ef594b4 (.)
            // Add only supported fields with correct types (Aggiungiamo solo i campi supportati con i tipi corretti)
            $allowedKeys = ['title', 'body', 'icon', 'color', 'sound', 'click_action'];

            foreach ($allowedKeys as $key) {
                if (isset($dataProperty[$key]) && is_string($dataProperty[$key]) && $dataProperty[$key] !== '') {
                    $notification[$key] = $dataProperty[$key];
                }
            }
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
            // Add only supported fields with correct types (Aggiungiamo solo i campi supportati con i tipi corretti)
            $allowedKeys = ['title', 'body', 'icon', 'color', 'sound', 'click_action'];
            
            foreach ($allowedKeys as $key) {
                if (isset($dataProperty[$key]) && (is_string($dataProperty[$key]) && $dataProperty[$key] !== '')) {
                    $notification[$key] = $dataProperty[$key];
                }
            }
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            // Add notification only if it contains valid data (Aggiungiamo la notifica solo se contiene dati validi)
            if (! empty($notification)) {
                $androidConfig['notification'] = $notification;
            }
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return CloudMessage::new()
            ->withNotification(FirebaseNotification::create($this->data->title, $this->data->body))
            ->withAndroidConfig(AndroidConfig::fromArray($androidConfig));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  object|null  $notifiable  The entity to be notified
     * @return array<string, mixed>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
>>>>>>> 6ba141fc (.)
=======
    #[Override]
<<<<<<< HEAD
>>>>>>> 82c6772 (.)
    public function toArray(?object $notifiable): array
=======
    public function toArray(null|object $notifiable): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    public function toArray(null|object $notifiable): array
=======
    public function toArray(?object $notifiable): array
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function toArray(null|object $notifiable): array
>>>>>>> b93ef594b4 (.)
=======
    public function toArray(?object $notifiable): array
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
    {
        // return $this->data->toArray();
        return [];
    }

    /**
     * Convert to a Firebase Cloud message (Converti in un messaggio Cloud Firebase).
     */
<<<<<<< HEAD
    #[\Override]
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    #[Override]
>>>>>>> 82c6772 (.)
    public function toCloudMessage(): Message
    {
        $notificationData = $this->data->data;

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function toCloudMessage(): Message
    {
        $notificationData = $this->data->data;
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function toCloudMessage(): Message
    {
        $notificationData = $this->data->data;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        /**
         * @var array<non-empty-string, string|Stringable>
         */
        $data = [];
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Ensure each key is a non-empty string and each value is string or Stringable (Assicuriamoci che ogni chiave sia una stringa non vuota e ogni valore sia string o Stringable)
        foreach ($notificationData as $key => $value) {
            if (is_string($key) && $key !== '' && (is_string($value) || $value instanceof Stringable)) {
                $data[$key] = $value;
            }
        }

<<<<<<< HEAD
        return CloudMessage::new()->withHighestPossiblePriority()->withData($data);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return CloudMessage::new()->withHighestPossiblePriority()->withData($data);
=======
        return CloudMessage::new()
            ->withHighestPossiblePriority()
            ->withData($data);
>>>>>>> a12f125f4a (.)
=======
        return CloudMessage::new()->withHighestPossiblePriority()->withData($data);
>>>>>>> b93ef594b4 (.)
=======
        return CloudMessage::new()
            ->withHighestPossiblePriority()
            ->withData($data);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
}
