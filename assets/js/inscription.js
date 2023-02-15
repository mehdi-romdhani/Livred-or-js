// alert("DOM ready!");
let containerSub = document.querySelector(".subscribe-container");
let formInscription = document.querySelector("#form_sub");
let formConnexion = document.querySelector("#form_co");
let subCont = document.querySelector("#mess_done");

formConnexion.style.display='none';
formInscription.style.display='none';

let btnContainer=document.querySelector('.btn-sub-container');
let btnSub=document.querySelector('#sub-btn');
let btnCo=document.querySelector('#co-btn');

btnCo.addEventListener('click',()=>{
  if (formConnexion.style.display === "none") {
    formConnexion.style.display = "flex";
  } else {
    formConnexion.style.display = "none";
  }
})

btnSub.addEventListener('click',()=>{
  if (formInscription.style.display === "none") {
    formInscription.style.display = "flex";
  } else {
    formInscription.style.display = "none";
  }
})




btnSub.addEventListener('click',()=>{
  
})

console.log(containerSub);
console.log(formInscription);

//
formInscription.addEventListener("submit", (event) => {
  event.preventDefault(); //on stop le comportement par défault de l'envoi du formulaire
  let data = new FormData(formInscription); //recuperation des donnés du formulaire que l'on passe par references =! value
  console.log(data);

  //requete, reponse
  fetch("inscriptions.php", {
    //utilisation de fetch pour l'asynchrone pour pas que la page ne se recharge
    method: "POST",
    body: data,
  })
    .then((response) => response.text())
    .then((response) => {
      subCont.innerHTML = response;
    });
});


formConnexion.addEventListener('submit',(event)=>{
    event.preventDefault();
    let data =new FormData(formConnexion);
    console.log(data);
    console.log('max test')
})


