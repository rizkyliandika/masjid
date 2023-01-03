let nav = document.querySelectorAll("nav");
let offsetTopAbout = document.getElementById("tentang-kami").offsetTop;
let section = document.querySelectorAll("section");
let lists = document.querySelectorAll("li");
let ct = document.querySelectorAll("#change-theme")[0];

let theme = localStorage.getItem("color-theme");
if (theme === "dark") document.documentElement.classList.add(theme);

ct.addEventListener("click", () => {
    let children = ct.children;
    for (const child of children) {
        child.classList.toggle("hidden");
    }
    document.documentElement.classList.toggle("dark");
    if (document.documentElement.classList.contains('dark')) {
        localStorage.setItem("color-theme", "dark");
    } else {
        localStorage.removeItem("color-theme");
    }
});

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
