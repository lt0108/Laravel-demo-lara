<?php  
namespace App\Http\Controllers;
// use App\Models\Student;
class WelcomeController
{
	public function __construct()
    {
        return '__construct';
    }
	public function index()
	{
		// $student = Student::first();
		// $data = $student.getAttributes();
		// return "学生id=".$data['id'].";学生name=".$data['name'].";学生age=".$data['age'];

		return '<h2>controller中的控制器成功</h2>';
	}
	public function test()
	{
		return 'testAction';
	}
}