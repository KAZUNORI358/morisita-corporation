export const initializeHamburgerMenu = () => {
    const menuButtonOpen = document.querySelector(
        ".js-hamburger-menu-button-open",
    );
    const menuButtonClose = document.querySelector(
        ".js-hamburger-menu-button-close",
    );
    const dialogMenu = document.querySelector(".js-hamburger-menu-dialog");
    if (!menuButtonOpen || !menuButtonClose || !dialogMenu) return;

    // 初期状態：透明にして隠しておく
    gsap.set(dialogMenu, { autoAlpha: 0 });

    const openMenu = () => {
        dialogMenu.showModal(); // dialogを表示
        document.body.style.overflow = "hidden"; // 背景固定

        gsap.to(dialogMenu, {
            autoAlpha: 1,
            duration: 0.5,
            ease: "power2.out",
        });
    };

    const closeMenu = () => {
        gsap.to(dialogMenu, {
            autoAlpha: 0,
            duration: 0.4,
            ease: "power2.in",
            onComplete: () => {
                dialogMenu.close(); // アニメーション終了後に閉じる
                document.body.style.overflow = ""; // 背景固定解除
            },
        });
    };

    menuButtonOpen.addEventListener("click", openMenu);
    menuButtonClose.addEventListener("click", closeMenu);

    // escキーを押した場合、メニューを閉じる
    document.addEventListener(`keydown`, (event) => {
        if (event.key === `Escape`) {
            closeMenu();
        }
    });
};
