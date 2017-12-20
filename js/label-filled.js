var inputs = document.querySelectorAll('input');
var labels = document.querySelectorAll('label');
var textarea = document.querySelector('textarea');
inputs.forEach(inpt => inpt.addEventListener("change", function checkInputs(e) {
    if (this.value != "") {
        this.parentNode.getElementsByTagName('label')[0].classList.add("label-filled");
    } else {
        this.parentNode.getElementsByTagName('label')[0].classList.remove("label-filled");
    }
}))
textarea.addEventListener("change", function() {
    checkTextarea();
})
window.addEventListener("load",  function() {
    checkTextarea();
})

function checkTextarea(){
    if (textarea.value != "") {
        labels[3].classList.add("label-filled-textarea");
    } else {
        labels[3].classList.remove("label-filled-textarea");
    }
}