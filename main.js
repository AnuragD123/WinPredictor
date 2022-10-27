navbar = document.getElementById('navbar');

window.addEventListener('scroll',function (){
    if(window.scrollY>20 ){
        navbar.classList.add('scrolled');
        
    }else{
        navbar.classList.remove('scrolled');

    }
})

bars = document.getElementById('bars');
close = document.getElementById('close');
hamburgerMenu = document.getElementById('hamburger-menu');
bars.addEventListener('click',function (){
    hamburgerMenu.classList.add('active');
    close.classList.add('active');
    bars.classList.remove('active');
    
})

close.addEventListener('click',function (){
    hamburgerMenu.classList.remove('active');
    close.classList.remove('active');
    bars.classList.add('active');
    
})
