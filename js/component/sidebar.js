export const initializeSidebar = () => {
    const sidebarItems = document.querySelectorAll(`.js-sidebar-nav-item`);
    const sidebarTargets = document.querySelectorAll(`.js-sidebar-target`);
    if (sidebarItems.length === 0 || sidebarTargets.length === 0) return;

    sidebarTargets.forEach((target, index) => {
        ScrollTrigger.create({
            trigger: target,
            start: "top 30%",
            end: "bottom 30%",
            onEnter: () => setActive(index), // スクロールがトリガーを超えた時
            onEnterBack: () => setActive(index), // 戻った時
        });

        function setActive(activeIndex) {
            sidebarItems.forEach((item) => {
                item.classList.remove("is-active");
            });
            sidebarItems[activeIndex].classList.add("is-active");
        }
    });
};
