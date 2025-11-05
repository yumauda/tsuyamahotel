document.addEventListener('DOMContentLoaded', function() {
  const checkbox = document.getElementById('agreementCheckbox');
  const button = document.getElementById('registrationButton');

  if (checkbox && button) {
    // チェックボックスの変更を監視
    checkbox.addEventListener('change', function() {
      button.disabled = !this.checked;
    });

    // ボタンのクリックイベント（必要に応じて）
    button.addEventListener('click', function() {
      if (!this.disabled) {
        // ここに企業登録ページへの遷移やモーダル表示などの処理を追加
        // 例: window.location.href = '/registration';
        console.log('企業登録ボタンがクリックされました');
      }
    });
  }
});
