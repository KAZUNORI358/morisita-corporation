export const initializeCtaBackgroundSlider = () => {
    const ctaBackgroundSlider = document.querySelector(
        ".js-cta-background-slider",
    );
    if (!ctaBackgroundSlider) return;

    const splide = new Splide(ctaBackgroundSlider, {
        type: "loop",
        autoWidth: true,
        autoHeight: true,
        drag: false,
        perPage: 1,
        gap: "60px",
        arrows: false,
        pagination: false,
        autoScroll: {
            speed: 1,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
    });

    splide.mount(window.splide.Extensions);
};