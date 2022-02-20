/**
 * 
 * @component Drawer Menu
 * 
 * @description
 * Display UX element to show and hide drawer navigation.  We assume the menu
 *  has already been placed on the HTML page; we add the button and attach event 
 *  listeners that toggle a class on the menu container to show/hide it.
 * 
 * HTML structure (drawer) --|  These are sibling elements
 *    HTML Element <nav id="drawer">
 *    HTML Element <div id="wrapper">
 * 
 * HTML structure (menu toggle button) --| 
 *    
 * 
 * 
 */
(function() {


  let drawer, button, state = "closed";

  function init() {
    drawer = document.getElementById("drawer");
    button = document.getElementById("drawer-toggle-button");
    button.addEventListener("click",toggleDrawer);
  }
  

  domReady(init);


  // Add or remove the menu-open class on the drawer,
  // Thereby showing the menu or, alternatively, closing it.
  function toggleDrawer() {
    console.log("Toggling...");
    nextState = state == "closed" ? "open" : "closed";
    // if the drawer's classList includes the value drawer-open,
    // then close it by removing the class, thereby hiding it.
    // Note: the default state of the drawer element should be hidden.

    // otherwise, add the drawer-open class so it displays.

    drawer.classList.add("sidenav-mobile-open");


    if(nextState == "open") {
      button.innerHTML = "&times;";
    } else if(nextState == "closed") {
      button.innerHTML = "&#9776;";
    }


    state = nextState;
    // document.getElementById("menu-toggle").onclick = closeNav;  
  }







/*
  window.addEventListener("resize",() =>{
    if(document.body.clientWidth > 800){
      document.getElementById("menu").classList.remove("sidenav-mobile-open");
      menu.innerHTML = "&#9776;";
      document.getElementById("menu-toggle").onclick = openNav; 
    }
  });
*/

  window.addEventListener("load",function(){
    // addMenuButton();

    /*
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    */
  });


  /*
  function addLinks(links) {

    let sublinks = links.filter(function(link){

      return link["isSublink"] == true;
    });

    let topLevelLinks = links.filter(function(link){

      return link["isSublink"] != true;
    });

    addSublinks(sublinks);
    addTopLevelLinks(topLevelLinks);
  }

  function addSublinks(links) {

    for(var i = 0; i < links.length; i++){

      var link = links[i];

      var parentLink = document.getElementById(link["parentLinkId"]);

      if(parentLink == null) {
        console.error("There is no parent link with the id '" + link["parentLinkId"] + "' for '" + link["label"] + "'");
      }

      if(parentLink.lastChild.tagName == "UL") {
        
        var ul = parentLink.lastChild;
        
      } else {
        
        var ul = document.createElement("ul");
        var isNewUL = true;
      }

      var a = document.createElement("a");
      a.setAttribute("href", link["href"]);
      a.innerHTML = link["label"];

      var li = document.createElement("li");
      li.appendChild(a);
      ul.appendChild(li);

      if(isNewUL) parentLink.appendChild(ul);
    }
  }


  function addTopLevelLinks(links) {

    var sidebarLinks = document.getElementById("sidebar-links");

    for(var i = 0; i < links.length; i++){

      var li = document.createElement("li");
      li.classList.add("side-menu-item");

      var a = document.createElement("a");
      a.setAttribute("href", links[i]["href"]);

      a.innerHTML = links[i]["label"];

      li.appendChild(a);

      console.log(li);
    
      sidebarLinks.appendChild(li);
    }
  }
  */



})();