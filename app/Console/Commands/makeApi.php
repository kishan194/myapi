<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Http;

class makeApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'call:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description ='To Get Call The call api';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://dummyjson.com/products/1');
        $data = $response->json();
        $this->info('API Response:');
        $this->info(json_encode($data, JSON_PRETTY_PRINT));
    }
}
