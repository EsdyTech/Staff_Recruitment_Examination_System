<div id="slider_container_1">

				<div id="SliderName" style="margin-left:5px">

					
						
					
						
					
					<img src="../images/ogitech1.jpg" width="800" height="160" />
					
					<img src="../images/ogitech3.jpg" width="800" height="160"/>
					
					<img src="../images/ogitech4.jpg" width="800" height="160"/>
                    <img src="../images/ogitech2.jpg" width="800" height="160"/>
                    <img src="../images/ogitech1.jpg"  width="800" height="160"/>
					
						<img src="../images/ogitech1.jpg" width="800" height="160" />
					
                        <img src="../images/ogitech3.jpg" width="800" height="160"/>
					
                    <img src="../images/ogitech4.jpg" width="800" height="160"/>
                    <img src="../images/ogitech4.jpg"  width="800" height="160"/>
					
						
					
                    <img src="../images/ogitech3.jpg" width="800" height="160"/>

					
				</div>
                
                <div class="c"></div>
				<div id="SliderNameNavigation"></div>
				<div class="c"></div>
                 <script type="text/javascript">

					// we created new effect and called it 'demo01'. We use this name later.
					Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: true, order: 'straight_stairs'});

					var demoSlider = Sliderman.slider({container: 'SliderName', width: 770, height: 160, effects: 'demo03',
					display: {
						pause: true, // slider pauses on mouseover
						autoplay: 3000, // 3 seconds slideshow
						always_show_loading: 200, // testing loading mode
						description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
						loading: {background: '#ffffff', opacity: 0.2, image: '../img/loading.gif'}, // loading box settings
						buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
						navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
					}});
					</script>

	</div>
        