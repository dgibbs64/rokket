	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
    <!--less.js for dev mode
	<script>
		less = {
    		env: "development"
		};
		function destroyLessCache(pathToCss) {
 
			if (!window.localStorage || !less || less.env !== 'development') {
				return;
			}
			var host = window.location.host;
			var protocol = window.location.protocol;
			var keyPrefix = protocol + '//' + host + pathToCss;
			for (var key in window.localStorage) {
				if (key.indexOf(keyPrefix) === 0) {
					delete window.localStorage[key];
				}
			}
		}
		destroyLessCache('/layout/default/less/');
		localStorage.clear();
	</script>
	<script src="/layout/default/js/less.js"></script>
    -->
    <script src="/layout/default/js/alert.js"></script>
	<script src="/layout/default/js/scripts.js"></script>
</body>
</html>