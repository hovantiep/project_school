loop: Boolean; if set to true, allows the user to navigate between the first and last images of a Slimbox gallery, when there is more than one image to display. Default is false.
overlayOpacity: The level of opacity of the background overlay. 1 Is opaque, 0 is completely transparent. You can change the color in the CSS file. Default is 0.8.
overlayFadeDuration: The duration of the overlay fade-in and fade-out animations, in milliseconds. Set it to 1 to disable the overlay fade effects. Default is 400.
resizeDuration: The duration of the resize animation for width and height, in milliseconds. Set it to 1 to disable resize animations. Default is 400.
resizeEasing: The name of the easing effect that you want to use for the resize animation (jQuery Easing Plugin required). Many easings require a longer execution time to look good, so you should adjust the resizeDuration option above as well. Default is jQuery’s built-in default easing, "swing".
initialWidth: The initial width of the box, in pixels. Default is 250.
initialHeight: The initial height of the box, in pixels. Default is 250.
imageFadeDuration: The duration of the image fade-in animation, in milliseconds. Set it to 1 to disable this effect and make the image appear instantly. Default is 400.
captionAnimationDuration: The duration of the caption animation, in milliseconds. Set it to 1 to disable it and make the caption appear instantly. Default is 400.
counterText: Text value; allows you to customize, translate or disable the counter text which appears in the captions when multiple images are shown. Inside the text, {x} will be replaced by the current image index, and {y} will be replaced by the total number of images. Set it to false (boolean value, without quotes) or "" to disable the counter display. Default is "Image {x} of {y}".
closeKeys: An array of key codes of the keys to press to close Slimbox. Default is [27, 88, 67] which means Esc (27), “x” (88) and “c” (67).
previousKeys: An array of key codes of the keys to press to navigate to the previous image. Default is [37, 80] which means Left arrow (37) and “p” (80).
nextKeys: An array of key codes of the keys to press to navigate to the next image. Default is [39, 78] which means Right arrow (39) and “n” (78).
Example of a custom options object, including french translation:

{
    overlayOpacity: 0.6,
    resizeEasing: "easeOutElastic",
    captionAnimationDuration: 1,
    counterText: "Image {x} sur {y}",
    closeKeys: [27, 70],
    nextKeys: [39, 83]
}