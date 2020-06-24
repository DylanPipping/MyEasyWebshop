function Function(images) {
    var expandImg = document.getElementById("expandedImage");
    var imgText = document.getElementById("imgText");
    expandImg.src = images.src;
    imgText.innerHTML = images.alt;
    expandImg.parentElement.style.display = "block";
}