const avatarInput = document.getElementById('avatar-input');
const avatarPreview = document.getElementById('avatar-preview');

// 當使用者選擇檔案時，預覽新頭像
avatarInput.addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            avatarPreview.src = e.target.result; // 更新頭像為上傳的圖片
        };
        reader.readAsDataURL(file);
    }
});