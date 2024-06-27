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
        Schema::create('detail_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->string('nama_tim');
            $table->string('email');
            $table->string('no_hp');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_bookings');
    }

    // <label class="btn btn-outline-secondary" for="r42"
    //     style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;" id="schedule-{{ $hour }}">
    //     <p class="fw-bold text-end mt-2 mb-3">13 Jun</p>
    //     <p class="fw-bold text-center mt-5">{{ sprintf('%02d:00 - %02d:00', $hour, $hour + 1) }}</p>
    //     <p class="fw-bold text-center mb-4">Rp. {{ $price }}</p>
    //     <p class="fw-bold text-center pt-1 {{ $bgClass }}">Available</p>
    //     <button class="btn {{ $status == 'available' ? 'btn-book' : 'btn-cancel' }}" onclick="{{ $status == 'available' ? "bookSchedule($hour)" : "cancelBooking($hour)" }}">
    //         {{ $status == 'available' ? '+' : '-' }}
    //     </button>
    // </label>
};
