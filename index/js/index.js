
let add_user = document.querySelector('#add_user');
let add_staff = document.querySelector('#add_staff');
let user_form_con = document.querySelector('#user_regis')
let user_form = document.querySelector("#user_regis form")

let validating = false


//validation :: USER 
user_form.addEventListener("submit",async (ev)=>{
    ev.preventDefault()

    if (validating)return
    validating = true
    let fdata = new FormData(form);
    fdata.append("acc_type","user")
    await register_person(fdata)
    
    validating = false
    console.log(fdata)
});


async function register_person(form){

    let data = await fetch("",{
        method:"post",
        body:form
    });

    data = await data.text()

    if(data == "success")return display_regis_succes()
    display_error_message(data)
}

function display_error_message(){

}

function display_regis_succes(){
    user_form.reset()
    user_form_con.click()
}

//animation shit
user_form_con.addEventListener("transitionend", () => {
    console.log("animationend");

    if (user_form_con.style.opacity == "1") return
    user_form_con.style.display = "none"
})


add_user.onclick = () => {
    user_form_con.style.display = "block"
    user_form_con.style.opacity = "1"
}

user_form_con.onclick = (ev) => {
    if (ev.target != user_form_con) return
    user_form_con.style.opacity = "0"
}