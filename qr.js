
let qrinput= document.querySelector("#text")
let btn = document.querySelector("button")
let qrimg= document.querySelector("#qr-img")
// console.log(qrimg)

btn.addEventListener("click",()=>{
    let value = qrinput.value.trim();
    qrimg.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${value}`
    // qrinput.value ="";
})