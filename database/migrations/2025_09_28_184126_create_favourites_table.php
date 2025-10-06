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
        Schema::create('favourites', function (Blueprint $table) { 
            $table->id(); 
            $table->string('device_id');  
            $table->unsignedBigInteger('recipe_id'); 
            $table->timestamps(); 

            $table->foreign('recipe_id')
                  ->references('id')
                  ->on('recipes')
                  ->onDelete('cascade');
        }); 
    } 
 
    /** 
     * Reverse the migrations. 
     */ 
    public function down(): void 
    { 
        Schema::dropIfExists('favourites'); 
    } 
}; 
