<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status= $this->faker->randomElement(['BILLED', 'PAID', 'VOID']);
        $billed_date=$this->faker->dateTimeThisDecade();
        return [
            'customer_id'=>Customer::factory(),
            'amount'=>$this->faker->numberBetween(100,500000),
            'status'=>$status, //BILLED, PAID, VOID
            'billed_date'=>$billed_date,
            'paid_date'=> $status==='PAID' ? $this->faker->dateTimeBetween($billed_date,'+1 week') : NULL,
        ];
    }
}
