<?php
	namespace App\Http\Controllers;

	/**
	* 学生数据库的练习
	*/
	Use Illuminate\Support\Facades\DB;
	class StudentController extends Controller
	{
		
		public function test1()
		{
			//db查询
			/*$student=DB::select('select * from student');
			//var_dump($student);
			dd($student);*/
			//db插入
			/*$bool=DB::insert('insert into student (name,age) value(?,?)',['苏名祁',18]);
			var_dump($bool);*/

			//db 更新
			/*$num=DB::update('update student set age = ? where name = ?',
				[22,'苏名祁']);
			var_dump($num);*/

			//删除
			/*$num=DB::delete('delete from student where age = ?',
				[20]);
			var_dump($num);*/
		}

		//查询构造器,添加数据
		public function query1()
		{
			/*$num=DB::table('student')->insert(
				['name'=>'name1','age'=>'18']
				);
			var_dump($num);

			$num=DB::table('student')->insertGetId(
				['name'=>'name2','age'=>'19']
				);
			var_dump($num);*/

			$num=DB::table('student')->insert([

				['name'=>'xiao','age'=>'18'],
				['name'=>'da','age'=>'18']
				
				]);
			var_dump($num);
		}

		//查询构造器，更新数据
		public function query2()
		{
			/*$num=DB::table('student')
			->where('id',1001)
			->update(['age'=>1]);
			var_dump($num);*/

			//$num=DB::table('student')->increment('age'，2);//increment 自增，后面的数字为自增的大小
			//var_dump($num);

			//$num=DB::table('student')->decrement('age',1);//decrement 自减，后面的数字为自减的大小
			//var_dump($num);
			
			$num=DB::table('student')
			->where('id',1001)
			->increment('age',1,['name'=>'qiqi']);//自增的同时，还可以修改其他字段
			var_dump($num);
		}

		//查询构造器，删除数据
		public function query3()
		{
			$num=DB::table('student')->where('id','>=',1002)->delete();
			var_dump($num);

			DB::table('student')->truncate();//删除整个表的数据，慎用
		}

		//查询构造器，
		public function query4()
		{
			/*$studnets=DB::table('student')->get();//获取所有数据
			dd($studnets);*/

			/*$studnets=DB::table('student')
			->orderBy('id','desc')
			->first();//获取结果数集中的第一条
			dd($studnets);*/

			/*$studnets=DB::table('student')
			->whereRaw('id > ? and age > ?',[1001,10])//多条件查询
			->get();
			dd($studnets);*/

			//pluck查看
			/*$studnets=DB::table('student')
			->pluck('name');
			dd($studnets);*/

			//lists查看
			/*$studnets=DB::table('student')
			->lists('name','age');//以age为下标显示对应的name
			dd($studnets);*/

			//select查看
			/*$studnets=DB::table('student')
			->select('name','age')//显示想要查看的属性们
			->get();
			dd($studnets);*/

			//chunk分组查看
			echo '<pre>';
			$studnets=DB::table('student')
			->chunk(2,function($student){
				var_dump($student);
			});
		}

		//查询器的聚合函数(count ,max ,min ,avg , sum ,)
		public function query5()
		{
			$num =DB::table('student')->sum('age');
			var_dump($num);
		}
	}
