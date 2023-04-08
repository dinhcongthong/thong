<?php

namespace App\Providers;

use App\Mail\TestEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Events\AfterExport;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(AfterExport::class, function(AfterExport $event) {
            $filePath = $event->getFile();
            Mail::to('dinhcongthong97y@gmail.com')->send(new TestEmail($filePath));
            // Thực hiện các thao tác để cho user tải file về ở đây
        });
    }
}
