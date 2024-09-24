$(document).ready(function(){
    
    // var a = $('p').html();   // To create variable.
    // console.log(a);     // To print variable.

    // ID Selectore
    // $('#secondId').click();
    // $('p#secondId').click();
    // $('p:first').click();
    // $('p:last').click();

    // Class Selectore
    // $('.secondClass').click();
    // $('p.secondClass').click();
    
    // $(".justify-item-center p").css("border", "2px solid red"); // Added css in particular section.
    // $(".justify-item-center p:first").css("border", "2px solid red"); // To target FIRST child <p>.
    // $(".justify-item-center p:last").css("border", "2px solid red"); // To target LAST child <p>.
    // $(".justify-item-center p:eq(2)").css("border", "2px solid red"); // To target particular child <p>.
    // $(".justify-item-center p:gt(2)").css("border", "2px solid red"); // To target grater then 2 child <p>.
    // $(".justify-item-center p:lt(2)").css("border", "2px solid red"); // To target less then 2 child <p>.

    // Starts Click Events
    $('.add-enquire').on({
        click:function(){
            $('.justify-item-center p').text('Are you interested to enquire at this site ?');
            $('.justify-item-center p').attr('class', 'red');
            $('.red').css('color', 'red');
            $('.add-enquire').css({'background-color': 'yellow', 'color': 'black'});
        },
        dblclick:function(){
            $('.add-enquire').css('background-color', 'tan');
        },
        contextmenu:function(){
            $('.add-enquire').css('background-color', 'blue');
            $('.add-enquire').css('color', 'white');
        },
        mouseenter:function(){
            $('.add-enquire').css('background-color', 'orange');
        },
        mouseleave:function(){
            $('.add-enquire').css({'background-color': 'green', 'color': 'white'});
        }
        // mouseover:function(){
        //     $(this).css({"background-color": "red"})
        // },
        // mouseout:function(){
        //     $(this).css({"background-color": ""})
        // },
    });
    // End Of Click Events

    // Starts KeyBoard Events
    $('body').on({
        keypress:function(){
            $(this).css({'background-color': 'yellow', 'color': 'black'});
        },
        keyup:function(){
            $(this).css('background-color', 'tan');
        },
        keydown:function(){
            $(this).css({'background-color': 'green', 'color': 'white'});
        }
    });
    // End Of KeyBoard Events

    // Starts Form Events
    $('#searchInput').on({
        focus:function(){
            $(this).css({'background-color': 'black', 'color': 'white'});
        },
        blur:function(){
            $(this).css({'background-color': '', 'color': ''});
        },
        change:function(){
            var a = $('#searchInput').val();
            $('.resultOfInput').html(a);
        },
        select:function(){
            $(this).css('background-color', 'blue');
        },
    });
    $('#formSubmit').submit(function(){
        alert('Form Submitted.');
    });
    // End Of Form Events

    // Started append() & prepend().
    $('#appendId').click(function(){
        $('.justify-item-center').append('<p>Appended Data.</p>')
    })
    $('#prependId').click(function(){
        $('.justify-item-center').prepend("<p>Prepended Data.</p>")
    });
    // Ends of append() & prepend().

    // Started after() & before().
    $('#afterId').click(function(){
        $('.justify-item-center').after('<p>After Data.</p>')
    })
    $('#beforeId').click(function(){
        $('.justify-item-center').before("<p>Before Data.</p>")
    });
    // Ends of after() & before().

    // Started empty() & remove().
    $('#emptyId').click(function(){
        $('.justify-item-center p').empty()
    })
    $('#removeId').click(function(){
        $('.justify-item-center p').remove()
    });
    // Ends of empty() & remove().

    // Starts clone(). 
    $('#clone').click(function(){
        $('#box-2 h2').clone().prependTo('#box-1');
        $('#box-2 h2').remove();
        $("#box-2 #para1").clone().appendTo("#box-1");
        $("#box-2 #para1").remove();
    });
    // Ends of clone().

    // Starts replaceWith() & replaceAll().
    $('#replace').click(function(){
        $('#box-2 p:nth-child(2)').replaceWith("<p><b>Hello, Kush bhatt here.</b></p>");
        $('<p><b>Hello, Kush bhatt here.</b></p>').replaceAll('#box-1 p');
    });
    // Ends of replaceWith() & replaceAll().

    // Starts wrap() & unwrap(). 
    $('#wrap').click(function(){
        $('#boxGride').wrap('<div class="wrapperDiv" style="border: 2px solid red"></div>')
    });
    $('#unWrap').click(function(){
        $('#boxGride').unwrap()
    });
    // Ends wrap() & unwrap().

    $('#hasClass').click(function(){
        if($('#box-1 p').hasClass('thirdClass')){
            $('.thirdClass').addClass('active');
            console.log($('#box-1 p').hasClass('thirdClass'));
        }
    });

    //On click of p element that particular <p> will be hide.
    $('p').on({
        click: function(){
            $(this).hide(1000, function(){
                console.log('Element is hidden.');
                $(this).show(1000);
            });
        },
        mouseenter: function(){
            // $(this).toggle(1000);
            console.log('Your mouse entered successfully.');
        }
    });
    //Ends of hide(), show() and toggle().

    $('#animate').mouseenter(function(){
        $animate = $('#btnWraper').hasClass('leftAnimation');
        if($animate == true){
            $('#animate').unwrap();
        }else{
            $('#animate').wrap('<div class="leftAnimation" id="btnWraper" style="text-align: right;"></div>');
        }
    });

    // Starts Class Method
    // $('p').addClass('myClass2');     // To add class.
    // $('p').removeClass('firstClass');     // To remove class.
    // $('p').toggleClass('secondClass');     // In case <p> has a specified class, it will be removed; otherwise, it will be added there.
    // End Class Method

    // $('p').text('Hii, kush bhatt');      // Using & text() you can replace and fetch the text.
    // $('p').html();      // Using & html() you can fetch the text with tags.

    // If you want to chanage or remove input value then you can use val(), empty() & remove().
    // $('p').val('Hii, kush bhatt');
    // $('p').remove();
    // $('p').empty();

    // $('p').click(function(){
    //     // alert('You clicked on p');
    //     console.log('hiii kush.', this);
    //     $(this).hide();
    // });
    
    // On click of the button all the <p> will be hide.
    // $('.add-enquire').on('click', function(){
    //     $('p').slideUp(1000);     //We can also use slideUp(), slideDown() & slideToggle(). 
    //     // $('p').toggle(1000);     //We can also use fadeIn(), fadeOut(), fadeToggle() & fadeTo(). 
    // })

    // We can animate our element using Animate event.
    // $('p').animate({
    //         opacity:0.3,
    //         width: '200px',
    //         height: '100px',
    //     }, 'slow') // We can use 'fast'.

    // Use css() to add css.
    // $('p').css({'background-color': 'red'});
    // $('p').css('background-color', 'red');
    
    // We can also set animation queue.
    // $('p').animate({opacity: 0.3}, 1000);
    // $('p').animate({height: '100px'}, 4000);
    // $('p').animate({width: '200px'}, 5000);
});