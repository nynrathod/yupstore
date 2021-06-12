<template>
  <q-layout view="hHh lpR fFf" class="bg-grey-1">
    <q-header elevated class="bg-white text-grey-8 q-pt-sm" height-hint="58">
      <q-toolbar>
        <div class="header_col_1">
          <q-btn flat rounded class="q-py-sm" style="color: rgb(26 127 226)">
            <q-icon name="o_local_mall" size="md" />

            <q-toolbar-title shrink class="text-weight-bold">
              Yup Store
            </q-toolbar-title>
          </q-btn>
          <q-btn
            flat
            dense
            round
            aria-label="Menu"
            icon="menu"
            class="q-ml-sm"
            @click="drawer = !drawer"
          ></q-btn>
        </div>
        <div class="container header_col_2">
          <div class="row no-wrap">
            <q-form class="row no-wrap header-search q-mr-lg">
              <q-input
                v-model="text"
                dense="dense"
                standout="bg-grey-2 text-red"
                flat
                no-shadow
                rounded
                label-color="blue"
                placeholder="Search Your Product Here"
                class="bg-white col search-field"
              >
                <q-btn
                  color="grey-3"
                  rounded
                  flat
                  text-color="grey-8"
                  icon="search"
                  unelevated
                />
              </q-input>
            </q-form>
            <q-space />
            <q-select
              clearable
              filled
              outlined
              dense
              v-model="city"
              behavior="dialog"
              input-debounce="0"
              use-input
              :options="cityoption"
              label="Selct your city"
              label-color="grey"
              transition-show="jump-up"
              transition-hide="jump-up"
              class="country-search q-py-sm"
            />
          </div>
        </div>
        <div
          class="q-gutter-sm header_col_3 row items-center justify-end no-wrap"
        >
          <q-btn round dense flat color="grey-8" icon="o_shopping_cart">
            <q-tooltip>My Cart</q-tooltip>
          </q-btn>
          <q-btn
            rounded
            flat
            label="My Account"
            class="account-div q-py-sm"
            style="color: rgb(26 127 226)"
          >
            <q-avatar size="26px" class="q-ml-md">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png" />
            </q-avatar>
            <q-menu fit class="q-mt-sm">
              <q-list style="min-width: 100px">
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="account_balance" />
                  </q-item-section>
                  <q-item-section>Account</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="storefront" />
                  </q-item-section>
                  <q-item-section>Orders</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="favorite_border" />
                  </q-item-section>
                  <q-item-section>Wishlist</q-item-section>
                </q-item>
                <q-separator />
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="person" />
                  </q-item-section>
                  <q-item-section>Profile</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="settings" />
                  </q-item-section>
                  <q-item-section>Setting</q-item-section>
                </q-item>
                <q-item clickable>
                  <q-item-section avatar>
                    <q-icon name="logout" />
                  </q-item-section>
                  <q-item-section>Logout</q-item-section>
                </q-item>
                <q-separator />
                <q-item clickable>
                  <q-item-section>Help &amp; Feedback</q-item-section>
                </q-item>
              </q-list>
            </q-menu>
          </q-btn>
        </div>
      </q-toolbar>
      <!-- <div class="header-menu q-py-sm">
				<div class="container">
					<div v-if="$q.screen.gt.sm" class="row GL__toolbar-link q-ml-lg text-body2 text-weight-bold row items-center no-wrap header-link">
						<a href="javascript:void(0)" class=""> Electronics</a>
						<a href="javascript:void(0)" class=""> TVs & Appliances</a>
						<a href="javascript:void(0)" class=""> Men</a>
						<a href="javascript:void(0)" class=""> Women</a>
						<a href="javascript:void(0)" class=""> Baby & Kids</a>
						<a href="javascript:void(0)" class=""> Home & Furniture</a>
						<a href="javascript:void(0)" class=""> Sports, Books & More</a>
						<a href="javascript:void(0)" class=""> Flights</a>
						<a href="javascript:void(0)" class="last"> Offer Zone</a>
					</div>
				</div>
			</div> -->
    </q-header>

    <q-page-container>
      <q-page class="q-px-lg">
        <div class="banner">
          <!-- <q-drawer
        v-model="drawer"
        show-if-above

        :mini="!drawer || miniState"
        @click.capture="drawerClick"

        :width="200"
        :breakpoint="500"
        bordered
        content-class="bg-grey-3"
		overlay
      >
        <q-scroll-area class="fit">
          <q-list padding>
            <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="inbox" />
              </q-item-section>

              <q-item-section>
                Inbox
              </q-item-section>
            </q-item>

            <q-item active clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="star" />
              </q-item-section>

              <q-item-section>
                Star
              </q-item-section>
            </q-item>

            <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="send" />
              </q-item-section>

              <q-item-section>
                Send
              </q-item-section>
            </q-item>

            <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="drafts" />
              </q-item-section>

              <q-item-section>
                Drafts
              </q-item-section>
            </q-item>
          </q-list>
        </q-scroll-area>

      				</q-drawer> -->

          <q-carousel
            animated
            v-model="slide"
            navigation
            infinite
            :autoplay="autoplay"
            arrows
            transition-prev="slide-right"
            transition-next="slide-left"
            @mouseenter="autoplay = false"
            @mouseleave="autoplay = true"
            class="q-mt-md"
          >
            <q-carousel-slide
              :name="1"
              img-src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Wireless/Cnnjpp/OnePlus/OnePlus_BAU/GW_week_48/NonHDfc/D18887026_IN_WLD_BAU_OnePlus_Family_DesktopHero_1500x600._CB414551624_.jpg"
            />
            <q-carousel-slide
              :name="2"
              img-src="https://rukminim1.flixcart.com/flap/3376/560/image/8ba86e3de139e43f.jpg?q=50"
            />
            <q-carousel-slide
              :name="3"
              img-src="https://rukminim1.flixcart.com/flap/3376/560/image/d7a78a7bd2c5373e.jpg?q=50"
            />
            <q-carousel-slide
              :name="4"
              img-src="https://rukminim1.flixcart.com/flap/3376/560/image/398e6e2cbf96c97b.jpg?q=50"
            />
            <q-carousel-slide
              :name="5"
              img-src="https://rukminim1.flixcart.com/flap/3376/560/image/e5d7d1abace9b6f4.jpg?q=50"
            />
            <q-carousel-slide
              :name="6"
              img-src="https://rukminim1.flixcart.com/flap/3376/560/image/1c48cc36bd8904c1.jpg?q=50"
            />
          </q-carousel>
        </div>

        <div class="q-my-md">
			<div class="map shadow-2">
				<q-form class="row no-wrap header-search map-form q-mr-lg">
					<q-input
						v-model="text2"
						
						standout="bg-grey-2 text-red"
						flat
						no-shadow
						label-color="blue"
						placeholder="Search Your Product Here"
						class="bg-white col search-field"
					/>
					<q-btn
						color="grey-3"
						flat
						text-color="grey-8"
						icon="tune"
						unelevated
						class="absolute advance-filter"
					/>	
					<div class="row map-field">
						<span>Area Within</span>
						<q-input 
							v-model="text3"
							flat
							
							placeholder="0 Km"
						/>
					</div>
					<q-btn
						color="grey-3"
						flat
						text-color="grey-8"
						icon="search"
						unelevated
					/>
            	</q-form>
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7381.999198337121!2d73.16975867677347!3d22.315854916576942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8b0d1d96b7b%3A0x58a04bbe95a81681!2sAlkapuri%2C%20Vadodara%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1606974512441!5m2!1sen!2sin"
					width="100%"
					height="450"
					frameborder="0"
					style="border: 0"
					allowfullscreen=""
					aria-hidden="false"
					tabindex="0"
				></iframe>
			</div>
        </div>

        <div class="q-mt-lg shadow-1">
          <h5
            class="q-pb-md q-ma-none q-pa-md q-mb-md text-bold carousel_heading"
          >
            Suggested for you
          </h5>
          <div class="row wrap q-pa-md">
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
          </div>
        </div>

        <div class="q-mt-lg shadow-1">
          <h5
            class="q-pb-md q-ma-none q-pa-md q-mb-md text-bold carousel_heading"
          >
            Top Deals
          </h5>
          <div class="row wrap q-pa-md">
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
          </div>
        </div>

        <div class="q-mt-lg shadow-1">
          <h5
            class="q-pb-md q-ma-none q-pa-md q-mb-md text-bold carousel_heading"
          >
            Trending Products
          </h5>
          <div class="row wrap q-pa-md">
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
            <q-card
              class="my-card q-pa-md col-sm-6 col-md-4 col-lg-2 col-xl-2 no-shadow cursor-pointer"
            >
              <q-img
                src="https://rukminim1.flixcart.com/image/312/312/kekadu80/mobile/d/q/b/infinix-smart-4-plus-x680d-original-imafv7tqb45uunex.jpeg"
                class="row justify-center q-mx-auto q-my-md"
                width="100px"
              />

              <q-card-section>
                <div class="row no-wrap items-center">
                  <div class="col text-subtitle1 ellipsis">
                    Infinix Smart 4 Plus (Quetzal Cyan, 32 GB)
                  </div>
                </div>
                <div class="text-caption text-grey">
                  3 GB RAM | 32 GB ROM | Expandable Upto 256 GB | 17.32 cm (6.82
                  inch) HD+ Display
                </div>

                <q-rating v-model="stars" :max="5" size="20px" />
              </q-card-section>
            </q-card>
          </div>
        </div>
      </q-page>
    </q-page-container>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>



<script>
export default {
  data() {
    return {
      city: null,
	  text: "",
	  text2: "",
	  text3: "",
      cityoption: ["Admedabad", "Vadodara", "Rajkot", "Surat", "Anand"],
      slide: 1,
      autoplay: true,
      stars: 4,
      drawer: false,
      miniState: false,
      center: { lat: 20.7937, lng: 78.3629 },
      zoom: 4,
    };
  },
  methods: {
    drawerClick(e) {
      // if in "mini" state and user
      // click on drawer, we switch it to "normal" mode
      if (this.miniState) {
        this.miniState = false;

        // notice we have registered an event with capture flag;
        // we need to stop further propagation as this click is
        // intended for switching drawer to "normal" mode only
        e.stopPropagation();
      }
    },
  },
};
</script>



<style lang="stylus">
	.header-search {
	min-width: 100px;
	width: 70%;
	}

	.country-search {
	max-width: 170px;
	width: 100%;
	}

	.account-div {
	min-width: 170px;
	max-width: 170px;
	}

	.q-field--standout .q-field__control:before {
	opacity: 0 !important;
	}

	.q-field--standout .q-field__control {
	box-shadow: unset !important;
	}

	.search-field input {
	color: rgba(0, 0, 0, 0.87) !important;
	}

	.q-field--float .q-field__append + .q-field__append {
	display: none;
	}

	.container {
	max-width: 1440px;
	width: 100%;
	margin: auto;
	}

	.header_col_1 {
	max-width: 250px;
	min-width: 250px;
	}

	.header_col_3 {
	max-width: 250px;
	min-width: 250px;
	}

	.header-link a {
	color: #222;
	text-decoration: none;
	}

	.heaer-link a:not(.last) {
	margin-right: 80px;
	}

	.carousel_heading {
	border-bottom: 1px solid #eee;
	}

	.my-card:hover {
	box-shadow: 0 7px 17px 0 rgba(23, 84, 116, 0.18) !important;
	}

	.q-carousel__slide {
	background-position: top;
	}

	.banner {
	position: relative;
	}
	.map .search-field input { padding-left: 70px; }
	.map .q-field--standout .q-field__control { padding-left: 0; border-radius: 0; background: #fff; }
	.map-form {
		background: #fff;
		width: 100%;
	}
	.map .q-field--standout .q-field__control {
		
	}
	.map-field { align-items: center; padding: 0 10px; }
	.map-field span { padding-right: 10px; color: rgba(0, 0, 0, 0.55) !important; }
	.map iframe { margin-bottom: -6px; }
	.advance-filter { top: 0; bottom: 0; }
</style>