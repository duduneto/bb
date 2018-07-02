
const imageOfCardService = document.getElementsByClassName('image-of-service');
for (let index = 0; index < imageOfCardService.length; index++) {
    const element = imageOfCardService[index];
    
    element.getElementsByTagName('IMG')[0].classList.add('card-img-top');
    element.getElementsByTagName('IMG')[0].classList.add('rounded-circle');
    element.getElementsByTagName('IMG')[0].classList.add('my-img');
}

const textOfCardService = document.getElementsByClassName('conteudo-card');
for (let index = 0; index < textOfCardService.length; index++) {
    const element = textOfCardService[index];
    element.getElementsByTagName('P')[0].classList.add('card-text');
    
}

const imgBanner = document.getElementById('banner-1').getElementsByTagName('IMG');
for (let index = 0; index < imgBanner.length; index++) {    
    imgBanner[index].classList.add('img-');
}