<?php
use App\Models\Client;
use App\Models\Compteur;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Compteur::class);
            $table->date('date');
            $table->decimal('montant', 8, 2);
            $table->integer('volume');
            $table->enum('statut', ['Payée', 'Non payée'])->default('Non payée');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
