export const initializeHeaderScroll = () => {
    const kvScrollTriggerElement = document.querySelector(".js-scrollTarget");
    const headerElement = document.querySelector(".js-header");
    const headerWhiteElement = document.querySelectorAll(".js-header-white");
    const hamburgerMenuDialogElement = document.querySelector(".js-header-hamburger-menu-dialog");
    const dropdownMenuElement = document.querySelector(".js-header-scroll-dropdown-menu");

    if (!headerElement || !kvScrollTriggerElement) return;

    ScrollTrigger.create({
        trigger: kvScrollTriggerElement,
        start: "top top",
        // markers: true, //マーカーを表示する
        onEnter: () => {
            headerElement.classList.add("is-active");
            hamburgerMenuDialogElement.classList.add("is-active");
            dropdownMenuElement.classList.add("is-active");
            headerWhiteElement.forEach((element) => {
                element.classList.add("is-active");
            });

            gsap.fromTo(
                headerElement,
                {
                    y: "-100%",
                },
                {
                    y: 0,
                    duration: 0.6,
                    ease: "power2.out",
                    overwrite: "auto",
                },
            );
        },
        onLeaveBack: () => {
            gsap.to(headerElement, {
                y: "-100%",
                duration: 0.6,
                ease: "power2.out",
                backgroundColor: "transparent",
                onComplete: () => {
                    headerElement.classList.remove("is-active");
                    hamburgerMenuDialogElement.classList.remove("is-active");
                    dropdownMenuElement.classList.remove("is-active");
                    headerWhiteElement.forEach((element) => {
                        element.classList.remove("is-active");
                    });
                    //JSの変更をリセットする
                    gsap.set(headerElement, {
                        y: "0%",
                        clearProps: "all",
                    });
                },
            });
        },
    });
};
