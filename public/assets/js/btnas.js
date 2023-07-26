$(document).ready(function() {
    // Mostrar la primera pestaña y el primer botón seleccionados por defecto
    var $tabs = $("#myTabContent > div");
    var $buttons = $(".tab-estaciones button");

    $tabs.first().removeClass("hidden");
    $buttons.first().addClass("selected");

    // Función para mostrar la pestaña siguiente
    function showNextTab() {
    var $visibleTab = $("#myTabContent > div:not(.hidden)");
    var $visibleButton = $(".tab-estaciones button.selected");

    $visibleTab.addClass("hidden");
    $visibleButton.removeClass("selected");

    var $nextTab = $visibleTab.next();
    var $nextButton = $visibleButton.parent().next().find("button");

    if ($nextTab.length === 0) {
    $nextTab = $tabs.first();
    $nextButton = $buttons.first();
}

    $nextTab.removeClass("hidden");
    $nextButton.addClass("selected");

    // Actualizar el atributo aria-selected para el tab seleccionado
    $buttons.attr("aria-selected", "false");
    $nextButton.attr("aria-selected", "true");

    // Actualizar el <li> correspondiente al tab activo en el <ul>
    var selectedTabIndex = $buttons.index($nextButton);
    $(".tab-estaciones").removeClass("active");
    $(".tab-estaciones").eq(selectedTabIndex).addClass("active");

    // Desplazar el scroll para mostrar el tab seleccionado en la vista
    var tabContainer = $("#myTab");
    var scrollOffset = $nextButton.offset().left - tabContainer.offset().left;
    tabContainer.scrollLeft(scrollOffset);
}

    // Función para mostrar la pestaña anterior
    function showPreviousTab() {
    var $visibleTab = $("#myTabContent > div:not(.hidden)");
    var $visibleButton = $(".tab-estaciones button.selected");

    $visibleTab.addClass("hidden");
    $visibleButton.removeClass("selected");

    var $prevTab = $visibleTab.prev();
    var $prevButton = $visibleButton.parent().prev().find("button");

    if ($prevTab.length === 0) {
    $prevTab = $tabs.last();
    $prevButton = $buttons.last();
}

    $prevTab.removeClass("hidden");
    $prevButton.addClass("selected");

    // Actualizar el atributo aria-selected para el tab seleccionado
    $buttons.attr("aria-selected", "false");
    $prevButton.attr("aria-selected", "true");

    // Actualizar el <li> correspondiente al tab activo en el <ul>
    var selectedTabIndex = $buttons.index($prevButton);
    $(".tab-estaciones").removeClass("active");
    $(".tab-estaciones").eq(selectedTabIndex).addClass("active");

    // Desplazar el scroll para mostrar el tab seleccionado en la vista
    var tabContainer = $("#myTab");
    var scrollOffset = $prevButton.offset().left - tabContainer.offset().left;
    tabContainer.scrollLeft(scrollOffset);
}

    // Botón "Siguiente"
    $(".btn-next").on("click", function() {
    showNextTab();
});

    // Botón "Anterior"
    $(".btn-prev").on("click", function() {
    showPreviousTab();
});

    // Al hacer clic en un botón de tabulación, mostrar la pestaña correspondiente
    $buttons.on("click", function() {
    var target = $(this).attr("data-tabs-target");
    $tabs.addClass("hidden");
    $(target).removeClass("hidden");
    $buttons.removeClass("selected");
    $(this).addClass("selected");

    // Actualizar el atributo aria-selected para el tab seleccionado
    $buttons.attr("aria-selected", "false");
    $(this).attr("aria-selected", "true");

    // Actualizar el <li> correspondiente al tab activo en el <ul>
    var selectedTabIndex = $buttons.index($(this));
    $(".tab-estaciones").removeClass("active");
    $(".tab-estaciones").eq(selectedTabIndex).addClass("active");

    // Detener el evento click para evitar conflictos
    return false;
});
});