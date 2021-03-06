<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Notify:Email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email daily to all user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $emails =User::pluck('email') ->toArray();
        $data =['title' => 'programming','body' =>'php'];
        foreach ($emails as $email){
            mail::to($email)->send(new NotifyEmail($data));
        }
    }
}
