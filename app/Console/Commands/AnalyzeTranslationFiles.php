<?php

declare(strict_types=1);

namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Helper\Table;

class AnalyzeTranslationFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:analyze-translations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Analyze translation files in the Notify module to identify inconsistencies';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Analyzing translation files in the Notify module...');

        $langPath = module_path('Notify', 'lang');
        $languages = File::directories($langPath);

        $allFiles = [];
        $allKeys = [];

        // Collect all files and their keys
        foreach ($languages as $langDir) {
<<<<<<< HEAD
<<<<<<< HEAD
            $lang = basename((string) $langDir);
            $files = File::files((string) $langDir);
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b8 (.)
=======
            /** @var string $langDirPath */
            $langDirPath = is_string($langDir) ? $langDir : (string) $langDir;
            $lang = basename($langDirPath);
            $files = File::files($langDirPath);
>>>>>>> 7148d73 (.)

            foreach ($files as $file) {
                $filename = $file->getFilename();
                $filePath = $file->getPathname();

                // Skip non-PHP files
<<<<<<< HEAD
<<<<<<< HEAD
                if (! str_ends_with($filename, '.php')) {
=======
                if (!str_ends_with($filename, '.php')) {
>>>>>>> 75179b8 (.)
=======
                if (!str_ends_with($filename, '.php')) {
>>>>>>> 7148d73 (.)
                    continue;
                }

                $translations = require $filePath;

<<<<<<< HEAD
<<<<<<< HEAD
                if (! is_array($translations)) {
                    $this->warn("File {$lang}/{$filename} does not return an array.");

=======
                if (!is_array($translations)) {
                    $this->warn("File {$lang}/{$filename} does not return an array.");
>>>>>>> 75179b8 (.)
=======
                if (!is_array($translations)) {
                    $this->warn("File {$lang}/{$filename} does not return an array.");
>>>>>>> 7148d73 (.)
                    continue;
                }

                $allFiles["{$lang}/{$filename}"] = $this->flattenArray($translations);

                // Collect all unique keys
<<<<<<< HEAD
<<<<<<< HEAD
                $flattenedKeys = $this->flattenArray($translations);
                foreach (array_keys($flattenedKeys) as $key) {
=======
                foreach (array_keys($this->flattenArray($translations)) as $key) {
>>>>>>> 75179b8 (.)
=======
                foreach (array_keys($this->flattenArray($translations)) as $key) {
>>>>>>> 7148d73 (.)
                    $allKeys[$key] = true;
                }
            }
        }

        // Sort keys alphabetically
        ksort($allKeys);
        $allKeys = array_keys($allKeys);

        // Analyze structure patterns
        $this->analyzeStructurePatterns($allFiles);

        // Generate consistency report
        $this->generateConsistencyReport($allFiles, $allKeys);

        // Generate recommendations
        $this->generateRecommendations($allFiles);

        return Command::SUCCESS;
    }

    /**
     * Flatten a multi-dimensional array into a single level array with dot notation keys.
     */
    private function flattenArray(array $array, string $prefix = ''): array
    {
        $result = [];

        foreach ($array as $key => $value) {
            $newKey = $prefix ? "{$prefix}.{$key}" : $key;

            if (is_array($value)) {
                $result = array_merge($result, $this->flattenArray($value, $newKey));
            } else {
                $result[$newKey] = $value;
            }
        }

        return $result;
    }

    /**
     * Analyze structure patterns in translation files.
     */
    private function analyzeStructurePatterns(array $allFiles): void
    {
        $this->info('Analyzing structure patterns...');

        $patterns = [];

        foreach ($allFiles as $file => $keys) {
            $topLevelKeys = [];

<<<<<<< HEAD
<<<<<<< HEAD
            if (is_array($keys)) {
                foreach (array_keys($keys) as $key) {
                    $parts = explode('.', (string) $key);
                    $topLevelKeys[$parts[0]] = true;
                }
=======
            foreach (array_keys($keys) as $key) {
                $parts = explode('.', (string) $key);
                $topLevelKeys[$parts[0]] = true;
>>>>>>> 75179b8 (.)
=======
            foreach (array_keys($keys) as $key) {
                $parts = explode('.', (string) $key);
                $topLevelKeys[$parts[0]] = true;
>>>>>>> 7148d73 (.)
            }

            $pattern = implode(',', array_keys($topLevelKeys));
            $patterns[$pattern][] = $file;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->info('Found '.count($patterns).' different structure patterns:');
=======
        $this->info('Found ' . count($patterns) . ' different structure patterns:');
>>>>>>> 75179b8 (.)
=======
        $this->info('Found ' . count($patterns) . ' different structure patterns:');
>>>>>>> 7148d73 (.)

        $table = new Table($this->output);
        $table->setHeaders(['Pattern', 'Files']);

        foreach ($patterns as $pattern => $files) {
            $table->addRow([
                $pattern,
                implode(PHP_EOL, $files),
            ]);
        }

        $table->render();
    }

    /**
     * Generate a consistency report for translation files.
     */
    private function generateConsistencyReport(array $allFiles, array $allKeys): void
    {
        $this->info('Generating consistency report...');

        $table = new Table($this->output);
        $headers = ['Key'];

        foreach (array_keys($allFiles) as $file) {
            $headers[] = $file;
        }

        $table->setHeaders($headers);

        foreach ($allKeys as $key) {
            $row = [$key];

<<<<<<< HEAD
<<<<<<< HEAD
            // Type narrowing: assicura che $key sia string|int
            if (! is_string($key) && ! is_int($key)) {
                continue;
            }

            foreach (array_keys($allFiles) as $file) {
                // array_keys() restituisce sempre array di string|int
                $fileData = $allFiles[$file] ?? [];
                if (! is_array($fileData)) {
                    $row[] = '✗';

                    continue;
                }
                $row[] = isset($fileData[$key]) ? '✓' : '✗';
=======
            foreach (array_keys($allFiles) as $file) {
                $row[] = isset($allFiles[$file][$key]) ? '✓' : '✗';
>>>>>>> 75179b8 (.)
=======
            foreach (array_keys($allFiles) as $file) {
                $row[] = isset($allFiles[$file][$key]) ? '✓' : '✗';
>>>>>>> 7148d73 (.)
            }

            $table->addRow($row);
        }

        $table->render();
    }

    /**
     * Generate recommendations for standardizing translation files.
     */
    private function generateRecommendations(array $allFiles): void
    {
        $this->info('Generating recommendations...');

        // Identify files with 'send_' prefix
        $sendFiles = [];
        $resourceFiles = [];

        foreach (array_keys($allFiles) as $file) {
            if (str_contains($file, '/send_')) {
                $sendFiles[] = $file;
            } else {
                $resourceFiles[] = $file;
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->info('Files with send_ prefix ('.count($sendFiles).'):');
=======
        $this->info('Files with send_ prefix (' . count($sendFiles) . '):');
>>>>>>> 75179b8 (.)
=======
        $this->info('Files with send_ prefix (' . count($sendFiles) . '):');
>>>>>>> 7148d73 (.)
        foreach ($sendFiles as $file) {
            $this->line(" - {$file}");
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->info('Resource files ('.count($resourceFiles).'):');
=======
        $this->info('Resource files (' . count($resourceFiles) . '):');
>>>>>>> 75179b8 (.)
=======
        $this->info('Resource files (' . count($resourceFiles) . '):');
>>>>>>> 7148d73 (.)
        foreach ($resourceFiles as $file) {
            $this->line(" - {$file}");
        }

        // Analyze navigation structure
        $this->analyzeNavigationStructure($allFiles);

        // Generate standardization recommendations
        $this->line('');
        $this->info('Recommendations:');
        $this->line('1. Standardize the navigation structure across all files');
        $this->line('2. Ensure all functional files (send_*) have consistent key structure');
        $this->line('3. Ensure all resource files have consistent key structure');
        $this->line('4. Document the standardized structure in NOTIFY_TRANSLATION_GUIDE.md');
    }

    /**
     * Analyze the navigation structure in translation files.
     */
    private function analyzeNavigationStructure(array $allFiles): void
    {
        $this->info('Analyzing navigation structure...');

        $navigationStructures = [];

        foreach ($allFiles as $file => $keys) {
            $navigationKeys = [];

<<<<<<< HEAD
<<<<<<< HEAD
            if (is_array($keys)) {
                foreach (array_keys($keys) as $key) {
                    if (str_starts_with((string) $key, 'navigation.')) {
                        $navigationKeys[] = str_replace('navigation.', '', (string) $key);
                    }
                }
            }

            if (! empty($navigationKeys)) {
=======
=======
>>>>>>> 7148d73 (.)
            foreach (array_keys($keys) as $key) {
                if (str_starts_with((string) $key, 'navigation.')) {
                    $navigationKeys[] = str_replace('navigation.', '', (string) $key);
                }
            }

            if (!empty($navigationKeys)) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
                sort($navigationKeys);
                $structure = implode(',', $navigationKeys);
                $navigationStructures[$structure][] = $file;
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->info('Found '.count($navigationStructures).' different navigation structures:');
=======
        $this->info('Found ' . count($navigationStructures) . ' different navigation structures:');
>>>>>>> 75179b8 (.)
=======
        $this->info('Found ' . count($navigationStructures) . ' different navigation structures:');
>>>>>>> 7148d73 (.)

        $table = new Table($this->output);
        $table->setHeaders(['Structure', 'Files']);

        foreach ($navigationStructures as $structure => $files) {
            $table->addRow([
                $structure,
                implode(PHP_EOL, $files),
            ]);
        }

        $table->render();
    }
}
