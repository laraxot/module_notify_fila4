<?php

declare(strict_types=1);

namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Helper\Table;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Webmozart\Assert\Assert;
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
            /** @var string $langDirPath */
            $langDirPath = is_string($langDir) ? $langDir : (string) $langDir;
            $lang = basename($langDirPath);
            $files = File::files($langDirPath);
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b85 (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b85 (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b85 (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b85 (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 5fd545e4 (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> c8b1c8bf (.)
            $lang = basename((string) $langDir);
            $files = File::files((string) $langDir);
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b85 (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 5fd545e4 (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b85 (.)
=======
            $lang = basename($langDir);
            $files = File::files($langDir);
>>>>>>> 75179b855 (.)

            foreach ($files as $file) {
                $filename = $file->getFilename();
                $filePath = $file->getPathname();

                // Skip non-PHP files
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
                if (! str_ends_with($filename, '.php')) {
=======
                if (!str_ends_with($filename, '.php')) {
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
                if (!str_ends_with($filename, '.php')) {
>>>>>>> 75179b85 (.)
=======
                if (! str_ends_with($filename, '.php')) {
=======
                if (!str_ends_with($filename, '.php')) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
                if (!str_ends_with($filename, '.php')) {
>>>>>>> 75179b85 (.)
=======
                if (!str_ends_with($filename, '.php')) {
>>>>>>> 75179b855 (.)
                    continue;
                }

                $translations = require $filePath;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
                if (! is_array($translations)) {
                    $this->warn("File {$lang}/{$filename} does not return an array.");

=======
                if (!is_array($translations)) {
                    $this->warn("File {$lang}/{$filename} does not return an array.");
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
                if (!is_array($translations)) {
                    $this->warn("File {$lang}/{$filename} does not return an array.");
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
                if (!is_array($translations)) {
                    $this->warn("File {$lang}/{$filename} does not return an array.");
>>>>>>> 75179b85 (.)
=======
                if (!is_array($translations)) {
                    $this->warn("File {$lang}/{$filename} does not return an array.");
>>>>>>> 75179b855 (.)
                    continue;
                }

                $allFiles["{$lang}/{$filename}"] = $this->flattenArray($translations);

                // Collect all unique keys
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                foreach (array_keys($this->flattenArray($translations)) as $key) {
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
                $flattenedKeys = $this->flattenArray($translations);
                foreach (array_keys($flattenedKeys) as $key) {
=======
                foreach (array_keys($this->flattenArray($translations)) as $key) {
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
                foreach (array_keys($this->flattenArray($translations)) as $key) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
                foreach (array_keys($this->flattenArray($translations)) as $key) {
>>>>>>> 75179b85 (.)
=======
                foreach (array_keys($this->flattenArray($translations)) as $key) {
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!is_array($keys)) {
                continue;
            }
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
            $topLevelKeys = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
            foreach (array_keys($keys) as $key) {
                $parts = explode('.', (string) $key);
                $topLevelKeys[$parts[0]] = true;
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
            $topLevelKeys = [];

            foreach (array_keys($keys) as $key) {
                $parts = explode('.', (string) $key);
                $topLevelKeys[$parts[0]] = true;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
            }

            $pattern = implode(',', array_keys($topLevelKeys));
            $patterns[$pattern][] = $file;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $this->info('Found '.count($patterns).' different structure patterns:');
=======
        $this->info('Found ' . count($patterns) . ' different structure patterns:');
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $this->info('Found ' . count($patterns) . ' different structure patterns:');
>>>>>>> 75179b85 (.)
=======
        $this->info('Found '.count($patterns).' different structure patterns:');
=======
        $this->info('Found ' . count($patterns) . ' different structure patterns:');
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $this->info('Found ' . count($patterns) . ' different structure patterns:');
>>>>>>> 75179b85 (.)
=======
        $this->info('Found ' . count($patterns) . ' different structure patterns:');
>>>>>>> 75179b855 (.)

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
            Assert::string($key);
            $row = [$key];

<<<<<<< HEAD
<<<<<<< HEAD
            foreach (array_keys($allFiles) as $file) {
                /** @var array<string, mixed>|null $fileData */
                $fileData = $allFiles[$file] ?? null;
                $row[] = (is_array($fileData) && isset($fileData[$key])) ? '✓' : '✗';
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
            $row = [$key];
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
            // Type narrowing: assicura che $key sia string|int
            if (! is_string($key) && ! is_int($key)) {
                continue;
            }
>>>>>>> c8b1c8bf (.)

            foreach (array_keys($allFiles) as $file) {
                $row[] = isset($allFiles[$file][$key]) ? '✓' : '✗';
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
            $row = [$key];

<<<<<<< HEAD
            foreach (array_keys($allFiles) as $file) {
                $row[] = isset($allFiles[$file][$key]) ? '✓' : '✗';
>>>>>>> 5fd545e4 (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
            $row = [$key];

            foreach (array_keys($allFiles) as $file) {
                $row[] = isset($allFiles[$file][$key]) ? '✓' : '✗';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54220b28 (rebase 210)
=======
                    continue;
                }
                $row[] = isset($fileData[$key]) ? '✓' : '✗';
=======
            foreach (array_keys($allFiles) as $file) {
                $row[] = isset($allFiles[$file][$key]) ? '✓' : '✗';
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
            if (str_contains($file, '/send_')) {
=======
            if (strpos($file, '/send_') !== false) {
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
            if (str_contains($file, '/send_')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 9777d1b3 (.)
=======
            if (str_contains($file, '/send_')) {
=======
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> 4689a827 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> f2e64178 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> c4bdacbf (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> dceba960 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> bd804d67 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> 2effe245 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> 4689a827 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> f2e64178 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> c4bdacbf (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> dceba960 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> bd804d67 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> 2effe245 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (str_contains($file, '/send_')) {
=======
            if (strpos($file, '/send_') !== false) {
>>>>>>> a12f125f4a (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> b93ef594b4 (.)
=======
            if (strpos($file, '/send_') !== false) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 3f537838 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 3f537838 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 116df547 (.)
=======
>>>>>>> 2effe245 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 58816034 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 116df547 (.)
=======
>>>>>>> 2effe245 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 58816034 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 3f537838 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            if (str_contains($file, '/send_')) {
>>>>>>> 3f537838 (.)
                $sendFiles[] = $file;
            } else {
                $resourceFiles[] = $file;
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $this->info('Files with send_ prefix ('.count($sendFiles).'):');
=======
        $this->info('Files with send_ prefix (' . count($sendFiles) . '):');
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $this->info('Files with send_ prefix (' . count($sendFiles) . '):');
>>>>>>> 75179b85 (.)
=======
        $this->info('Files with send_ prefix ('.count($sendFiles).'):');
=======
        $this->info('Files with send_ prefix (' . count($sendFiles) . '):');
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $this->info('Files with send_ prefix (' . count($sendFiles) . '):');
>>>>>>> 75179b85 (.)
=======
        $this->info('Files with send_ prefix (' . count($sendFiles) . '):');
>>>>>>> 75179b855 (.)
        foreach ($sendFiles as $file) {
            $this->line(" - {$file}");
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $this->info('Resource files ('.count($resourceFiles).'):');
=======
        $this->info('Resource files (' . count($resourceFiles) . '):');
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $this->info('Resource files (' . count($resourceFiles) . '):');
>>>>>>> 75179b85 (.)
=======
        $this->info('Resource files ('.count($resourceFiles).'):');
=======
        $this->info('Resource files (' . count($resourceFiles) . '):');
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $this->info('Resource files (' . count($resourceFiles) . '):');
>>>>>>> 75179b85 (.)
=======
        $this->info('Resource files (' . count($resourceFiles) . '):');
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!is_array($keys)) {
                continue;
            }
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
            $navigationKeys = [];

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
            foreach (array_keys($keys) as $key) {
                if (str_starts_with((string) $key, 'navigation.')) {
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
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $navigationKeys = [];

            foreach (array_keys($keys) as $key) {
<<<<<<< HEAD
                if (str_starts_with((string) $key, 'navigation.')) {
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
            if (is_array($keys)) {
                foreach (array_keys($keys) as $key) {
                    if (str_starts_with((string) $key, 'navigation.')) {
                        $navigationKeys[] = str_replace('navigation.', '', (string) $key);
                    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
            foreach (array_keys($keys) as $key) {
<<<<<<< HEAD
                if (str_starts_with((string) $key, 'navigation.')) {
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (str_starts_with((string) $key, 'navigation.')) {
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> a12f125f4a (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> b93ef594b4 (.)
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
=======
                if (strpos((string) $key, 'navigation.') === 0) {
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
                if (str_starts_with((string) $key, 'navigation.')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
                    $navigationKeys[] = str_replace('navigation.', '', (string) $key);
=======
                    $navigationKeys[] = str_replace('navigation.', '', (string) $key);
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> d45a0226 (.)
=======
            foreach (array_keys($keys) as $key) {
                if (str_starts_with((string) $key, 'navigation.')) {
                    $navigationKeys[] = str_replace('navigation.', '', (string) $key);
>>>>>>> f5f1cb1 (.)
<<<<<<< HEAD
>>>>>>> d45a0226 (.)
=======
                    $navigationKeys[] = str_replace('navigation.', '', (string) $key);
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
                }
            }

            if (! empty($navigationKeys)) {
=======
<<<<<<< HEAD
=======
            $navigationKeys = [];

>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
            $navigationKeys = [];

>>>>>>> 75179b85 (.)
=======
            $navigationKeys = [];

>>>>>>> 75179b855 (.)
            foreach (array_keys($keys) as $key) {
                if (str_starts_with((string) $key, 'navigation.')) {
                    $navigationKeys[] = str_replace('navigation.', '', (string) $key);
                }
            }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (!empty($navigationKeys)) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
            if (! empty($navigationKeys)) {
=======
            if (!empty($navigationKeys)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
            if (!empty($navigationKeys)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
            if (!empty($navigationKeys)) {
>>>>>>> 75179b85 (.)
=======
            if (!empty($navigationKeys)) {
>>>>>>> 75179b855 (.)
                sort($navigationKeys);
                $structure = implode(',', $navigationKeys);
                $navigationStructures[$structure][] = $file;
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $this->info('Found '.count($navigationStructures).' different navigation structures:');
=======
        $this->info('Found ' . count($navigationStructures) . ' different navigation structures:');
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $this->info('Found ' . count($navigationStructures) . ' different navigation structures:');
>>>>>>> 75179b85 (.)
=======
        $this->info('Found '.count($navigationStructures).' different navigation structures:');
=======
        $this->info('Found ' . count($navigationStructures) . ' different navigation structures:');
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $this->info('Found ' . count($navigationStructures) . ' different navigation structures:');
>>>>>>> 75179b85 (.)
=======
        $this->info('Found ' . count($navigationStructures) . ' different navigation structures:');
>>>>>>> 75179b855 (.)

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
