import CourseItem from '@/Components/CourseItem';
import PrimaryButton from '@/Components/PrimaryButton';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import Pagination from '@/Components/Pagination';
import { Head, Link } from '@inertiajs/react';

export default function Dashboard({auth, courses}) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className=" flex justify-between p-6 text-gray-900 dark:text-gray-100">
                            Mis Cursos
                            <Link href={route("courses.create")} >
                                <PrimaryButton>Crear Curso</PrimaryButton>
                            </Link>
                        </div>
                        {
                            courses.data.map((course) => (<CourseItem course={course} key={course.name}/>))
                        }
                        <div className='flex justify-center p-2 rounded-xl'>
                        <Pagination links={courses.meta.links} ></Pagination>
                        </div>
                        <pre>{JSON.stringify(courses, undefined, 2)}</pre>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
