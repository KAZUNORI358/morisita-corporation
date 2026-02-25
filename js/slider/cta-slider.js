export const initializeCtaSlider = () => {
    const ctaSlider = document.querySelector(".js-cta-slider");
    if (!ctaSlider) return;

    const splide = new Splide(ctaSlider, {
        type: "loop", // ループ再生
        autoHeight: true, // スライドの高さを自動調整（文字の高さに合わせる）
        autoWidth: true, // スライドの幅を自動調整（文字の幅に合わせる）
        perMove: 1, // スライド移動数
        gap: "40px", // スライド間の間隔を追加
        arrows: false, // 矢印非表示
        pagination: false, // ページネーション非表示
        drag: false, // ドラッグ無効
        keyboard: false, // キーボード操作無効
        autoScroll: {
            speed: 1, // スクロール速度（ゆっくり）
            pauseOnHover: false, // ホバーで止めない
            pauseOnFocus: false, // フォーカスで止めない
            rewind: false, // 巻き戻し無効
        },
    });

    if (window.splide && window.splide.Extensions) {
        splide.mount(window.splide.Extensions);
    } else {
        splide.mount(); // 通常のマウントを実行
    }
};
