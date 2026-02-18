export const initializeFooterSmoothScroll = () => {
    const scrollLinks = document.querySelectorAll(`.js-footer-smooth-scroll`);

    if (!scrollLinks) return;

    // リンクがある場合、処理を繰り返す
    scrollLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();

            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    });
};
