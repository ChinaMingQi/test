<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		Schema::create('news', function (Blueprint $table) {
			$table->increments = 'id';
			$table->title = '哈希表今天上市了';
			$table->body = '哈哈哈。。。。';
			$table->author = 'qiqi';
			$table->author_id = 1;

			$table->save();
		});
	}
}
