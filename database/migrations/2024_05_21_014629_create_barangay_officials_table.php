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
            Schema::create('barangay_officials', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->bigInteger('position_id')->unsigned();
                $table->string('age');
                $table->string('address');
                $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('barangay_officials');
        }
    };
