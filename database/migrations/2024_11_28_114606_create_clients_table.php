<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->string('client_2_first_name')->nullable();
            $table->string('client_2_last_name')->nullable();
            $table->string('spouse_2_first_name')->nullable();
            $table->string('spouse_2_last_name')->nullable();
            $table->string('client_3_first_name')->nullable();
            $table->string('client_3_last_name')->nullable();
            $table->string('spouse_3_first_name')->nullable();
            $table->string('spouse_3_last_name')->nullable();
            $table->date('dob')->nullable();
            $table->date('spouse_dob')->nullable();
            $table->date('client_2_dob')->nullable();
            $table->date('spouse_2_dob')->nullable();
            $table->date('client_3_dob')->nullable();
            $table->date('spouse_3_dob')->nullable();
            $table->string('referred_by')->nullable();
            $table->integer('deal_type')->nullable();
            $table->integer('stage_status')->nullable();
            $table->string('deferred_date')->nullable();
            $table->integer('hashtags')->nullable();
            $table->tinyInteger('email_option')->nullable();
            $table->tinyInteger('text_on')->nullable();
            $table->string('scheduled_by')->nullable();
            $table->string('tier')->nullable();
            $table->text('notes')->nullable();

            // Real Estate & Loan Fields
            $table->string('lender')->nullable();
            $table->string('processor')->nullable();
            $table->integer('loan_type')->nullable();
            $table->date('closing_date')->nullable();
            $table->date('executed_date')->nullable();
            $table->integer('earnest_money')->nullable();
            $table->integer('option_money')->nullable();
            $table->string('title_company')->nullable();
            $table->text('home_purchase_address')->nullable();
            $table->text('other_agent_contact_info')->nullable();
            $table->integer('commission_percent')->nullable();
            $table->decimal('commission_bonus', 10, 2)->nullable();
            $table->decimal('sellers_concessions', 10, 2)->nullable();
            $table->string('home_inspection')->default(false);
            $table->date('builder_first_walk_through')->nullable();
            $table->date('builder_final_walk_through')->nullable();
            $table->string('home_insurance')->default(false);
            $table->string('home_warranty')->default(false);
            $table->string('hoa')->default(false);
            $table->integer('survey')->default(0);
            $table->integer('option_days')->nullable();
            $table->date('option_period_expires')->nullable();
            $table->string('disclosures_signed')->default(false);
            $table->string('home_type')->nullable();
            $table->date('appraisal_order_date')->nullable();
            $table->date('third_party_deadline')->nullable();
            $table->string('clear_to_close')->default(false);
            $table->string('closing_disclosure_signed')->default(false);
            $table->string('utilities_set_up')->default(false);

            // Realtor Fields
            $table->integer('county')->nullable();
            $table->string('sales_price_range')->nullable();
            $table->decimal('max_piti', 10, 2)->nullable();
            $table->integer('min_sqft')->nullable();
            $table->integer('max_sqft')->nullable();
            $table->integer('min_year')->nullable();
            $table->integer('max_year')->nullable();
            $table->decimal('min_acres', 10, 2)->nullable();
            $table->decimal('max_acres', 10, 2)->nullable();
            $table->integer('min_beds')->nullable();
            $table->integer('min_baths')->nullable();
            $table->integer('type')->nullable();
            $table->integer('builders')->nullable();
            $table->text('agent_notes')->nullable();

            // Post Closing Fields
            $table->date('last_closing_date')->nullable();
            $table->decimal('sales_price', 10, 2)->nullable();
            $table->string('closing_survey')->default(false);
            $table->string('closing_gift')->default(false);
            $table->string('post_closing_call')->default(false);
            $table->string('homestead_call')->default(false);
            $table->text('post_closing_notes')->nullable();
            $table->string('marketing_project')->nullable();
            $table->string('customer_service_request')->default(false);
            $table->string('referred_by_report')->nullable();
            $table->string('filter_clients_name')->nullable();

            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
