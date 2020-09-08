<?php

use App\Message;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Message::truncate();

        for ($i=1; $i < 101; $i++) {
            Message::create([
                'nombre'      => "Usuario {$i}",
                'email'       => "usuario{$i}@email.com",
                'mensaje'      => "Mensaje del Usuario {$i}",
                'created_at'  => Carbon::now()->subDays(100)->addDays($i),
            ]);
        }

    }

}
