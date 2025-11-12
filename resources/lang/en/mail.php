<?php

declare(strict_types=1);

<<<<<<< HEAD
return [
    'welcome' => [
        'title' => 'Welcome to '.(is_string(config('app.name')) ? config('app.name') : ''),
=======

return [
    'welcome' => [
        'title' => 'Welcome to ' . (is_string(config('app.name')) ? config('app.name') : ''),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
return [
    'welcome' => [
        'title' => 'Welcome to '.(is_string(config('app.name')) ? config('app.name') : 'SaluteOra'),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
=======
return [
    'welcome' => [
        'title' => 'Welcome to '.(is_string(config('app.name')) ? config('app.name') : 'SaluteOra'),
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


return [
    'welcome' => [
        'title' => 'Welcome to ' . (is_string(config('app.name')) ? config('app.name') : ''),
>>>>>>> b93ef594b4 (.)
=======
return [
    'welcome' => [
        'title' => 'Welcome to ' . (is_string(config('app.name')) ? config('app.name') : 'SaluteOra'),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        'greeting' => 'Hello :name,',
        'description' => 'Thank you for joining us. We\'re excited to have you on board!',
        'action' => 'Get Started',
        'help' => 'If you have any questions, feel free to contact our support team.',
    ],
    'promotion' => [
        'title' => 'Special Offer Just for You!',
        'highlight' => 'Limited Time Offer',
        'action' => 'Claim Your Offer Now',
        'terms' => 'Terms and conditions apply. Offer valid until :date.',
    ],
    'newsletter' => [
        'title' => 'Your Monthly Newsletter',
        'read_more' => 'Read More',
        'preferences' => 'Want to change how you receive these emails?',
        'update_preferences' => 'Update your preferences',
    ],
    'order' => [
        'confirmation_title' => 'Order Confirmed!',
        'confirmation_message' => 'Thank you for your order #:order_id. We\'re preparing it for shipment.',
        'details' => 'Order Details',
        'order_number' => 'Order Number',
        'date' => 'Order Date',
        'total' => 'Total Amount',
        'items' => 'Order Items',
        'quantity' => 'Quantity',
        'shipping_address' => 'Shipping Address',
        'track_order' => 'Track Your Order',
        'questions' => 'Have questions about your order?',
        'contact_support' => 'Contact Support',
    ],
    'unsubscribe' => 'Unsubscribe from these emails',
];
