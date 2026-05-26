<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quote_requests', function (Blueprint $table) {
            $table->string('selected_pack')->nullable()->after('status');
            $table->decimal('estimated_amount', 12, 2)->nullable()->after('selected_pack');
            $table->date('follow_up_at')->nullable()->after('estimated_amount');

            $table->index(['follow_up_at', 'status']);
        });
    }

    public function down(): void
    {
        Schema::table('quote_requests', function (Blueprint $table) {
            $table->dropIndex(['follow_up_at', 'status']);
            $table->dropColumn(['selected_pack', 'estimated_amount', 'follow_up_at']);
        });
    }
};
