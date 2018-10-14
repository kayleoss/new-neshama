// This software must not be distributed, sold, or copied. All rights reserved Katie Liu

$(document).ready(() => {
  wow = new WOW({mobile: false});
  wow.init();
  $('.carousel').carousel({
  interval: 3000
});
  $(function() {
    $("#no-results-dialog").dialog({
      modal: true,
      resizable: true,
      autoOpen: false,
      width: 700,
      height: 400,
      top: 100,
      Cancel: function() {
        $(this).dialog("close");
      }
    });
  });

  const services = [
    {
      name: "Acupuncture",
      page: "/pages/tcm.php"
    },
    {
      name: "Cosmetic Acupuncture",
      page: "/pages/tcm.php"
    },
    {
      name: "Traditional Chinese Medicine - TCM",
      page: "/pages/tcm.php"
    },
    {
      name: "Registered Massage Therapy - RMT",
      page: "/pages/rmt.php"
    },
    {
      name: "Cupping Therapy",
      page: "/pages/tcm.php"
    },
    {
      name: "Shiatsu",
      page: "/pages/tcm.php"
    },
    {
      name: "Tui Na",
      page: "/pages/tcm.php"
    },
    {
      name: "Tuina",
      page: "/pages/tcm.php"
    },
    {
      name: "Reiki",
      page: "/pages/tcm.php"
    },
    {
      name: "Reflexology",
      page: "/pages/tcm.php"
    }
  ];

  $("#search-button").on('click', function() {
    let search_term = $("input[name='search-input']").val().toLowerCase();
    let results = services.filter(service => service.name.toLowerCase().includes(search_term));
    if (results.length < 1) {
      $("#no-results-dialog p").html("Your search has returned no results. ");
      $('#no-results-dialog').dialog("open");
    } else {
      $("#no-results-dialog > p").html("");
      results.map(service => {
        $('#no-results-dialog > p').append("<a style='border-bottom: 2px solid rgba(0, 82, 155, 0.95)' href='" + service.page + "' class='text-light' target='_blank'>" + service.name + " </a><br>");
      });
      $("#no-results-dialog").dialog("open");
    }
  });

});
