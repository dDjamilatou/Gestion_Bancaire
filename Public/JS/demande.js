const WEBURL="http://localhost:8000";
const inputTel=document.querySelector("#inputTel")
const selectType=document.querySelector("#selectType")
const selectStatut=document.querySelector("#selectStatut")
const trs=Array.from(document.querySelectorAll("#tr"))
let demandes=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllDemandeWithClient();
  demandes=[...datas];
  inputTel.addEventListener("input",function(){
    const us = findUsersBySearch(inputTel.value);
    const proposesDemandes=document.getElementById('suggestions')
    proposesDemandes.innerHTML=generateAllDemande(us)
    })
    
    function findUsersBySearch(saisi) {
      if (saisi!="") {
          return demandes.filter(function (u) {
          return u.telephone.toUpperCase().startsWith(saisi.toUpperCase()) == true
          // return u.prenom.toUpperCase().includes(saisi.toUpperCase()) == true
      })
      }
      return []
    }


    selectType.addEventListener("input",function(){
      const us = findDemandeByType(selectType.value);
      const proposesDemandes=document.getElementById('suggestions')
      proposesDemandes.innerHTML=generateAllDemande(us)
    })

    selectStatut.addEventListener("input",function(){
      const us = findDemandeByStatut(selectStatut.value);
      const proposesDemandes=document.getElementById('suggestions')
      proposesDemandes.innerHTML=generateAllDemande(us)
    })

    for(tr of trs){
      tr.addEventListener("mouseover",function(){
    
      })
    }

})





function generateDemande(demande){
  return `
      <tr  data-id="${demande.idd}" onclick="takeUser(this)">
             <td class="p-2">${demande.dated}</td> 
             <td class="p-2">${demande.telephone}</td>
             <td class="p-2">${demande.prenom+' '+demande.nom}</td>
             <td class="p-2">${demande.libtc}</td>
             <td class="p-2">${demande.email}</td>
             <td class="p-2">${demande.statut}</td>
     </tr>
  `
}

function generateAllDemande(Demandes){
  let html=""
  for(const demande of Demandes){
      html+=generateDemande(demande)
  }
  return html
}

// function findDemandeByType(type){
//   let demandesFiltre=[]
//   for(const demande of demandes){
//     if(demande.libtc==type){
//       demandesFiltre.push(demande)
//     }
//     else if(demande.libtc==="All"){
//       demandesFiltre=demandes
//     }
//   }
//   return demandesFiltre
    
// }
function findDemandeByType(type){
  return demandes.filter(demande => demande.libtc === type || type === "All")
}

function findDemandeByStatut(statut){
  return demandes.filter(demande => demande.statut === statut || statut === "All")
}


async function findAllDemandeWithClient(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=demande`);
    const datas=await response.json();
    return datas;
}

