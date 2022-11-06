
let change_pass_con = document.querySelector('#change_pass')
let change_pass_form = document.querySelector('#change_pass form')
let change_pass_btn = document.querySelector('#update_pass')



change_pass_con.addEventListener("transitionend", () => {
    display_none(change_pass_con)

})

change_pass_btn.onclick = () => {
    show_form(change_pass_con)
}

change_pass_con.onclick = (ev) => {
    hide_form(change_pass_con, ev)
}

 


change_pass_con.addEventListener("submit", async (ev) => {
    ev.preventDefault()

    if (change_pass_form.validating || !change_pass_con.valid) return
    change_pass_form.validating = true

    let data = await fetch('../includes/updatePass.inc.php', {
        method: 'post',
        body: new FormData(change_pass_form)
    })
    data = await data.text()
    change_pass_form.validating = false

    if(data == "success"){
        alert("success")
       change_pass_con.style.opacity = 0
        return
    }
    alert("something went wrong:"+data)
    change_pass_form.reset()
    change_pass_form.style.border = "4px solid red"
});



let confirm_pass_input = document.getElementsByName('confirm_pass')[0]
let new_pass_input =  document.getElementsByName('new_pass')[0]

 

confirm_pass_input.oninput = ()=>{

    if(new_pass_input.value=="")return
    change_pass_con.valid = (new_pass_input.value == confirm_pass_input.value);

    if (change_pass_con.valid) {
        return change_pass_form.style.border = "4px solid green"
    }
    change_pass_form.style.border = "4px solid red"
}


new_pass_input.oninput = ()=>{

    if(confirm_pass_input.value=="")return

    change_pass_con.valid = (new_pass_input.value == confirm_pass_input.value);
    if (change_pass_con.valid) {
        return change_pass_form.style.border = "4px solid green"
    }
    change_pass_form.style.border = "4px solid red"
}

