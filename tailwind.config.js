/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            gridTemplateRows: {
                app: 'auto 1fr'
            },
            gridTemplateColumns: {
                profiles: 'repeat(auto-fit, minmax(20rem, 1fr))'
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}

