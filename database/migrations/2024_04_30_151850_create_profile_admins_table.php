
<?php

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
        Schema::create('profile_admins', function (Blueprint $table) {
            $table->bigInteger('nik')->primary(); // Menggunakan bigInteger untuk NIK
            $table->string('nama'); // Tambahkan panjang jika diperlukan
            $table->string('tempat_lahir'); // Tambahkan panjang jika diperlukan
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('no_telp'); // Tambahkan panjang yang sesuai, misalnya 13
            $table->string('email', 25)->unique();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']); // Menggunakan enum untuk jenis kelamin
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_admins');
    }
};
