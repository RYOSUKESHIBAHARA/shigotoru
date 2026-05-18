let hbmenu =document.getElementById("m-navi")

let clbtn = document.getElementById("cl")
let opbtn = document.getElementById("op")

clbtn.addEventListener('click', () => {
  hbmenu.classList.add('active');

// console.log(clbtn);

});

opbtn.addEventListener('click', () => {
  hbmenu.classList.remove('active'); 

});
