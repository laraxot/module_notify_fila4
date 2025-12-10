<?php

declare(strict_types=1);

// This file references <nome progetto> models that do not exist in this project

// This file references SaluteOra models that do not exist in this project

// This file references SaluteOra models that do not exist in this project

// This file references SaluteOra models that do not exist in this project

// This file references SaluteOra models that do not exist in this project

// This file references SaluteOra models that do not exist in this project
namespace Modules\Notify\Actions;

use Exception;
use Modules\Notify\Models\Notification;
use Illuminate\Support\Facades\Log;
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
// use Modules\<nome progetto>\Models\Appointment;
// use Modules\<nome progetto>\Models\Patient;

// This file references SaluteOra models that do not exist in this project

// This file references SaluteOra models that do not exist in this project

// This file references SaluteOra models that do not exist in this project
namespace Modules\Notify\Actions;

use Exception;
use Modules\Notify\Models\Notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
// use Modules\SaluteOra\Models\Patient;
// use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
use Modules\SaluteOra\Models\Patient;
// use Modules\SaluteOra\Models\Appointment;
use Modules\Notify\Mail\AppointmentNotificationMail;
// use Modules\SaluteOra\Models\Patient;
use Spatie\QueueableAction\QueueableAction;

class SendAppointmentNotificationAction
{
    use QueueableAction;

    /**
     * Numero massimo di tentativi per l'invio della notifica.
     *
     * @var int
     *
     * @var int
     *
     * @var int
     *
     * @var int
     *
     * @var int
     *
     * @var int
     */
    public int $tries = 3;

    /**
     * Invia una notifica relativa a un appuntamento.
     *
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
        mixed $appointment,
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
        mixed $appointment,
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
        mixed $appointment,
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
        mixed $appointment,
     * @param  mixed  $appointment  L'appuntamento a cui si riferisce la notifica
     * @param  string  $type  Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param  array<string, mixed>  $additionalData  Dati aggiuntivi per la notifica
     */
    public function execute(
        mixed $appointment,
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
        mixed $appointment,
     * @param Appointment $appointment L'appuntamento a cui si riferisce la notifica
     * @param mixed $appointment L'appuntamento a cui si riferisce la notifica
     * @param string $type Il tipo di notifica (confermato, annullato, promemoria, ecc.)
     * @param array<string, mixed> $additionalData Dati aggiuntivi per la notifica
     *
     * @return bool
     */
    public function execute(
        mixed $appointment,
        string $type,
        array $additionalData = []
    ): bool {
        try {
            // Carica il paziente con le relazioni necessarie
            $patient = null; // Patient::with('user')->find($appointment->patient_id);

            // Since patient models are not available in this project,
            // we return early with logging
            Log::info('Notification service not fully implemented - missing Patient models', [
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
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
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
                'type' => $type,
                'additional_data' => $additionalData,
            ]);

            return false;

        } catch (Exception $e) {
            Log::error('Errore nell\'invio della notifica di appuntamento', [
                'type' => $type,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            
            

            
            

            
            


            
            

            return false;
        }
    }
    
    /**
     * Registra la notifica nel database.
     *
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
     * @param Appointment $appointment
     * @param Patient $patient
     * @param mixed $appointment
     * @param mixed $patient
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
     * @param Appointment $appointment
     * @param Patient $patient
     * @param mixed $appointment
     * @param mixed $patient
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
     * @param Appointment $appointment
     * @param Patient $patient
     * @param mixed $appointment
     * @param mixed $patient
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
            


            
            return false;
        }
    }
    
    /**
     * Registra la notifica nel database.
     *
     * @param mixed $appointment
     * @param mixed $patient
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
     * @param Appointment $appointment
     * @param Patient $patient
     * @param mixed $appointment
     * @param mixed $patient
     * @param string $type
     */
    private function recordNotification(
        mixed $appointment,
        mixed $patient,
        string $type
    ): void {
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
        // This method is disabled due to missing Patient/Appointment models
        Log::info('recordNotification method called but not implemented due to missing models', [
            'type' => $type,
        ]);
    }
}
