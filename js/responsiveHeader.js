let imgHeader = document.getElementById('img-section-header-1');
let imgResp = document.getElementById('img-resp');
let welcomeMsg = document.getElementById('welcome-msg');


function verifyResponsivity(){
    console.log('verifying...');
    if(screen.width <= 767){
        imgHeader.style.display = 'none';
        imgResp.style.display = 'block';

    }else if(screen.width>767){
        imgHeader.style.display = 'block';
        imgResp.style.display = 'none';
    }
}
verifyResponsivity();

window.addEventListener("orientationchange", function() {
    verifyResponsivity();
});