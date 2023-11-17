<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class PrepararInsercao implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $cidades;
    /**
     * Create a new job instance.
     */
    public function __construct($cidades)
    {
        $this->cidades = $cidades;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        foreach ($this->cidades as $cidade) {
            Insercao::dispatch($cidade);
        }
    }
}
