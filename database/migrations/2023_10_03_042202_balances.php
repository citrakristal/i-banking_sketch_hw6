<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->decimal('saldo', 10, 2); // Contoh: menggunakan decimal untuk saldo dengan 10 digit dan 2 desimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('balances'); // Perbaiki nama tabel yang dihapus menjadi 'balances'
    }
};
