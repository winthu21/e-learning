<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\AppliedCourse;
use App\Models\CourseCategory;
use App\Http\Controllers\Controller;
use App\Notifications\YourNotification;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    //Admin dashboard Page
    public function dashboard(){
        $totalCoursesApplied = AppliedCourse::count();
        $usersCount = User::where('role','user')->count();
        $courseCategory = CourseCategory::count();
        $allCourses = Course::count();
        $adminList = User::select('*')->where('role','admin')->get();
        $adminCount = User::where('role','admin')->count();
        $userList = User::select('*')->where('role','user')->get();
        // dd($usersCount);
        return view('admin.dashboard',compact('totalCoursesApplied','usersCount','courseCategory','allCourses','adminList','userList','adminCount'));
    }

    // Course page
    public function course(){
        $course = Course::select('courses.*','course_categories.category_name as category')
                        ->leftJoin('course_categories','courses.course_category_id','course_categories.id')
                        ->get();
        return view('admin.course',compact('course'));
    }

    // Create Category Page
    public function createCategoryPage(){
        $category = CourseCategory::get();
        return view('admin.createCourseCategory',compact('category'));
    }

    // Create Category
    public function createCategory(Request $request){
        $categoryName = $request->category_name;
        CourseCategory::create(['category_name'=>$categoryName]);
        return to_route('createCategoryPage');
    }

    // Delete Category
    public function categoryDelete($id){
        CourseCategory::where('id',$id)->delete();
        return to_route('createCategoryPage');
    }

    // Create Course Page
    public function createCoursePage(){
        $category = CourseCategory::select('course_categories.id','course_categories.category_name as category')->get();
        return view('admin.createcourse',compact('category'));
    }

    // Create Course
    public function createCourse(Request $request){
        $this->checkValidation($request,"create");
        $data = $this->requestData($request);

        if ( $request->hasFile('courseImage') ){
            $fileName = uniqid() .'_'. $request->file('courseImage')->getClientOriginalName();
            $request->file('courseImage')->move( public_path().'/admin/courseImage/', $fileName );
            $data['image'] = $fileName;
        }

        Course::create($data);
        return back();
    }

    // Course Details
    public function courseDetailsPage($id){
        $course = Course::select('courses.*','course_categories.category_name as category')
                        ->leftJoin('course_categories','courses.course_category_id','course_categories.id')
                        ->where('courses.id',$id)
                        ->first();
        return view('admin.courseDetails',compact('course'));
    }

    // Course Delete
    public function createDelete($id){
        Course::where('id',$id)->delete();
        return back();
    }

    // Course Update Page
    public function courseUpdatePage($id){
        $category = CourseCategory::select('course_categories.id','course_categories.category_name as category')->get();
        $course = Course::where('id',$id)->first();
        return view('admin.courseUpdate',compact('course','category'));
    }

    // Course Update
    public function courseUpdate(Request $request){
        $id = $request->id;
        $this->checkValidation($request,"update");
        $data = $this->requestData($request);

        if ( $request->hasFile('courseImage') ){
            $oldImageName = $request->oldImageName;
            if ( file_exists(public_path('/admin/courseImage/'.$oldImageName)) ){
                unlink(public_path('/admin/courseImage/'.$oldImageName));
            }
            $fileName = uniqid() .'_'. $request->file('courseImage')->getClientOriginalName();
            $request->file('courseImage')->move( public_path().'/admin/courseImage/', $fileName );
            $data['image'] = $fileName;
        } else {
            $data['image'] = $request->oldImageName;
        }

        $data = Course::where('id',$id)->update($data);
        return to_route('courseDetailsPage',$id);
    }

    // user applied course
    public function appliedCourse(){
        $appliedCourse = AppliedCourse::select('applied_courses.*','courses.course_name','courses.course_category_id','users.name')
                                        ->leftJoin('courses','applied_courses.course_id','courses.id')
                                        ->leftJoin('users','applied_courses.user_id','users.id')
                                        ->get();
        $courseCategory = CourseCategory::get();
        return view('admin.appliedCourses',compact('appliedCourse','courseCategory'));
    }

    // user List page
    public function userList(){
        $users = User::where('role','user')->get();

        return view('admin.userList',compact('users'));
    }

    // admin List page
    public function adminList(){
        $admins = User::where('role','admin')->get();

        return view('admin.adminList',compact('admins'));
    }

    // Validation
    private function checkValidation($request, $action){
        $rules = [
            'course_name' => 'required',
            'course_category_id' =>'required',
            'description' => 'required',
            'courseImage' => 'required'
        ];

        $rules['courseImage'] = $action == "create" ? "required" : '';
        $validation= $request->validate($rules);
    }

    // Request Data
    private function requestData($request){
        return [
            'course_name' => $request->course_name,
            'course_category_id' => $request->course_category_id,
            'description' => $request->description
        ];
    }
}
