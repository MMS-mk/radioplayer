<!DOCTYPE html>
<html lang="mk-MK">
<!-- ТРАЈЧЕ ГОГОВ - tg@speedtest.mk -->
<head>
    <meta charset="utf-8">
    <title>Радио Мрежа Канал 77 - Веб Плеер</title>
    <meta name="description" content="Слушај Радио Мрежа Канал 77 во Живо - Само Хитови">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="theme-color" content="#dadada">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta property="og:url" content="https://radio.kanal77.mk/index.php">
    <meta property="og:title" content="Радио Мрежа Канал 77 - Веб Плеер">
    <meta property="og:site_name" content="Слушај Радио Мрежа Канал 77 во Живо - Само Хитови">
    <meta property="og:description" content="Радио Плеер на Канал 77 - слушај го Канал 77 во Живо - Само Хитови">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="2080734365498786" />
    <meta property="og:image" content="https://radio.kanal77.mk/facebook.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="dns-prefetch" href="https://itunes.apple.com" />
    <link rel="dns-prefetch" href="https://live.kanal77.com.mk" />
    <link rel="dns-prefetch" href="https://kanal77.mk/" />
    <link rel="dns-prefetch" href="https://api.vagalume.com.br" />
    <link rel="icon" type="image/png" href="https://kanal77.mk/wp-content/uploads/2019/02/cropped-k77favico-180x180.png" />
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z17JDJTBQT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z17JDJTBQT');
</script>
</head>

<body>
    <div class="cover-site">
        <div id="bgCover"></div>
        <div class="bg-mask"></div>
    </div>
    <main>
        <section id="player">
            <div class="container">
                <div class="row web-player">
                    <div class="col-12 col-lg-10">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <div class="cover-album">
                                    <div id="currentCoverArt"></div>
                                    <div class="watermark"></div>
                                </div>
                            </div>
                            <div class="col-12 ml-md-auto col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="info-current-song">
                                            <h2 id="currentSong" class="current-song text-uppercase">...</h2>
                                            <h3 id="currentArtist" class="current-artist text-captalize">...</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="play-pause col-12 col-md-2 text-center">
                                                <i id="playerButton" class="fa fa-play" onclick="togglePlay()"></i>
                                            </div>
                                            <div class="col-12 col-md-10 text-center">
                                                <div class="row volume-control">
                                                    <div class="volume-icon col-1"><i class="fa fa-volume-up"></i></div>
                                                    <div class="volume-slide col-10 text-center"><input type="range" id="volume"
                                                            step="1" min="0" max="100" value="80"></div>
                                                    <div class="percentual-volume col-12">Јачина <span id="volIndicator">...</span>%</div>
                                                </div>
                                                </div>
                                           <!-- <div class="col-12 text-center call-lyrics">
                                                <a href="#" class="lyrics" style="" data-target="   ">Текст од песната</a>
                                            </div>
                                        <p></p> -->
                                            <!-- <div class ="col-12 text-center">
                                               <p>Апликацијата е сеуште во тест Фаза така да доколку забележете некој пропуст (се извинуваме).</p>
                                            </div> -->
                                          <!-- <div class="col-12 text-center">
                                                <div class="fb-share-button" 
                                                data-href="https://radio.kanal77.mk/index.php" 
                                                data-layout="button_count">
                                                </div><br />
                                                <a href="https://twitter.com/intent/tweet?screen_name=Kanal77&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @Kanal77</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                <div> -->
                                                <!-- <p>Водител во моментот - Анѓела Пингова</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row historic">
                    <div class="col-12">
                        <h2>Веќе емитувани песни</h2>
                        <div class="row" id="historicSong">
                            <article class="col-12 col-md-6">
                                <div class="cover-historic"></div>
                                <div class="music-info">
                                    <div class="song">Се вчитува ...</div>
                                    <div class="artist">се вчитува...</div>
                                </div>
                            </article>
                            <article class="col-12 col-md-6">
                                <div class="cover-historic"></div>
                                <div class="music-info">
                                    <div class="song">Се вчитува...</div>
                                    <div class="artist">се вчитува...</div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Табела за песни -->
    <div class="modal fade" id="modalLyrics" tabindex="-1" role="dialog" aria-labelledby="lyricsSong" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lyricsSong">Текст</h5>
                    <button type="button" style="color: #fff" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="text-center"><a href="#" target="_blank" rel="noopener"></a><br />
                    Изработено од <a href="mailto:t.gogov@kanal77.com.mk" target="_blank" rel="noopener">Трајче Гогов</a></div>
                <div class="modal-body" id="lyric"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Затвори</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="config.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type='text/javascript'>(function(){ if( window.localStorage ){ if ( !localStorage.getItem('firstLoad') ){ localStorage['firstLoad'] = true; window.location.reload(); } else localStorage.removeItem('firstLoad'); } })();</script>
</body>

</html>
