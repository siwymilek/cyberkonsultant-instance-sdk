<?php

namespace App\EventSubscriber\Notification;

use App\Event\Notification\UserInvoiceNotificationEvent;
use App\Service\Invoice\InvoicePdfReaderInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class UserInvoiceEmailNotificationSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private MailerInterface $mailer,
        private InvoicePdfReaderInterface $reader
    ) {
    }

    public function onUserInvoiceNotificationEvent(UserInvoiceNotificationEvent $event)
    {
        $invoice = $event->getInvoice();
        $user = $event->getUser();

        $this->mailer->send(
            (new TemplatedEmail())
                ->to(new Address($user->getEmail(), sprintf('%s %s', $user->getFirstName(), $user->getLastName())))
                ->subject('Nowa faktura do pobrania')
                ->attach($this->reader->read($invoice), sprintf('Faktura %d.pdf', $invoice->getNumber()), 'application/pdf')
                ->htmlTemplate('emails/invoice/invoice_pdf_created.html.twig')
                ->context(
                    [
                        'invoice' => $invoice,
                        'user' => $user,
                    ]
                )
        );
    }

    public static function getSubscribedEvents()
    {
        return [
            UserInvoiceNotificationEvent::class => 'onUserInvoiceNotificationEvent',
        ];
    }
}