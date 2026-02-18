export const initializedDropdownMenu = () => {
    const menu = document.querySelector(`#js-dropdown-menu`);
    const button = document.querySelector(`.js-dropdown-open-button`);

    if (!menu || !button) return;

    // menuのopen状態
    let isOpen = false;

    // menuをopenする関数
    const openMenu = () => {
        gsap.to(menu, {
            autoAlpha: 1,
            scale: 1,
            ease: "power2.out",
            duration: 0.2,
        });
    };

    // menuをcloseする関数
    const closeMenu = () => {
        gsap.to(menu, {
            autoAlpha: 0,
            scale: 0.95,
            ease: "power2.out",
            duration: 0.2,
        });
    };

    // buttonをクリックで表示/非表示
    button.addEventListener("click", (event) => {
        event.stopPropagation();

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }

        isOpen = !isOpen;
    });

    // button外の領域をクリックした場合、menuを閉じる
    document.addEventListener(`click`, (event) => {
        if (!button.contains(event.target) && !menu.contains(event.target)) {
            closeMenu();
        }
    });

    // escキーを押した場合、モーダルを閉じる
    document.addEventListener(`keydown`, (event) => {
        if (event.key === `Escape`) {
            closeModal();
        }
    });
};
