$(document).ready(function(e) {
    alert('123');

    const image = document.getElementById('image');
    const cropper = new Cropper(image, {
        aspectRatio: 6 / 4,
        crop(event) {
            console.log(event.detail.x);
            console.log(event.detail.y);
            console.log(event.detail.width);
            console.log(event.detail.height);
            console.log(event.detail.rotate);
            console.log(event.detail.scaleX);
            console.log(event.detail.scaleY);
        },
    });
});