let nav = document.querySelectorAll("nav");
let offsetTopAbout = document.getElementById("tentang-kami").offsetTop;
let section = document.querySelectorAll("section");
let lists = document.querySelectorAll("li");
let changeTheme = document.querySelector("#change-theme");

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
    themeToggleDarkIcon.classList.add('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
    themeToggleLightIcon.classList.add('hidden');
}

window.addEventListener("DOMContentLoaded", (event) => {
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }
})

changeTheme.addEventListener('click', (e) => {
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('theme')) {
        if (localStorage.getItem('theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    }
})

window.addEventListener("scroll", (event) => {
    let scroll = window.scrollY;
    if (scroll >= offsetTopAbout) {
        nav.forEach((e, i) => {
            e.classList.add("bg-white", "dark:bg-zinc-900");
            e.classList.remove("bg-white/25", "dark:bg-zinc-900/25");
        });
    } else {
        nav.forEach((e, i) => {
            e.classList.add("bg-white/25", "dark:bg-zinc-900/25");
            e.classList.remove("bg-white", "dark:bg-zinc-900");
        });
    }
});

function activeLink(li) {
    lists.forEach((item) => item.classList.remove("active"));
    li.classList.add("active");
}

lists.forEach((item) =>
    item.addEventListener("click", function () {
        activeLink(this);
    })
);

window.onscroll = () => {
    section.forEach((sec) => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute("id");
        if (top >= offset && top < offset + height) {
            const target = document.querySelector(
                `[href='#${id}']`
            ).parentElement;
            activeLink(target);
        }
    });
};
