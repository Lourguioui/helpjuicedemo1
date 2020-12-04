const members =[
    {
      lat : 36.73225,
      lng : 3.08786,
      name: "Boulboul Billel",
      icon: "../../img/avatar1.png",
      poste:"DEV"
    },
    {
      lat : 36.73225,
      lng : 3.18746,
      name: "Said Froute",
      icon: "../../img/avatar2.png",
      poste:"RELEX"
    },
    {
      lat : 36.73225,
      lng : 3.28716,
      name: "Djamel Zdeq",
      icon: "../../img/avatar1.png",
      poste:"Comm"
    },
    {
      lat : 36.73225,
      lng : 3.38726,
      name: "Nassim Rdekh",
      icon: "../../img/avatar2.png",
      poste:"Design"
    },
  ]
let map;

function initMap() {
  //Init the Map centeered in Algiers
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 5,
    center: new google.maps.LatLng(36.73225, 3.08746),
    mapTypeId: "roadmap",
    mapTypeControl :false,
    streetViewControl :false,
    mapId: "6205470d7b62da92",
  });
  
  const infowindow = new google.maps.InfoWindow({
    maxWidth: 350
  });
  members.forEach((member)=>{
    let marker ;
    //Creating the content of the Pop-Up
    const content = '<div class="wrapper" >'+
        '<div class="img-area">' + 
              '<div class="inner-area">'+
                  '<img  src="' + member.icon + '" alt="'+member.name+'" />' + 
               '</div>'+
        '</div>'+  
        '<div class="name">'+member.name+'</div>'+
        '<div class="about">  '+member.poste +'</div>'+
        '<div class="btn btn-outline-secondary mt-2">Check Profile</i></div>'+
    '</div>';
    //Create Marker with Member Infos  
    marker =new google.maps.Marker({
        position: new google.maps.LatLng(member.lat, member.lng),
        map,
        icon : {
           url:"../../img/pin.svg", 
           fillColor:'black',
            scale:1,
            strokeColor : "black"
        },
      title:member.name,
      });
      
    marker.addListener("click", ()=>{
        infowindow.setContent(content);
        infowindow.open(map,marker);
        infowindow.setPosition(new google.maps.LatLng(member.lat,member.lng));
      });
    marker =new google.maps.Marker({
      position: new google.maps.LatLng(member.lat, member.lng),
      map,
      icon : {
        url :member.icon,
        scaledSize: new google.maps.Size(50,50),
        origin: new google.maps.Point(0,0), 
        anchor: new google.maps.Point(25, 80) 
      },
      title:member.name,
    });
  });
  google.maps.event.addListener(map, 'click', function() {
    infowindow.close();
  });
  google.maps.event.addListener(map, 'drag', function() {
    infowindow.close();
  });
}