var button = document.getElementById('button')
button.addEventListener('click', function() {
  swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
  });
})