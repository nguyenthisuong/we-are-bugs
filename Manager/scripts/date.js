const dateElement = document.getElementById('current-date');
const today = new Date();
const formattedDate = `${today.getFullYear()}/${(today.getMonth() + 1)
    .toString()
    .padStart(2, '0')}/${today.getDate().toString().padStart(2, '0')}`;
dateElement.textContent = formattedDate;
