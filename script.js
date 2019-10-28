const getDate = new Date();
const rightNow = getDate.getFullYear() + '-' + (getDate.getMonth() + 1) + '-' + getDate.getDate();
document.body.querySelector('.displaydate').innerHTML = 'Todays date: ' + rightNow;