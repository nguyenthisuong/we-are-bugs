// 取得日期顯示區域和按鈕
const currentDateElement = document.getElementById('current-date');
const prevDateButton = document.getElementById('prev-date');
const nextDateButton = document.getElementById('next-date');

// 初始化日期為今天
let currentDate = new Date();
updateDateDisplay();

// 更新日期顯示
function updateDateDisplay() {
    const formattedDate = currentDate.toISOString().split('T')[0]; // yyyy-mm-dd 格式
    currentDateElement.textContent = formattedDate;
}

// 日期加一天
nextDateButton.addEventListener('click', () => {
    currentDate.setDate(currentDate.getDate() + 1);
    updateDateDisplay();
});

// 日期減一天
prevDateButton.addEventListener('click', () => {
    currentDate.setDate(currentDate.getDate() - 1);
    updateDateDisplay();
});