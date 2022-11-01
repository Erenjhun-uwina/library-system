let form = document.querySelector("#form")
let acc_type = form.dataset.acc_type
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
    
    if(data == "success") return goto_index()
    invalid_credentials()
}



function invalid_credentials(){
    
    form.reset()
    
    let inputs = form.querySelectorAll("input");

    inputs.forEach(e => {
        e.style.border = "3px solid red";
    });
}

function goto_index(){
    location = "../index/index.php";
}