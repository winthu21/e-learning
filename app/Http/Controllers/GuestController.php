<?php

namespace App\Http\Controllers;

use App\Events\CourseApplied;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\AppliedCourse;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //home page
    public function home()
    {
        $course = Course::select('course_name')->get();
        alert()->image('Welcome to E-Learning!', 'Start your learning journey today!', asset("img/5.jpg"), '400px', '300px', 'E-Learning Image');

        return view('guest.home', compact('course'));
    }

    // about page
    public function about()
    {
        $course = Course::select('course_name')->get();
        return view('guest.about', compact('course'));
    }

    // login page
    public function loginPage()
    {
        return view('guest.login');
    }

    // register page
    public function registerPage()
    {
        return view('guest.register');
    }

    // contact page
    public function contactPage()
    {
        $course = Course::select('course_name')->get();
        return view('guest.contactus', compact('course'));
    }

    // course page
    public function coursePage($category_id = null)
    {
        $course = Course::select('courses.*', 'course_categories.category_name as category')
            ->leftJoin('course_categories', 'courses.course_category_id', 'course_categories.id');

        if ($category_id == null) {
            $course = $course->get();
        } else {
            $course = $course->where('courses.course_category_id', $category_id)
                ->orderBy('courses.updated_at', 'desc')
                ->get();
        }
        $category = CourseCategory::get();

        return view('guest.course', compact('course', 'category'));
    }

    // course details
    public function courseDetails($id)
    {
        $courseDetails = Course::select('courses.*', 'course_categories.category_name as category')
            ->leftJoin('course_categories', 'courses.course_category_id', 'course_categories.id')
            ->where('courses.id', $id)
            ->first();
        $course = Course::select('course_name')->get();

        $appliedCourse = AppliedCourse::where('user_id', auth()->user()->id)
            ->where('course_id', $id)
            ->first();

        return view('guest.courseDetail', compact('course', 'courseDetails', 'appliedCourse'));
    }

    // coursed apply
    public function courseApply(Request $request)
    {
        $data = [
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'status' => 'subscribed',
        ];
        AppliedCourse::create($data);
        alert()->success('Success', 'You have successfully applied course');

        $NotiData = [
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'status' => 'accepted',
        ];
        $application = Application::create($NotiData);
        event(new CourseApplied('A new course application has been submitted!'));
        return back();
    }

    // mailing
    public function mail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('laratest197@gmail.com')->send(new ContactMail($request->all()));
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
