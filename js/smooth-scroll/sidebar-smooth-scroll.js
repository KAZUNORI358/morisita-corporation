export const initializeSidebarSmoothScroll = () => {
    const buttons = document.querySelectorAll(`.js-sidebar-smooth-scroll`);
    const targets = document.querySelectorAll(`a[href^="#"]`);
    if (buttons.length === 0 || targets.length === 0) return;

    buttons.forEach((button) => {
        button.addEventListener("click", (e) => {
            const href = button.getAttribute("href");
            if (!href || href === "#") {
                return;
            }

            const targetId = href.split("#")[1];
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                // 固定ヘッダーの高さを取得してオフセット計算
                const header = document.querySelector(".js-header");
                const headerHeight = header ? header.offsetHeight : 0; // ヘッダーが存在しない場合は0
                const additionalOffset = 20; // 必要に応じて追加マージンを設定

                // 最終的なスクロール位置を計算
                // ターゲット要素の位置 - ヘッダー高さ - 追加マージン
                const targetPosition =
                    targetElement.offsetTop - headerHeight - additionalOffset;

                // ブラウザ標準のスムーススクロール機能を実行
                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth",
                });
            }
        });
    });
};
