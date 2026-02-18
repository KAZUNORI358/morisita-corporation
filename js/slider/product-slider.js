export const initializeProductSlider = () => {
    const productSlider = document.querySelector(".js-product-slider");
    const prevButton = document.querySelectorAll(".js-product-button-prev");
    const nextButton = document.querySelectorAll(".js-product-button-next");

    if (!productSlider) return;

    const splide = new Splide(productSlider, {
        type: "loop",
        perPage: 3, // スライダーの表示数
        perMove: 1, // スライダーの移動数
        pagination: false, // ページネーションを非表示
        arrows: false, // 矢印を非表示
        gap: "32rem", // スライダーの間隔

        padding: {
            left: "0rem",
            right: "94rem",
        },
        breakpoints: {
            767: {
                perPage: 1,
                gap: "24rem",
                padding: {
                    left: "20rem",
                    right: "60rem",
                },
            },
        },
    });
    splide.mount();

    // 前へボタン
    prevButton.forEach((button) => {
        button.addEventListener("click", () => {
            splide.go("<");
        });
    });

    // 次へボタン
    nextButton.forEach((button) => {
        button.addEventListener("click", () => {
            splide.go(">");
        });
    });
};
