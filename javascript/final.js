
window.onload = function(){
    document.getElementById("thumbnails").addEventListener("click", function(e){


    var image_title = event.target.title;
    var fig_caption = document.getElementById("featured").getElementsByTagName("figcaption")[0];
    var new_source = old_source.replace("small", "medium");
    var image = document.getElementById("featured").getElementsByTagName("img")[0];
    fig_caption.innerHTML = image_title;
    fig_caption.style.transition = "1s";
    image.src = new_source;
    image.title = image_title;
    document.getElementById("featured").addEventListener("mouseover", hover);
    document.getElementById("featured").addEventListener("mouseout", fadeover);

    });

    function hover(event){
        document.getElementById("featured").getElementsByTagName("figcaption")[0].style.opacity = 0.8;

    }

    function fadeover(event){
        document.getElementById("featured").getElementsByTagName("figcaption")[0].style.opacity = 0;
    }
}
