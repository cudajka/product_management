<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE products ENGINE = InnoDB');
        DB::statement('ALTER TABLE product_categories ENGINE = InnoDB');
        DB::statement('ALTER TABLE brands ENGINE = InnoDB');
        DB::statement('ALTER TABLE colors ENGINE = InnoDB');
        DB::statement('ALTER TABLE sizes ENGINE = InnoDB');
        DB::statement('ALTER TABLE product_variants ENGINE = InnoDB');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
