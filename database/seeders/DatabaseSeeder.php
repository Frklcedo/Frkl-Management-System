<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Debt;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create(
            [
                'name' => 'Frklcedo',
                'email' => 'frkl@test.com',
            ]
        )->each(
            function ($user) {

                $num_creditors = random_int(1, 3);
                $num_profiles = random_int(1, 3);

                $creditors = \App\Models\Creditor::factory($num_creditors)
                    ->for($user)->create();
                $profiles = \App\Models\Profile::factory($num_profiles)
                    ->for($user)->create();

                $profiles->each(
                    function ($profile) use ($creditors) {
                        $num_debts = random_int(2, 10);
                        Debt::factory($num_debts)
                            ->for($profile)
                            ->create([
                                'creditor_id' => $creditors->random()->id,
                            ]);
                    }
                );

            }
        );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
