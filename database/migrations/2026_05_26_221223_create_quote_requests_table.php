<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone', 50)->nullable();
            $table->string('company')->nullable();
            $table->string('project_type');
            $table->string('budget')->nullable();
            $table->string('deadline')->nullable();
            $table->text('needs');
            $table->string('status')->default('new')->index();
            $table->text('admin_notes')->nullable();
            $table->timestamp('client_notified_at')->nullable();
            $table->timestamp('admin_notified_at')->nullable();
            $table->timestamp('notification_failed_at')->nullable();
            $table->text('notification_error')->nullable();
            $table->timestamps();

            $table->index(['created_at', 'status']);
            $table->index(['email', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};
