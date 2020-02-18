function setBarWidth(dataElement, barElement, cssProperty, barPercent) {
    var listData = [];
    $(dataElement).each(function() {
      listData.push($(this).html());
    });
    var listMax = Math.max.apply(Math, listData);
    $(barElement).each(function(index) {
      $(this).css(cssProperty, (listData[index] / listMax) * barPercent + "%");
    });
  }
  setBarWidth(".style-1 span", ".style-1 em", "padding-right", 50);
  setBarWidth(".style-2 span", ".style-2 span", "padding-right", 50);
  setBarWidth(".style-3 span", ".style-3 span", "padding-left", 65);
  setBarWidth(".style-4 span", ".style-4 span", "padding-left", 65);
  