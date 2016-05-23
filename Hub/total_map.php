<!DOCTYPE html>

<script>
    var device1Loc = {lat: (-27.5033), lng: 153.1001};
    var device2Loc = {lat: (-27.5115), lng: 153.0317};
    var device3Loc = {lat: (-27.5372), lng: 153.0783};
    var deviceLoc = [device1Loc, device2Loc, device3Loc];
    
    function initTotalMap() {
        var map = new google.maps.Map(document.getElementById('total-map'), {
            center: {lat: -27.4710, lng: 153.0234},
            zoom: 10
        });

        for (var i = 0; i < deviceLoc.length; i++) {
            var marker = new google.maps.Marker({
                position: deviceLoc[i],
                map: map,
                title: 'A'
            });
        }
    }
      
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initTotalMap" async defer></script>
