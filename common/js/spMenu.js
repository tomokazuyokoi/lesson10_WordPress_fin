var gMenu = document.getElementsByClassName('g_menu')[0];
var openMenu = document.getElementsByClassName('menu_open')[0];
var addOpenClass = 'open';

//
openMenu.addEventListener('click', function() {
    if(gMenu.classList.contains(addOpenClass)) {
        gMenu.classList.remove(addOpenClass);
        this.firstChild.setAttribute('src', '/rcu/wp-content/themes/RCU-DESIGN/common/img/menu_open.png');
    }
    else {
        gMenu.classList.add(addOpenClass);
        this.firstChild.setAttribute('src', '/rcu/wp-content/themes/RCU-DESIGN/common/img/menu_close.png');
    }
}, false);
