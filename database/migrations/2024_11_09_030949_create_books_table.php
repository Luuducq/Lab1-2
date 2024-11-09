<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_books_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Mã sách
            $table->string('title'); // Tiêu đề sách
            $table->string('thumbnail'); // Ảnh mô tả
            $table->string('author'); // Tác giả
            $table->string('publisher'); // Nhà xuất bản
            $table->datetime('publication'); // Ngày xuất bản
            $table->double('price'); // Giá bán
            $table->integer('quantity'); // Số lượng
            $table->unsignedBigInteger('category_id'); // Mã loại
            
            // Khóa ngoại
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
