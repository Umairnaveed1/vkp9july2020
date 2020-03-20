<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ZipcodesTableSeeder::class);
        $this->call(RulesTableSeeder::class);
        $this->call(TiersTableSeeder::class);
        $this->call(PagesecurityTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
        $this->call(PropertieslogsTableSeeder::class);
        $this->call(PropertiesnotesTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(AgentnotesTableSeeder::class);
        $this->call(AgentinvoicecountTableSeeder::class);
        $this->call(AgentrulessetupTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(InvoicepaymentsTableSeeder::class);
        $this->call(AgenttierssetupTableSeeder::class);
        $this->call(PaymenttypesTableSeeder::class);
    }
}
