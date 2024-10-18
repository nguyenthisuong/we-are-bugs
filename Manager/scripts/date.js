// 取得相關 DOM 元素
const prevDateButton = document.getElementById('prev-date');
const nextDateButton = document.getElementById('next-date');
const datePicker = document.getElementById('date-picker');

// 初始化日期為今天
let currentDate = new Date();
updateDateDisplay(currentDate);

// 更新日期選擇器的值
function updateDateDisplay(date) {
    const formattedDate = date.toISOString().split('T')[0]; // yyyy-mm-dd 格式
    datePicker.value = formattedDate;
}

// 日期加一天
nextDateButton.addEventListener('click', () => {
    currentDate.setDate(currentDate.getDate() + 1);
    updateDateDisplay(currentDate);
});

// 日期減一天
prevDateButton.addEventListener('click', () => {
    currentDate.setDate(currentDate.getDate() - 1);
    updateDateDisplay(currentDate);
});

// 當使用者在日期選擇器中選擇日期時更新顯示
datePicker.addEventListener('change', (event) => {
    const selectedDate = new Date(event.target.value);
    if (!isNaN(selectedDate)) {
        currentDate = selectedDate;
    }
});