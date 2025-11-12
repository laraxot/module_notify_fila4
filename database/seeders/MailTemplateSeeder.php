<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Seeders;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Notify\Emails\SpatieEmail;
=======
<<<<<<< HEAD
use Modules\Notify\Emails\SpatieEmail;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Illuminate\Database\Seeder;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;

class MailTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $templates = [
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                'mailable' => SpatieEmail::class,
                'slug' => 'registration_moderated',
                'subject' => [
                    'it' => 'Registrazione moderata, {{ first_name }}',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                    'en' => 'Registration moderated, {{ first_name }}',
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata moderata.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been moderated.</p>',
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata moderata.',
                    'en' => 'Hello {{ first_name }}, Your registration has been moderated.',
                ],
<<<<<<< HEAD
=======
=======
                    'en' => 'Registration moderated, {{ first_name }}'
=======
                    'en' => 'Registration moderated, {{ first_name }}',
>>>>>>> b93ef594b4 (.)
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata moderata.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been moderated.</p>',
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata moderata.',
<<<<<<< HEAD
                    'en' => 'Hello {{ first_name }}, Your registration has been moderated.'
                ]
>>>>>>> a12f125f4a (.)
=======
                    'en' => 'Hello {{ first_name }}, Your registration has been moderated.',
                ],
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
            ],
            [
                'mailable' => SpatieEmail::class,
                'slug' => 'registration_completed',
                'subject' => [
                    'it' => 'Registrazione completata, {{ first_name }}',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                    'en' => 'Registration completed, {{ first_name }}',
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata completata con successo.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been completed successfully.</p>',
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata completata con successo.',
                    'en' => 'Hello {{ first_name }}, Your registration has been completed successfully.',
                ],
<<<<<<< HEAD
=======
=======
                    'en' => 'Registration completed, {{ first_name }}'
=======
                    'en' => 'Registration completed, {{ first_name }}',
>>>>>>> b93ef594b4 (.)
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata completata con successo.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been completed successfully.</p>',
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata completata con successo.',
<<<<<<< HEAD
                    'en' => 'Hello {{ first_name }}, Your registration has been completed successfully.'
                ]
>>>>>>> a12f125f4a (.)
=======
                    'en' => 'Hello {{ first_name }}, Your registration has been completed successfully.',
                ],
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
            ],
            [
                'mailable' => SpatieEmail::class,
                'slug' => 'registration_rejected',
                'subject' => [
                    'it' => 'Registrazione rifiutata, {{ first_name }}',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                    'en' => 'Registration rejected, {{ first_name }}',
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata rifiutata.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been rejected.</p>',
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata rifiutata.',
                    'en' => 'Hello {{ first_name }}, Your registration has been rejected.',
                ],
            ],
<<<<<<< HEAD
=======
=======
                    'en' => 'Registration rejected, {{ first_name }}'
=======
                    'en' => 'Registration rejected, {{ first_name }}',
>>>>>>> b93ef594b4 (.)
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata rifiutata.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been rejected.</p>',
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata rifiutata.',
<<<<<<< HEAD
                    'en' => 'Hello {{ first_name }}, Your registration has been rejected.'
                ]
            ]
>>>>>>> a12f125f4a (.)
=======
                    'en' => 'Hello {{ first_name }}, Your registration has been rejected.',
                ],
            ],
>>>>>>> b93ef594b4 (.)
=======
                'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
                'slug' => 'registration_moderated',
                'subject' => [
                    'it' => 'Registrazione moderata, {{ first_name }}',
                    'en' => 'Registration moderated, {{ first_name }}'
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata moderata.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been moderated.</p>'
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata moderata.',
                    'en' => 'Hello {{ first_name }}, Your registration has been moderated.'
                ]
            ],
            [
                'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
                'slug' => 'registration_completed',
                'subject' => [
                    'it' => 'Registrazione completata, {{ first_name }}',
                    'en' => 'Registration completed, {{ first_name }}'
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata completata con successo.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been completed successfully.</p>'
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata completata con successo.',
                    'en' => 'Hello {{ first_name }}, Your registration has been completed successfully.'
                ]
            ],
            [
                'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
                'slug' => 'registration_rejected',
                'subject' => [
                    'it' => 'Registrazione rifiutata, {{ first_name }}',
                    'en' => 'Registration rejected, {{ first_name }}'
                ],
                'html_template' => [
                    'it' => '<p>Ciao {{ first_name }},</p><p>La tua registrazione è stata rifiutata.</p>',
                    'en' => '<p>Hello {{ first_name }},</p><p>Your registration has been rejected.</p>'
                ],
                'text_template' => [
                    'it' => 'Ciao {{ first_name }}, La tua registrazione è stata rifiutata.',
                    'en' => 'Hello {{ first_name }}, Your registration has been rejected.'
                ]
            ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];

        foreach ($templates as $template) {
            $uniqueAttributes = [
                'mailable' => $template['mailable'],
<<<<<<< HEAD
                'slug' => $template['slug'],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'slug' => $template['slug'],
=======
                'slug' => $template['slug']
>>>>>>> a12f125f4a (.)
=======
                'slug' => $template['slug'],
>>>>>>> b93ef594b4 (.)
=======
                'slug' => $template['slug']
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ];

            $data = [
                'subject' => $template['subject'],
                'html_template' => $template['html_template'],
<<<<<<< HEAD
                'text_template' => $template['text_template'],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'text_template' => $template['text_template'],
=======
                'text_template' => $template['text_template']
>>>>>>> a12f125f4a (.)
=======
                'text_template' => $template['text_template'],
>>>>>>> b93ef594b4 (.)
=======
                'text_template' => $template['text_template']
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ];

            MailTemplate::firstOrCreate($uniqueAttributes, $data);
        }
    }
}
