export const initializeProductSingleKvSlider = () => {
    const main = document.querySelector(".js-product-single-main-kv-slider");
    const sub = document.querySelector(".js-product-single-sub-slider");

    if (!main) return;

    // メインのスライダー
    const mainSplide = new Splide(main, {
        type: "fade",
        pagination: false,
        arrows: false,
    });

    // サブのスライダー
    const subSplide = new Splide(sub, {
        fixedWidth: 104, // サブのスライダーの幅
        fixedHeight: 104, // サブのスライダーの高さ
        arrows: false,
        pagination: false,
        cover: true,
        isNavigation: true,
        drag: false,
        breakpoints: {
            768: {
                fixedWidth: 72,
                fixedHeight: 72,
            },
        },
    });

    mainSplide.sync(subSplide); // メインのスライダーとサブのスライダーを同期
    mainSplide.mount();
    subSplide.mount();
};
