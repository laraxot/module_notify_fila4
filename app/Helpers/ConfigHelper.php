<?php

declare(strict_types=1);

namespace Modules\Notify\Helpers;

use Illuminate\Support\Facades\Config;
use Modules\Xot\Actions\Cast\SafeArrayCastAction;

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
     * @param  array<string, mixed>  $data
=======
<<<<<<< HEAD
     * @param array<string, mixed> $data
     *
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
     *
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
     * @return array<string, mixed>
     */
    public static function replaceTemplateVariables(array $data): array
    {
        $companyConfigRaw = Config::get('notify.company', []);
        $templateVariablesRaw = Config::get('notify.template_variables', []);

        /** @var array<string, mixed> $companyConfig */
        $companyConfig = SafeArrayCastAction::cast($companyConfigRaw);
        /** @var array<string, mixed> $templateVariables */
        $templateVariables = SafeArrayCastAction::cast($templateVariablesRaw);

        $availableVariables = array_merge($companyConfig, $templateVariables);

        return self::recursiveReplace($data, $availableVariables);
    }

    /**
     * Sostituisce ricorsivamente le variabili template in un array.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $variables
=======
<<<<<<< HEAD
     * @param array<string, mixed> $data
     * @param array<string, mixed> $variables
     *
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
     * @param  array<string, mixed>  $variables
=======
     * @param array<string, mixed> $data
     * @param array<string, mixed> $variables
     *
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
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
     * @param  array<string, mixed>  $variables
=======
<<<<<<< HEAD
     * @param array<string, mixed> $variables
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $variables
=======
     * @param array<string, mixed> $variables
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
     */
    private static function replaceStringVariables(string $string, array $variables): string
    {
        foreach ($variables as $variable => $value) {
<<<<<<< HEAD
            $placeholder = '{{'.$variable.'}}';
=======
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
            $placeholder = '{{' . $variable . '}}';
=======
            $placeholder = '{{'.$variable.'}}';
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
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
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 2941b0bd (.)
=======
            $placeholder = '{{'.$variable.'}}';
=======
            $placeholder = '{{' . $variable . '}}';
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
            $string = str_replace($placeholder, (string) $value, $string);
        }

        return $string;
    }

    /**
     * Ottiene un valore di configurazione con sostituzione delle variabili template.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        $value = Config::get($key, $default);

        if (is_string($value)) {
            $companyConfigRaw = Config::get('notify.company', []);
            /** @var array<string, mixed> $companyConfig */
            $companyConfig = SafeArrayCastAction::cast($companyConfigRaw);

<<<<<<< HEAD
=======
            /* @var array<string, mixed> $companyConfig */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
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
        $testDataRaw = Config::get('notify.test_data', []);
        /** @var array<string, mixed> $testData */
        $testData = SafeArrayCastAction::cast($testDataRaw);

<<<<<<< HEAD
=======
        /* @var array<string, mixed> $testData */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
        return self::replaceTemplateVariables($testData);
    }

    /**
     * Ottiene la configurazione della company con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getCompanyConfig(): array
    {
        $companyConfigRaw = Config::get('notify.company', []);
        /** @var array<string, mixed> $companyConfig */
        $companyConfig = SafeArrayCastAction::cast($companyConfigRaw);

<<<<<<< HEAD
=======
        /* @var array<string, mixed> $companyConfig */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
        return self::replaceTemplateVariables($companyConfig);
    }

    /**
     * Ottiene la configurazione dei webhook con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getWebhookConfig(): array
    {
        $webhookConfigRaw = Config::get('notify.webhooks', []);
        /** @var array<string, mixed> $webhookConfig */
        $webhookConfig = SafeArrayCastAction::cast($webhookConfigRaw);

<<<<<<< HEAD
=======
        /* @var array<string, mixed> $webhookConfig */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
        return self::replaceTemplateVariables($webhookConfig);
    }

    /**
     * Ottiene la configurazione email con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getEmailConfig(): array
    {
        $emailConfigRaw = Config::get('notify.email', []);
        /** @var array<string, mixed> $emailConfig */
        $emailConfig = SafeArrayCastAction::cast($emailConfigRaw);

<<<<<<< HEAD
=======
        /* @var array<string, mixed> $emailConfig */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
        return self::replaceTemplateVariables($emailConfig);
    }

    /**
     * Ottiene la configurazione dei path con sostituzione delle variabili template.
     *
     * @return array<string, mixed>
     */
    public static function getPathConfig(): array
    {
        $pathConfigRaw = Config::get('notify.paths', []);
        /** @var array<string, mixed> $pathConfig */
        $pathConfig = SafeArrayCastAction::cast($pathConfigRaw);

<<<<<<< HEAD
=======
        /* @var array<string, mixed> $pathConfig */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
        return self::replaceTemplateVariables($pathConfig);
    }
}
