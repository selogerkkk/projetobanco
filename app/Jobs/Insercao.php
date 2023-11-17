<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class Insercao implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $cidade;
    public function __construct($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        DB::connection('mysql')
            ->table('lfilials')
            ->insert([
                'nome' => $this->cidade->nomeFantasia,
            ]);
    }
}
