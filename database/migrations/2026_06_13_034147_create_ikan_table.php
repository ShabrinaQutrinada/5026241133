<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ikan', function (Blueprint $table) {
            $table->increments('kodeikan');
            $table->string('namaikan', 30);
            $table->integer('jumlahikan');
            $table->char('tersedia', 1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ikan');
    }
};
