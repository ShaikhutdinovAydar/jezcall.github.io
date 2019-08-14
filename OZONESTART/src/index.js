"use strict";
// чукбокс

function toggleCheckbox() {
  const checkbox = document.querySelectorAll(".filter-check_checkbox");


  for (let i = 0; i < checkbox.length; i++) {
    checkbox[i].addEventListener('change', function () {
      if (this.checked === true) {
        this.nextElementSibling.classList.add('checked');
      } else {
        this.nextElementSibling.classList.remove('checked');
      }
    });
  }
}



// end чекбокс



// корзина
function toggleCart() {
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
}

// end карзинf

// работа с корзиной
function addCart() {
  const cards = document.querySelectorAll('.goods .card'),
    cartWrapper = document.querySelector('.cart-wrapper'),
    cartEmpty = document.getElementById('cart-empty');
  const countGoods = document.querySelector('.counter');
  const card_price = document.querySelectorAll('.goods .card .card-body .card-price');


  cards.forEach((card) => {
    const btn = card.querySelector('button');

    btn.addEventListener('click', () => {
      const cardClone = card.cloneNode(true);
      cartWrapper.appendChild(cardClone);
      cartEmpty.remove();
      showData();

      const removeBtn = cardClone.querySelector('.btn');
      removeBtn.textContent = 'Удалить из корзины';
      removeBtn.addEventListener('click', () => {
        cardClone.remove();
        showData();
      });
    });
  });

  function showData() {
    const cardsCart = cartWrapper.querySelectorAll('.card');
    const cardsPrice = cartWrapper.querySelectorAll('.card-price');
    const cardTotal = document.querySelector('.cart-total span');
    let sum = 0;
    countGoods.textContent = cardsCart.length;

    cardsPrice.forEach((Price) => {
      let price = parseFloat(Price.textContent);
      sum += price;
    });
    cardTotal.textContent = sum;
    if (cardsCart.length !== 0) {
      cartEmpty.remove();
    } else {
      cartWrapper.appendChild(cartEmpty)
    }
  }
}


// end работа с корзиной

// фильтр акции

function actionPage() {

  const cards = document.querySelectorAll('.goods .card');
  const discountcheckbox = document.getElementById('discount-checkbox');
  const min = document.getElementById('min');
  const max = document.getElementById('max');
  const search = document.querySelector('.search-wrapper_input');
  const searchbtn = document.querySelector('.search-btn');


  discountcheckbox.addEventListener('click', () => {
    cards.forEach((card) => {

      if (discountcheckbox.checked) {
        if (!card.querySelector('.card-sale')) {
          card.parentNode.style.display = 'none';
        }
      }else {
        card.parentNode.style.display = '';
      }
    });
  });

  function filterPrice(){
    cards.forEach((card) => {
      const cardsPrice = card.querySelector('.card-price');
      const price = parseFloat(cardsPrice.textContent);
      if ((min.value && price < min.value) || (max.value && price > max.value)) {
        card.parentNode.style.display = 'none';
      }else {
        card.parentNode.style.display = '';
      }
    });
  }

  min.addEventListener('change', filterPrice)
  max.addEventListener('change', filterPrice)

  searchbtn.addEventListener('click', () => {
    const searchText = new RegExp(search.value.trim(), 'i');
    cards.forEach((card) => {
      const titel = card.querySelector('.card-title');
      if (!searchText.test(titel.textContent)) {
        card.parentNode.style.display = 'none';
      }else {
        card.parentNode.style.display = '';
      }
    });
  });
};

// end фильтр акции
actionPage();
toggleCheckbox();
addCart();
toggleCart();