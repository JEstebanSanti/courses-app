import SearchLogo from "./SearchLogo";

export default function SearchButton({ type='', ...props  }) {
    return (
        <>
            <button
                type={type}
                {...props}
            >
            <SearchLogo></SearchLogo>

            </button>
        </>
           
    );
}
