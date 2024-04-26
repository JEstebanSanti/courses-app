<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function index() {
        $query = Course::query();
        $courses = $query->paginate(10);
        return Inertia::render('Courses/Index', [
            'courses' => CourseResource::collection($courses),
        ]);
    }
}
