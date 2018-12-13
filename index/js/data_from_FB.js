 // creating a list of POIs from FB
 $(document).ready(function() { //script starts working after all html is uploaded

     // calling DB
     var database = firebase.database();

     // reading from DB and setting into a list
     database.ref('places/').on('value', function(snapshot) {
         var statusHTML = '<!-- list of POIs  -->';
         snapshot.forEach(function(childSnap) {
             var id = childSnap.key;
             var imgLink = childSnap.child("img-link").val();
             var title = childSnap.child("title").val();
             var infoShort = childSnap.child("info-short").val();
             statusHTML += '<a href=\"#' + id + '\"><div data-aos="fade-up" data-aos-duration="1500"><div class="card mb-2">';
             statusHTML += '<img class="card-img-top" src="' + imgLink + '" alt=\"' + title + '\"><div class="card-body">';
             statusHTML += '<p class "card-title">';
             statusHTML += title;
             statusHTML += '</p>';
             statusHTML += '<p class="card-text-two">' + infoShort + '</p>';
             statusHTML += '</div></div></div></a>';
         }); // end of foreach
         $('#PoiList').html(statusHTML); //sending info to the card
     }); //end read

     // reading from DB and creating POIS
     database.ref('places/').on('value', function(snapshot) {
         var statusHTML = '<!-- Start of pages with POIs -->';
         //  var navbar = '(index/navbar.html)'.val();
         var menu = [
             '<div data-role="footer" data-position="fixed" class="menu">',
             '<div data-role="navbar">',
             '<ul><li><a href="#map" data-transition="fade"><div class="glyphicon glyphicon-map-marker"></div><br><br>MAP</a></li>',
             '<li><a href="#tour" data-transition="fade"><div class="glyphicon glyphicon-align-justify"></div><br><br>TOUR</a></li>',
             '<li><a href="#info" data-transition="fade"><div class="glyphicon glyphicon-info-sign"></div><br><br>INFO</a></li></ul>',
             '</div><!-- /navbar --></div>'
         ].join('');

         var navbar = [
             '<div data-role="header">',
             '<button onclick="goBack()" data-transition="flip">',
             '<span class="glyphicon glyphicon-chevron-left"></span>',
             '</button>',
             '</div><!-- /header -->'
         ].join('');

         snapshot.forEach(function(childSnap) {
             var id = childSnap.key;
             var title = childSnap.child("title").val();
             var adress = childSnap.child("adress").val();
             var infoFull = childSnap.child("info-full").val();
             var imgLink = childSnap.child("img-link").val();
             statusHTML += '<div data-role="page" data-transition="slideup" id="' + id + '" data-theme="a">';
             statusHTML += navbar;
             statusHTML += '<div data-role = "ui-content" data-theme = "a">';
             statusHTML += '<img class="card-img-top" src="' + imgLink + '" alt=\"' + title + '\"><div class="card-body">';
             statusHTML += '<h2>';
             statusHTML += title;
             statusHTML += '</h2>';
             statusHTML += '<p class="card-text-two">' + infoFull + '</p></br>';
             statusHTML += '<p class="adress font-italic">Adress: </br>' + adress + '</p>';
             statusHTML += '</div></div>';
             statusHTML += menu;
             statusHTML += '</div>';

         }); // end of foreach
         $('body').append(statusHTML); //inserting ready HTML code into body

     });
 }); //end ready

 // sedning navigation back to previous page
 function goBack() {
     window.history.back();
 }