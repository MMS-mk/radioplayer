/*
|--------------------------------------------------------------------------
| Конфигурација на сктирптата - Trajce Gogov
|--------------------------------------------------------------------------
|
| За да го конфигурирате стримот треба да ги промените овие сетинзи
|
*/

var settings = {
    'radio_name': 'Kanal77', // името на радио станицата
    'url_streaming': 'https://radio.kanal77.mk:8002', // од каде го зима 7.html
    //'url_streaming' : 'https://streamingv2.shoutcast.com/radio-kanal-77'
    'url_streaming2': 'https://live.kanal77.com.mk:8089/acc', // од каде го пушта аудио стримот
    //'url_streaming2': 'https://radio.kanal77.mk:8002/;' // Shoutcast Streaming Backup
    'streaming_type': 'shoutcast', // вид на стимот
    'api_key': 'cae6a7d0071ec26ee581082dc65eefdf', // клуч за апито
    'historic': true,
    'next_song': false, // се користи само е shoutcast за да ја прикаже следната песна што иде
    'default_cover_art': 'img/bg-capa.png', // позадинска слика на песните што неможат да се препознаат
};

const RADIO_NAME = settings.radio_name;
const URL_STREAMING = settings.url_streaming;
const URL_STREAMING2 = settings.url_streaming2;
const STREAMING_TYPE = settings.streaming_type;
const API_KEY = settings.api_key;
const HISTORIC = settings.historic;
const NEXT_SONG = settings.next_song;
const DEFAULT_COVER_ART = settings.default_cover_art;
