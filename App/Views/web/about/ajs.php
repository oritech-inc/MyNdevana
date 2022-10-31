<script>
    $('.card-link').mouseover(function(e){
        var id = $(this).attr('data-id')
        cardAnim('over', id);
        $(this).addClass('border-opacity-10')
    });
    $('.card-link').mouseleave(function(e){
        var id = $(this).attr('data-id')
        cardAnim('leave', id);
        $(this).removeClass('border-opacity-10')
    });

    $('.card-link').click(function(e){
        e.preventDefault()
        var id = $(this).attr('data-id');

        if(id == 'vision'){
            $('#md-sm-icon').addClass('fa-binoculars').removeClass('fa-rocket fa-star');
            $('#md-sm-text').html('VISIONS');
            $('#vision-info').removeAttr('hidden');
        }
        else if(id == 'values'){
            $('#md-sm-icon').addClass('fa-star').removeClass('fa-rocket fa-binoculars');
            $('#md-sm-text').html('KEY VALUES');
            $('#value-info').removeAttr('hidden');
        }
        else{
            $('#md-sm-icon').addClass('fa-rocket').removeClass('fa-binoculars fa-star');
            $('#md-sm-text').html('MISSION STATEMENT');
            $('#mission-info').removeAttr('hidden');
        }

        $('#md-sm').modal('show');
    });

    $(document).delegate('#md-sm','hidden.bs.modal',function(){
        $('.md-sm-info').attr('hidden','hidden');
    });

    function cardAnim(e,i){
        if(e == 'over')
        {
            $('.fa-'+i+'-2x').removeClass('fa-solid').addClass('fa-regular');
            $('.fa-'+i+'-1x').removeClass('fa-inverse').addClass('fa-flip-horizontal');
        }
        else
        {
            $('.fa-'+i+'-2x').addClass('fa-solid').removeClass('fa-regular');
            $('.fa-'+i+'-1x').addClass('fa-inverse').removeClass('fa-flip-horizontal');
        }
        

    }
</script>