const defaultFile = 'https://www.shutterstock.com/image-vector/default-ui-image-placeholder-wireframes-600nw-1037719192.jpg';

const file = document.getElementById('TxtFile1');
const img  = document.getElementById('img1');

file.addEventListener('change', e => {
    if (e.target.files[0]) {
        const reader = new FileReader();
        img.src = 'https://pbs.twimg.com/media/E0blUlBXMAg_TJW.png';

    }else {
        img.src = defaultFile;
    }

});