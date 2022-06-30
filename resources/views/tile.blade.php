<x-dashboard-tile :position="$position">
    @if(!empty($url))
        <div class="grid grid-rows-auto-1 gap-2 h-full js-iframe-wrapper">
            <iframe src="{{$url}}"></iframe>
        </div>
        <script>
            window.addEventListener('load', (event) => {
                iframeFixSize()
            });

            let IframeTimeOutFunctionId;
            window.addEventListener("resize", function () {
                clearTimeout(timeOutFunctionId);
                IframeTimeOutFunctionId = setTimeout(iframeFixSize, 500);
            });

            /**
             * Set iframe size full height and width
             */
            function iframeFixSize() {
                document.querySelectorAll('.js-iframe-wrapper').forEach(node => {
                    const frame = node.querySelector("iframe");
                    frame.height = node.offsetHeight;
                    frame.width = node.offsetWidth;
                })
            }

        </script>
    @else
        No valid url parameter is given
    @endif
</x-dashboard-tile>
