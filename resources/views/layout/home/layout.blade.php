<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{URL::asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body >
@include('layout.home.header')

<div>
    @yield('content')
</div>


@include('layout.home.footer')


<!--  Scripts-->
<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('js/materialize.js')}}"></script>
<script src="{{URL::asset('js/init.js')}}"></script>
<script>

    $(document).ready(function () {
        $('.slider').slider();
        $('select').material_select();
        $('.parallax').parallax();
    });

    (function ($) {
        $(document).ready(function() {

            $(document).on('click.card', '.card', function (e) {
                if ($(this).find('> .card-reveal').length) {
                    if ($(e.target).is($('.card-reveal .card-title')) || $(e.target).is($('.card-reveal .card-title i'))) {
                        // Make Reveal animate down and display none
                        $(this).find('.card-reveal').velocity(
                                {translateY: 0}, {
                                    duration: 225,
                                    queue: false,
                                    easing: 'easeInOutQuad',
                                    complete: function() { $(this).css({ display: 'none'}); }
                                }
                        );
                        $(this).find('.card-content>span').attr('style', '');
                    }
                    else if ($(e.target).is($('.card .activator')) ||
                            $(e.target).is($('.card .activator i')) ) {
                        $(e.target).closest('.card').css('overflow', 'hidden');
                        $(this).find('.card-reveal').css({ display: 'block'}).velocity("stop", false).velocity({translateY: '-100%'}, {duration: 300, queue: false, easing: 'easeInOutQuad'});
                        $(this).find('.card-content>span').attr('style', 'color: rgba(0,0,0,0) !important');
                    }
                }

                $('.card-reveal').closest('.card').css('overflow', 'hidden');

            });

            // Make Reveal animate up and display when mouseenter
            $(document).on('mouseenter.hover-reveal','.hover-reveal', function (e){
                $(e.target).closest('.card').css('overflow', 'hidden');
                $(this).find('.card-content>span').attr('style', 'color: rgba(0,0,0,0) !important');
                $(this).find('.card-reveal').css({ display: 'block'})
                        .velocity("stop", false)
                        .velocity({translateY: '-100%'},
                                {duration: 300,
                                    queue: false,
                                    easing: 'easeInOutQuad'});
            });

            // Make Reveal animate down and display none when mouseleave
            $(document).on('mouseleave.hover-reveal','.hover-reveal', function (e){
                $(this).find('.card-reveal').velocity(
                        {translateY: 0}, {
                            duration: 225,
                            queue: false,
                            easing: 'easeInOutQuad',
                            complete: function() { $(this).css({ display: 'none'}); }
                        }
                );
                $(this).find('.card-content>span').attr('style', '');
            });

        });
    }( jQuery ));





</script>

</body>
</html>
