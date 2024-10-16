document.addEventListener('DOMContentLoaded', function () {
    const menuIcon = document.querySelector('.menu-icon');
    const navMenu = document.querySelector('.nav-menu');
    const overlay = document.querySelector('.overlay');

    // Mở menu khi nhấp vào biểu tượng menu
    menuIcon.addEventListener('click', function () {
        navMenu.classList.toggle('open');
    });

    // Đóng menu khi nhấp vào overlay
    overlay.addEventListener('click', function () {
        navMenu.classList.remove('open');
    });
});
// Lấy tất cả các nút "Show More"
const showMoreBtns = document.querySelectorAll('.show-more-btn');

// Lặp qua từng nút và thêm sự kiện click
showMoreBtns.forEach(button => {
    button.addEventListener('click', () => {
        // Lấy nhóm sản phẩm mà nút này thuộc về
        const group = button.getAttribute('data-group');
        const productShowcase = document.querySelector(`#${group} .product-showcase`);

        // Thêm hoặc xóa lớp 'open' để hiển thị hoặc ẩn sản phẩm
        productShowcase.classList.toggle('open');

        // Cập nhật văn bản nút tùy theo trạng thái
        if (productShowcase.classList.contains('open')) {
            button.textContent = 'Show Less';
        } else {
            button.textContent = 'Show More';
        }
    });
});


