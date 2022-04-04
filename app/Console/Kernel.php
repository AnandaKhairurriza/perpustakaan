<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Buku;
use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->call(function () {
            Buku::where('tanggal_kembali', Carbon::now()->toDateString())->update([
                'nama_peminjam' => NULL,
                'hp_peminjam' => NULL,
                'email_peminjam' => NULL,
                'tanggal_kembali' => NULL,
                'status' => 'available',
            ]);
        })->daily(); //->everyMinute()
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
