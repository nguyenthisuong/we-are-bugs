//nav===========================================================================
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

//showmore btn=======================================================================
// Lấy tất cả các nút "Show More"
const showMoreBtns = document.querySelectorAll('.show-more-btn');


showMoreBtns.forEach(button => {
    button.addEventListener('click', () => {
        // Lấy nhóm sản phẩm mà nút này thuộc về
        const group = button.getAttribute('data-group');
        const productShowcase = document.querySelector(`#${group} .product-showcase`);

        
        productShowcase.classList.toggle('open');

        
        if (productShowcase.classList.contains('open')) {
            button.textContent = 'Show Less';
        } else {
            button.textContent = 'Show More';
        }
    });
});

//filter button===========================================================================
    
    const filterButtons = document.querySelectorAll('.filter-button');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                // Kéo đến vị trí của phần tử mục tiêu
                targetSection.scrollIntoView({
                    behavior: 'smooth', // hiệu ứng cuộn mượt
                    block: 'start' // cuộn đến đầu phần tử
                });
            }
        });
    });




