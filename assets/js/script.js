let url = window.location.href;
let navAbout = document.querySelector('.nav-about');
let navProjects = document.querySelector('.nav-projects');
let navContact = document.querySelector('.nav-contact');

if (url.includes('index.html')) {
    navAbout.setAttribute('class', 'border');
    navProjects.removeAttribute('class', 'border');
    navContact.removeAttribute('class', 'border');
}
if (url.includes('projects.html')) {
    navAbout.removeAttribute('class', 'border');
    navProjects.setAttribute('class', 'border');
    navContact.removeAttribute('class', 'border');
}
if (url.includes('contact.html')) {
    navAbout.removeAttribute('class', 'border');
    navProjects.removeAttribute('class', 'border');
    navContact.setAttribute('class', 'border');
}