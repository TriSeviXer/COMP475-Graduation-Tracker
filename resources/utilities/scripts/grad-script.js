let breadCrumbs = [];

function prevForm(curr){
    let currForm = document.getElementById(curr);
    currForm.style.display = "none";

    let prevForm = breadCrumbs.pop();
    prevForm.style.display = "";

}

function nextForm(curr, next){

    let currForm = document.getElementById(curr);
    currForm.style.display = "none";

    let nextForm = document.getElementById(next);
    nextForm.style.display = "";

    breadCrumbs.push(currForm);

}

function nextFieldset(curr, next){

    let currForm = document.getElementsByClassName(curr);
    currForm.style.display = "none";

    let nextForm = document.getElementsByClassName(next);
    nextForm.style.display = "";

}

/**
 * Toggles the content of a heading.
 * @param {String} id 
 */
function toggleContent(id){
    let parent = document.getElementById(id);
    parent.classList.toggle("collapsed");
}

/**
 * Opens a dialog box within the browser window.
 * @param {String} id 
 */
function toggleDialog(id){
    let dialog = document.getElementById(id);
    dialog.classList.toggle("collapsed");
}