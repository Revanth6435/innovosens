const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            } /* else {
                entry.target.classList.remove("show");
            } */ 
        });
    },
    { threshold: 0.5 }
);

const slideinElements = document.querySelectorAll(".slidein");
slideinElements.forEach((el) => observer.observe(el));

const slidedownElements = document.querySelectorAll(".slidedown");
slidedownElements.forEach((el) => observer.observe(el));

const fadeElements = document.querySelectorAll(".fade");
fadeElements.forEach((el) => observer.observe(el));
