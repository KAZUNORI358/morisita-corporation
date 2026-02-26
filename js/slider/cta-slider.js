export const initializeCtaSlider = () => {
    const ctaSlider = document.querySelector(".js-cta-slider");
    if (!ctaSlider) return;

    const splide = new window.Splide(ctaSlider, {
        type: "loop",
        autoWidth: true,
        perMove: 1, // スライド移動数
        gap: "40px", // スライド間の間隔
        arrows: false, // 矢印非表示
        pagination: false, // ページネーション非表示
        drag: false, // ドラッグ無効
        keyboard: false, // キーボード操作無効
        autoScroll: {
            speed: 1,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
    });

    if (window.splide && window.splide.Extensions) {
        splide.mount(window.splide.Extensions);
    } else {
        splide.mount();
    }
};
