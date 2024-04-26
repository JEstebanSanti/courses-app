import { Link } from "@inertiajs/react";

export default function Pagination({links}){
    return (
        <nav className="inline-flex -space-x-px text-base gap-x-1.5 h-10">
            {
                links.map((link) =>(
                    <Link
                        href={link.url || ''}
                        key={link.label}
                        className={`
                        rounded-lg
                        flex items-center justify-center px-4 h-10 
                        border-gray-300 
                        ${(link.active)? "bg-blue-50 ": ""}
                        ${(!link.url)? " text-blue-600 border cursor-not-allowed": "dark:text-white hover:bg-blue-100  hover:text-blue-700 dark:bg-gray-700 "}
                        dark:border-gray-700
                        `}
                        dangerouslySetInnerHTML={{__html: link.label}}   
                    >
                    
                    </Link>

                ))
            }
        </nav>
    );
}