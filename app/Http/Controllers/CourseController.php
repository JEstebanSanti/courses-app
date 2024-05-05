<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\CourseResource;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Database\Seeders\CourseSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

use function PHPUnit\Framework\returnSelf;

class CourseController extends Controller
{
    public function index() {
        $query = Course::query();
        $courses = $query->paginate(9);
        return Inertia::render('Courses/Index', [
            'courses' => CourseResource::collection($courses),
        ]);
    }
    public function view($id) {
        $course = Course::findOrFail($id);
        return Inertia::render('Courses/View', ['course' => new CourseResource($course)]);

    }
    public function create() {
        $categorys = Category::all();
        return Inertia::render('Courses/Create', [
            'categorys' => CategoryResource::collection($categorys)
        ]);

    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'category_id' => 'required'
        ]);
        $validated['user_id'] = Auth::id();

        $course = Course::create($validated);
        if($course){ 
            return redirect(route('dashboard'));
        }else{
            return redirect(route(('courses.create')));

        }
    }

    public function dashboard(){
        $user_id = Auth::id();
        $courses = Course::with('user')->
        whereHas('user', function($query)use ($user_id) {
            $query->where('user_id', $user_id);
        })->paginate(9);

        return Inertia::render('Dashboard', [
            
            'courses' => CourseResource::collection($courses),
        ]);
    }

    public function subscribe(Request $request)
    {
        $cursoId = $request->course_id;
        $usuarioId = auth()->user()->id;

        $usuario = User::find($usuarioId);
        $curso = Course::find($cursoId);

        $usuario->subscriptions()->attach($curso);

        return redirect()->back()->with('success', 'Te has suscrito al curso exitosamente.');
    }
}
