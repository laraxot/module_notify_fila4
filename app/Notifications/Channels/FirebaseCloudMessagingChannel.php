<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

use Kreait\Firebase\Messaging\RegistrationToken;
use Kreait\Firebase\Messaging\RegistrationTokens;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Exception\MessagingException;
use Kreait\Firebase\Messaging\MulticastSendReport;
use Modules\Notify\Contracts\CanReceivePushNotifications;
use Modules\Notify\Contracts\MobilePushNotification;
use Modules\Notify\Datas\PushNotificationDebugData;
use Psr\Log\LoggerInterface;

use function Safe\json_encode;

final class FirebaseCloudMessagingChannel
{
    private static LoggerInterface $logger;

    public function __construct(
        private readonly Messaging $firebaseCloudMessaging,
    ) {
        self::$logger = Log::driver('firebase') ?? Log::getDefaultDriver();
    }

    public function send(Model&CanReceivePushNotifications $notifiable, MobilePushNotification $notification): void
    {
        $userNotificationTokens = $notifiable->getMobileDeviceTokens();

        if ($userNotificationTokens->isEmpty()) {
            // No devices to be notified, bye!
            return;
        }

        try {
            $multicastSendReport = $this->sendMulticastNotificationToDevices(
                notification: $notification,
                userDeviceTokens: $userNotificationTokens,
                debugTokens: (bool) config('firebase.enable_token_validation'),
            );

            if (config('firebase.enable_debug_mode')) {
                $notificationDebugData = PushNotificationDebugData::make(
                    notifiable: $notifiable,
                    notification: $notification,
                    sendReport: $multicastSendReport,
                )->toArray();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
                self::$logger->debug(sprintf(
                    "FCM notification debug:\n%s",
                    json_encode($notificationDebugData, JSON_PRETTY_PRINT),
                ));
            }
        } catch (Exception $exception) {
            self::$logger->error(sprintf(
                "An exception has been thrown while trying to send FCM notifications.\n\tError message is: '%s' [%s]\n\tNotification data was: %s\n\tUser devices were: %s",
                $exception->getMessage(),
                $exception->getCode(),
                json_encode($notification->toArray(null), JSON_THROW_ON_ERROR),
                json_encode($userNotificationTokens->toArray(), JSON_THROW_ON_ERROR),
            ));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
                self::$logger
                    ->debug(
                        sprintf(
                            "FCM notification debug:\n%s",
                            json_encode($notificationDebugData, JSON_PRETTY_PRINT),
                        )
                    );
            }
        } catch (Exception $exception) {
            self::$logger
                ->error(
                    sprintf(
                        "An exception has been thrown while trying to send FCM notifications.\n\tError message is: '%s' [%s]\n\tNotification data was: %s\n\tUser devices were: %s",
                        $exception->getMessage(),
                        $exception->getCode(),
                        json_encode($notification->toArray(null), JSON_THROW_ON_ERROR),
                        json_encode($userNotificationTokens->toArray(), JSON_THROW_ON_ERROR),
                    )
                );
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            }
        } catch (Exception $exception) {
            self::$logger->error(sprintf(
                "An exception has been thrown while trying to send FCM notifications.\n\tError message is: '%s' [%s]\n\tNotification data was: %s\n\tUser devices were: %s",
                $exception->getMessage(),
                $exception->getCode(),
                json_encode($notification->toArray(null), JSON_THROW_ON_ERROR),
                json_encode($userNotificationTokens->toArray(), JSON_THROW_ON_ERROR),
            ));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
            self::$logger->error(json_encode($exception->getTrace(), JSON_PRETTY_PRINT));
        }
    }

    /**
     * @throws MessagingException
     * @throws FirebaseException
     */
    private function sendMulticastNotificationToDevices(
        MobilePushNotification $notification,
        Collection $userDeviceTokens,
        bool $debugTokens = false,
    ): MulticastSendReport {
        if ($debugTokens) {
            // Make sure tokens are valid (for debugging purposes)
            $this->testFcmTokens($userDeviceTokens);
        }

        /**
         * @var list<RegistrationToken|string>|RegistrationToken|RegistrationTokens|non-empty-string
         */
        $registrationTokens = $userDeviceTokens->toArray();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        return $this->firebaseCloudMessaging->sendMulticast(
            message: $notification->toCloudMessage(),
            registrationTokens: $registrationTokens,
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
<<<<<<< HEAD
=======
=======
         * @var list<\Kreait\Firebase\Messaging\RegistrationToken|string>|\Kreait\Firebase\Messaging\RegistrationToken|\Kreait\Firebase\Messaging\RegistrationTokens|non-empty-string
         */
        $registrationTokens = $userDeviceTokens->toArray();

>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
        return $this->firebaseCloudMessaging
            ->sendMulticast(
                message: $notification->toCloudMessage(),
                registrationTokens: $registrationTokens,
            );
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
    }

    /**
     * @throws MessagingException
     * @throws FirebaseException
     */
    private function testFcmTokens(Collection $tokens): void
    {
        /**
         * @var list<RegistrationToken|non-empty-string>|RegistrationToken|RegistrationTokens|non-empty-string
         */
        $registrationTokenOrTokens = $tokens->toArray();
        $validatedTokens = $this->firebaseCloudMessaging->validateRegistrationTokens($registrationTokenOrTokens);
        self::$logger->debug(json_encode($validatedTokens, JSON_PRETTY_PRINT));
    }
}
