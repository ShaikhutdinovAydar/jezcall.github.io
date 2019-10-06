"use strict";

const featuresBlock = document.querySelectorAll('.features-block');

featuresBlock.forEach((card) => {
  const contentOfThing = card.querySelector('.content');
  const sale_of_card = contentOfThing.querySelector("span");
  if (sale_of_card){
    card.style.display = 'inline-block';
  }
  else {
    card.style.display = 'none';
  }
});
