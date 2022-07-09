const modalButtons = document.querySelectorAll('[data-modal]');
const modals = document.querySelectorAll('.modal');
const loginForm = document.querySelector('.login');

modalButtons.forEach(item => {
    item.addEventListener('click', (evt) => {
        const modal = document.getElementById(evt.target.dataset.modal);
        modal.classList.add('modal_show')
    })
})

modals.forEach(item => {
    item.addEventListener('click', (evt) => {
        evt.stopPropagation();
        evt.target.classList.remove('modal_show');
    })
})

loginForm.addEventListener('submit',(evt) => {
    evt.preventDefault();

    alert('Логин или пароль введен неверно')
})
