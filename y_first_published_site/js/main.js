var pageSettings = {
	red: 20,
	green: 20,
	blue: 20
}

window.addEventListener('scroll', function (){
  var scrollY = window.pageYOffset;
  var bgValue = 'rgb(' + (pageSettings.red - scrollY * 2) + ',' + (pageSettings.green - scrollY * 2) + ',' + (pageSettings.blue - scrollY * 2) + ')';
  document.body.style.backgroundColor = bgValue;
  for (var c = 0; c < cards.length; c++){
     var card = cards[c];
    card.style.color = 'rgb(' + (pageSettings.red * 0 + scrollY * 2) + ',' + (pageSettings.green * 0 + scrollY * 2) + ',' + (pageSettings.blue * 0 + scrollY * 2) + ')';
  }
});