const sginBtn = document.querySelector('.connect');
const sgupBtn = document.querySelector('.signup');
const sginForm = document.querySelector('.signinform');
const sgupForm = document.querySelector('.signupform');

const menu = document.querySelector('.menu-hamb');

function close(fermer) {
        fermer.addEventListener('click', (e) =>{
            e.preventDefault;
            alert('Mandeha');
            sginBtn.className = 'btn';
            sgupBtn.className = 'btn';
            sginForm.style.display = 'none';
            sgupForm.style.display = 'none';
    })
}

sginBtn.addEventListener('click', (e)=>{
    e.preventDefault;
    sginBtn.className = 'btn active';
    sgupBtn.className = 'btn';
    sginForm.style.display = 'grid';
    sgupForm.style.display = 'none';
    const fermer = document.querySelector('.fermer');
    close(fermer)
})
sgupBtn.addEventListener('click', (e)=>{
    e.preventDefault;
    sginBtn.className = 'btn';
    sgupBtn.className = 'btn active';
    sginForm.style.display = 'none';
    sgupForm.style.display = 'grid';
})

menu.addEventListener('click', (e) => {
    e.preventDefault;
    alert('ALALALALALA');

})
