<?php

/**
 * @see https://smsvi-docs.web.app/docs/restful/send-batch/
 */

declare(strict_types=1);

namespace Modules\Notify\Services\MailEngines;

<<<<<<< HEAD
use InvalidArgumentException;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use InvalidArgumentException;
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
=======
use InvalidArgumentException;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 98d837b9 (.)
=======
use InvalidArgumentException;
>>>>>>> 99ff506 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
use InvalidArgumentException;
=======
=======
use InvalidArgumentException;
=======
>>>>>>> d09cb759 (.)
=======
use InvalidArgumentException;
=======
>>>>>>> d09cb759 (.)
=======
use InvalidArgumentException;
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 98d837b9 (.)
=======
use InvalidArgumentException;
>>>>>>> 99ff506 (.)
=======
use InvalidArgumentException;
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
use InvalidArgumentException;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use InvalidArgumentException;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
use ErrorException;
use Exception;
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> c8b1c8bf (.)
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use InvalidArgumentException;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
use InvalidArgumentException;
=======
=======
use InvalidArgumentException;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
use InvalidArgumentException;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use InvalidArgumentException;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
use InvalidArgumentException;
>>>>>>> c8b1c8bf (.)
=======
use InvalidArgumentException;
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
use InvalidArgumentException;
>>>>>>> 3f537838 (.)
=======
use InvalidArgumentException;
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
use InvalidArgumentException;
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
use InvalidArgumentException;
>>>>>>> 2941b0bd (.)
=======
=======
use InvalidArgumentException;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
use InvalidArgumentException;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
use ErrorException;
use Exception;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
use InvalidArgumentException;
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
use InvalidArgumentException;
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
use Webmozart\Assert\Assert;

// ---------CSS------------

/**
 * Class SmsService.
 */
class MailtrapEngine
{
<<<<<<< HEAD
    public null|string $from = null;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public ?string $from = null;
>>>>>>> 98d837b9 (.)
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
    public null|string $from = null;
=======
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> fbed41ac (.)
    public ?string $from = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public null|string $from = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;
>>>>>>> 9777d1b3 (.)
=======
    public null|string $from = null;
=======
=======
    public null|string $from = null;
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $from = null;
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $from = null;
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $from = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $from = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
>>>>>>> 3f537838 (.)
=======
    public null|string $from = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
>>>>>>> 3f537838 (.)
=======
    public null|string $from = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public null|string $from = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $from = null;
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
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
    public ?string $from = null;
=======
    public null|string $from = null;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
    public null|string $from = null;
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
    public ?string $from = null;
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
    public null|string $from = null;
=======
=======
    public null|string $from = null;
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $from = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $from = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
    public null|string $from = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
    public ?string $from = null;
>>>>>>> 985c7bda (.)
=======
    public ?string $from = null;
=======
    public null|string $from = null;
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
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
    public ?string $from = null;
=======
    public null|string $from = null;
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
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|string $from = null;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|string $from = null;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 0f07e6d (.)
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public null|string $from = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $from = null;
>>>>>>> 2941b0bd (.)
=======
    public ?string $from = null;
=======
    public null|string $from = null;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
    public null|string $from = null;
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
    public ?string $from = null;
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
    public null|string $from = null;
=======
=======
    public null|string $from = null;
=======
>>>>>>> d09cb759 (.)
=======
=======
    public null|string $from = null;
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $from = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $from = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
    public null|string $from = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
    public ?string $from = null;
>>>>>>> 985c7bda (.)
=======
    public ?string $from = null;
=======
    public null|string $from = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
    public ?string $from = null;
=======
    public null|string $from = null;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|string $from = null;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|string $from = null;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 0f07e6d (.)
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
>>>>>>> 3f537838 (.)
=======
    public null|string $from = null;
>>>>>>> 75179b855 (.)
=======
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;
>>>>>>> 3f537838 (.)
=======
    public null|string $from = null;
=======
    public ?string $from = null;
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public null|string $from = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $from = null;
>>>>>>> 2941b0bd (.)
=======
    public ?string $from = null;
=======
    public null|string $from = null;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    public null|string $from = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
    public null|string $from = null;
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
    public null|string $from = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop

    public string $to;

    public string $driver;

<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> f1c9518b (.)
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
    public ?string $body = null;

    private static ?self $instance = null;

    public static function getInstance(): self
    {
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!(self::$instance instanceof self)) {
<<<<<<< HEAD
=======
=======
    public ?string $body = null;
=======
    public null|string $body = null;
>>>>>>> b93ef594b4 (.)

    private static null|self $instance = null;

    public static function getInstance(): self
    {
<<<<<<< HEAD
        if (! self::$instance instanceof self) {
>>>>>>> a12f125f4a (.)
=======
        if (!(self::$instance instanceof self)) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 2effe245 (.)
    public ?string $body = null;
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
=======
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
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
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
>>>>>>> d45a0226 (.)
    public null|string $body = null;

    private static null|self $instance = null;

    public static function getInstance(): self
    {
        if (!(self::$instance instanceof self)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $body = null;
>>>>>>> f813254 (.)
=======
    public ?string $body = null;
>>>>>>> 985c7bda (.)

    private static ?self $instance = null;

    public static function getInstance(): self
    {
<<<<<<< HEAD
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!(self::$instance instanceof self)) {
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
    public ?string $body = null;
=======
    public null|string $body = null;
>>>>>>> b93ef594b4 (.)
=======
=======
    public null|string $body = null;
>>>>>>> d45a0226 (.)

    private static null|self $instance = null;

    public static function getInstance(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! self::$instance instanceof self) {
>>>>>>> a12f125f4a (.)
=======
        if (!(self::$instance instanceof self)) {
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
=======
>>>>>>> f1c9518b (.)
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
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
    public ?string $body = null;

    private static ?self $instance = null;

    public static function getInstance(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! self::$instance instanceof self) {
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
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
            self::$instance = new self();
=======
        if (! (self::$instance instanceof self)) {
            self::$instance = new self;
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f5f1cb1 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
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
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
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
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
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
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
    public null|string $body = null;

    private static null|self $instance = null;

    public static function getInstance(): self
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2effe245 (.)
        if (! self::$instance instanceof self) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            self::$instance = new self();
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
            self::$instance = new self();
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        }

        return self::$instance;
    }

    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

    public function send(): self
    {
        dddx('WIP');

        return $this;
    }

    public function try(): void
    {
        // dddx($this);

        // Mail::raw('Hello World!', function($msg) {$msg->to('vair81@gmail.com')->subject('Test Email'); });

        // try {
<<<<<<< HEAD
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 98d837b9 (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f2e64178 (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 888799d0 (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
>>>>>>> 58816034 (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 4d2eb53e (.)
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 98d837b9 (.)
=======
<<<<<<< HEAD
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 888799d0 (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
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
=======
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($this->body);
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
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 4689a827 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 4689a827 (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 2effe245 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($this->body);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($this->body);
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
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 3f39ac8b (.)
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 3f39ac8b (.)
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($this->body);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> f2e64178 (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($this->body);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($this->body);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 985c7bda (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
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
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($this->body);
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
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 985c7bda (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 2941b0bd (.)
=======
        Assert::string($this->body, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
        Assert::string($this->body, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
        Mail::raw($this->body, function (Message $msg): void {
            // Verifichiamo che $this->to sia valido
            $to = $this->to;

            // Utilizziamo una condizione più appropriata
<<<<<<< HEAD
            if (!$to) {
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
            if (!$to) {
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2effe245 (.)
            if (! $to) {
=======
            if (!$to) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
                throw new InvalidArgumentException('Il destinatario email non è valido');
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
            if (! $to) {
>>>>>>> 985c7bda (.)
=======
            if (! $to) {
=======
            if (!$to) {
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
            if (! $to) {
=======
            if (!$to) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
            if (!$to) {
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
            if (! $to) {
=======
            if (!$to) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
                throw new InvalidArgumentException('Il destinatario email non è valido');
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
            if (! $to) {
>>>>>>> 985c7bda (.)
=======
            if (! $to) {
=======
            if (!$to) {
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
            if (! $to) {
=======
            if (!$to) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
            if (!$to) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            if (!$to) {
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
            if (! $to) {
=======
            if (!$to) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
                throw new InvalidArgumentException('Il destinatario email non è valido');
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> laraxot/develop
                throw new InvalidArgumentException('Il destinatario email non è valido');
            }

            $msg->to($to)->subject('Test Email');
        });
<<<<<<< HEAD

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)

=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
=======

=======
>>>>>>> 2effe245 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
=======

=======
>>>>>>> 2effe245 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
=======

=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
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
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======

>>>>>>> 58816034 (.)
=======

>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======

>>>>>>> 58816034 (.)
=======

>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b855 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======

>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
        // Dead catch - ErrorException is never thrown in the try block.
        // } catch (ErrorException $e) {
        //    throw new Exception('['.__LINE__.']['.class_basename($this).']');
        // }
    }
}
