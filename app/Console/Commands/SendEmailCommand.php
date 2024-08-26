<?php

namespace App\Console\Commands;

use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;

class SendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'signature:mailable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mailable inspiration; send welcoming emails for users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
Mail::to('rowanmahrous01@gmail.com')->send(new SendEmail); #from mailable
    }
}
