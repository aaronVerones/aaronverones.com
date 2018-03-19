function featuredProject(type) {
    switch (type) {
        case "embedded":
            $('.project-showcase').hide();
            $('#feature-embedded').show();
            break;
        case "web":
            $('.project-showcase').hide();
            $('#feature-web').show();
            break;
        default:
        break;

    }
}

$(document).ready(function() {
    $('.featured-project-trigger').click(function() {
        $('.featured-project-trigger').removeClass('active');
        featuredProject($(this).data('feature'));
        $(this).addClass('active');
    });
});
