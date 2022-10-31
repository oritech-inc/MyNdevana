<script>
    $('#about-link').mouseover(function(e) {
        e.preventDefault()
        $(this).removeClass('animate__infinite btn-dark').addClass('btn-outline-dark').html('<i class="fa-solid fa-arrow-down-long fa-2x mx-1"></i>')
    });

    $('#about-link').mouseleave(function(e) {
        e.preventDefault()
        $(this).addClass('animate__infinite btn-dark').removeClass('btn-outline-dark').html('<i class="fa-solid fa-arrows-up-down fa-2x mx-1"></i>')
    });
</script>
