<?php

declare(strict_types=1);

namespace Modules\Notify\Helpers;

use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeArrayCastAction;
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)

/**
 * Helper per la gestione delle configurazioni del modulo Notify.
 * Permette di sostituire variabili template nei dati di configurazione.
 */
class ConfigHelper
{
    /**
     * Sostituisce le variabili template nei dati di configurazione.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
     *
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     * @param array<string, mixed> $data
     *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     * @param array<string, mixed> $data
     *
>>>>>>> 75179b85 (.)
=======
     * @param array<string, mixed> $data
     *
>>>>>>> 75179b855 (.)
     * @return array<string, mixed>
     */
    public static function replaceTemplateVariables(array $data): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $companyConfigRaw = Config::get('notify.company', []);
        $templateVariablesRaw = Config::get('notify.template_variables', []);

        /** @var array<string, mixed> $companyConfig */
        $companyConfig = SafeArrayCastAction::cast($companyConfigRaw);
        /** @var array<string, mixed> $templateVariables */
        $templateVariables = SafeArrayCastAction::cast($templateVariablesRaw);
        
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        $companyConfig = Config::get('notify.company', []);
        $templateVariables = Config::get('notify.template_variables', []);

        // Assicura che entrambi siano array prima di combinarli
        $companyConfig = is_array($companyConfig) ? $companyConfig : [];
        $templateVariables = is_array($templateVariables) ? $templateVariables : [];

        /** @var array<string, mixed> $companyConfig */
        /** @var array<string, mixed> $templateVariables */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        $availableVariables = array_merge($companyConfig, $templateVariables);

        return self::recursiveReplace($data, $availableVariables);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
     * Sostituisce ricorsivamente le variabili template in un array.
     *
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $variables
=======
=======
>>>>>>> 75179b855 (.)
     * Sostituisce ricorsivamente le variabili template in un array.
     *
     * @param array<string, mixed> $data
     * @param array<string, mixed> $variables
     *
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
     * @return array<string, mixed>
     */
    private static function recursiveReplace(array $data, array $variables): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            if (is_string($value)) {
                $result[$key] = self::replaceStringVariables($value, $variables);
            } elseif (is_array($value)) {
                /** @var array<string, mixed> $value */
                $result[$key] = self::recursiveReplace($value, $variables);
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    /**
     * Sostituisce le variabili template in una stringa.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $variables
=======
     * @param array<string, mixed> $variables
>>>>>>> 75179b85 (.)
=======
     * @param array<string, mixed> $variables
>>>>>>> 75179b855 (.)
     */
    private static function replaceStringVariables(string $string, array $variables): string
    {
        foreach ($variables as $variable => $value) {
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
            $placeholder = '{{'.$variable.'}}';
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 9777d1b3 (.)
=======
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> a12f125f4a (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> b93ef594b4 (.)
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 3f537838 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 75179b855 (.)
=======
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            $string = str_replace($placeholder, (string) $value, $string);
        }

        return $string;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b855 (.)
     * Ottiene un valore di configurazione con sostituzione delle variabili template.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        $value = Config::get($key, $default);

        if (is_string($value)) {
            $companyConfig = Config::get('notify.company', []);
            $companyConfig = is_array($companyConfig) ? $companyConfig : [];

<<<<<<< HEAD
            /** @var array<string, mixed> $safeCompanyConfig */
            $safeCompanyConfig = $companyConfig;

            return self::replaceStringVariables($value, $safeCompanyConfig);
        }

        if (is_array($value)) {
            /** @var array<string, mixed> $safeValue */
            $safeValue = $value;

            return self::replaceTemplateVariables($safeValue);
        }

        return $value;
    }

    /**
     * Ottiene i dati di test con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getTestData(): array
    {
        $testData = Config::get('notify.test_data', []);
        $testData = is_array($testData) ? $testData : [];

        /** @var array<string, mixed> $safeTestData */
        $safeTestData = $testData;

        return self::replaceTemplateVariables($safeTestData);
    }

    /**
     * Ottiene la configurazione della company con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getCompanyConfig(): array
    {
        $companyConfig = Config::get('notify.company', []);
        $companyConfig = is_array($companyConfig) ? $companyConfig : [];

        /** @var array<string, mixed> $safeCompanyConfig */
        $safeCompanyConfig = $companyConfig;

        return self::replaceTemplateVariables($safeCompanyConfig);
    }

    /**
     * Ottiene la configurazione dei webhook con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getWebhookConfig(): array
    {
        $webhookConfig = Config::get('notify.webhooks', []);
        $webhookConfig = is_array($webhookConfig) ? $webhookConfig : [];

        /** @var array<string, mixed> $safeWebhookConfig */
        $safeWebhookConfig = $webhookConfig;

        return self::replaceTemplateVariables($safeWebhookConfig);
    }

    /**
     * Ottiene la configurazione email con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getEmailConfig(): array
    {
        $emailConfig = Config::get('notify.email', []);
        $emailConfig = is_array($emailConfig) ? $emailConfig : [];

        /** @var array<string, mixed> $safeEmailConfig */
        $safeEmailConfig = $emailConfig;

        return self::replaceTemplateVariables($safeEmailConfig);
    }

    /**
     * Ottiene la configurazione dei path con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getPathConfig(): array
    {
        $pathConfig = Config::get('notify.paths', []);
        $pathConfig = is_array($pathConfig) ? $pathConfig : [];

        /** @var array<string, mixed> $safePathConfig */
        $safePathConfig = $pathConfig;

        return self::replaceTemplateVariables($safePathConfig);
    }

    /**
>>>>>>> c8b1c8bf (.)
     * Sostituisce ricorsivamente le variabili template in un array.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
     * @param array<string, mixed> $variables
     *
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $variables
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $variables
=======
>>>>>>> f1c9518b (.)
     * @param array<string, mixed> $data
     * @param array<string, mixed> $variables
     *
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
     * Sostituisce ricorsivamente le variabili template in un array.
     *
     * @param array<string, mixed> $data
     * @param array<string, mixed> $variables
     *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     * @return array<string, mixed>
     */
    private static function recursiveReplace(array $data, array $variables): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            if (is_string($value)) {
                $result[$key] = self::replaceStringVariables($value, $variables);
            } elseif (is_array($value)) {
                /** @var array<string, mixed> $value */
                $result[$key] = self::recursiveReplace($value, $variables);
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    /**
     * Sostituisce le variabili template in una stringa.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $variables
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
     * @param  array<string, mixed>  $variables
=======
     * @param array<string, mixed> $variables
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
     * @param  array<string, mixed>  $variables
=======
     * @param array<string, mixed> $variables
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     * @param array<string, mixed> $variables
>>>>>>> 75179b85 (.)
=======
>>>>>>> f1c9518b (.)
=======
     * @param  array<string, mixed>  $variables
=======
     * @param array<string, mixed> $variables
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     */
    private static function replaceStringVariables(string $string, array $variables): string
    {
        foreach ($variables as $variable => $value) {
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
<<<<<<< HEAD
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> ce89c8bb (.)
            $placeholder = '{{'.$variable.'}}';
>>>>>>> 98d837b9 (.)
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
            $placeholder = '{{'.$variable.'}}';
>>>>>>> 888799d0 (.)
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> b19cd40 (.)
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
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 9777d1b3 (.)
=======
            $placeholder = '{{' . $variable . '}}';
=======
=======
            $placeholder = '{{' . $variable . '}}';
=======
>>>>>>> d09cb759 (.)
=======
            $placeholder = '{{' . $variable . '}}';
=======
>>>>>>> d09cb759 (.)
=======
            $placeholder = '{{' . $variable . '}}';
=======
>>>>>>> 4689a827 (.)
=======
            $placeholder = '{{' . $variable . '}}';
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> a12f125f4a (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> b93ef594b4 (.)
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 3f537838 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 3f537838 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 3f39ac8b (.)
            $placeholder = '{{'.$variable.'}}';
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 3f39ac8b (.)
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
            $placeholder = '{{'.$variable.'}}';
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
            $placeholder = '{{' . $variable . '}}';
=======
=======
            $placeholder = '{{' . $variable . '}}';
=======
>>>>>>> d09cb759 (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> a12f125f4a (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> b93ef594b4 (.)
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> 985c7bda (.)
=======
            $placeholder = '{{'.$variable.'}}';
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 2fc60436 (.)
            $placeholder = '{{'.$variable.'}}';
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 2941b0bd (.)
=======
            $placeholder = '{{'.$variable.'}}';
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
            $placeholder = '{{'.$variable.'}}';
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
            $string = str_replace($placeholder, (string) $value, $string);
        }

        return $string;
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> c8b1c8bf (.)

    /**
=======
>>>>>>> 75179b85 (.)
     * Ottiene un valore di configurazione con sostituzione delle variabili template.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        $value = Config::get($key, $default);

        if (is_string($value)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $companyConfigRaw = Config::get('notify.company', []);
            /** @var array<string, mixed> $companyConfig */
            $companyConfig = SafeArrayCastAction::cast($companyConfigRaw);
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
            $companyConfig = Config::get('notify.company', []);
            $companyConfig = is_array($companyConfig) ? $companyConfig : [];

            /* @var array<string, mixed> $companyConfig */
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
            /* @var array<string, mixed> $companyConfig */
>>>>>>> 75179b855 (.)
            return self::replaceStringVariables($value, $companyConfig);
        }

        if (is_array($value)) {
            /** @var array<string, mixed> $value */
            return self::replaceTemplateVariables($value);
        }

        return $value;
    }

    /**
     * Ottiene i dati di test con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getTestData(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $testDataRaw = Config::get('notify.test_data', []);
        /** @var array<string, mixed> $testData */
        $testData = SafeArrayCastAction::cast($testDataRaw);
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        $testData = Config::get('notify.test_data', []);
        $testData = is_array($testData) ? $testData : [];

        /* @var array<string, mixed> $testData */
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        return self::replaceTemplateVariables($testData);
    }

    /**
     * Ottiene la configurazione della company con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getCompanyConfig(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $companyConfigRaw = Config::get('notify.company', []);
        /** @var array<string, mixed> $companyConfig */
        $companyConfig = SafeArrayCastAction::cast($companyConfigRaw);
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        $companyConfig = Config::get('notify.company', []);
        $companyConfig = is_array($companyConfig) ? $companyConfig : [];

        /* @var array<string, mixed> $companyConfig */
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        return self::replaceTemplateVariables($companyConfig);
    }

    /**
     * Ottiene la configurazione dei webhook con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getWebhookConfig(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $webhookConfigRaw = Config::get('notify.webhooks', []);
        /** @var array<string, mixed> $webhookConfig */
        $webhookConfig = SafeArrayCastAction::cast($webhookConfigRaw);
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        $webhookConfig = Config::get('notify.webhooks', []);
        $webhookConfig = is_array($webhookConfig) ? $webhookConfig : [];

        /* @var array<string, mixed> $webhookConfig */
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        return self::replaceTemplateVariables($webhookConfig);
    }

    /**
     * Ottiene la configurazione email con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getEmailConfig(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $emailConfigRaw = Config::get('notify.email', []);
        /** @var array<string, mixed> $emailConfig */
        $emailConfig = SafeArrayCastAction::cast($emailConfigRaw);
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        $emailConfig = Config::get('notify.email', []);
        $emailConfig = is_array($emailConfig) ? $emailConfig : [];

        /* @var array<string, mixed> $emailConfig */
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        return self::replaceTemplateVariables($emailConfig);
    }

    /**
     * Ottiene la configurazione dei path con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getPathConfig(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $pathConfigRaw = Config::get('notify.paths', []);
        /** @var array<string, mixed> $pathConfig */
        $pathConfig = SafeArrayCastAction::cast($pathConfigRaw);
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
        $pathConfig = Config::get('notify.paths', []);
        $pathConfig = is_array($pathConfig) ? $pathConfig : [];

        /* @var array<string, mixed> $pathConfig */
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
        return self::replaceTemplateVariables($pathConfig);
    }
=======
        return self::replaceTemplateVariables($pathConfig);
    }
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        return self::replaceTemplateVariables($pathConfig);
    }
>>>>>>> 75179b85 (.)
=======
        return self::replaceTemplateVariables($pathConfig);
    }
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        return self::replaceTemplateVariables($pathConfig);
    }
>>>>>>> 75179b85 (.)
=======
        return self::replaceTemplateVariables($pathConfig);
    }
>>>>>>> 75179b855 (.)
}
