const date = new Date();
const rightNow = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
document.body.querySelector('.displaydate').innerHTML = 'Todays date: ' + rightNow;