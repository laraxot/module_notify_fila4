<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Seeders;

<<<<<<< HEAD
use Modules\Notify\Emails\SpatieEmail;
=======
<<<<<<< HEAD
use Modules\Notify\Emails\SpatieEmail;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Database\Seeder;
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
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
>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
>>>>>>> d09cb759 (.)
            ],
            [
                'mailable' => SpatieEmail::class,
                'slug' => 'registration_completed',
                'subject' => [
                    'it' => 'Registrazione completata, {{ first_name }}',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
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
>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
>>>>>>> d09cb759 (.)
            ],
            [
                'mailable' => SpatieEmail::class,
                'slug' => 'registration_rejected',
                'subject' => [
                    'it' => 'Registrazione rifiutata, {{ first_name }}',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
        ];

        foreach ($templates as $template) {
            $uniqueAttributes = [
                'mailable' => $template['mailable'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
                'slug' => $template['slug'],
=======
                'slug' => $template['slug']
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'slug' => $template['slug'],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                'slug' => $template['slug'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                'slug' => $template['slug'],
>>>>>>> 9777d1b3 (.)
=======
                'slug' => $template['slug'],
=======
=======
                'slug' => $template['slug'],
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
                'slug' => $template['slug'],
>>>>>>> 3f537838 (.)
=======
                'slug' => $template['slug'],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                'slug' => $template['slug'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                'slug' => $template['slug'],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            ];

            $data = [
                'subject' => $template['subject'],
                'html_template' => $template['html_template'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
                'text_template' => $template['text_template'],
=======
                'text_template' => $template['text_template']
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'text_template' => $template['text_template'],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                'text_template' => $template['text_template'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                'text_template' => $template['text_template'],
>>>>>>> 9777d1b3 (.)
=======
                'text_template' => $template['text_template'],
=======
=======
                'text_template' => $template['text_template'],
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
                'text_template' => $template['text_template'],
>>>>>>> 3f537838 (.)
=======
                'text_template' => $template['text_template'],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                'text_template' => $template['text_template'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                'text_template' => $template['text_template'],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            ];

            MailTemplate::firstOrCreate($uniqueAttributes, $data);
        }
    }
}
