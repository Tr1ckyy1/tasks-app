/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            height: {
                screen: "100dvh",
            },
            colors: {
                "main-grey": "#F6F8FA",
                "main-red": "#E91818",
                "main-blue": "#499AF9",
                "secondary-grey": "#6A737D",
            },
        },
    },
    plugins: [],
};
