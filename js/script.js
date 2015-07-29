/* 
 * 
 * all javascript inside the unnamed function pls, and use $ instead of jQuery here. 
 * 
 * variables from php given by Wordpress in functions.php:
 *
 * var gMaps_APIkey;  // API key used for google maps
 * var cInfo;         // array, stores all the contact data
 */
var mobileMenu;

(function($) {

    $(document).ready(function() {
       
        formExpand();

        mobileMenu = new MobileMenu('main_navigation', '.mobile_menuToggle');
    	

    });
    function formExpand(){
        $('.expand_form_btn').click(function(){
            $(this).toggleClass('active');
            $('.form_holder').toggleClass('active');
        });
    }
    // all mobile menu functions
    function MobileMenu(menuwrapperID, mobileMenuToggleButtonID) {

        var _this = this;

        this.init = function() {
            $(mobileMenuToggleButtonID).click(_this.toggleMobileVisibility);
            $('.sub-menu').click(_this.openSubMenu);
            $('.sub-menu *').click(function(e) {
                e.stopPropagation();
            });
        }

        this.toggleMobileVisibility = function() {
            $('#' + menuwrapperID).toggleClass('hideMenuMobile');
        }

        this.openSubMenu = function() {
            $(this).children('li').toggleClass('show');
            $(this).toggleClass('show');
        }

        this.init();
    }


})(jQuery);
	
 	// all maps functions
    function GoogleMaps() {
        var _this = this;

        // returns google maps latLng coordinates from the given adress
        this.geocode = function(adres, postcode, canvas, markerLabel, render) {

            if (typeof render == undefined) {
                render = false;
            }

            maps_address = adres.replace(' ', '+');
            maps_poscode = postcode.replace(' ', '');

            $.get('https://maps.googleapis.com/maps/api/geocode/json?address=' + adres + '+' + postcode + '&key=' + MAPS_API_KEY, function(data) {
                var location = data.results[0].geometry.location;
                // if render, renders the map in the given canvas.
                if (render) {
                    _this.renderMap(canvas, location.lat, location.lng, markerLabel);
                }
                // if not rendering, returns the lat, lon coordinates as a obj.
                else {
                    return location;
                }

            });
        }

        // renders the map
        this.renderMap = function(canvas, lat, lng, markerLabel) {
            var map;
            var marker_location = new google.maps.LatLng(lat, lng);

            var roadAtlasStyles = [{
                featureType: "all",
                elementType: "all",
                stylers: [{
                    saturation: -100
                }]
            }];

            var mapOptions = {
                zoom: 15,
                center: marker_location,
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas'],
                },
                scrollwheel: false,
                disableDefaultUI: true
            };

            map = new google.maps.Map(document.getElementById(canvas),
                mapOptions);

            var marker = new google.maps.Marker({
                position: marker_location,
                map: map,
                title: markerLabel
            });

            var usRoadMapType = new google.maps.StyledMapType(
                roadAtlasStyles, {});

            map.mapTypes.set('usroadatlas', usRoadMapType);
            map.setMapTypeId('usroadatlas');

        }
    }