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
document.querySelector('.show-more-btn').addEventListener('click', function () {
    const showcase = document.querySelector('.product-showcase');
    showcase.classList.toggle('open'); // Mở hoặc đóng showcase

    // Thay đổi nội dung nút
    this.textContent = showcase.classList.contains('open') ? 'Show Less' : 'Show More';
});
