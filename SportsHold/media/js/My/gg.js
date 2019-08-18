"use strict";
// работа с карзиной




// завершение работы с карзиной

//  ******* работа с товарами
const id__block = document.querySelector('.id__block')
const featuresBlock = document.querySelectorAll('.features-block');
const section = document.querySelector('.section');

// a listing of all cards
featuresBlock.forEach((card) => {
  const contentOfThing = card.querySelector('.content');

  // work for pushing
  contentOfThing.addEventListener('click', () => {
    id__block.style.display = 'flex';

    // titel
    const idBlockTitel = document.querySelector('.id__block-title');
    const titel_content = contentOfThing.querySelector('h3 strong').textContent;
    idBlockTitel.textContent = titel_content;
    
    
    // img
    const img = contentOfThing.querySelector('.dd');
    const imgClone = document.querySelector('.imgClone img');
    const cloneImg = img.getAttribute('src');
    imgClone.setAttribute('src', cloneImg);
    

    // id
    const id = document.querySelector('.id');
    const i = contentOfThing.querySelector('i');
    const iContent = i.textContent;
    id.textContent = iContent;


    // price
    const price_id = document.querySelector('.id__block-total strong');
    const price_id_sel = document.querySelector('.id__block-total span strike');
    const price_id_close = document.querySelector('.id__block-total span');
    const priceCard = contentOfThing.querySelector('p').textContent.trim();
    const priceCardSel = contentOfThing.querySelector('p strong').textContent.trim();
    const priceCardContent = priceCard.textContent;
    if ( priceCardSel !== '' ) {
      price_id_close.style.display = 'block';
      let count = priceCardSel.length;
      price_id.textContent = priceCard.slice(1,-count);
      price_id_sel.textContent =  priceCardSel;
      idBlockTitel.style.color = '#ff7373';
    }else {
      idBlockTitel.style.color = '#4d5f71';
      price_id_close.style.display = 'none';
      price_id.textContent = priceCard.slice(1, );
    }


    // sex
    const sex_remove = document.querySelector('.id__block-wrapper span small');
    const sex = contentOfThing.querySelector('h3 small').textContent;
    console.log(sex)
    sex_remove.textContent = sex;

  });


  // close Btn
  const closeCard = document.querySelector('.id__block-close');
  closeCard.addEventListener('click', () => {
    id__block.style.display = 'none';
  })
});





// ******* конец работы с товарами