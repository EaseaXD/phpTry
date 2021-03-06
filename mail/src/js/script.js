

document.addEventListener('DOMContentLoaded',function(){
const form = document.getElementById('form');
form.addEventListener('submit',formSend);

async function formSend(e){
    e.preventDefaut();
    
    let error = formValidate(form);
}

function formValidate(form){
    let error = 0;
    let formReq = document.querySelectorAll('._req');

    for(let index = 0; index < formReq.length; index++){
        const input = formReq[index];
        formRemoveElement(input);

        if(input.classList.contains('_email')){
            if(emailTest(input)){
                formAddError(input);
                error++;
            }
        } else if(input.getAttribute("type") === "checkbox" && input.checked === false){
            formAddError(input);
            error++;
        }else{
            if(input.value === "") {
                formAddError(input);
                error++;
            }
        }
        
    }
}

function formAddError(input){
    input.parentElement.classList.add('_error');
    input.classList.add('_error');

}
function formRemoveElement(input){
    input.parentElement.classList.remove("_error");
    input.classList.remove('_error');
}
function emailTest(input) {
    return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(input.value);
}

});