"use strict";
// чукбокс
const checkbox = document.querySelectorAll(".filter-check_checkbox");


for(let i = 0; i < checkbox.length; i++) {
  checkbox[i].addEventListener('change', function() {
  if (this.checked === true){
    this.nextElementSibling.classList.add('checked');
  } else {
    this.nextElementSibling.classList.remove('checked');
  }
});
}

// end чекбокс



// корзина
const btnCart = document.getElementById('cart');
const modalCart = document.querySelector('.cart');
const closeModalCart = document.querySelector('.cart-close');

btnCart.addEventListener('click', () => {
  modalCart.style.display = 'flex';
  document.body.style.overflow = 'hidden';

});
closeModalCart.addEventListener('click', () => {
  modalCart.style.display = 'none';
})
// end чекбокс

// работа с корзиной

const cards = document.querySelectorAll('.goods .card'),
      cartWrapper = document.querySelector('.cart-wrapper'),
      cartEmpty = document.getElementById('cart-empty');
const countGoods = document.querySelector('.counter');
cards.forEach((card) => {
  const btn = card.querySelector('button');

  btn.addEventListener('click', () => {
    const cardClone = card.cloneNode(true);
    cartWrapper.appendChild(cardClone);
    cartEmpty.remove();
    showData();
  });
});

function showData(){
  const cardsCart = cartWrapper.querySelectorAll('.card');
  countGoods.textContent = cardsCart.length;
}
// end работа с корзиной




