const selectCat = document.getElementById('select-cat-post');
const headerBtn = document.getElementById('header-btn');
selectCat.addEventListener('change', function(){
    if(selectCat.value === 'Header'){
        if(headerBtn.style.display === 'none'){
            headerBtn.style.display = 'block';
        }
    }else{
        headerBtn.style.display = 'none';
    }
})
