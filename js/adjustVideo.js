var iframeEl = $('iframe');
for (let index = 0; index < iframeEl.length; index++) {
    var element = iframeEl[index];
    element.classList.add('embed-responsive-item');
    
}
// $("<div id='wrap-video' class='container'></div>").insertBefore(iframeEl[0]);
// iframeEl[0].appendChild($('#wrap-video'));
$('iframe').wrap("<div id='wrap-video' class='embed-responsive embed-responsive-16by9' ></div>");