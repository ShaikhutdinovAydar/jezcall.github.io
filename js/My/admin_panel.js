const add_click = document.querySelector('.add_click');
const change_click = document.querySelector('.change_click');
const delet = document.querySelector('.delete');
const unprocessed = document.querySelector('.unprocessed');
const processed = document.querySelector('.processed');

const content_change = document.querySelector('.content_change');
const content_add = document.querySelector('.content_add');
const content_delet = document.querySelector('.content_delete');
add_click.addEventListener('click', () => {
  content_add.style.display = 'block';
  content_change.style.display = 'none';
  content_delet.style.display = 'none';
});

change_click.addEventListener('click', () => {
  content_add.style.display = 'none';
  content_change.style.display = 'block';
  content_delet.style.display = 'none';
});

delet.addEventListener('click', () => {
  content_delet.style.display = 'block';
  content_add.style.display = 'none';
  content_change.style.display = 'none';

});