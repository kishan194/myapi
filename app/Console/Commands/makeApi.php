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
        $postData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => "741258963"
        ];

       //post req to store the data
        $response = Http::post('http://127.0.0.1:8000/api/store', $postData);
        if ($response->successful()) {
            $this->info('Data successfully stored.' . $response->status());
        } else {
            $this->error('Failed to store data. Status code: ' . $response->status());
        }

    /*view the data
             $response = Http::get('http://127.0.0.1:8000/api/make-api');
             $data = $response->json();
             foreach($data as $item){
                $this->info('Item Name: ' . $item['name']);
                $this->info('Item Email: ' . $item['email']);
             } */ 
     
            
    }
}
