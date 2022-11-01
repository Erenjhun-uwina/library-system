
let add_user = document.querySelector('#add_user');
let add_staff = document.querySelector('#add_staff');

let user_form_con = document.querySelector('#user_regis')
let user_form = document.querySelector("#user_regis form")

let staff_form_con = document.querySelector('#staff_regis');
let staff_form = document.querySelector('#staff_regis form')

let validating = false


//validation :: USER 
user_form.addEventListener("submit",async (ev)=>{
    ev.preventDefault()

    if (validating)return
    validating = true
    let fdata = new FormData(user_form);
    fdata.append("acc_type","user")
    await register_person(fdata)
    
    validating = false
    console.log(fdata)
});


//validation :: STAFF
staff_form.addEventListener("submit",async (ev)=>{
    ev.preventDefault()

    if (validating)return
    validating = true
    let fdata = new FormData(staff_form);
    fdata.append("acc_type","staff")
    await register_person(fdata)
    
    validating = false
    console.log(fdata)
});


async function register_person(form){

    let data = await fetch("../includes/createUser.inc.php",{
        method:"post",
        body:form
    });

    data = await data.text()

    if(data == "success")return display_regis_succes()
    display_error_message(data)
}

function display_error_message(data){
    user_form.reset()
    user_form.style.border = "3px solid red"
    alert("something went wrong.\n"+ data )
}

function display_regis_succes(){
    user_form.reset()
    user_form.style.border = "3px solid green"
    alert("success")
    // user_form_con.click()
}

//events
user_form.onclick = ()=>{
    remove_border(user_form)
}

staff_form.onclick = ()=>{
    remove_border(staff_form)
}

user_form_con.addEventListener("transitionend", () => {
    display_none(user_form_con)
})


add_user.onclick = () => {
    hide_form(user_form_con)
}

user_form_con.onclick = (ev) => {
    show_form(user_form_con,ev)
}

staff_form_con.addEventListener("transitionend", () => {
    display_none(staff_form_con)
})


add_staff.onclick = () => {
    hide_form(staff_form_con)
}

staff_form_con.onclick = (ev) => {
    show_form(staff_form_con,ev)
}



//animation shit

function remove_border(elem){
    if(elem.style.border == "none")return
    elem.style.border = "none"
}

function display_none(elem){
    if (elem.style.opacity == "1") return
    elem.style.display = "none"
}

function show_form(elem,ev){
    if (ev.target != elem) return
    elem.style.opacity = "0"
}

function hide_form(elem){
    elem.style.display = "block"
    elem.style.opacity = "1"
}
