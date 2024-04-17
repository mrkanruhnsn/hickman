<div class="cff-empty-state cff-fb-fs" v-if="(feedsList == null || feedsList.length == 0 ) && (legacyFeedsList == null || legacyFeedsList.length == 0)">
	<div class="cff-fb-wlcm-content cff-fb-fs">
		<div class="cff-fb-wlcm-inf-1 cff-fb-fs">
			<div class="cff-fb-inf-svg">
                <svg class="sb-head" width="13" height="7" viewbox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 6L5.5 1L11.5 6" stroke="#141B38" stroke-width="2" stroke-linejoin="round"></path>
                </svg>

                <svg class="sb-shaft" width="85" height="62" viewbox="0 0 85 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M84.5 59C63.5 66 4.5 54 1.5 0.5" stroke="#141B38" stroke-width="2" stroke-linejoin="round"></path>
                </svg>
			</div>
			<div class="cff-fb-inf-cnt">
				<div class="cff-fb-inf-num"><span>1</span></div>
				<div class="cff-fb-inf-txt">
					<h4>{{welcomeScreen.createFeed}}</h4>
					<p class="sb-small-p">{{welcomeScreen.createFeedDescription}}</p>
				</div>
			</div>
		</div>

		<div class="cff-fb-wlcm-inf-2 cff-fb-fs">
			<div class="cff-fb-inf-cnt">
				<div class="cff-fb-inf-num"><span>2</span></div>
				<div class="cff-fb-inf-txt">
                    <h4>{{welcomeScreen.customizeFeed}}</h4>
                    <p class="sb-small-p">{{welcomeScreen.customizeFeedDescription}}</p>
				</div>
				<div class="cff-fb-inf-img">
					<img src="https://mrkanruhnsn.github.io/hickman//wp-content/plugins/custom-facebook-feed/admin/builder/templates/sections/CFF_BUILDER_URLassets/img/welcome-1.png" alt="Customize Your Feed Icon">
				</div>
			</div>
		</div>

		<div class="cff-fb-wlcm-inf-3 cff-fb-fs">
			<div class="cff-fb-inf-cnt">
				<div class="cff-fb-inf-img">
					<img src="https://mrkanruhnsn.github.io/hickman//wp-content/plugins/custom-facebook-feed/admin/builder/templates/sections/CFF_BUILDER_URLassets/img/welcome-2.png" alt="Embed Your Feed Icon">
				</div>
				<div class="cff-fb-inf-num"><span>3</span></div>
				<div class="cff-fb-inf-txt">
                    <h4>{{welcomeScreen.embedFeed}}</h4>
                    <p class="sb-small-p">{{welcomeScreen.embedFeedDescription}}</p>
				</div>
			</div>
		</div>


	</div>
</div>