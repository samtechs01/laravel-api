<?php

namespace App\Console\Commands;

use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class HappyBirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increases the created at date for UserID 1 by a day every minute';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        logger()->info('Increment invoice');
        $invoice=Invoice::find(100);
        $invoice->update([
            'amount' => $invoice->amount+10,
        ]);
        echo($invoice->amount);
        $invoice->save();
        $this->info('The amount date was incremented by 10 dollars');
    }
}
