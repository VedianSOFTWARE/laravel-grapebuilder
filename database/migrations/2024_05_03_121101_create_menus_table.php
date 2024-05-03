<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Vediansoftware\Grapebuilder\Models\Layout;
use Vediansoftware\Grapebuilder\Support\LayoutEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Layout::class)->unique()->constrained();
            // $table->enum('layout', LayoutEnum::toArray());
            // $table->foreign('layout')->references('type')->on('layouts');
            // $table->unique('layout', 'layout_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
