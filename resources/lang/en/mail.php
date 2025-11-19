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
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
return [
    'welcome' => [
        'title' => 'Welcome to '.(is_string(config('app.name')) ? config('app.name') : 'SaluteOra'),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
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
