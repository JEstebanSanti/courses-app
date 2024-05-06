import PrimaryButton from "@/Components/PrimaryButton";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { useForm } from "@inertiajs/react";

export default function CoursesView({ auth, course }) {
    const { data, setData, post, errors, reset } = useForm({
        course_id: course.data.id
    })
    const onHandleSubmit = (e) => {
        e.preventDefault();
        post(route("courses.subscribe"))
    }
    return (

        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Courses</h2>}
        >
            <div className=" dark:text-white text-3xl">
                <h1>{course.data.name}</h1>
                <h2>
                    Curso impartido por
                    {
                        " " + course.data.user_id.name
                    }
                </h2>
                <h3>
                    {course.data.start_date}
                </h3>
                <h3>
                    {course.data.end_date}
                </h3>
            </div>

            <div>
                <form onSubmit={onHandleSubmit}>
                    <input type="hidden" name="course_id" value={data.course_id}/>
                    <PrimaryButton type="submit">
                        Subcribirse
                    </PrimaryButton>
                </form>
                
            </div>
        </AuthenticatedLayout>
    );
}