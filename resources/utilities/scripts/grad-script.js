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

function toggleContent(id){
    let parent = document.getElementById(id);
    parent.firstElementChild.classList.toggle("course-dropdown-heading");
    parent.lastElementChild.classList.toggle("course-dropdown-content");
}
