import DangerButton from "@/Components/DangerButton";
import PrimaryButton from "@/Components/PrimaryButton";
import Select from "@/Components/Select";
import TextInput from "@/Components/TextInput";
import Authenticated from "@/Layouts/AuthenticatedLayout";
import { Link, useForm } from "@inertiajs/react";

export default function Create({ auth, categorys }) {
    const { data, setData, post, errors, reset } = useForm({
        name: '',
        start_date: '',
        end_date: '',
        category_id: '',
    })
    const onSubmit = (e) => {
        e.preventDefault();
        post(route("courses.store"))
    }
    return (
        <Authenticated
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Create Course</h2>}
        >
            <div className="flex justify-center p-2">
                <form onSubmit={onSubmit} action="post"  className="max-w-sm flex flex-col w-64 gap-y-2 p-2 mb-5">
                    <TextInput
                        id="course_name_id"
                        placeholder="Nombra tu Curso"
                        name="name"
                        type="text"
                        value={data.name}
                        onChange={e => setData("name", e.target.value)}

                    >
                    </TextInput>
                    <TextInput
                        id="course_start_date_id"
                        placeholder="dd/mm/YYYY"
                        name="start_date"
                        type="text"
                        value={data.start_date}
                        onChange={e => setData("start_date", e.target.value)}


                    >
                    </TextInput>
                    <TextInput
                        id="course_end_date_id"
                        placeholder="dd/mm/YYYY"
                        name="end_date"
                        type="text"
                        value={data.end_date}
                        onChange={e => setData("end_date", e.target.value)}
                    >
                    </TextInput>
                    <Select
                        id="category_id_id"
                        name="category_id"
                        onChange={e => { 
                            let category = e.target.value
                            Number(category)
                            setData("category_id", category)
                        }}
                    >
                        {
                            categorys.data.map((category) => (
                                <option value={category.id} key={category.name}>{category.name}</option>
                            ))
                        }
                    </Select>
                    <div className="flex justify-between p-2">
                        <PrimaryButton type="submit" className="max-w-full text-center">Crear</PrimaryButton>
                        <Link href={route('dashboard')} >
                            <DangerButton >
                                Cancel
                            </DangerButton>
                        </Link>
                    </div>

                </form>

            </div>
            <pre>
                {JSON.stringify(auth, undefined, 2)}
            </pre>

        </Authenticated>
    )
}