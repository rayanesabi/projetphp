const images = [
    "images/chocolat.png",
    "images/eclair.jpg",
    "images/chou.jpg",
];

const recette1 = document.getElementById("recette1");
const recette2 = document.getElementById("recette2");
const recette3 = document.getElementById("recette3");

let usedImages = [];

recette1.style.backgroundImage = url(${getRandomImage()});
recette2.style.backgroundImage = url(${getRandomImage()});
recette3.style.backgroundImage = url(${getRandomImage()});

function getRandomImage() {
    let randomImage = images[Math.floor(Math.random() * images.length)];
    while (usedImages.includes(randomImage)) {
        randomImage = images[Math.floor(Math.random() * images.length)];
    }
    usedImages.push(randomImage);
    return randomImage;
}