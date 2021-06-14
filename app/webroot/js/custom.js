"use strict";

$("#itemSearch").click((e) => {
    e.preventDefault();
    if ($("#search-input").val() && $("#search-input").val() !== undefined) {
        window.location.href = '/products?search=' + $("#search-input").val();
    }
  });
