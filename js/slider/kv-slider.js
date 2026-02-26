export const initializeKvSlider = () => {
    const kvSlider = document.querySelector(".js-kv-slider");
    const kvSliderNumber = document.querySelector(".js-kv-slider-number");
    const kvSliderCircleMoving = document.querySelector(
        ".js-kv-slider-circle-moving",
    );
    if (!kvSlider) return;

    const INTERVAL_TIME = 5000; // スライドのインターバル時間 5秒

    // 背景スライダーの設定
    const splide = new Splide(kvSlider, {
        type: "fade", // フェード
        rewind: true, // ループ再生
        pagination: false,
        arrows: false,
        autoplay: true,
        interval: INTERVAL_TIME,
        speed: 1000,
        pauseOnHover: false, // マウスがホバーの時、停止しない
        flick: false,
        drag: false,
    });
    // 円弧の半径
    const radius = 59;
    // 円弧の1周分の長さ 2✖︎円周率(3.14)✖︎半径(59)
    const circumference = 2 * Math.PI * radius;

    // 初期状態の設定(円の中身を空っぽにする)
    gsap.set(kvSliderCircleMoving, {
        strokeDasharray: circumference, // 点線の間隔を1周分にする
        strokeDashoffset: circumference, // 点線の開始位置を1周分ずらす
    });

    // 動く円弧の関数
    const startCircleAnimation = () => {
        gsap.fromTo(
            kvSliderCircleMoving,
            {
                strokeDashoffset: circumference, // 円弧のオフセットを円弧の1周分の長さにする
            },
            {
                strokeDashoffset: 0, // 円弧のオフセットを0にする
                duration: INTERVAL_TIME / 1000,
                ease: "none", // 一定の速度で移動
            },
        );
    };

    // splideの動きに合わせて、数字の更新
    splide.on("move", () => {
        kvSliderNumber.textContent = splide.index + 1;
        // 円弧のアニメーションを上書きして、再度0からスタートするようにする
        startCircleAnimation();
    });

    splide.mount();
    startCircleAnimation();
};
