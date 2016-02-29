videoEmbedCode = (typeof url !== 'undefined') ? url : 'k_ID2tUR5fI';

// Load the Google SAPI scripting
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
    
function onYouTubeIframeAPIReady() {

    var videoOptions = {
        height: '100%',
        width: '100%',
        videoId: videoEmbedCode,
        playerVars: {
            fs: 0,
            modestbranding: 1,
            rel: 0,
            showinfo: 0
        },
        events: {
            'onReady': onPlayerReady
        }
    };

    player = new YT.Player('player', videoOptions);


}

function onPlayerReady(event) {
    
}
