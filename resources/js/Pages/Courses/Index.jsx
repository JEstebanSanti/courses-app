import Pagination from '@/Components/Pagination';
import SecondaryButton from '@/Components/SecondaryButton';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Courses({ auth, courses }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Courses</h2>}
        >
            <Head title="Courses" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100">Show all courses!</div>
                    </div>
                    <div className='flex justify-arround flex-wrap gap-3 px-2 py-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-3'>

                        {
                            courses.data.map((course) => (
                                <div className="max-w-sm p-3  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" key={course.id}>

                                    <div className='flex flex-col justify-between gap-1 mb-3'>
                                        <a href="#">
                                            <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{course.name}</h5>
                                        </a>
                                        <div className='flex text-xs gap-3 dark:text-white'>
                                            <span className='italic'>Start: {course.start_date}</span>
                                            <span className='italic'>Due: {course.end_date}</span>
                                        </div>
                                        <p className='text-xs italic dark:text-white'>Profesor: {course.user_id.name}</p>

                                    </div>
                                    <div className='mb-3'>
                                        <p className="mb-3 text-xs font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href={route('courses.view', course.id)}>
                                            <SecondaryButton>
                                                Read more
                                                <svg className="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                </svg>
                                            </SecondaryButton>
                                        </a>
                                    </div>
                                    <div>
                                        <span className="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">{course.category_id.name}</span>
                                    </div>

                                </div>

                            ))
                        }

                    </div>
                    <div className='flex justify-center p-2 rounded-xl'>
                        <Pagination links={courses.meta.links} ></Pagination>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
