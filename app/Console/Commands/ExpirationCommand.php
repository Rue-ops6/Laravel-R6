<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ExpirationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appsig:expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User-expiration after it becomes 1 = wasnt active for a while';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        User::where('expired', '=', 0)
        ->update(['expired' => 1]);
    }
        /* Or
        $users = User::where('expired', '=', 0)->get();
foreach($users as $user) {
$user->update([
'expired' => 1
]);
}        */
}
