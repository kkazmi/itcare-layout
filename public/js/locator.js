
 function loadScript(src,callback){
  
    var script = document.createElement("script");
    script.type = "text/javascript";
    if(callback)script.onload=callback;
    document.getElementsByTagName("head")[0].appendChild(script);
    script.src = src;
  }
  
  var map;
  var searchlatitide, searchlongitude;
  loadScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyDg8yqOd9uv89_VmzPHkG-ieRu7E7MpIZk&libraries=places&callback=initialize',
              function(){log('google-loader has been loaded, but not the maps-API ');});
    var flag = true;
   var mapLocations = '';
   $(document).on('focus','.custommapsearch',function(e){
    if(e.originalEvent !== undefined){
      $(this).removeClass('custommapsearch');
      setTimeout(function() { $('#pac-input').focus();}, 1000);
      //searchfunction();
    }
   });
   var directionsDisplay;
   function searchfunction(locations, lat, lng, zoom, showlocation){
      if($('#pac-input').length==0){
         $('.googleMapsPlaceholder').prepend("<input id='pac-input' class='controls custommapsearch' type='text' placeholder='Enter a location'>");
       }
      
      directionsDisplay = new google.maps.DirectionsRenderer();
      $('#pac-input').removeClass('hide');
      //flag = false;
      var input = (document.getElementById('pac-input')); 
            if(!searchlatitide){
               user_latitude = getCookie('user_latitude');
               user_longitude = getCookie('user_longitude');   
             }else{
               user_latitude = searchlatitide;
               user_longitude = searchlongitude;
             }
            
           
         //googleMap(locations, lat, lng, zoom, 0);
         mapCanvas = document.getElementById('map');
         map = new google.maps.Map(mapCanvas, {
            zoom: zoom,
            center: new google.maps.LatLng(user_latitude, user_longitude),
            mapTypeId: google.maps.MapTypeId.ROADMAP
         });
         directionsDisplay.setMap(map);
         directionsDisplay.setOptions( { suppressMarkers: true } );
      
         if(locations != ''){
            var marker, i;
            for (i = 0; i < locations.length; i++) {  
               marker = new google.maps.Marker({
                  position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                  map: map,
                  icon: new google.maps.MarkerImage('/public/images/locator-tip.png'),
                  animation: google.maps.Animation.DROP
               });
               
               new google.maps.Marker({
                  position: new google.maps.LatLng(user_latitude, user_longitude),
                  map: map,
                  icon: new google.maps.MarkerImage('/public/images/my-location.png'),
                  animation: google.maps.Animation.DROP
               });
               
               if(showlocation == 1 && lat == locations[i][1] && lng == locations[i][2]){
            addInfoWindowDefault(marker, locations[i][5],locations[i][4]);
            
            //calcRoute(lat, lng);
            var directionsService = new google.maps.DirectionsService();
            var start = new google.maps.LatLng(user_latitude, user_longitude);
            var end = new google.maps.LatLng(lat, lng);
            
            var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.DRIVING
              };
              directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                  directionsDisplay.setDirections(response);
                  directionsDisplay.setMap(map);
                } else {
                  alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                }
              });
         }
            addInfoWindow(marker, locations[i][5],locations[i][4]);
            }
         } else {
            new google.maps.Marker({
               position: new google.maps.LatLng(user_latitude, user_longitude),
               map: map,
               icon: new google.maps.MarkerImage('/public/images/my-location.png'),
               animation: google.maps.Animation.DROP
            });
         }
         
        //var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
           searchlatitide = place.geometry.location.lat();
           searchlongitude = place.geometry.location.lng();
           getRoLocator(Number(searchlatitide),Number(searchlongitude),5);
          if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(false);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });
   }
   function initialize() {
    
      if(getCookie('user_latitude') === "" && getCookie('user_longitude') === "") {
          defaultMap(25.593684,78.962880,4,0);
      }
      var myVar = setInterval(function(){
         var user_latitude = getCookie('user_latitude');
         var user_longitude = getCookie('user_longitude');
         if(user_latitude !== "" && user_longitude !== "") {
            clearInterval(myVar);
            getRoLocator(user_latitude,user_longitude,5);
         }
      }, 1000);

  }

function log(str){
 // document.getElementsByTagName('pre')[0].appendChild(document.createTextNode('['+new Date().getTime()+']\n'+str+'\n\n'));
}

   var roError = 'No Oxigen Retail Outlet found near you.';
   var maxRadius = 25;
//===========================================================
   // Show defaut map...
   function defaultMap(lat, lng,zoom,showMarker){
      var mapCanvas = '';
      if($("#map").length > 0){
         mapCanvas = document.getElementById('map');    
      }
      var map = new google.maps.Map(mapCanvas, {
         zoom: zoom,
         center: new google.maps.LatLng(lat, lng),
         mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      
      if(showMarker == 1){
         var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lng),
            map: map,
            icon: new google.maps.MarkerImage('/public/images/my-location.png'),
            animation: google.maps.Animation.DROP
         });
      }
      $("#search-radius").addClass('hide');
      $(".map-loader").addClass('hide');
      $(".ro-listing").addClass('hide');
      $('.ro-status').removeClass('hide');
      $('.ro-records').html(roError);
   }
   
   /* Image onError
   */
   function imagenotfound(obj){
      $(obj).attr('src','/public/images/pic.jpg');
   }
   var currentTime = '';
   
   (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
   
   
   // Get locators details...
   function getRoLocator(lat, lng,radius) {
      
      //_default_key = "12345678900987654321";         
      //mdn_val = CryptoJS.AES.encrypt(JSON.stringify(mdn), _default_key, {format: CryptoJSAesJson}).toString();
      // var mdn_val = '9654049335';
      var zoom = 12;
      if(radius>=15){
         zoom = 11;
      } else if(radius>=20){
         zoom = 10;
      } 
      $("#search-radius").attr('disabled','disabled');
      $(".map-loader").removeClass('hide');
      $.ajax({
         url: '/rolocator/index/get-locator',
         method: 'get',
         data: {
             lat: lat, lng: lng, radius:radius},
         error: function () {
         },
         success: function (data) {
            //console.log("data"+data);
            if(data){
               result = $.parseJSON(data);
               currentTime = result.currentTime;
             if(result.data){
               $("#search-radius").removeAttr('disabled');
               $(".map-loader").addClass('hide');
                 var str = '';
                 var loc = [];
                 var cntRetailer = 0;
                  //if(result.data.ro_collection.ROCollection.RO){ // if ro > 0
                  if(result.data.host_code == '0'){   
                     $.each(result.data.ro_collection.ROCollection.RO, function(index, imageInfo) {
                        _ROLatitude = Number(imageInfo.ROLatitude);
                        _ROLongitude = Number(imageInfo.ROLongitude);
                        
                        loc.push([imageInfo.RetailerName,_ROLatitude,_ROLongitude,index,imageInfo.Address,imageInfo.MobilePOC]);
                        _mobile = '';
                        var mobStr = '', shopStatus = '', shopStatusCls = '', mobileNo = '';
                        if(imageInfo.MobilePOC &&  imageInfo.MobilePOC.length > 0){
                           mobileNo = imageInfo.MobilePOC;
                           mobStr = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 red"><i class="sprite phone"></i>'+imageInfo.MobilePOC+'</div>';
                        }
                        
                        var roImage = '';
                        if(imageInfo.Image != null && imageInfo.Image.length > 0){
                           roImage = imageInfo.Image;
                        } else {
                           roImage = '/public/images/no-img-locator.png';
                        }
                        
                        if(imageInfo.Timing != null && imageInfo.Timing.length > 0){
                           mobStr += '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><i class="sprite time"></i>'+imageInfo.Timing+'</div>';
                           var res = imageInfo.Timing.split("TO");
                           
                           var time = currentTime;
                           var from = comparetime(res[0]);
                           var to = comparetime(res[1]);
                           
                           if(from<time && to>time){
                              shopStatus = 'Open';
                              shopStatusCls = 'green';
                           }else{
                              shopStatus = 'Closed';
                              shopStatusCls = 'red';
                           }               
                        }
                        var latlng = window.location.origin+'/rolocator/index/ro?q='+_ROLatitude+','+_ROLongitude+'/';
                        // Email content
                        var subject = 'Exciting Offers at Oxigen Retail Store Near You!';
                        var msgbody = 'Hey, \nThis is so exciting! I just availed an amazing offer at an Oxigen Retail Store. Why don\'t you check one out for yourself?';
                        var body = msgbody+" Here are the details of a store nearby: \n ";
                        body +='\nStore Name: '+imageInfo.RetailerName;
                        body +='\nAddress: '+imageInfo.Address;
                        body +='\nMobile No.: '+mobileNo;
                        body +='\nLink to RO location on OW/ Google Maps: '+latlng;
                        body += "\n\nMany such exciting offers and services are also available on their Website and App. Visit the website at www.oxigen.com.\n\n";
                        var mailbody = 'subject='+subject+'&body='+encodeURIComponent(body);
                        var fbImg = '&picture='+window.location.origin+'/public/images/fb-image.png';
                        fbImg += '&title='+subject;
                        fbImg += '&description='+encodeURIComponent(msgbody);
                        
                        var share = '<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 share-location"><i class="sprite share-icon"></i>Share<span class="location-share">';
                        share += '<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?sdk=joey&u='+latlng+fbImg+'&display=popup&ref=plugin&src=share_button">Share</a>';
                        share += '<a href="mailto:?'+mailbody+'" data-latlng="'+latlng+'" class="google-plus share-mail" title="Google Plus">google-plus</a>';
                        share += '<a href="https://twitter.com/intent/tweet?text='+latlng+'" target="_blank" class="twitter" title="Twitter">twitter</a></span></div>';
                        //share
                        
                        str += '<div class="retail-location">';
                        str += '<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mar-bottom">';
                        str += '<div class="image"><img src="'+roImage+'" alt="" class="img-responsive" onError="imagenotfound(this)" /></div>';
                        str += '</div>';
                        str += '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 address">';
                        str += '<h3>'+imageInfo.RetailerName+'</h3>';
                        str += '<div class="row">';
                        str += '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Shop No.: '+imageInfo.Address+'</div>';
                        str += mobStr;
                        str += share;
                        str += '<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><i class="sprite distance-icon"></i>'+imageInfo.Distance+'</div>';
                        str += '<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-geo="'+_ROLatitude+'@@'+_ROLongitude+'"><a href="javascript:void(0);" class="cls"><i class="sprite map"></i>View on Map</a></div>';
                        str += '</div>';
                        str += '</div>';
                        str += '<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-right '+shopStatusCls+'"><i class="sprite shop"></i>'+shopStatus+'</div>';
                        str += '</div>';
                        cntRetailer++;
                     });
                     $("#list-view").removeClass('hide');
                     $(".ro-listing").removeClass('hide').html(str);
                     $('.ro-status').addClass('hide');
                     mapLocations = loc;
                     /* Call google map
                      *Author: Sunil Kumar
                      * params: locations, latitude, longitude, zoom, show address default 
                     */
                     //googleMap(loc, _ROLatitude, _ROLongitude, zoom, 0);

                    // if($('#pac-input').length==0){
                    //  $('.googleMapsPlaceholder').prepend("<input id='pac-input' class='controls custommapsearch' type='text' placeholder='Enter a location'>")
                    //}
                    if(flag){
                      searchfunction(loc, _ROLatitude, _ROLongitude, zoom, 0);
                    }
                    
                  } else {
                     
                    if(flag){
                      searchfunction(loc, _ROLatitude, _ROLongitude, zoom, 0);
                    }
                     
                     _latitude = getCookie('user_latitude');
                     _longitude = getCookie('user_longitude');
                     //defaultMap(_latitude,_longitude,zoom,1);
                     $("#search-radius").removeClass('hide');
                     $(".ro-listing").addClass('hide');
                     $('.ro-status').removeClass('hide');
                     $('.ro-records').html(roError);
                     if(radius >= maxRadius){
                        $("#search-radius").attr('disabled','disabled');
                     }
                  } // End no ro condition...
               }
            }
         }
      });
   }

   /* Increase Search Radius
    * Author: Sunil Joshi
    * Date: June 21, 2016
   */
   
   $(document).on('click','#search-radius',function(){
      var extRadius = $("#total-radius").html();
      var totRadius = ( parseInt(5) + parseInt(extRadius));
      $("#total-radius").html(totRadius);
      var lat = getCookie('user_latitude');
      var lng = getCookie('user_longitude');
      $(".map-view").trigger('click');
      $("#map").html('');
      getRoLocator(lat, lng, totRadius);
   });

   function comparetime(time){
      var timeinformat;
      if(time.indexOf('AM')>0){
         timeinformat = time.replace('AM','')+":00";
      }else{
         var to = time.replace('PM','');
         var hour = 12+parseInt(to.split(':')[0]);
         timeinformat = hour+":"+to.split(':')[1]+":00";
      }
      timeinformat.trim();
      return timeinformat;
   }
   // locations, latitude, longitude, zoom, showlocation = 1 : show location by default
   /* initialize google map
   
   */
   //var directionsDisplay;
   //function googleMap(locations, lat, lng, zoom, showlocation){
   //
   //   directionsDisplay = new google.maps.DirectionsRenderer();
   //   var user_latitude , user_longitude;
   //   if(!searchlatitide){
   //     user_latitude = getCookie('user_latitude');
   //     user_longitude = getCookie('user_longitude');   
   //   }else{
   //     user_latitude = searchlatitide;
   //     user_longitude = searchlongitude;
   //   }
   //   var mapCanvas = '';
   //   if($("#map").length > 0){
   //      mapCanvas = document.getElementById('map');    
   //   }
   //   var map = new google.maps.Map(mapCanvas, {
   //      zoom: zoom,
   //      center: new google.maps.LatLng(lat, lng),
   //      mapTypeId: google.maps.MapTypeId.ROADMAP
   //   });
   //   directionsDisplay.setMap(map);
   //   directionsDisplay.setOptions( { suppressMarkers: true } );
   //   
   //   var marker, i;
   //   for (i = 0; i < locations.length; i++) {  
   //      marker = new google.maps.Marker({
   //         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
   //         map: map,
   //         icon: new google.maps.MarkerImage('/public/images/locator-tip.png'),
   //         animation: google.maps.Animation.DROP
   //      });
   //      
   //      
   //      new google.maps.Marker({
   //         position: new google.maps.LatLng(user_latitude, user_longitude),
   //         map: map,
   //         icon: new google.maps.MarkerImage('/public/images/my-location.png'),
   //         animation: google.maps.Animation.DROP
   //      });
   //      
   //      
   //      if(showlocation == 1 && lat == locations[i][1] && lng == locations[i][2]){
   //         addInfoWindowDefault(marker, locations[i][5],locations[i][4]);
   //         
   //         //calcRoute(lat, lng);
   //         
   //         var directionsService = new google.maps.DirectionsService();
   //         var start = new google.maps.LatLng(user_latitude, user_longitude);
   //         var end = new google.maps.LatLng(lat, lng);
   //         
   //         var request = {
   //             origin: start,
   //             destination: end,
   //             travelMode: google.maps.TravelMode.DRIVING
   //           };
   //           directionsService.route(request, function(response, status) {
   //             if (status == google.maps.DirectionsStatus.OK) {
   //               directionsDisplay.setDirections(response);
   //               directionsDisplay.setMap(map);
   //             } else {
   //               alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
   //             }
   //           });
   //         
   //         
   //         
   //         //==========
   //         //addInfoWindowDefault(marker, locations[i][5],locations[i][4]);
   //      } //else {
   //         addInfoWindow(marker, locations[i][5],locations[i][4]);
   //      //}
   //   }
   //   $(".locate-message").removeClass('hide');  
   //}

   var infoWindows = [];
    function addInfoWindow(marker, mobile, address) {
      if(mobile != ''){
         if(mobile==null)
            mobile = 'Not Availiable';
         mobile = "<div class='map-phone'><small>Mobile Number</small>"+mobile+"</div>";
      }
      var infoWindow = new google.maps.InfoWindow({
         content: (mobile+"<div class='map-address'><small>Address</small>"+address+"</div>")
      });
      infoWindows.push(infoWindow);
      
      google.maps.event.addListener(marker, 'click', function () {
         closeAllInfoWindows();
         infoWindow.open(map, marker);
      });
    }
    
   function closeAllInfoWindows() {
      for (var i=0;i<infoWindows.length;i++) {
         infoWindows[i].close();
      }
   }

    function addInfoWindowDefault(marker, mobile, address) {
      
      if(mobile != ''){
         if(mobile==null)
            mobile = 'Not Availiable';
         mobile = "<div class='map-phone'><small>Mobile Number</small>"+mobile+"</div>";
      }
      var infoWindow = new google.maps.InfoWindow({
         content: (mobile+"<div class='map-address'><small>Address</small>"+address+"</div>")
      });
      infoWindows.push(infoWindow);
      closeAllInfoWindows();
      infoWindow.open(map, marker);
    }


   $(document).on('click','.cls',function(){
      var that = $(this);
      $("#map").html('');
      $(".map-view").trigger('click');
      
      setTimeout(function(){
         var geos = that.parents('div').attr("data-geo");
         geos = geos.split('@@');
         searchfunction(mapLocations,geos[0],geos[1], 13, 1);
         //googleMap(mapLocations,geos[0],geos[1], 13, 1);
      }, 500);
      $('body,html').animate({scrollTop:0},'slow');
   });
   
   // Get cookies
   function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
         var c = ca[i];
         while (c.charAt(0) == ' ') {
            c = c.substring(1);
         }
         if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
         }
      }
      return "";
   }

   
   