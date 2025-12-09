    <script data-skip-moving="true">
    const supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;

    function loadAssets(assets = []) {
        return new Promise(resolve => {
            let loadedCount = 0;
            const total = assets.length;

            if (total === 0) {
                resolve();
                return;
            }

            assets.forEach(asset => {
            if (asset.type === 'css' && !document.querySelector(`link[href="${asset.url}"]`)) {
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = asset.url;
                link.onload = loaded;
                document.head.appendChild(link);
            } else if (asset.type === 'js' && !document.querySelector(`script[src="${asset.url}"]`)) {
                const script = document.createElement('script');
                script.src = asset.url;
                script.onload = loaded;
                document.body.appendChild(script);
            } else {
                loaded();
            }
            });

            function loaded() {
                loadedCount++;
                if (loadedCount === total) {
                    resolve();
                }
            }
        });
    }

    function initMap() {
        const script = document.createElement('script');
        script.src = 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;';

        const mapEl = document.getElementById('map');
        const contactTitle = 'ConstructPC';
        const caption = 'г. Екатеринбург, ул. Шефская, 4 А';
        if (mapEl) {
            document.body.appendChild(script)
            const point = [56.889646, 60.639920];
        
            script.onload = () => {
                ymaps.ready(function () {
                    var myMap = new ymaps.Map('map', {
                            center: point,
                            zoom: 16,
                            controls: ['zoomControl']
                        }),
                
                        myPlacemark = new ymaps.Placemark(point, {
                            balloonContent: caption,
                            iconCaption: contactTitle
                        }, {
                            preset: 'islands#blueDotIconWithCaption'
                        });
                
                    myMap.geoObjects.add(myPlacemark);
                    myMap.behaviors.disable('scrollZoom');
                });
            };
        }
    }

    let fired = false;

    async function triggerLazyLoad() {
        if (fired) return;
        fired = true;

        initMap();

        await loadAssets([
            { type: 'css', url: 'css/fancybox.css' },
            { type: 'js', url: 'js/fancybox.umd.js' }
        ]);

        Fancybox.defaults.backFocus = false;
        Fancybox.defaults.Hash = false;
        Fancybox.defaults.infinite = false;

        Fancybox.bind("[data-fancybox]", {});
    }

    const lazyEvents = ['mousemove', 'scroll', 'touchstart'];
    lazyEvents.forEach(evt => {
        window.addEventListener(evt, triggerLazyLoad, { once: true });
    });
    </script>

    <script src="js/jquery.min.js" defer></script>
    <script src="js/swiper-bundle.min.js" defer></script>
	<script src="js/script.js<?php echo $dev; ?>" defer></script>