/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

const liSidebar = document.querySelectorAll(
  "ul.sidebar-menu li:not(.menu-header)"
);
const linkPage = window.location.href;
const liLink = document.querySelectorAll("ul.sidebar-menu li a");
for (let i = 0; i < liLink.length; i++) {
  if (liLink[i] == linkPage) {
    liSidebar[i].setAttribute("class", "active");
  }
}

function goBack() {
  window.history.back();
}
