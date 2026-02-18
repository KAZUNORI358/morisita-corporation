export const setUtmSourceToHiddenField = () => {
    // URLパラメータから utm_source を取得
    const params = new URLSearchParams(window.location.search);
    const utmSource = params.get("utm_source");

    // 対象の hidden フィールドを取得（class="js-utm-source"）
    const hiddenInput = document.querySelector(".js-utm-source");

    // utm_source が存在し、hidden フィールドもある場合に値をセット
    if (utmSource && hiddenInput) {
        hiddenInput.value = utmSource;
    }
};