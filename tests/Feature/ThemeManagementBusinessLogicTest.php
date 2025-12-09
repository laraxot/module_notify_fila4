<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\Notify\Helpers\ConfigHelper;
use Modules\Notify\Models\Theme;
=======
use Modules\Notify\Models\Theme;
use Modules\Notify\Helpers\ConfigHelper;
>>>>>>> 99ff506 (.)

describe('Theme Management Business Logic', function (): void {
    it('can create theme with basic information', function (): void {
        $testData = ConfigHelper::getTestData();
<<<<<<< HEAD

        $themeData = [
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            'name' => $testData['theme_name'] ?? (config('app.name', 'Our Platform').' Professional'),
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            'description' => $testData['theme_description'] ?? ('Tema professionale per '.config('app.name', 'Our Platform')),
=======
        
        $themeData = [
            'name' => $testData['theme_name'] ?? (config('app.name', 'Our Platform') . ' Professional'),
            'description' => $testData['theme_description'] ?? ('Tema professionale per ' . config('app.name', 'Our Platform')),
>>>>>>> 99ff506 (.)
            'version' => '1.0.0',
            'is_active' => true,
        ];

        $theme = Theme::create($themeData);

        expect($theme)->toBeInstanceOf(Theme::class)
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            ->and($theme->name)->toBe($themeData['name'])
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            ->and($theme->description)->toBe($themeData['description'])
            ->and($theme->version)->toBe('1.0.0')
            ->and($theme->is_active)->toBeTrue();

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            'name' => $themeData['name'],
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
            'description' => $themeData['description'],
            'version' => '1.0.0',
            'is_active' => true,
        ]);
    });

    it('can manage theme colors', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $colors = [
            'primary' => '#001F3F',
            'secondary' => '#3B82F6',
            'accent' => '#F59E0B',
            'success' => '#10B981',
            'warning' => '#F59E0B',
            'error' => '#EF4444',
            'background' => '#FFFFFF',
            'text' => '#1F2937',
            'border' => '#E5E7EB',
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['colors' => $colors]);

        expect($theme->fresh()->colors['primary'])->toBe('#001F3F')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->colors['secondary'])->toBe('#3B82F6')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->colors['accent'])->toBe('#F59E0B')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->colors['success'])->toBe('#10B981')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->colors['error'])->toBe('#EF4444')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->colors['background'])->toBe('#FFFFFF')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->colors['text'])->toBe('#1F2937');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'colors' => json_encode($colors),
        ]);
    });

    it('can manage theme fonts', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $fonts = [
            'heading' => 'Segoe UI, Arial, sans-serif',
            'body' => 'Georgia, serif',
            'monospace' => 'Consolas, Monaco, monospace',
            'fallback' => 'Arial, sans-serif',
            'sizes' => [
                'xs' => '0.75rem',
                'sm' => '0.875rem',
                'base' => '1rem',
                'lg' => '1.125rem',
                'xl' => '1.25rem',
                '2xl' => '1.5rem',
                '3xl' => '1.875rem',
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['fonts' => $fonts]);

        expect($theme->fresh()->fonts['heading'])->toBe('Segoe UI, Arial, sans-serif')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->fonts['body'])->toBe('Georgia, serif')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->fonts['monospace'])->toBe('Consolas, Monaco, monospace')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->fonts['sizes']['base'])->toBe('1rem')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->fonts['sizes']['2xl'])->toBe('1.5rem');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'fonts' => json_encode($fonts),
        ]);
    });

    it('can manage theme spacing', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $spacing = [
            'xs' => '0.25rem',
            'sm' => '0.5rem',
            'md' => '1rem',
            'lg' => '1.5rem',
            'xl' => '2rem',
            '2xl' => '3rem',
            '3xl' => '4rem',
            'auto' => 'auto',
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['spacing' => $spacing]);

        expect($theme->fresh()->spacing['xs'])->toBe('0.25rem')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->spacing['md'])->toBe('1rem')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->spacing['xl'])->toBe('2rem')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->spacing['3xl'])->toBe('4rem');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'spacing' => json_encode($spacing),
        ]);
    });

    it('can manage theme border radius', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $borderRadius = [
            'none' => '0',
            'sm' => '0.125rem',
            'base' => '0.25rem',
            'md' => '0.375rem',
            'lg' => '0.5rem',
            'xl' => '0.75rem',
            '2xl' => '1rem',
            'full' => '9999px',
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['border_radius' => $borderRadius]);

        expect($theme->fresh()->border_radius['none'])->toBe('0')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->border_radius['base'])->toBe('0.25rem')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->border_radius['lg'])->toBe('0.5rem')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->border_radius['full'])->toBe('9999px');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'border_radius' => json_encode($borderRadius),
        ]);
    });

    it('can manage theme shadows', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $shadows = [
            'none' => 'none',
            'sm' => '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
            'base' => '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
            'md' => '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
            'lg' => '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
            'xl' => '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['shadows' => $shadows]);

        expect($theme->fresh()->shadows['none'])->toBe('none')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->shadows['sm'])->toBe('0 1px 2px 0 rgba(0, 0, 0, 0.05)')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->shadows['xl'])->toBe('0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'shadows' => json_encode($shadows),
        ]);
    });

    it('can manage theme breakpoints', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $breakpoints = [
            'sm' => '640px',
            'md' => '768px',
            'lg' => '1024px',
            'xl' => '1280px',
            '2xl' => '1536px',
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['breakpoints' => $breakpoints]);

        expect($theme->fresh()->breakpoints['sm'])->toBe('640px')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->breakpoints['md'])->toBe('768px')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->breakpoints['lg'])->toBe('1024px')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->breakpoints['xl'])->toBe('1280px')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->breakpoints['2xl'])->toBe('1536px');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'breakpoints' => json_encode($breakpoints),
        ]);
    });

    it('can manage theme animations', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $animations = [
            'fade_in' => 'fadeIn 0.3s ease-in-out',
            'slide_up' => 'slideUp 0.3s ease-out',
            'slide_down' => 'slideDown 0.3s ease-out',
            'scale_in' => 'scaleIn 0.2s ease-out',
            'bounce' => 'bounce 1s infinite',
            'pulse' => 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['animations' => $animations]);

        expect($theme->fresh()->animations['fade_in'])->toBe('fadeIn 0.3s ease-in-out')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->animations['slide_up'])->toBe('slideUp 0.3s ease-out')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->animations['bounce'])->toBe('bounce 1s infinite')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->animations['pulse'])->toBe('pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'animations' => json_encode($animations),
        ]);
    });

    it('can manage theme transitions', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $transitions = [
            'default' => 'all 0.3s ease',
            'fast' => 'all 0.15s ease',
            'slow' => 'all 0.5s ease',
            'colors' => 'color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease',
            'opacity' => 'opacity 0.3s ease',
            'transform' => 'transform 0.3s ease',
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['transitions' => $transitions]);

        expect($theme->fresh()->transitions['default'])->toBe('all 0.3s ease')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->transitions['fast'])->toBe('all 0.15s ease')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->transitions['slow'])->toBe('all 0.5s ease')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->transitions['colors'])->toBe('color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'transitions' => json_encode($transitions),
        ]);
    });

    it('can manage theme components', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $components = [
            'button' => [
                'primary' => 'bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded',
                'secondary' => 'bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded',
                'outline' => 'border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-4 py-2 rounded',
            ],
            'card' => [
                'base' => 'bg-white rounded-lg shadow-md p-6',
                'elevated' => 'bg-white rounded-lg shadow-xl p-6',
                'bordered' => 'bg-white rounded-lg border border-gray-200 p-6',
            ],
            'input' => [
                'base' => 'border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500',
                'error' => 'border border-red-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500',
                'success' => 'border border-green-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500',
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['components' => $components]);

        expect($theme->fresh()->components['button']['primary'])->toBe('bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->components['card']['base'])->toBe('bg-white rounded-lg shadow-md p-6')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->components['input']['base'])->toBe('border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'components' => json_encode($components),
        ]);
    });

    it('can manage theme utilities', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $utilities = [
            'text_align' => [
                'left' => 'text-left',
                'center' => 'text-center',
                'right' => 'text-right',
                'justify' => 'text-justify',
            ],
            'display' => [
                'block' => 'block',
                'inline' => 'inline',
                'inline_block' => 'inline-block',
                'flex' => 'flex',
                'grid' => 'grid',
                'hidden' => 'hidden',
            ],
            'position' => [
                'static' => 'static',
                'relative' => 'relative',
                'absolute' => 'absolute',
                'fixed' => 'fixed',
                'sticky' => 'sticky',
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['utilities' => $utilities]);

        expect($theme->fresh()->utilities['text_align']['left'])->toBe('text-left')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->utilities['text_align']['center'])->toBe('text-center')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->utilities['display']['flex'])->toBe('flex')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->utilities['position']['relative'])->toBe('relative');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'utilities' => json_encode($utilities),
        ]);
    });

    it('can manage theme metadata', function (): void {
        $testData = ConfigHelper::getTestData();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $metadata = [
<<<<<<< HEAD
<<<<<<< HEAD
=======
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> 05bc3ad (.)
            'author' => $testData['team_name'] ?? ('Team '.config('app.name', 'Our Platform')),
=======
            'author' => $testData['team_name'] ?? ('Team ' . config('app.name', 'Our Platform')),
>>>>>>> 99ff506 (.)
            'created_date' => '2024-01-15',
            'last_modified' => '2024-12-01',
            'tags' => ['professional', 'healthcare', 'modern'],
            'category' => 'business',
            'compatibility' => ['Laravel 10', 'PHP 8.2+'],
            'license' => 'MIT',
<<<<<<< HEAD
<<<<<<< HEAD
=======
            /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> 05bc3ad (.)
            'repository' => $testData['repository_url'] ?? ('https://github.com/'.strtolower(config('app.name', 'ourplatform')).'/themes'),
=======
            'repository' => $testData['repository_url'] ?? ('https://github.com/' . strtolower(config('app.name', 'ourplatform')) . '/themes'),
>>>>>>> 99ff506 (.)
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['metadata' => $metadata]);

        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        expect($theme->fresh()->metadata['author'])->toBe($metadata['author'])
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->metadata['created_date'])->toBe('2024-01-15')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->metadata['category'])->toBe('business')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->metadata['license'])->toBe('MIT')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->metadata['compatibility'])->toContain('Laravel 10')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->metadata['tags'])->toContain('professional');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'metadata' => json_encode($metadata),
        ]);
    });

    it('can manage theme settings', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create();
        $settings = [
            'dark_mode' => true,
            'rtl_support' => false,
            'accessibility' => true,
            'performance_optimization' => true,
            'cache_enabled' => true,
            'minify_css' => true,
            'minify_js' => true,
            'image_optimization' => true,
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['settings' => $settings]);

        expect($theme->fresh()->settings['dark_mode'])->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->settings['rtl_support'])->toBeFalse()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->settings['accessibility'])->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->settings['performance_optimization'])->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->settings['cache_enabled'])->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->settings['minify_css'])->toBeTrue();

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'settings' => json_encode($settings),
        ]);
    });

    it('can activate and deactivate theme', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create(['is_active' => true]);

        // Deactivate
        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['is_active' => false]);

        expect($theme->fresh()->is_active)->toBeFalse();

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'is_active' => false,
        ]);

        // Activate
        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update(['is_active' => true]);

        expect($theme->fresh()->is_active)->toBeTrue();
    });

    it('can manage theme versions', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create(['version' => '1.0.0']);
        $versionData = [
            'version' => '1.1.0',
            'changelog' => [
                'Added dark mode support',
                'Improved accessibility features',
                'Fixed responsive design issues',
                'Updated color palette',
            ],
            'is_current' => true,
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update($versionData);

        expect($theme->fresh()->version)->toBe('1.1.0')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->is_current)->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->changelog)->toHaveCount(4)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->changelog[0])->toBe('Added dark mode support')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->changelog[3])->toBe('Updated color palette');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'version' => '1.1.0',
            'is_current' => true,
        ]);
    });

    it('can search themes by category', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $businessTheme = Theme::factory()->create([
<<<<<<< HEAD
=======
        $businessTheme = Theme/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 6fb15fa (.)
            'metadata' => ['category' => 'business'],
        ]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $healthcareTheme = Theme/** @phpstan-ignore-line */ ::factory()->create([
            'metadata' => ['category' => 'healthcare'],
        ]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $modernTheme = Theme/** @phpstan-ignore-line */ ::factory()->create([
            'metadata' => ['category' => 'modern'],
=======
            'metadata' => ['category' => 'business']
        ]);
        $healthcareTheme = Theme::factory()->create([
            'metadata' => ['category' => 'healthcare']
        ]);
        $modernTheme = Theme::factory()->create([
            'metadata' => ['category' => 'modern']
>>>>>>> 99ff506 (.)
        ]);

        $businessThemes = Theme::whereJsonContains('metadata->category', 'business')->get();
        $healthcareThemes = Theme::whereJsonContains('metadata->category', 'healthcare')->get();

        expect($businessThemes)->toHaveCount(1)
            ->and($healthcareThemes)->toHaveCount(1)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($businessThemes->contains($businessTheme))->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($healthcareThemes->contains($healthcareTheme))->toBeTrue();
    });

    it('can search themes by tags', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $professionalTheme = Theme::factory()->create([
<<<<<<< HEAD
=======
        $professionalTheme = Theme/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 6fb15fa (.)
            'metadata' => ['tags' => ['professional', 'business']],
        ]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $modernTheme = Theme/** @phpstan-ignore-line */ ::factory()->create([
            'metadata' => ['tags' => ['modern', 'clean']],
=======
            'metadata' => ['tags' => ['professional', 'business']]
        ]);
        $modernTheme = Theme::factory()->create([
            'metadata' => ['tags' => ['modern', 'clean']]
>>>>>>> 99ff506 (.)
        ]);

        $professionalThemes = Theme::whereJsonContains('metadata->tags', 'professional')->get();
        $modernThemes = Theme::whereJsonContains('metadata->tags', 'modern')->get();

        expect($professionalThemes)->toHaveCount(1)
            ->and($modernThemes)->toHaveCount(1)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($professionalThemes->contains($professionalTheme))->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($modernThemes->contains($modernTheme))->toBeTrue();
    });

    it('can search themes by status', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $activeTheme = Theme/** @phpstan-ignore-line */ ::factory()->create(['is_active' => true]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $inactiveTheme = Theme/** @phpstan-ignore-line */ ::factory()->create(['is_active' => false]);

        $activeThemes = Theme::where('is_active', true)->get();
        $inactiveThemes = Theme::where('is_active', false)->get();

        expect($activeThemes)->toHaveCount(1)
            ->and($inactiveThemes)->toHaveCount(1)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($activeThemes->contains($activeTheme))->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($inactiveThemes->contains($inactiveTheme))->toBeTrue();
    });

    it('can manage theme duplication', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $originalTheme = Theme/** @phpstan-ignore-line */ ::factory()->create([
            'name' => 'Original Theme',
            'version' => '1.0.0',
        ]);

        /** @phpstan-ignore-next-line method.nonObject */
        $duplicateTheme = $originalTheme->replicate();
        $duplicateTheme->name = 'Duplicate Theme';
        $duplicateTheme->version = '1.0.1';
        /** @phpstan-ignore-next-line method.nonObject */
        $duplicateTheme->save();

        expect($duplicateTheme->id)->not->toBe($originalTheme->id)
            ->and($duplicateTheme->name)->toBe('Duplicate Theme')
            ->and($duplicateTheme->version)->toBe('1.0.1');

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $duplicateTheme->id,
            'name' => 'Duplicate Theme',
            'version' => '1.0.1',
        ]);
    });

    it('can manage theme archiving', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = Theme/** @phpstan-ignore-line */ ::factory()->create(['is_active' => true]);
        $archiveData = [
            'is_active' => false,
            'archived_at' => now(),
            'archive_reason' => 'Sostituito da nuovo tema',
            'replacement_theme_id' => 25,
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $theme->update($archiveData);

        expect($theme->fresh()->is_active)->toBeFalse()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->archived_at)->not->toBeNull()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->archive_reason)->toBe('Sostituito da nuovo tema')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($theme->fresh()->replacement_theme_id)->toBe(25);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('themes', [
            'id' => $theme->id,
            'is_active' => false,
            'archived_at' => $theme->archived_at,
            'archive_reason' => 'Sostituito da nuovo tema',
            'replacement_theme_id' => 25,
        ]);
    });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
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
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
});
=======
}
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
=======
});
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
});
>>>>>>> 9777d1b3 (.)
=======
});
=======
=======
});
=======
>>>>>>> d09cb759 (.)
=======
});
=======
>>>>>>> d09cb759 (.)
=======
});
=======
>>>>>>> 4689a827 (.)
=======
});
=======
>>>>>>> 7325acf3 (.)
=======
});
=======
>>>>>>> f2e64178 (.)
=======
});
=======
>>>>>>> c4bdacbf (.)
=======
});
=======
>>>>>>> dceba960 (.)
=======
});
=======
>>>>>>> bd804d67 (.)
=======
});
=======
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
});
=======
}
>>>>>>> a12f125f4a (.)
=======
});
>>>>>>> b93ef594b4 (.)
=======
}
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
});
>>>>>>> 3f537838 (.)
=======
});
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
});
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
});
>>>>>>> 3f537838 (.)
=======
});
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
});
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
});
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
});
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
});
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
});
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
});
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
});
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
});
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
});
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
});
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
});
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
});
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
});
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
});
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
});
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
});
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
});
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
});
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
