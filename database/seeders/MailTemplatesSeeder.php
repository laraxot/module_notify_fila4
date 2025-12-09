<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
declare(strict_types=1);

<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
declare(strict_types=1);


>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
declare(strict_types=1);


>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
namespace Modules\Notify\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\MailTemplates\Models\MailTemplate;

class MailTemplatesSeeder extends Seeder
{
    public function run(): void
    {
        // Template Welcome
        MailTemplate::create([
            'mailable' => 'Modules\Notify\Mail\WelcomeMail',
            'subject' => 'Welcome to {{ app_name }}',
            'html_template' => '
                <h1 style="color: #2D3748; font-size: 24px; margin: 0 0 20px 0;">Welcome to {{ app_name }}!</h1>
                <p style="color: #4A5568; font-size: 16px; margin: 0 0 20px 0;">Hello {{ name }},</p>
                <p style="color: #4A5568; font-size: 16px; margin: 0 0 20px 0;">Thank you for joining us. We\'re excited to have you on board!</p>
                {{#if action_url}}
                <div style="text-align: center; margin: 30px 0;">
                    <a href="{{ action_url }}" style="background-color: #4299E1; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: bold; display: inline-block;">Get Started</a>
                </div>
                {{/if}}
                <p style="color: #718096; font-size: 14px; margin: 0;">If you have any questions, feel free to contact our support team.</p>
            ',
            'text_template' => 'Welcome to {{ app_name }}! Hello {{ name }}, Thank you for joining us. We\'re excited to have you on board!',
        ]);

        // Template Order Confirmation
        MailTemplate::create([
            'mailable' => 'Modules\Notify\Mail\OrderConfirmationMail',
            'subject' => 'Order #{{ order_id }} Confirmed',
            'html_template' => '
                <h1 style="color: #2D3748; font-size: 24px; margin: 0 0 20px 0;">Order Confirmed!</h1>
                <p style="color: #4A5568; font-size: 16px; margin: 0 0 30px 0;">Thank you for your order #{{ order_id }}. We\'re preparing it for shipment.</p>

                <div style="background-color: #F7FAFC; border-radius: 8px; padding: 20px; margin-bottom: 30px;">
                    <h2 style="color: #2D3748; font-size: 18px; margin: 0 0 15px 0;">Order Details</h2>
                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="padding: 10px 0; border-bottom: 1px solid #E2E8F0;">
                                <span style="color: #4A5568;">Order Number:</span>
                                <span style="color: #2D3748; font-weight: bold;">{{ order_id }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 0; border-bottom: 1px solid #E2E8F0;">
                                <span style="color: #4A5568;">Order Date:</span>
                                <span style="color: #2D3748;">{{ order_date }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px 0;">
                                <span style="color: #4A5568;">Total Amount:</span>
                                <span style="color: #2D3748; font-weight: bold;">{{ total_amount }}</span>
                            </td>
                        </tr>
                    </table>
                </div>

                {{#if tracking_url}}
                <div style="text-align: center; margin: 30px 0;">
                    <a href="{{ tracking_url }}" style="background-color: #4299E1; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: bold; display: inline-block;">Track Your Order</a>
                </div>
                {{/if}}

                <p style="color: #718096; font-size: 14px; margin: 0;">Have questions about your order? <a href="{{ support_url }}" style="color: #4299E1; text-decoration: none;">Contact Support</a></p>
            ',
            'text_template' => 'Order #{{ order_id }} Confirmed. Thank you for your order. We\'re preparing it for shipment. Total: {{ total_amount }}',
        ]);
    }
}
