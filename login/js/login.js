

let form = document.querySelector("#form")
let acc_type = form.dataset.acc_type
let submit = document.querySelector("#submit")
let validating = false

form.addEventListener("submit",async (ev)=>{
    ev.preventDefault()

    if (validating)return
    validating = true
    let fdata = new FormData(form);
    fdata.append("acc_type",acc_type)

    await login(fdata)
    validating = false
    console.log(fdata)
});



async function login(fdata) {
    
    let data = await fetch("../includes/login.inc.php",{
        method:"POST",
        body:fdata
    });

    data = await data.text()


    console.log(data);
}