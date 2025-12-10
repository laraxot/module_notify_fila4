<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 2fc60436 (.)
// This file references <nome progetto> models that do not exist in this project
>>>>>>> 2fc60436 (.)

// This file references SaluteOra models that do not exist in this project
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======

// This file references SaluteOra models that do not exist in this project
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======

// This file references SaluteOra models that do not exist in this project
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======

// This file references SaluteOra models that do not exist in this project
>>>>>>> 3f537838 (.)
=======

// This file references SaluteOra models that do not exist in this project
>>>>>>> f1c9518b (.)
namespace Modules\Notify\Actions;

use Exception;
use Modules\Notify\Models\Notification;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> 82ae73be (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> d09cb759 (.)
=======
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
>>>>>>> 3f537838 (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> 82ae73be (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> d09cb759 (.)
=======
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
>>>>>>> 3f537838 (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> 82ae73be (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> d09cb759 (.)
=======
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
>>>>>>> 3f537838 (.)
=======
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
>>>>>>> f1c9518b (.)
=======
// use Modules\<nome progetto>\Models\Appointment;
// use Modules\<nome progetto>\Models\Patient;
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======

// This file references SaluteOra models that do not exist in this project
>>>>>>> 3f537838 (.)
=======

// This file references SaluteOra models that do not exist in this project
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======

// This file references SaluteOra models that do not exist in this project
>>>>>>> 3f537838 (.)
namespace Modules\Notify\Actions;

use Exception;
use Modules\Notify\Models\Notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Models\Patient;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
// use Modules\SaluteOra\Models\Patient;
>>>>>>> 3f537838 (.)
=======
// use Modules\SaluteOra\Models\Patient;
>>>>>>> f1c9518b (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> 82ae73be (.)
=======
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
>>>>>>> d09cb759 (.)
=======
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
>>>>>>> 3f537838 (.)
use Spatie\QueueableAction\QueueableAction;

class SendAppointmentNotificationAction
{
    use QueueableAction;

    /**
     * Numero massimo di tentativi per l'invio della notifica.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @var int
=======
<<<<<<< HEAD
=======
>>>>>>> 2fc60436 (.)
=======
     *
     * @var int
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
     *
     * @var int
>>>>>>> 82ae73be (.)
=======
     *
     * @var int
>>>>>>> d09cb759 (.)
=======
     *
     * @var int
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2fc60436 (.)
=======
     *
     * @var int
>>>>>>> 82ae73be (.)
=======
     *
     * @var int
>>>>>>> d09cb759 (.)
     */
    public int $tries = 3;

    /**
     * Invia una notifica relativa a un appuntamento.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
        mixed $appointment,
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
=======
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
>>>>>>> 3f537838 (.)
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
<<<<<<< HEAD
        Appointment $appointment,
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        mixed $appointment,
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
=======
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
>>>>>>> 3f537838 (.)
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
<<<<<<< HEAD
        Appointment $appointment,
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        mixed $appointment,
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
=======
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
>>>>>>> 3f537838 (.)
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
<<<<<<< HEAD
        Appointment $appointment,
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        mixed $appointment,
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2fc60436 (.)
     * @param  mixed  $appointment  L'appuntamento a cui si riferisce la notifica
     * @param  string  $type  Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param  array<string, mixed>  $additionalData  Dati aggiuntivi per la notifica
     */
    public function execute(
        mixed $appointment,
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
=======
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
>>>>>>> 3f537838 (.)
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
<<<<<<< HEAD
        Appointment $appointment,
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        mixed $appointment,
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
=======
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
>>>>>>> 3f537838 (.)
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
<<<<<<< HEAD
        Appointment $appointment,
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        mixed $appointment,
>>>>>>> 3f537838 (.)
        string $type,
        array $additionalData = []
    ): bool {
        try {
            // Carica il paziente con le relazioni necessarie
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3f537838 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 3f537838 (.)
            $patient = null; // Patient::with('user')->find($appointment->patient_id);

            // Since patient models are not available in this project,
            // we return early with logging
            Log::info('Notification service not fully implemented - missing Patient models', [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
            $patient = Patient::with('user')->find($appointment->patient_id);
            
            if (!$patient) {
                Log::error('Paziente non trovato per l\'invio della notifica di appuntamento', [
                    'appointment_id' => $appointment->id,
                    'patient_id' => $appointment->patient_id,
                ]);
                return false;
            }
            
            // Prepara i dati per la notifica
            $notificationData = [
                'appointment' => $appointment,
                'patient' => $patient,
<<<<<<< HEAD
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
>>>>>>> 3f537838 (.)
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
<<<<<<< HEAD
                'appointment_id' => $appointment->id,
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
<<<<<<< HEAD
                'appointment_id' => $appointment->id,
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
<<<<<<< HEAD
                'appointment_id' => $appointment->id,
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
<<<<<<< HEAD
                'appointment_id' => $appointment->id,
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
<<<<<<< HEAD
                'appointment_id' => $appointment->id,
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
                'type' => $type,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 2fc60436 (.)

=======
            
>>>>>>> 82ae73be (.)
=======
            
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
            
>>>>>>> 82ae73be (.)
=======
            
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
            
>>>>>>> 82ae73be (.)
=======
            
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> f1c9518b (.)
=======
            
>>>>>>> 82ae73be (.)
=======
            
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
            return false;
        }
    }
    
    /**
     * Registra la notifica nel database.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1c9518b (.)
     * @param mixed $appointment
     * @param mixed $patient
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
        // This method is disabled due to missing Patient/Appointment models
        Log::info('recordNotification method called but not implemented due to missing models', [
            'type' => $type,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment
     * @param Patient $patient
=======
     * @param mixed $appointment
     * @param mixed $patient
>>>>>>> 3f537838 (.)
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment
     * @param Patient $patient
=======
     * @param mixed $appointment
     * @param mixed $patient
>>>>>>> 3f537838 (.)
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment
     * @param Patient $patient
=======
     * @param mixed $appointment
     * @param mixed $patient
>>>>>>> 3f537838 (.)
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
            
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> f1c9518b (.)
=======
=======
            
>>>>>>> 2fc60436 (.)
            return false;
        }
    }
    
    /**
     * Registra la notifica nel database.
     *
<<<<<<< HEAD
     * @param mixed $appointment
     * @param mixed $patient
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
     * @param Appointment $appointment
     * @param Patient $patient
=======
     * @param mixed $appointment
     * @param mixed $patient
>>>>>>> 3f537838 (.)
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
        // Se esiste un modello Notification, lo utilizziamo per registrare la notifica
        if (class_exists('\Modules\Notify\Models\Notification')) {
            $notification = new Notification();
            $notification->tenant_id = $appointment->tenant_id;
            $notification->user_id = $patient->user?->id;
            $notification->subject_type = Appointment::class;
            $notification->subject_id = $appointment->id;
            $notification->type = $type;
            $notification->channels = ['email', 'database'];
            $notification->status = 'sent';
            $notification->data = [
                'appointment_id' => $appointment->id,
                'patient_id' => $patient->id,
                'date' => $appointment->date->format('Y-m-d'),
                'time' => $appointment->start_time?->format('H:i'),
            ];
            $notification->sent_at = now();
            $notification->save();
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f537838 (.)
        // This method is disabled due to missing Patient/Appointment models
        Log::info('recordNotification method called but not implemented due to missing models', [
            'type' => $type,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
    }
}
